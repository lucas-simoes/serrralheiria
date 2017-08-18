<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('itensId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->itensId), array('view', 'id'=>$data->itensId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamentosId')); ?>:</b>
	<?php echo CHtml::encode($data->orcamentosId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materiaisId')); ?>:</b>
	<?php echo CHtml::encode($data->materiaisId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorUnitario')); ?>:</b>
	<?php echo CHtml::encode($data->valorUnitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotal')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotal); ?>
	<br />


</div>