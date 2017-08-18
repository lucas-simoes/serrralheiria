<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $clientesId
 * @property string $nome
 * @property string $endereco
 * @property string $cidade
 * @property string $estado
 * @property string $email
 * @property integer $telefone
 */
class clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome', 'required'),
			array('telefone', 'numerical', 'integerOnly'=>true),
			array('nome, endereco', 'length', 'max'=>80),
			array('cidade', 'length', 'max'=>30),
			array('estado', 'length', 'max'=>2),
			array('email', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('clientesId, nome, endereco, cidade, estado, email, telefone', 'safe', 'on'=>'search'),
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
			'clientesId' => 'Clientes',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'email' => 'Email',
			'telefone' => 'Telefone',
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

		$criteria->compare('clientesId',$this->clientesId);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('cidade',$this->cidade,true);

		$criteria->compare('estado',$this->estado,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('telefone',$this->telefone);

		return new CActiveDataProvider('clientes', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}