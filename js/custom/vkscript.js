$(document).ready(function () {
  // обработка форм
  $("body").on("submit", ".jsGatewayForm", function (e) {
    e.preventDefault();
    var thisForm = $(this);
    thisForm.find('[type="submit"]').attr("disabled", true);

    $.ajax({
      type: "POST",
      url: "https://bd.talentsy.ru/wp-content/themes/clear/inc/gateway.php?service=html-landings",
      data: {
        formData: thisForm.serializeArray(),
        quizurl: location.pathname,
        cookies: document.cookie,
        urlfull: window.location.href,
      },
      success: function (r) {
        var date = new Date();
        date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
        var expires = "; expires=" + date.toUTCString();
        document.cookie =
          "htmlGatewayLeedID=" + r + expires + "; path=/; domain=.talentsy.ru";
        document.cookie =
          "tempEmail=" +
          thisForm.find('[name="Email"]').val() +
          expires +
          "; path=/; domain=.talentsy.ru";

        // метрика
        if (
          typeof ym !== "undefined" &&
          typeof yaMatrix !== "undefined" &&
          !$.isEmptyObject(yaMatrix)
        ) {
          var yaTargetUrl =
            location.protocol + "//" + location.host + location.pathname;
          var yaGoalName = yaMatrix[yaTargetUrl];

          ym(45526011, "reachGoal", "Lead");
          ym(45526011, "reachGoal", "jsMatrix_" + yaGoalName);
          console.log(
            "Сработала цель по матрице jsMatrix_" + yaGoalName,
            yaTargetUrl
          );
        }

        window.location.href = thisForm.attr("data-success-url");
      },
    });
  });

  // каталог
  // $("body").on("click", ".hdr__burger", function () {
  //   window.location.href = "https://talentsy.ru/menu";
  // });

  // промокоды
  $("body").on("click", ".jsPmoRequest", function () {
    var promoCodeValue = $(".jsPmoField").val();

    $.get(
      "https://octopus.talentsy.ru/wp-content/themes/clear/inc/rest/promocodes.php",
      { url: window.location.href, promocode: promoCodeValue },
      function (a) {
        j = $.parseJSON(a);

        if (j.result) {
          Object.keys(j.prices).forEach(function (key) {
            $("." + key).html(j.prices[key]);
          });
          $(".jsPmoError").addClass("suceesscode").html(j.message).show();
          $('[name="jsPmoHiddenFormField"]').val(promoCodeValue);
        } else {
          $(".jsPmoError").removeClass("suceesscode").html(j.message).show();
        }
      }
    );
  });

  // подгрузка VK API авторизации
  const { Connect, Config, ConnectEvents } = window.SuperAppKit;
  Config.init({ appId: 51529851 });

  if ($(".jsVKAuthBlock").length > 0) {
    // есть блок под кнопку быстрого входа. загружаем бесшовную авторизацию
    const oneTapButton = Connect.buttonOneTapAuth({
      callback: function (e) {
        const type = e.type;

        if (!type) return false;

        switch (type) {
          case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS: // всё ок, пользователь уже авторизован
            getVKUserFormInfo(e.payload.token, e.payload.uuid, oneTapButton);
            return false;
          default: // нужен редирект авторизации
            // редирект отключили, неудобно на мобилах. поэтому если чел не авторизован - то и кнопки не надо
            // return Connect.redirectAuth({url: window.location.href, state: 'vkafterauth'});
            return false;
        }

        return false;
      },
      options: {
        showAlternativeLogin: false,
        displayMode: "name_phone",
        buttonStyles: {
          borderRadius: 8,
        },
      },
    });

    // добавляем кнопку
    if (oneTapButton) {
      oneTapButton.authReadyPromise.then(function (isAuthed) {
        if (isAuthed != "VKSDKOneTapAuthDataLoaded") {
          oneTapButton.destroy(); // пользователь не авторизован в вк - не показываем вообще
        } else {
          $(".jsVKAuthBlock iframe").css("display", "block"); // чтобы не было видно "подгрузки" - фреймы вк скрыты через css, раз он авторизован - показываем
        }
      });

      // активируем кнопку входа
      $(".jsVKAuthBlock").html(oneTapButton.getFrame());
    }
  } else if ($(".jsVKAuthCustom").length > 0) {
    // есть фейковые кнопки, которых много - они по клику показывают справа вверху блок
    const oneTapButton = Connect.floatingOneTapAuth({
      callback: function (e) {
        const type = e.type;

        if (!type) return false;

        switch (type) {
          case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS: // всё ок, пользователь уже авторизован
            getVKUserFormInfo(e.payload.token, e.payload.uuid, oneTapButton);
            return false;
          case "VKSDKOneTapAuthClose": // чел закрыл блок
            $("body").addClass("vk-off");
            return false;
          default: // нужен редирект авторизации
            // редирект отключили, неудобно на мобилах. поэтому если чел не авторизован - то и кнопки не надо
            // return Connect.redirectAuth({url: window.location.href, state: 'vkafterauth'});
            return false;
        }

        return false;
      },
      options: {
        styles: {
          zIndex: 999,
        },
        skipSuccess: false,
      },
    });

    // добавляем блок
    if (oneTapButton) {
      oneTapButton.authReadyPromise.then(function (isAuthed) {
        if (isAuthed != "VKSDKOneTapAuthDataLoaded") {
          oneTapButton.destroy(); // пользователь не авторизован в вк - не показываем вообще блок
          $(".jsVKAuthCustom").remove(); // и убираем кнопки "включения" блока
        }
      });

      // создаем блок
      $("body").append('<div class="jsVKAuthTopBlock"></div>');
      $(".jsVKAuthTopBlock").append(oneTapButton.getFrame());

      // по клику показываем блок
      $("body").on("click", ".jsVKAuthCustom", function () {
        if ($("body").hasClass("vk-off")) {
          $("body").removeClass("vk-off");
          const oneTapButton = Connect.floatingOneTapAuth({
            callback: function (e) {
              const type = e.type;

              if (!type) return false;

              switch (type) {
                case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS: // всё ок, пользователь уже авторизован
                  getVKUserFormInfo(
                    e.payload.token,
                    e.payload.uuid,
                    oneTapButton
                  );
                  return false;
                case "VKSDKOneTapAuthClose": // чел закрыл блок
                  $("body").addClass("vk-off");
                  return false;
                default: // нужен редирект авторизации
                  // редирект отключили, неудобно на мобилах. поэтому если чел не авторизован - то и кнопки не надо
                  // return Connect.redirectAuth({url: window.location.href, state: 'vkafterauth'});
                  return false;
              }

              return false;
            },
            options: {
              styles: {
                zIndex: 999,
              },
              skipSuccess: false,
            },
          });
          $(".jsVKAuthTopBlock").append(oneTapButton.getFrame());
        }
        $(".jsVKAuthTopBlock").css("display", "block");
      });
    }
  }

  // проверяю, а не пришел ли человек после авторизации в новом окне по get-параметрам
  var urlParams = new URLSearchParams(document.location.search);
  if (urlParams.get("state") == "vkafterauth") {
    var authRes = $.parseJSON(urlParams.get("payload"));

    getVKUserFormInfo(authRes.token, authRes.uuid, oneTapButton);
  }
});

// бэк запрос на получение телепочты авторизованного
function getVKUserFormInfo(token, uuid, OTP) {
  $.ajax({
    type: "POST",
    url: "https://octopus.talentsy.ru/wp-content/themes/clear/inc/rest/vkid.php",
    data: {
      token: token,
      uuid: uuid,
      url: window.location.href,
    },
    success: function (answer) {
      answer = $.parseJSON(answer);

      if (answer.success) {
        // для форм тильды
        $('input[name="Name"]').val(answer.name);
        document.querySelectorAll('input[name="Phone"]').forEach((inp) => {
          inp.mask.value = answer.phone;
        });
        $('input[name="Email"]').val(answer.email);

        // для форм геткурса проставляем в параметры айдишник
        var gcUrlAddon =
          "&vkspename=" +
          answer.name +
          "&vkspephon=" +
          answer.phone +
          "&vkspemail=" +
          answer.email;
        $("iframe[src^='https://lk.talentsy.ru']").each(function (e) {
          $(this).attr("src", $(this).attr("src") + gcUrlAddon);
        });

        // вк айди запоминаем в куку
        var date = new Date();
        date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
        var expires = "; expires=" + date.toUTCString();
        document.cookie = "vkuserid=" + answer.userid + expires + "; path=/";

        // убираем кнопки авторизации
        OTP.destroy();
        $(".jsVKAuthCustom").remove();
      } else {
        console.error("что-то пошло не так", answer);
      }
    },
  });
}
