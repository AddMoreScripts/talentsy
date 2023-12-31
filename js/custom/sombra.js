$(document).ready(function(){
	// обработка форм
	$('body').on('submit', '.ajaxForm', function(e){
		e.preventDefault();
		var _this 		= $(this),
			formData 	= new FormData();

		_this.find('button').attr('disabled', true);

        formData.append('action', _this.data('target'));
        formData.append('form', _this.serialize());
        formData.append('cookies', document.cookie);
        formData.append('urlfull', window.location.href);
        formData.append('pageID', window.pageID);

        _this.find('input[name="file"]').each(function () {
	        var files_val = $(this)[0].files,
	        	name 	  = $(this).attr('name');

	        for( var i = 0; i < files_val.length; i++ ){
		        formData.append('file---' + name + '---' + i, files_val[i]);
			}
        });

		$.ajax({
			type: 'POST',
			url: window.ajaxurl,
            contentType: false,
            processData: false,
			data: formData,
			success: function (j){
				j = $.parseJSON(j);
				
	            // отправка события в GTM
				if( typeof j.gtm !== 'undefined' ){
					var obj = {};
		            var dataLayer = window.dataLayer || (window.dataLayer = []);
		            $.each(_this.serializeArray(), function(i, v){
		              obj[ v.name ] = v.value;
		            });
		            dataLayer.push({
		              'event': 'leadReceived',
		              'postMessageData': {
		                'formType': 'htmlWP',
		                'formData': obj,
		                'gLeadID': j.gleadid
		              }
		            });
				}

				if( typeof j.eHtml !== 'undefined' ) $(j.eTarget).html(j.eHtml);
				if( typeof j.jsData !== 'undefined' ) eval(j.jsData);

				_this.find('button').attr('disabled', false);
				$('body').trigger('success_' + _this.data('target'));
	        },
	        statusCode: {
				500: function(){
					_this.find('button').attr('disabled', false);
					notifyMessage('danger', 'Ошибка сервера: 500');
				},
				502: function(){
					_this.find('button').attr('disabled', false);
					notifyMessage('danger', 'Ошибка сервера: 502');
				},
				504: function(){
					_this.find('button').attr('disabled', false);
					notifyMessage('danger', 'Сервер устал ждать: 504');
				},
				400: function(){
					_this.find('button').attr('disabled', false);
					notifyMessage('danger', 'Ошибка получателя: 400');
				}
			}
		});
	});
	// подстановка параметров для GC форм
	$('[name="formParams[dealCustomFields][1291877]"]').val( document.cookie +"|w|h|"+ window.location.href );
	$('[name="__gc__internal__form__helper"]').val( window.location.href );
	$('[name="__gc__internal__form__helper_ref"]').val( document.referrer );
	$('body').on('click', 'form.lt-form button[type="submit"]', function(){
		if(window['stpbtngc2709']){return false;}
		
		window['stpbtngc2709']=true;
		setTimeout(function(){
			window['stpbtngc2709']=false
		},6000);

		return true;
	});

	// для форм в блоге предустановка utm в url
	if( $('body').hasClass('single-post') ){
		var formlocation = window.location.protocol +'//'+ window.location.host + window.location.pathname + '?utm_source=blog&utm_term='+window.location.pathname.replace('/blog/','').replace('/','');
		$('.course-form [name="formParams[dealCustomFields][1291877]"]').val( document.cookie +"|w|h|"+ formlocation );
		$('[name="__gc__internal__form__helper"]').val( formlocation );
	}

	// обработка ajaxClick
	$('body').on('click', '.ajaxClick', function(e){
		e.preventDefault();
		var _this 		= $(this),
			formData 	= new FormData();

		loadingToggle();

        formData.append('action', _this.data('target'));
        formData.append('params', _this.data('params'));
        formData.append('json', _this.attr('json'));

		$.ajax({
			type: 'POST',
			url: window.ajaxurl,
            contentType: false,
            processData: false,
			data: formData,
			success: function (j){
				j = $.parseJSON(j);
				console.log(j);

				if( typeof j.eHtml !== 'undefined' ) $(j.eTarget).html(j.eHtml);
				if( typeof j.aHtml !== 'undefined' ) $(j.eTarget).append(j.aHtml);
				if( typeof j.jsData !== 'undefined' ) eval(j.jsData);

				loadingToggle();
				$('body').trigger('success_' + _this.data('target'));
	        },
	        statusCode: {
				500: function(){
					loadingToggle();
					notifyMessage('danger', 'Ошибка сервера: 500');
				},
				502: function(){
					loadingToggle();
					notifyMessage('danger', 'Ошибка сервера: 502');
				},
				504: function(){
					loadingToggle();
					notifyMessage('danger', 'Сервер устал ждать: 504');
				},
				400: function(){
					loadingToggle();
					notifyMessage('danger', 'Ошибка получателя: 400');
				}
			}
		});
	});

	//// обработка промокодов
	// show
	$('body').on('click', '.promoform__btn', function(){
		$(this).parents('.newpromoform').addClass('state-open')
	});
  	// очистка по крестику
	$('body').on('click', '.promoform__clearer', function(){
		$('.jsPmoField').val('');
	});
	// отправка
	$('body').on('click', '.jsPPRequest', function(){
	    var promoCont 		= $(this).parents('form'),
	    promoCodeValue 		= promoCont.find('.jsPmoField').val();

	    $.get('https://octopus.talentsy.ru/wp-content/themes/clear/inc/rest/promocodes-percent.php',
	        {"url": window.location.href,"promocode": promoCodeValue},
	        function(a){
	            j = $.parseJSON(a);

	            if( j.result ){
	                $('.jsPPSumm').html( Math.round(parseInt($('.jsPPSumm').html())/100*(100-parseInt(j.percent))) );
	                promoCont.removeClass('state-open').addClass('state-success')

	                $('[name="jsPmoHiddenFormField"]').val(promoCodeValue);
	                sombraSetCookie('lastUsedPromocode', promoCodeValue);
	                // чтобы на старых лендингах работало
          			$(".jsPmoError").addClass("suceesscode").html(j.message).show();
          			$(".jsPPRequest").removeClass("jsPPRequest");
	            }else{
	                promoCont.find('.jsPmoField').addClass('is-invalid');
	                // чтобы на старых лендингах работало
          			$(".jsPmoError").removeClass("suceesscode").html(j.message).show();
	            }
	        }
	    );
	});


	// оглавление блога
	$('body').on('click', '.ez-toc-link', function(e){
	    e.preventDefault();
		$([document.documentElement, document.body]).animate({
			scrollTop: ($(".wp-block-heading:contains('"+ $(this).attr("title") +"')").offset().top - 20)
		}, 1200);
	});

	//// VK ID
	// подгрузка VK API авторизации
	const { Connect, Config, ConnectEvents } = window.SuperAppKit;
	Config.init({appId: 51529851});

	if( $('.jsVKAuthBlock').length > 0 ){ // есть блок под кнопку быстрого входа. загружаем бесшовную авторизацию
	    const oneTapButton = Connect.buttonOneTapAuth({
	        callback: function(e){
	            const type = e.type;

	            if (!type) return false;

	            switch(type){
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
	            displayMode: 'name_phone',
	            buttonStyles: {
	                borderRadius: 8
	            }
	        },
	    });

	    // добавляем кнопку
	    if( oneTapButton ){
	        oneTapButton.authReadyPromise.then(function(isAuthed){
	            if( isAuthed != 'VKSDKOneTapAuthDataLoaded' ){
	                oneTapButton.destroy(); // пользователь не авторизован в вк - не показываем вообще
	            }else{
	                $('.jsVKAuthBlock iframe').css('display', 'block'); // чтобы не было видно "подгрузки" - фреймы вк скрыты через css, раз он авторизован - показываем
	            }
	        });

	        // активируем кнопку входа
	        $('.jsVKAuthBlock').html( oneTapButton.getFrame() );
	    }
	}else if( $('.jsVKAuthCustom').length > 0 ){ // есть фейковые кнопки, которых много - они по клику показывают справа вверху блок
	    const oneTapButton = Connect.floatingOneTapAuth({
	        callback: function(e){
	            const type = e.type;

	            if (!type) return false;

	            switch(type){
	                case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS: // всё ок, пользователь уже авторизован
	                    getVKUserFormInfo(e.payload.token, e.payload.uuid, oneTapButton);
	                    return false;
	                case 'VKSDKOneTapAuthClose': // чел закрыл блок
	                    $('body').addClass('vk-off');
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
	    if( oneTapButton ){
	        oneTapButton.authReadyPromise.then(function(isAuthed){
	            if( isAuthed != 'VKSDKOneTapAuthDataLoaded' ){
	                oneTapButton.destroy(); // пользователь не авторизован в вк - не показываем вообще блок
	                $('.jsVKAuthCustom').remove(); // и убираем кнопки "включения" блока
	            }
	        });

	        // создаем блок
	        $('body').append('<div class="jsVKAuthTopBlock"></div>');
	        $('.jsVKAuthTopBlock').append( oneTapButton.getFrame() );

	        // по клику показываем блок
	        $('body').on('click', '.jsVKAuthCustom', function(){
	            if( $('body').hasClass('vk-off') ){
	                $('body').removeClass('vk-off');
	                const oneTapButton = Connect.floatingOneTapAuth({
	                    callback: function(e){
	                        const type = e.type;

	                        if (!type) return false;

	                        switch(type){
	                            case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS: // всё ок, пользователь уже авторизован
	                                getVKUserFormInfo(e.payload.token, e.payload.uuid, oneTapButton);
	                                return false;
	                            case 'VKSDKOneTapAuthClose': // чел закрыл блок
	                                $('body').addClass('vk-off');
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
	                $('.jsVKAuthTopBlock').append( oneTapButton.getFrame() );
	            }
	            $('.jsVKAuthTopBlock').css('display', 'block');
	        });
	    }
	}

	// проверяю, а не пришел ли человек после авторизации в новом окне по get-параметрам
	var urlParams   = new URLSearchParams(document.location.search);
	if( urlParams.get("state") == "vkafterauth" ){
	   var authRes = $.parseJSON( urlParams.get("payload") );

	   getVKUserFormInfo(authRes.token, authRes.uuid, oneTapButton);
	}
});

// loading анимация
function loadingToggle(){
    $('body').toggleClass('active-loading')
}

// notifyMessage
function notifyMessage(type, message){
	// $.notify({
	// 	message: message
	// },{
	// 	type: type,
	// 	z_index: 999999,
	// 	autoHideDelay: 3500
	// });
}

// бэк запрос на получение телепочты авторизованного для VK ID
function getVKUserFormInfo(token, uuid, OTP){
    $.ajax({
        type: 'POST',
        url: 'https://octopus.talentsy.ru/wp-content/themes/clear/inc/rest/vkid.php',
        data: {
            "token": token,
            "uuid": uuid,
            "url": window.location.href
        },
        success: function(answer){
            answer = $.parseJSON(answer);

            if( answer.success ){
                // для форм тильды
                $('input[name="Name"]').val( answer.name );
                $('input[name="Phone"]').val( answer.phone );
                $('input[type="tel"]').val( answer.phone.slice(1) ); // для тильдовской маски
                $('input[name="Email"]').val( answer.email );

                // для форм геткурса проставляем в параметры айдишник
                var gcUrlAddon = '&vkspename='+ answer.name +'&vkspephon='+ answer.phone +'&vkspemail='+ answer.email;
                $( "iframe[src^='https://lk.talentsy.ru']").each(function(e){
                    $(this).attr('src', $(this).attr('src') + gcUrlAddon);
                });

                // вк айди запоминаем в куку
                var date = new Date();
                date.setTime(date.getTime() + (24*60*60*1000));
                var expires = "; expires=" + date.toUTCString();
                document.cookie = "vkuserid="+ answer.userid + expires + "; path=/";

                // убираем кнопки авторизации
                OTP.destroy();
                $('.jsVKAuthCustom').remove();
            }else{
                console.error('что-то пошло не так', answer);
            }
        }
    });
}

// cookies set
function sombraSetCookie(name, data){
  var d  = new URL(document.location.href),
	  dA = d.host.split("."),
      domain = d.host.split(".").length > 2 ? '.'+ dA[1] +'.'+ dA[2] : '.'+ d.host;
  var nDate = new Date();
      nDate.setTime(nDate.getTime() + (24*60*60*1000));

  	document.cookie = name +"="+ data +"; expires=" + nDate.toUTCString() + "; path=/; domain="+ domain;
}

/*window.addEventListener('load', function (){
	var phoneInputID = "input[type='tel']";
	var input = document.querySelector(phoneInputID);
	var iti = window.intlTelInput(input, {
		// allowDropdown: false,
		// autoHideDialCode: false,
		// autoPlaceholder: "off",
		// dropdownContainer: document.body,
		// excludeCountries: ["us"],
		//separateDialCode: true,
		formatOnDisplay: true,
		// geoIpLookup: function(callback) {
		//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		//     var countryCode = (resp && resp.country) ? resp.country : "";
		//     callback(countryCode);
		//   });
		// },
		hiddenInput: "full_number",
		initialCountry: "ru",
		// localizedCountries: { 'de': 'Deutschland' },
		// nationalMode: false,
		// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		// placeholderNumberType: "MOBILE",
		preferredCountries: ['ru', 'kz', 'by', 'uz'],
		// separateDialCode: true,
		utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js"
	});


	$(phoneInputID).on("countrychange", function(event) {

		// Get the selected country data to know which country is selected.
		var selectedCountryData = iti.getSelectedCountryData();

		// Get an example number for the selected country to use as placeholder.
		newPlaceholder = intlTelInputUtils.getExampleNumber(selectedCountryData.iso2, true, intlTelInputUtils.numberFormat.INTERNATIONAL),

			// Reset the phone number input.
			iti.setNumber("");

		// Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
		mask = newPlaceholder.replace(/[1-9]/g, "0");

		// Apply the new mask for the input
		$(this).mask(mask);
	});


	// When the plugin loads for the first time, we have to trigger the "countrychange" event manually,
	// but after making sure that the plugin is fully loaded by associating handler to the promise of the
	// plugin instance.

	iti.promise.then(function() {
		$(phoneInputID).trigger("countrychange");
	});
	console.log(window.intlTelInputUtils)
})*/
