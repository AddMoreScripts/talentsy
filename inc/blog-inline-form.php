<?
$taxACF = 'category_'. $args['taxID'];
if( get_field('bif-header', $taxACF) ):
    $isGetCourse = get_field('bif-type', $taxACF) == 'GetCourse';
?>

<? if( $isGetCourse ): ?>
    <form class="lt-normal-form lt-form-inner lt-form course-form" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid', $taxACF); ?>" method="post" data-open-new-window="0" style="background:<? the_field('bif-backhex', $taxACF); ?>;">
<? else: ?>
    <form class="course-form ajaxForm" data-target="axFormRequest" style="background:<? the_field('bif-backhex', $taxACF); ?>;">
<? endif; ?>

    <div class="course-form__title"><? the_field('bif-header', $taxACF); ?></div>
    <div class="course-form__block">
        <div class="course-form__content">
            <div class="course-form__text">
                <div class="course-form__pic_m">
                    <img src="<? the_field('bif-imgmob', $taxACF); ?>" alt="">
                </div>
                <? the_field('bif-subheader', $taxACF); ?>
            </div>

            <ul>
                <? foreach(get_field('bif-bullets', $taxACF) as $k => $line): ?>
                    <li><?= $line['text'];?></li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="course-form__pic">
            <img src="<? the_field('bif-imgpc', $taxACF); ?>" alt="">
        </div>
    </div>

    <? if( $isGetCourse ): ?>
        <div class="course-form__container">
            <div class="course-form__flex">
                <input type="text" name="formParams[first_name]" placeholder="Имя" required>
                <input type="tel" name="formParams[phone]" placeholder="Телефон" required>
                <input type="email" name="formParams[email]" placeholder="Email" required>
                <button class="button button--blog">Получить доступ</button>
            </div>
            <div class="course-form__label">Отправляя данную форму, вы соглашаетесь с условиями <a href="<? the_field('bif-linkoffer', $taxACF); ?>" target="_blank">оферты</a> и <a href="<? the_field('bif-linkpd', $taxACF); ?>" target="_blank">политики обработки персональных данных</a></div>
        </div>

        <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
        <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias', $taxACF); ?>">
        <input name="formParams[dealCustomFields][1291877]" type="hidden">
        <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
        <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
        <input type="hidden" name="requestTime" value="1695648662">
        <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
        <input type="hidden" name="isHtmlWidget" value="1"/>
    <? else: ?>
        <div class="course-form__container">
            <div class="course-form__flex">
                <input type="text" name="Name" placeholder="Имя" required>
                <input type="tel" name="Phone" placeholder="Телефон" required>
                <input type="email" name="Email" placeholder="Email" required>
                <button class="button button--blog">Получить доступ</button>
            </div>
            <div class="course-form__label">Отправляя данную форму, вы соглашаетесь с условиями <a href="<? the_field('bif-linkoffer', $taxACF); ?>" target="_blank">оферты</a> и <a href="<? the_field('bif-linkpd', $taxACF); ?>" target="_blank">политики обработки персональных данных</a></div>
        </div>

        <input type="hidden" name="ellyalias" value="<?= get_field('elly_alias', $taxACF); ?>">
        <input type="hidden" name="blogtaxform" value="<?= $args['taxID']; ?>">
        <input type="hidden" name="blogtermpost" value="<?= $post->post_name; ?>">
    <? endif; ?>
</form>

<? endif; ?>