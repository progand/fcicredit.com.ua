<?php
/* @var $this QuestionnaireController */
/* @var $model Questionnaire */
?>


<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(function() {
        jQuery("#header").add("#footer").add("#mainmenu").remove();
        jQuery("#error-details").hide();
        jQuery("#show-error-details").click(function(){
            jQuery("#error-details").toggle();
            return false;
        });
    });
</script>
<h1>Оформити заявку</h1>
<?php if (isset($exception) && $exception) { ?>
    <h2>
        Під час реєстрації заявки в webapp.rccf.ua сталася помилка! Заявку не зареєстровано. 
    </h2>
    <h3>
        Будь-ласка, повідомте про проблему на dkkipol@gmail.com. Робота системи буде відновлена в найкоротший термін.
    </h3>
    <p>
        <a href="#" id="show-error-details">Детальна інформація про помилку:</a>
    </p>   
    <div id="error-details">
        <p>
            <?php echo $exception->getMessage(); ?>
        </p>
        <p>
            <?php echo $exception->getTraceAsString(); ?>
        </p>        
    </div>
<?php } ?>

<?php if (isset($success) && $success) { ?>
    <h2>
        Дякуємо! Заявка успішно оформлена.
    </h2>
    <p>
        <a href="/">Повернутися на сайт</a>
    </p>
    <?php
} else {
    echo $this->renderPartial('_form', array('model' => $model));
}
?>