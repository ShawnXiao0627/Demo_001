<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
  'action'=>Yii::app()->createUrl($this->route),
  'method'=>'get',
)); ?>

  <div class="row">
    <?php echo $form->label($model,'id'); ?>
    <?php echo $form->textField($model,'id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'title'); ?>
    <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'content'); ?>
    <?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>128)); ?>
  </div>
  
  <div class="row">
    <?php echo $form->label($model,'status'); ?>
    <?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->