<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('materiaisId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->materiaisId), array('view', 'id'=>$data->materiaisId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidade')); ?>:</b>
	<?php echo CHtml::encode($data->unidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />


</div>