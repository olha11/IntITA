<?php

/**
 * This is the model class for table "teachers".
 *
 * The followings are the available columns in table 'teachers':
 * @property integer $teacherID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $email
 * @property string $fotoURL
 * @property string $coursesArray
 * @property string $tel
 * @property integer $gender
 * @property integer $dateOfBirth
 * @property string $subjects
 * @property string $jobTitle
 * @property string $education
 * @property string $degree
 * @property string $articles
 * @property string $otherTeacherDetailes
 *
 * The followings are the available model relations:
 * @property Users $email0
 */
class Teachers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teachers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, middleName, lastName, email, fotoURL, coursesArray, tel, articles, otherTeacherDetailes', 'required'),
			array('gender, dateOfBirth', 'numerical', 'integerOnly'=>true),
			array('firstName, middleName, lastName, email', 'length', 'max'=>35),
			array('fotoURL, education', 'length', 'max'=>100),
			array('coursesArray', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>15),
			array('subjects, jobTitle, degree', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('teacherID, firstName, middleName, lastName, email, fotoURL, coursesArray, tel, gender, dateOfBirth, subjects, jobTitle, education, degree, articles, otherTeacherDetailes', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'teacherID' => 'Teacher',
			'firstName' => 'Імя',
			'middleName' => 'По-батькові',
			'lastName' => 'Прізвище',
			'email' => 'Email',
			'fotoURL' => 'Фото',
			'coursesArray' => 'Курси',
			'tel' => 'Тел.',
			'gender' => 'Стать',
			'dateOfBirth' => 'Дата народження',
			'subjects' => 'Предмети',
			'jobTitle' => 'Job Title',
			'education' => 'Education',
			'degree' => 'Degree',
			'articles' => 'Articles',
			'otherTeacherDetailes' => 'Other Teacher Detailes',
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

		$criteria->compare('teacherID',$this->teacherID);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fotoURL',$this->fotoURL,true);
		$criteria->compare('coursesArray',$this->coursesArray,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('dateOfBirth',$this->dateOfBirth);
		$criteria->compare('subjects',$this->subjects,true);
		$criteria->compare('jobTitle',$this->jobTitle,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('articles',$this->articles,true);
		$criteria->compare('otherTeacherDetailes',$this->otherTeacherDetailes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teachers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
