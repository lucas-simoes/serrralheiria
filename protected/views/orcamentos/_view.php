<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamentosId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orcamentosId), array('view', 'id'=>$data->orcamentosId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientesId')); ?>:</b>
	<?php echo CHtml::encode($data->clientesId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeCliente')); ?>:</b>
	<?php echo CHtml::encode($data->nomeCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefoneCliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefoneCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validade')); ?>:</b>
	<?php echo CHtml::encode($data->validade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorMaterial')); ?>:</b>
	<?php echo CHtml::encode($data->valorMaterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorMO')); ?>:</b>
	<?php echo CHtml::encode($data->valorMO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotal')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotal); ?>
	<br />

	*/ ?>

</div>