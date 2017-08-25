<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); 
    if ($model->isNewRecord) {
        $dynamicCss = 'col-md-4';
    } else {
        $dynamicCss = 'col-md-6';
    }
?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
            <div class="col-md-6">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
	
            <div class="col-md-6">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>60,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefone'); ?>
            </div>
	</div>

	<div class="form-group row">
            <div class="<?php echo $dynamicCss; ?>">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'login'); ?>
            </div>

        <?php if ($model->isNewRecord) : ?>
            <div class="<?php echo $dynamicCss; ?>">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model,'senha',array('size'=>60,'maxlength'=>256, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'senha'); ?>
            </div>
        <?php endif; ?>
	
            <div class="<?php echo $dynamicCss; ?>">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>40, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
	</div>

	<div class="row buttons">
            <div class="col-md-12">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-lg btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>