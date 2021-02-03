<footer class="footer">

<div class="footer__row">
<form id="form-contact" method="POST" class="form-element form__section" autocomplete="off" class="section_form">

<span class="form__title-down">Заповніть форму та я Вам відтелефоную</span>

<div class="form">
    <div class="form__down">
        <div class="form_name-inner">
            <input name="name" type="text" class="form-input__name" tabindex="0" placeholder="Введите ваше имя" required>
        </div>
        <div class="form_name-inner">
            <input name="phone" type="tel" class="form-input__phone" tabindex="0" pattern="^[ 0-9]+$" placeholder="Введите ваш телефон" required>
        </div>
    </div>
        <input name="theme" type="hidden" class="form-input__theme" value="Заявка с сайта">
</div>
<div class="form__button">
<input type="submit" class="btn" value="Відправити">
</div>
</form>
</div>

</footer>


<?php wp_footer(); ?>
</body>

</html>