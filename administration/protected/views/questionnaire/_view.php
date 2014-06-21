<?php
/* @var $this QuestionnaireController */
/* @var $data Questionnaire */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_edit')); ?>:</b>
	<?php echo CHtml::encode($data->last_edit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_type')); ?>:</b>
	<?php echo CHtml::encode($data->product_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requested_ammount')); ?>:</b>
	<?php echo CHtml::encode($data->requested_ammount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_code')); ?>:</b>
	<?php echo CHtml::encode($data->currency_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term_string')); ?>:</b>
	<?php echo CHtml::encode($data->term_string); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_time_string')); ?>:</b>
	<?php echo CHtml::encode($data->contact_time_string); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitor_ip')); ?>:</b>
	<?php echo CHtml::encode($data->visitor_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_url')); ?>:</b>
	<?php echo CHtml::encode($data->source_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_code')); ?>:</b>
	<?php echo CHtml::encode($data->agent_code); ?>
	<br />

	*/ ?>

</div>