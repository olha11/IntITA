<?php

/**
 * This is the model class for table "teacher_temp".
 *
 * The followings are the available columns in table 'teacher_temp':
 * @property integer $teacher_id
 * @property string $lang
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $foto_url
 * @property string $subjects
 * @property string $profile_text_big
 * @property string $profile_text
 * @property string $readMoreLink
 * @property string $email
 * @property string $tel
 * @property string $skype
 * @property string $title
 * @property string $linkName
 * @property string $smallImage
 */
class Teacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teacher';
	}

	public function setValuesByID($id){
		$this->first_name = $this->findByPk($id)->first_name;
		$this->foto_url = $this->findByPk($id)->foto_url;
		$this->last_name = $this->findByPk($id)->last_name;
		$this->middle_name = $this->findByPk($id)->middle_name;
		$this->profile_text = $this->findByPk($id)->profile_text;
		$this->readMoreLink = $this->findByPk($id)->readMoreLink;
		$this->subjects = $this->findByPk($id)->subjects;
		return $this;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang, first_name, middle_name, last_name, foto_url, subjects, profile_text_big, profile_text, readMoreLink, email, tel, skype, title, linkName', 'required'),
			array('lang', 'length', 'max'=>6),
			array('first_name, middle_name, last_name', 'length', 'max'=>35),
			array('foto_url, subjects, tel', 'length', 'max'=>100),
			array('readMoreLink, smallImage', 'length', 'max'=>255),
			array('email, skype, title, linkName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('teacher_id, lang, first_name, middle_name, last_name, foto_url, subjects, profile_text_big, profile_text, readMoreLink, email, tel, skype, title, linkName, smallImage', 'safe', 'on'=>'search'),
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
			'teacher_id' => 'Teacher',
			'lang' => 'Lang',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'foto_url' => 'Foto Url',
			'subjects' => 'Subjects',
			'profile_text_big' => 'Profile Text Big',
			'profile_text' => 'Profile Text',
			'readMoreLink' => 'Read More Link',
			'email' => 'Email',
			'tel' => 'Tel',
			'skype' => 'Skype',
			'title' => 'Title',
			'linkName' => 'Link Name',
			'smallImage' => 'Small photo',
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

		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('foto_url',$this->foto_url,true);
		$criteria->compare('subjects',$this->subjects,true);
		$criteria->compare('profile_text_big',$this->profile_text_big,true);
		$criteria->compare('profile_text',$this->profile_text,true);
		$criteria->compare('readMoreLink',$this->readMoreLink,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('linkName',$this->linkName,true);
		$criteria->compare('smallImage',$this->smallImage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TeachersTemp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
