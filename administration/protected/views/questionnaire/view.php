<?php
/* @var $this QuestionnaireController */
/* @var $model Questionnaire */

$this->breadcrumbs=array(
	'Questionnaires'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Questionnaire', 'url'=>array('index')),
	array('label'=>'Create Questionnaire', 'url'=>array('create')),
	array('label'=>'Update Questionnaire', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Questionnaire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Questionnaire', 'url'=>array('admin')),
);
?>

<h1>View Questionnaire #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'web_request_id',
		'last_edit',
		'first_name',
		'last_name',
		'middle_name',
                'city',
		'product_type',
		'requested_ammount',
		'currency_code',
		'term_string',
		'contact_phone',
		'email',
		'contact_time_string',
		'visitor_ip',
		'source_url',
		'agent_code',
	),
)); ?>
