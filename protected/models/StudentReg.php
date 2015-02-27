<?php

/**
 * This is the model class for table "studentprofile".
 *
 * The followings are the available columns in table 'studentprofile':
 * @property integer $id
 * @property string $firstName
 * @property string $secondName
 * @property string $nickname
 * @property string $birthday
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $address
 * @property string $education
 * @property string $educform
 * @property string $interests
 * @property string $aboutUs
 */
class StudentReg extends CActiveRecord
{
    public $password_repeat;
    public $send_letter;
	
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
            array('firstName, email, password, password_repeat', 'required', 'message'=>'Будь ласка введіть {attribute}.'),
            array('email', 'email', 'message'=>'Email не являється правильною {attribute} адресою'),
            array('birthday', 'date','format' => 'dd.MM.yyyy'),
            array('password', 'compare', 'compareAttribute'=>'password_repeat', 'message'=>'Паролі не співпадають'),
            array('firstName, secondName, nickname, email, password, education', 'length', 'max'=>255),
            array('birthday', 'length', 'max'=>11),
            array('phone', 'length', 'max'=>15),
            array('educform', 'length', 'max'=>60),
            array('address, interests, aboutUs,send_letter', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, firstName, secondName, nickname, birthday, email, password, phone, address, education, educform, interests, aboutUs, password_repeat', 'safe', 'on'=>'search'),
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
            'nickname' => 'Нік',
            'birthday' => 'День народження',
            'email' => 'Email',
            'password' => 'Пароль',
            'password_repeat' => 'Повтор пароля',
            'phone' => 'Телефон',
            'address' => 'Адреса',
            'education' => 'Освіта',
            'educform' => 'Форма навчання',
            'interests' => 'Захоплення',
            'aboutUs' => 'Звідки про нас?',
            'send_letter'=> 'Лист',
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
        $criteria->compare('nickname',$this->nickname,true);
        $criteria->compare('birthday',$this->birthday,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('phone',$this->phone,true);
        $criteria->compare('address',$this->address,true);
        $criteria->compare('education',$this->education,true);
        $criteria->compare('educform',$this->educform,true);
        $criteria->compare('interests',$this->interests,true);
        $criteria->compare('aboutUs',$this->aboutUs,true);
        $criteria->compare('send_letter',$this->send_letter,true);

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
