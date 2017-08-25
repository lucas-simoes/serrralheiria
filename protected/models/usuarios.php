<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $usuariosId
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property string $email
 * @property string $telefone
 */
class usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, login, senha', 'required'),
			array('nome', 'length', 'max'=>80),
			array('login, telefone', 'length', 'max'=>20),
			array('senha', 'length', 'max'=>256),
			array('email', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuariosId, nome, login, senha, email, telefone', 'safe', 'on'=>'search'),
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
			'usuariosId' => 'Código',
			'nome' => 'Nome',
			'login' => 'Login',
			'senha' => 'Senha',
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

		$criteria->compare('usuariosId',$this->usuariosId);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('login',$this->login,true);

		$criteria->compare('senha',$this->senha,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('telefone',$this->telefone,true);

		return new CActiveDataProvider('usuarios', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}