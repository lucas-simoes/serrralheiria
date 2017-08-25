<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'nome', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'login', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'login'); ?>
            </div>
	</div>
        <?php if ($model->isNewRecord) : ?>
	<div class="form-group row">
		<?php echo $form->labelEx($model,'senha', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->passwordField($model,'senha',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'senha'); ?>
            </div>
	</div>
        <?php endif; ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'email', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'telefone', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'telefone',array('size'=>60,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefone'); ?>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>