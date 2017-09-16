<?php

/**
 * This is the model class for table "orcamentos".
 *
 * The followings are the available columns in table 'orcamentos':
 * @property integer $orcamentosId
 * @property integer $clientesId
 * @property string $nomeCliente
 * @property string $telefoneCliente
 * @property string $validade
 * @property double $valorMaterial
 * @property double $valorMO
 * @property double $valorTotal
 */
class orcamentos extends CActiveRecord
{
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orcamentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomeCliente, valorTotal', 'required'),
			array('clientesId', 'numerical', 'integerOnly'=>true),
			array('valorMaterial, valorMO, valorTotal', 'numerical'),
			array('nomeCliente', 'length', 'max'=>80),
			array('telefoneCliente', 'length', 'max'=>20),
			array('validade', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orcamentosId, clientesId, nomeCliente, telefoneCliente, validade, valorMaterial, valorMO, valorTotal', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'clientes'=>array(self::BELONGS_TO, 'clientes', 'clientesId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orcamentosId' => 'Código',
			'clientesId' => 'Cliente',
			'nomeCliente' => 'Nome Cliente',
			'telefoneCliente' => 'Telefone Cliente',
			'validade' => 'Validade',
			'valorMaterial' => 'Valor Material',
			'valorMO' => 'Valor Mão Obra',
			'valorTotal' => 'Valor Total',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('orcamentosId',$this->orcamentosId);

		$criteria->compare('clientesId',$this->clientesId);

		$criteria->compare('nomeCliente',$this->nomeCliente,true);

		$criteria->compare('telefoneCliente',$this->telefoneCliente,true);

		$criteria->compare('validade',$this->validade,true);

		$criteria->compare('valorMaterial',$this->valorMaterial);

		$criteria->compare('valorMO',$this->valorMO);

		$criteria->compare('valorTotal',$this->valorTotal);

		return new CActiveDataProvider('orcamentos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return orcamentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}