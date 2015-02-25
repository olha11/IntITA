<?php

/**
 * This is the model class for table "studentreg".
 *
 * The followings are the available columns in table 'studentreg':
 * @property integer $id
 * @property string $firstName
 * @property string $secondName
 * @property string $middleName
 * @property string $login
 * @property string $birthday
 * @property string $education
 * @property string $aboutMyself
 * @property string $interests
 * @property string $certificates
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $note
 * @property string $password
 * @property string $password_repeat
 */
class StudentReg extends CActiveRecord
{
    public $password_repeat;
	
	public function getDbConnection()
    {
        return Yii::app()->db;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'studentprofile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('firstName, secondName, middleName,login, birthday, education, email, password, password_repeat', 'required', 'message'=>'Будь ласка введіть {attribute}.'),
			array('firstName, secondName, middleName, education, certificates, email, password, password_repeat', 'length', 'max'=>255),
			array('birthday', 'length', 'max'=>11),
            array('email', 'email', 'message'=>'Email не являється правильною {attribute} адресою'),
            array('birthday', 'date','format' => 'dd.MM.yyyy'),
			array('phone', 'length', 'max'=>15),
			array('aboutMyself, interests, address, note', 'safe'),
            array('password', 'compare', 'compareAttribute'=>'password_repeat', 'message'=>'Паролі не співпадають'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstName, secondName, middleName, birthday, education, aboutMyself, interests, certificates, phone, email, address, note, password, password_repeat', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'firstName' => 'Ім\'я',
			'secondName' => 'Прізвище',
			'middleName' => 'По-батькові',
            'login' => 'Логін',
			'birthday' => 'День народження',
			'education' => 'Освіта',
			'aboutMyself' => 'Про себе',
			'interests' => 'Інтереси',
			'certificates' => 'Сертифікати',
			'phone' => 'Телефон',
			'email' => 'Email',
			'address' => 'Адреса',
			'note' => 'Примітки',
			'password' => 'Пароль',
            'password_repeat' => 'Повтор пароля',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('secondName',$this->secondName,true);
		$criteria->compare('middleName',$this->middleName,true);
        $criteria->compare('login',$this->birthday,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('aboutMyself',$this->aboutMyself,true);
		$criteria->compare('interests',$this->interests,true);
		$criteria->compare('certificates',$this->certificates,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentReg the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
