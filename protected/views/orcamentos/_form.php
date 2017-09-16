<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'orcamentos-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <?php
        echo CHtml::hiddenField('psedoMat', 0, array('id' => 'pMat'));
        echo $form->hiddenField($model, 'valorMaterial');
    ?>

    <div class="form-group row">
        <div class="col-md-6">
            <?php echo $form->labelEx($model, 'clientesId'); ?>
            <?php echo $form->dropdownList($model, 'clientesId', CHtml::listData(clientes::model()->findAll(), 'clientesId', 'nome'), array('class' => 'form-control', 'empty' => '')); ?>
            <?php echo $form->error($model, 'clientesId'); ?>
        </div>

        <div class="col-md-6">
            <?php echo $form->labelEx($model, 'telefoneCliente'); ?>
            <?php echo $form->textField($model, 'telefoneCliente', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'telefoneCliente'); ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4">
            <?php echo $form->labelEx($model, 'validade'); ?>
            <?php echo $form->dateField($model, 'validade', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'validade'); ?>
        </div>

        <div class="col-md-4">
            <?php echo $form->labelEx($model, 'valorMO'); ?>
            <?php echo $form->textField($model, 'valorMO', array('class' => 'money form-control', 'id' => 'mo')); ?>
            <?php echo $form->error($model, 'valorMO'); ?>
        </div>

        <div class="col-md-4">
            <?php echo $form->labelEx($model, 'valorTotal'); ?>
            <?php echo $form->textField($model, 'valorTotal', array('class' => 'money form-control', 'readonly' => TRUE, 'id' => 'vTotal')); ?>
            <?php echo $form->error($model, 'valorTotal'); ?>
        </div>
    </div>

    <hr>

    <h3>Materiais</h3>

    <div class="form-group row">
        <div class="col-md-8 col-sm-4 col-xs-2">
            <?php echo CHtml::dropDownList('materiaisId', '', CHtml::listData(materiais::model()->findAll(), 'materiaisId', 'nome'), array('class' => 'form-control', 'id' => 'material', 'empty' => '')); ?>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-2">
            <?php echo CHtml::textField('qtd', '', array('class' => 'money form-control', 'id' => 'qtd')); ?>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-2">
            <?php
            echo CHtml::ajaxLink("Inserir no Orçamento", $this->createUrl('orcamentos/additem'), array(
                "type" => "post",
                "data" => 'js:{materiaisId : document.getElementById("material").value,"quantidade": document.getElementById("qtd").value}',
                "success" => 'confirmation'), array(
                'class' => 'btn btn-primary', 'onclick' => 'loading()', 'id' => 'btnGerar'
                    )
            );
            ?> 
        </div>
    </div>

    <?php

    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'orcamentos-grid',
        'dataProvider' => $provider,
        'ajaxUpdate' => true,
        'columns' => array(
            array(
                'name' => 'Código',
                'value' => '$data->materiaisId'
            ),
            array(
                'name' => 'Nome',
                'value' => 'CHtml::encode($data->materiais->nome)'
            ),
            array(
                'name' => 'Quantidade',
                'value' => '$data->quantidade'
            ),
            array(
                'name' => 'Valor Unitario',
                'value' => '$data->valorUnitario'
            ),
            array(
                'name' => 'Valor Total',
                'value' => '$data->valorTotal'
            ),
        ),
        'htmlOptions' => array('class' => 'table table-responsive', 'id'=>'table-orc'),
        'itemsCssClass' => 'table table-hover',
        'pagerCssClass' => 'text-center',
        'pager' => array(
            'htmlOptions' => array('class' => 'pagination'),
            'header' => '',
        ),
    ));
    ?>  

    <div class="row buttons">
        <div class="col-md-12">
            <?php 
                if ($model->isNewRecord) {
                    echo CHtml::submitButton('Salvar', array('class' => 'btn btn-lg btn-primary')); 
                }
            ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }

    $('#mo').change(function () {
        valorMo = document.getElementById('mo');
        valorTot = document.getElementById('vTotal');
        pMat = document.getElementById('pMat');
        
        if (valorTot.value === '') {
            valorTot.value = 0;
        }

        valorTot.value = parseFloat(valorTot.value) + parseFloat(pMat.value) + parseFloat(valorMo.value);
    })

    function confirmation(data) {
        document.getElementById('loading').style.display = 'none';

        document.getElementById('material').value = '';

        document.getElementById('qtd').value = '';
        
        var $hiddenInput = $('<input/>',{type:'hidden',name:'itens[]',value:data});
        
        $hiddenInput.appendTo('#orcamentos-form');
        
        data = JSON.parse(data);

        var newRow = $("<tr>");		    
        var cols = "";
        cols += '<td>' + data.materiaisId + '</td>';		    
        cols += '<td>' + data.nome + '</td>';		    
        cols += '<td>' + data.quantidade + '</td>';		    
        cols += '<td>' + data.valorUnitario + '</td>';
        cols += '<td>' + data.valorTotal + '</td>';
        newRow.append(cols);
        $('.table-hover').append(newRow);
        
        valorTot = document.getElementById('vTotal');
        
        if (valorTot.value === '') {
            valorTot.value = 0;
        }
        
        valorTot.value = parseFloat(valorTot.value) + parseFloat(data.valorTotal);
        
        var valorMaterial = document.getElementById('orcamentos_valorMaterial');
        
        if (valorMaterial.value == '') {
            valorMaterial.value = 0;
        }
        
        valorMaterial.value = parseFloat(valorMaterial.value) + parseFloat(data.valorTotal);
        
        var tr = $('.empty').closest('tr');
        tr.remove();
    }
</script>
