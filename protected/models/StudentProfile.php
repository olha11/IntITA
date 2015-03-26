<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $student_id
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property string $login
 * @property string $birthday
 * @property string $education
 * @property string $about_myself
 * @property string $interests
 * @property string $certificates
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $note
 * @property string $password
 * @property string $password_repeat
 */
class StudentProfile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
     public function getDbConnection()
    {
        return Yii::app()->db2;
    }
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('first_name, second_name, middle_name,login, birthday, education, email, password, password_repeat', 'required', 'message'=>'Будь ласка введіть {attribute}.'),
			array('first_name, second_name, middle_name, education, certificates, email, password, password_repeat', 'length', 'max'=>255),
			array('birthday', 'length', 'max'=>11),
            array('email', 'email', 'message'=>'Email не являється правильною {attribute} адресою'),
            array('birthday', 'date','format' => 'dd.MM.yyyy'),
			array('phone', 'length', 'max'=>15),
			array('about_myself, interests, address, note', 'safe'),
            array('password', 'compare', 'compareAttribute'=>'password_repeat', 'message'=>'Паролі не співпадають'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, second_name, middle_name, birthday, education, about_myself, interests, certificates, phone, email, address, note, password, password_repeat', 'safe', 'on'=>'search'),
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
			'student_id' => 'ID',
			'first_name' => 'Ім\'я',
			'second_name' => 'Прізвище',
			'middle_name' => 'По-батькові',
            'login' => 'Логін',
			'birthday' => 'День народження',
			'education' => 'Освіта',
			'about_myself' => 'Про себе',
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

		$criteria->compare('student_id',$this->id);
		$criteria->compare('first_name',$this->firstName,true);
		$criteria->compare('second_name',$this->secondName,true);
		$criteria->compare('middle_name',$this->middleName,true);
        $criteria->compare('login',$this->birthday,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('about_myself',$this->aboutMyself,true);
		$criteria->compare('interests',$this->interests,true);
		$criteria->compare('certificates',$this->certificates,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_repeat',$this->password_repeat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentProfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
