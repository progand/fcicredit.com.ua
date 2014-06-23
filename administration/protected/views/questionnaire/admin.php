<?php
/* @var $this QuestionnaireController */
/* @var $model Questionnaire */

$this->breadcrumbs=array(
	'Questionnaires'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Questionnaire', 'url'=>array('index')),
	array('label'=>'Create Questionnaire', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#questionnaire-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Questionnaires</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'questionnaire-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'last_edit',
                'last_name',
		'first_name',		
		'middle_name',
		'city',
                'contact_phone',
                'requested_ammount',
		/*
                'product_type',		
		'currency_code',
		'term_string',
		
		'email',
		'contact_time_string',
		'visitor_ip',
		'source_url',
		'agent_code',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
