<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $student_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $login
 * @property integer $phone
 * @property string $education
 * @property string $about_myself
 * @property string $interests
 * @property string $certificates
 * @property string $password
 * @property string $password_repeat
 * @property string $note
 * @property string $email
 * @property string $address
 * @property string $birthday
 * @property string $gender
 * @property string $date_joined
 * @property string $country
 * @property string $timezome
 *
 * The followings are the available model relations:
 * @property Users $email0
 * @property Studentsaccess[] $studentsaccesses
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, middle_name, last_name, login, phone, education, about_myself, interests, certificates, password, password_repeat, note, email, address, birthday, gender, date_joined, country', 'required'),
			array('phone', 'numerical', 'integerOnly'=>true),
			array('first_name, middle_name, last_name, email', 'length', 'max'=>35),
			array('login, password_repeat, country', 'length', 'max'=>50),
			array('education, about_myself, interests, certificates, password, note', 'length', 'max'=>255),
			array('address', 'length', 'max'=>150),
			array('gender', 'length', 'max'=>6),
			array('timezome', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, first_name, middle_name, last_name, login, phone, education, about_myself, interests, certificates, password, password_repeat, note, email, address, birthday, gender, date_joined, country, timezome', 'safe', 'on'=>'search'),
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
			'email0' => array(self::BELONGS_TO, 'Users', 'email'),
			'studentsaccesses' => array(self::HAS_MANY, 'Studentsaccess', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'student_id' => 'Student',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'login' => 'Login',
			'phone' => 'Phone',
			'education' => 'Education',
			'about_myself' => 'About Myself',
			'interests' => 'Interests',
			'certificates' => 'Certificates',
			'password' => 'Password',
			'password_repeat' => 'Password Repeat',
			'note' => 'Note',
			'email' => 'Email',
			'address' => 'Address',
			'birthday' => 'Birthday',
			'gender' => 'Gender',
			'date_joined' => 'Date Joined',
			'country' => 'Country',
			'timezome' => 'Timezome',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('about_myself',$this->about_myself,true);
		$criteria->compare('interests',$this->interests,true);
		$criteria->compare('certificates',$this->certificates,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_repeat',$this->password_repeat,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_joined',$this->date_joined,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('timezome',$this->timezome,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
