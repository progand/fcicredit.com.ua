<?php
/* @var $this QuestionnaireController */
/* @var $model Questionnaire */
?>

<style type="text/css">
    input[type=submit]{
        padding: 15px;
        font-weight: bold;
        font-size: 1.5em;
        color: green;
    }
    #header, #footer, #mainmenu{
        display: none !important;
    }
    #error-details{
        display: none;
    }
</style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(function() {
    jQuery("#header").add("#footer").add("#mainmenu").hide();
    jQuery("#error-details").hide();
    jQuery("#show-error-details").click(function(){
    jQuery("#error-details").toggle();
    return false;
    });
    });
</script>
<h1>Заявка на оформлення кредиту</h1>
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
        Дякуємо! На протязі доби з Вами зв'яжеться наш спеціаліст і повідомить про результат.
    </h2>
    <p>
        <a href="/">Повернутися на сайт</a>
    </p>
    <?php
} else {
    echo $this->renderPartial('_form', array('model' => $model));
}
?>

    <hr>
<h2>Три простих кроки до отримання кредиту:</h2>
<ol>
    <li>Заповнити анкету</li>
    <li>Очікувати дзвінок. Вам передзвонить наш спеціаліст, проконсультує та надасть попереднє рішення за кредитом</li>
    <li>Прийти до найближчого до Вас відділення та отримати готівку.</li>
</ol>

<h2>Основні умови:</h2>
<ul>
    <li>кредит - на будь-які цілі</li>
    <li>вік: від 21 до 75 років</li>
    <li>працевлаштування (офіційно або ні)</li>
</ul>

<h2>Документи для отримання:</h2>
<ul>
    <li>паспорт</li>
    <li>код ІПН</li>
    <li>пенсійне посвідчення для пенсіонерів</li>
    <li>довідка про доходи (за бажанням)</li>
</ul>
