<?php
/* @var $this QuestionnaireController */
/* @var $model Questionnaire */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'questionnaire-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_type'); ?>
		<?php echo $form->dropDownList($model,'product_type',array('Депозит'=>'Депозит','Кредит'=>'Кредит', 'Кредитная карта'=>'Кредитная карта')); ?>
		<?php echo $form->error($model,'product_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requested_ammount'); ?>
		<?php echo $form->textField($model,'requested_ammount',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'requested_ammount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->dropDownList($model,'currency_code',array('UAH'=>'UAH','USD'=>'USD', 'EUR'=>'EUR')); ?>
		<?php echo $form->error($model,'currency_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term_string'); ?>
		<?php echo $form->textField($model,'term_string',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'term_string'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_time_string'); ?>
		<?php echo $form->dropDownList($model,'contact_time_string',array('9-14'=>'9-14','14-18'=>'14-18', 'в любое время'=>'у будь-який час')); ?>
		<?php echo $form->error($model,'contact_time_string'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Оформити' : 'Зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->