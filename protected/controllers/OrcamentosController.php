<?php

class OrcamentosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

        /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','delete','additem', 'dados', 'deleteitem', 'clientes', 'impressao'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actionAddItem() {
            
            if (isset($_POST['orc_itens'])) {
                
                $model = orcamentos::model()->findByPk($_POST['orc_itens']['orcamentosId']);
                
                $cliente = clientes::model()->findByPk($model->clientesId);
                
                $itens = new orc_itens();   
                
                $itens->setAttribute('orcamentosId', $model->orcamentosId);
                
                $itens->attributes = $_POST['orc_itens'];
                
                if ($itens->save()) {
                    
                    $model->setAttribute('valorMaterial', $this->getTotalMaterial($model->orcamentosId));

                    $model->setAttribute('valorTotal', $model->valorMaterial + $model->valorMO);
                    
                    $model->save();
                    
                    $this->redirect(array('update','id'=>$model->orcamentosId));
                } else {
                    $this->render('update',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
                    ));
                }
            }
        }
        
        public function actionDados() {
            
            if (isset($_POST['orc_itens']['materiaisId'])) {
            
                $produto = materiais::model()->findByPk($_POST['orc_itens']['materiaisId']);

                if (isset($produto)) {

                    $item = new orc_itens();

                    $item->setAttributes(array(
                        'quantidade'=>1,
                        'valorUnitario'=>$produto->valor,
                        'valorTotal'=>1 * $produto->valor
                    ));
                    
                    $json = CJSON::encode($item);

                    echo $json;
                }
            }
        }
        
        public function actionClientes() {
            if (isset($_POST['clientes']['clientesId'])) {
                
                $cliente = clientes::model()->findByPk($_POST['clientes']['clientesId']);
                
                if (isset($cliente)) {
                    
                    $json = CJSON::encode($cliente);
                    
                    echo $json;
                }
            }
        }


        public function actionDeleteItem() {
            
            $item = orc_itens::model()->findByPk($_GET['id']);
            
            $orcamentosId = $item->orcamentosId;
            
            $item->delete();
            
            $model = orcamentos::model()->findByPk($orcamentosId);
                
            $cliente = clientes::model()->findByPk($model->clientesId);
            
            $model->setAttribute('valorMaterial', $this->getTotalMaterial($model->orcamentosId));

            $model->setAttribute('valorTotal', $model->valorMaterial + $model->valorMO);

            $model->save();

            $itens = new orc_itens();   

            $itens->setAttribute('orcamentosId', $model->orcamentosId);

            $this->redirect(array('update', 'id'=>$model->orcamentosId));
        }

        /**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new orcamentos;
                
                $cliente = new clientes;
                
                $itens = new orc_itens;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['orcamentos']))
		{
			$model->attributes=$_POST['orcamentos'];
                        
                        if ($model->clientesId != '') {
                            $cliente = clientes::model()->findByPk($model->clientesId);

                            $model->setAttribute('nomeCliente', $cliente->nome);
                        } else {
                            $model->setAttribute('nomeCliente', 'Consumidor Final');    
                        }
                        
                        $model->setAttribute('data', date('Y-m-d', time()));
                        
			if($model->save()) {
                            $this->redirect(array('update','id'=>$model->orcamentosId));
                        } 
		}

		$this->render('create',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();
                
                $cliente = clientes::model()->findByPk($model->clientesId);
                
                if (!isset($cliente)) {
                    $cliente = new clientes();
                }
                
                $itens = new orc_itens();   
                
                $itens->setAttribute('orcamentosId', $model->orcamentosId);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['orcamentos']))
		{
			$model->attributes=$_POST['orcamentos'];
                        
                        $cliente = clientes::model()->findByPk($model->clientesId);
                        
                        $model->setAttribute('nomeCliente', isset($cliente)?$cliente->nome:'Consumidor Final');
                        
                        $model->setAttribute('valorMaterial', $this->getTotalMaterial($model->orcamentosId));
                        
                        $model->setAttribute('valorTotal', $model->valorMaterial + $model->valorMO);
                        
			if($model->save())
				$this->redirect(array('update','id'=>$model->orcamentosId));
		} 

		$this->render('update',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('orcamentos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new orcamentos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['orcamentos']))
			$model->attributes=$_GET['orcamentos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=orcamentos::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orcamentos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        function getTotalMaterial($orcamentosId) {
            
            $criteria = new CDbCriteria;
            $criteria->select ='sum(valorTotal) as valorTotal';
            $criteria->condition = 'orcamentosId = ' . $orcamentosId;

            //creating proper SQL
            $sql = Yii::app()->db->commandBuilder->createFindCommand('orc_itens', $criteria)->getText();

            //fetching data based on created SQL stored in $sql variable
            $Subscriber = Yii::app()->db->createCommand($sql)->queryRow();

            $totalunSubs = $Subscriber['valorTotal'];

            return $totalunSubs;
        }
        
        public function actionImpressao() {
            
            if (isset($_GET['orcamentosId'])) {
                
                $model = orcamentos::model()->findByPk($_GET['orcamentosId']);
                
                $this->render('impressao', array(
                    'model'=>$model,
                ));
                
            } else {
                $model=new orcamentos('search');
                $this->render('admin',array(
			'model'=>$model,
		));
            }
        }
}
