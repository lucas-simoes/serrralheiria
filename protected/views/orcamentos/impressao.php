<h1>Serralheria Almeida</h1>
<h2>Orçamento # <?php echo $model->orcamentosId; ?></h2>

<h4>Cliente: <?php echo $model->nomeCliente; ?></h4>

<div class="form">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Produto
                </th>
                <th>
                    Data Orçamento
                </th>
                <th>
                    Validade
                </th>
                <th>
                    Valor
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $model->nomeProduto; ?>
                </td>
                <td>
                    <?php echo date('d/m/Y', strtotime($model->data)); ?>
                </td>
                <td>
                    <?php echo date('d/m/Y', strtotime($model->validade)); ?>
                </td>
                <td>
                    <?php echo $model->valorTotal; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row buttons">
    <div class="col-md-12">
        <?php echo CHtml::link('Imprimir', '#', array('class'=>'btn btn-primary', 'onclick'=>'window.print()')); ?>
    </div>
</div>
