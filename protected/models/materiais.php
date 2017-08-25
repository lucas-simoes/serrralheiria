<?php

/**
 * This is the model class for table "materiais".
 *
 * The followings are the available columns in table 'materiais':
 * @property integer $materiaisId
 * @property string $nome
 * @property string $unidade
 * @property double $valor
 */
class materiais extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materiais';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, unidade, valor', 'required'),
			array('valor', 'numerical'),
			array('nome', 'length', 'max'=>40),
			array('unidade', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('materiaisId, nome, unidade, valor', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'materiaisId' => 'Código',
			'nome' => 'Nome',
			'unidade' => 'Unidade',
			'valor' => 'Valor',
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

		$criteria->compare('materiaisId',$this->materiaisId);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('unidade',$this->unidade,true);

		$criteria->compare('valor',$this->valor);

		return new CActiveDataProvider('materiais', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return materiais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}