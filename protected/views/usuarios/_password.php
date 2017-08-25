<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
));

?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model,'senha',array('size'=>60,'maxlength'=>256, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'senha'); ?>
            </div> 
	</div>

        <div class="row buttons" style="padding-top: 20px">
            <div class="col-md-12">
		<?php
                    echo CHtml::submitButton('Salvar', array('class'=>'btn btn-lg btn-primary'));                    
                ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->