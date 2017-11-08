<div class="form">
    
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Selecionar Cliente</h4>
      </div>
      <div class="modal-body">
            <?php
                $form_cliente = $this->beginWidget('CActiveForm', array(
                    'id' => 'clientes-form',
                    'enableAjaxValidation' => false,
                ));
            ?>
            <div class="form-group row">
                <div class="col-md-12">
                <?php echo $form_cliente->dropDownList($cliente, 
                                                    'clientesId', 
                                                    CHtml::listData(clientes::model()->findAll(), 'clientesId', 'nome'), 
                                                    array('class' => 'form-control select2', 
                                                          'id' => 'clientes', 
                                                          'empty' => '',
                                                          'style' => 'width: 100%',
                                                          'ajax'=>array('type'=>'POST',
                                                                        'dataType'=>'json',
                                                                        'url'=> Yii::app()->createUrl('orcamentos/clientes'),
                                                                        'success'=>'updateCliente',

                                                                  ))); ?>
               <?php echo $form_cliente->error($cliente, 'clientesId'); ?>
                </div>
            </div>

            <?php $this->endWidget(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Selecionar</button>
      </div>
    </div>

  </div>
</div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'orcamentos-form',
        'enableAjaxValidation' => false,
    ));
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/js/select2.full.min.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/orcamentos.js', CClientScript::POS_END);
    ?>

    <?php echo $form->errorSummary($model); ?>

    <?php
    echo CHtml::hiddenField('psedoMat', 0, array('id' => 'pMat'));
    echo $form->hiddenField($model, 'valorMaterial');
    ?>
    
    <div class="form-group row">
        <div class="col-md-12">
            <?php echo $form->labelEx($model, 'nomeProduto'); ?>
            <?php echo $form->textField($model, 'nomeProduto', array('size' => 80, 'maxlength' => 80, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'nomeProduto'); ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <?php echo $form->hiddenField($model, 'clientesId', array('id'=>'idCliente')); ?>
            <?php echo $form->labelEx($model, 'nomeCliente'); ?>
            <?php echo $form->textField($model, 'nomeCliente', array('class' => 'form-control', 'id'=>'nomeCliente')); ?>
            <?php echo $form->error($model, 'nomeCliente'); ?>
        </div>

        <div class="col-md-4">
            <?php echo $form->labelEx($model, 'telefoneCliente'); ?>
            <?php echo $form->textField($model, 'telefoneCliente', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control', 'id'=>'telCliente')); ?>
            <?php echo $form->error($model, 'telefoneCliente'); ?>
        </div>
        <div class="col-md-2" style="padding-top: 1.6em">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Selecionar Cliente</button>
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

    <div class="row buttons">
        <div class="col-md-12">
            <?php echo CHtml::submitButton('Salvar Cabeçalho', array('class' => 'btn btn-lg btn-primary')); ?>
            <?php echo CHtml::link('Impressão', Yii::app()->createUrl('orcamentos/impressao', array('orcamentosId'=>$model->orcamentosId)), array('class'=>'btn btn-lg btn-primary')); ?>
        </div> 
    </div>

    <?php $this->endWidget(); ?>

    <hr>

    <div id="separador" style="display: <?php echo $model->isNewRecord ? 'none' : 'block'; ?>">
        <?php
        $itens_form = $this->beginWidget('CActiveForm', array(
            'id' => 'itens-form',
            'enableAjaxValidation' => false,
            'action' => Yii::app()->createUrl('orcamentos/addItem'),
        ));
        ?>

        <?php echo $itens_form->errorSummary($model); ?>

        <h3>Materiais</h3>

        <div class="form-group row">
            <div class="col-md-4 col-sm-2 col-xs-2">
                <?php echo $itens_form->labelEx($itens, 'materiaisId'); ?>
                <?php echo $itens_form->dropDownList($itens, 
                                                     'materiaisId', 
                                                     CHtml::listData(materiais::model()->findAll(), 'materiaisId', 'nome'), 
                                                     array('class' => 'form-control select2', 
                                                           'id' => 'material', 
                                                           'empty' => '',
                                                           'ajax'=>array('type'=>'POST',
                                                                         'dataType'=>'json',
                                                                         'url'=> Yii::app()->createUrl('orcamentos/dados'),
                                                                         'success'=>'updateForm',

                                                                   ))); ?>
                <?php echo $itens_form->error($itens, 'materiaisId'); ?>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php echo $itens_form->labelEx($itens, 'quantidade'); ?>
                <?php echo $itens_form->textField($itens, 'quantidade', array('class' => 'money form-control', 'id' => 'qtd')); ?>
                <?php echo $itens_form->error($itens, 'quantidade'); ?>
            </div>
            
            <div class="col-md-2 col-sm-2 col-xs-2">
                <?php echo $itens_form->labelEx($itens, 'valorUnitario'); ?>
                <?php echo $itens_form->textField($itens, 'valorUnitario', array('class' => 'money form-control', 'id'=>'valorUn')); ?>
                <?php echo $itens_form->error($itens, 'valorUnitario'); ?>
            </div>
            
            <div class="col-md-2 col-sm-1 col-xs-2">
                <?php echo $itens_form->labelEx($itens, 'valorTotal'); ?>
                <?php echo $itens_form->textField($itens, 'valorTotal', array('class' => 'money form-control', 'id'=>'valorTot')); ?>
                <?php echo $itens_form->error($itens, 'valorTotal'); ?>
            </div>
            
            <?php echo $itens_form->hiddenField($itens, 'orcamentosId'); ?>

            <div class="col-md-2 col-sm-2 col-xs-2" style="padding-top: 1.6em">
                <?php
                echo CHtml::submitButton('Inserir Item', array('class' => 'btn btn-primary'));
                ?> 
            </div>
        </div>

        <?php $this->endWidget(); ?>

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'orcamentos-grid',
            'dataProvider' => $itens->search(),
            'columns' => array(
		'materiaisId',
                'materiais.nome',
		'quantidade',
		'valorUnitario',
		'valorTotal',
                array(
			'class'=>'CButtonColumn',
                        'template'=>'{deletar}',
                        'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                        'deleteButtonLabel'=> false,
                        'buttons' => array (                            
                            'deletar' => array(
                                'label'=>'<i class="fa fa-trash"></i>',
                                'url'=>'Yii::app()->createUrl("orcamentos/deleteItem", array("id"=>"$data->itensId"))',
                                'options'=>array('title'=>'Excluir', 'class'=>'btn btn-default' ),
                            ),
                        ),
		),
            ),
            'htmlOptions' => array('class' => 'table table-responsive', 'id' => 'table-orc'),
            'itemsCssClass' => 'table table-hover',
            'pagerCssClass' => 'text-center',
            'pager' => array(
                'htmlOptions' => array('class' => 'pagination'),
                'header' => '',
            ),
        ));
        ?> 

    </div>
</div><!-- form -->
<script type="text/javascript">
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

        valorTot.value = parseFloat(pMat.value) + parseFloat(valorMo.value);
    });
    
    $('#qtd').change(function() {
        var qtd = document.getElementById('qtd');
        var vlUn = document.getElementById('valorUn');
        var vlTot = document.getElementById('valorTot');
        
        vlTot.value = parseFloat(qtd.value) * parseFloat(vlUn.value);
    });
    
    $('#valorUn').change(function() {
        var qtd = document.getElementById('qtd');
        var vlUn = document.getElementById('valorUn');
        var vlTot = document.getElementById('valorTot');
        
        vlTot.value = parseFloat(qtd.value) * parseFloat(vlUn.value);
    });
    
    $('#valorTot').change(function() {
        var qtd = document.getElementById('qtd');
        var vlUn = document.getElementById('valorUn');
        var vlTot = document.getElementById('valorTot');
        
        vlUn.value = parseFloat(vlTot.value) / parseFloat(qtd.value);
    });

    /*function confirmation(data) {
        document.getElementById('loading').style.display = 'none';

        document.getElementById('material').value = '';

        document.getElementById('qtd').value = '';

        var $hiddenInput = $('<input/>', {type: 'hidden', name: 'itens[]', value: data});

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
    }*/
    
    function updateForm(data) {        
        document.getElementById('qtd').value = data.quantidade;
        document.getElementById('valorUn').value = data.valorUnitario;
        document.getElementById('valorTot').value = data.valorTotal;
    }
    
    function lightbox() {
        document.getElementById('tst').style.display = 'block';
    }
    
    function updateCliente(data) {        
        document.getElementById('idCliente').value = data.clientesId;
        document.getElementById('nomeCliente').value = data.nome;
        document.getElementById('telCliente').value = data.telefone;
    }
</script>
