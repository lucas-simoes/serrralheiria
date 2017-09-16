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
				'actions'=>array('index','view','create','update','admin','delete','additem'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actionAddItem() {
            if ((isset($_POST['materiaisId'])) && ($_POST['materiaisId'] != '')) {
                
                try {
                    
                    $materiais = materiais::model()->findByPk($_POST['materiaisId']);
                    
                    $data = array();
                    
                    $data['materiaisId'] = $materiais->materiaisId;
                    $data['nome'] = $materiais->nome;
                    $data['quantidade'] = $_POST['quantidade'];
                    $data['valorUnitario'] = $materiais->valor;
                    $data['valorTotal'] = number_format($materiais->valor * $_POST['quantidade'], 2, '.', '');
 
                    $resp['code'] = 200;
                    $resp['msg'] = 'Operação Realizada com sucesso!';
                    $resp['obj'] = $data;

                    echo CJSON::encode($data);
                    //$this->renderPartial('_grid', array('dp_itens'=>$dp_itens));
                    
                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                }
                    
            } else {
                $resp['code'] = 500;
                $resp['msg'] = 'Nenhum Item Selecionado!';
                
                echo json_encode($resp);
            }
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
                        
			if($model->save()) {
                            foreach ($_POST['itens'] as $item) {
                                $obj = CJSON::decode($item);
                                
                                $objItem = new orc_itens;
                                $objItem->setAttributes(array(
                                    'orcamentosId'=>$model->orcamentosId,
                                    'materiaisId'=>$obj['materiaisId'],
                                    'quantidade'=>$obj['quantidade'],
                                    'valorUnitario'=>$obj['valorUnitario'],
                                    'valorTotal'=>$obj['valorTotal']
                                ));
                                
                                $objItem->save();
                            }
				$this->redirect(array('update','id'=>$model->orcamentosId));
                        } else {
                            $erro = $model->getErrors();

                            $text = '';

                            foreach ($erro as $er) {
                                $text = $text . '. ' . $er[0];
                            }

                            throw new CDbException($text);
                        }
		} else {
                    $provider = new CArrayDataProvider(array());
                }

		$this->render('create',array(
			'model'=>$model,
                        'provider'=>$provider
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['orcamentos']))
		{
			$model->attributes=$_POST['orcamentos'];
                        
                        $cliente = clientes::model()->findByPk($model->clientesId);
                        
                        $model->setAttribute('nomeCliente', $cliente->nome);
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->orcamentosId));
		} else {
                    $criteria = new CDbCriteria();
                    $criteria->compare('orcamentosId',$model->orcamentosId);
                    $provider = new CActiveDataProvider('orc_itens', array(
			'criteria'=>$criteria,
                    ));
                }

		$this->render('update',array(
			'model'=>$model,
                        'provider'=>$provider
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
}
