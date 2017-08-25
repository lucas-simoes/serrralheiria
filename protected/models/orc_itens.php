<?php

/**
 * This is the model class for table "orc_itens".
 *
 * The followings are the available columns in table 'orc_itens':
 * @property integer $itensId
 * @property integer $orcamentosId
 * @property integer $materiaisId
 * @property string $quantidade
 * @property double $valorUnitario
 * @property double $valorTotal
 */
class orc_itens extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orc_itens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orcamentosId, materiaisId, quantidade, valorUnitario, valorTotal', 'required'),
			array('orcamentosId, materiaisId', 'numerical', 'integerOnly'=>true),
			array('valorUnitario, valorTotal', 'numerical'),
			array('quantidade', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('itensId, orcamentosId, materiaisId, quantidade, valorUnitario, valorTotal', 'safe', 'on'=>'search'),
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
                    'orcamento'=>array(self::BELONGS_TO, 'orcamentos', 'orcamentosId'),
                    'materiais'=>array(self::BELONGS_TO, 'materiais', 'materiaisId')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'itensId' => 'Código',
			'orcamentosId' => 'Orcamento',
			'materiaisId' => 'Materiais',
			'quantidade' => 'Quantidade',
			'valorUnitario' => 'Valor Unitario',
			'valorTotal' => 'Valor Total',
                        'materiais.nome' =>'Nome'
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

		$criteria->compare('itensId',$this->itensId);

		$criteria->compare('orcamentosId',$this->orcamentosId);

		$criteria->compare('materiaisId',$this->materiaisId);

		$criteria->compare('quantidade',$this->quantidade,true);

		$criteria->compare('valorUnitario',$this->valorUnitario);

		$criteria->compare('valorTotal',$this->valorTotal);

		return new CActiveDataProvider('orc_itens', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return orc_itens the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}