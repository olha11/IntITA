<?php

/**
 * This is the model class for table "lecture".
 *
 * The followings are the available columns in table 'lecture':
 * @property integer $lectureID
 * @property string $lectureImageMain
 * @property string $lectureModule
 * @property integer $lectureNumber
 * @property string $lectureNameText
 * @property string $lectureTypeText
 * @property string $lectureTypeImage
 * @property string $lectureTimeText
 * @property integer $lectureMaxNumber
 * @property string $lectureIconImage
 * @property string $lectureUnwatchedImage
 * @property string $lectureOverlookedImage
 * @property string $infoLectures
 * @property string $thisLectureInfo
 * @property string $preLectureInfo
 * @property string $postLessonInfo
 * @property string $teacherTitle
 * @property string $linkName
 *
 * The followings are the available model relations:
 * @property Modules $lectureModule0
 * @property Studentsaccess[] $studentsaccesses
 */
class Lecture extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lecture';
	}

	function setLessonFooterValues ($lessNum,$allLess)
	{
		$this->infoLessons=$allLess; // Інформація про всі уроки
		$this->numberLessons=$lessNum-1; // Номер уроку

		$this->preLessonNumber=$lessNum-2; // Номер попереднього уроку
		$this->postLessonNumber=$lessNum; // Номер наступного уроку

		$this->thisLessonInfo=$this->infoLessons[ $this->numberLessons]; // Інформація даного уроку
		$this->preLessonInfo=$this->infoLessons[ $this->preLessonNumber]; // Інформація попереднього уроку
		$this->postLessonInfo=$this->infoLessons[ $this->postLessonNumber]; // Інформація наступного уроку
	}

	function setLectureValues ($lectureImageMain,$lectureModule,$lectureNumber,$lectureNameText,$lectureTypeText,$lectureTypeImage,$lectureTimeText,
					  $lectureMaxNumber,$lectureIconImage)
	{
		$this->lectureImageMain=Yii::app()->request->baseUrl.$lectureImageMain;
		$this->lectureModule=$lectureModule;
		$this->lectureNumber=$lectureNumber;
		$this->lectureNameText=$lectureNameText;
		$this->lectureTypeText=$lectureTypeText;
		$this->lectureTypeImage=Yii::app()->request->baseUrl.$lectureTypeImage;
		$this->lectureTimeText=$lectureTimeText;
		$this->lectureMaxNumber=$lectureMaxNumber;
		$this->lectureIconImage=Yii::app()->request->baseUrl.$lectureIconImage;
	}

	function setTeacherValues ($teacherImage, $teacherName,$teacherEmails,$teacherPhoneNumbers,$teacherSkype,$linkAdress)
	{
		$this->teacherImage = Yii::app()->request->baseUrl.$teacherImage;
		$this->teacherName = $teacherName;
		$this->teacherEmails = $teacherEmails;
		$this->teacherPhoneNumbers = $teacherPhoneNumbers;
		$this->teacherSkype = $teacherSkype;
		$this->linkAdress = $linkAdress;
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lectureImageMain, lectureModule, lectureNumber, lectureNameText, lectureTypeText, lectureTypeImage, lectureTimeText, lectureMaxNumber, lectureIconImage, lectureUnwatchedImage, lectureOverlookedImage', 'required'),
			array('lectureNumber, lectureMaxNumber', 'numerical', 'integerOnly'=>true),
			array('lectureImageMain, lectureTypeText, lectureTypeImage, lectureIconImage, lectureUnwatchedImage, lectureOverlookedImage, thisLectureInfo, preLectureInfo, postLessonInfo', 'length', 'max'=>255),
			array('lectureNameText', lectureModule, 'length', 'max'=>100),
			array('lectureTimeText', 'length', 'max'=>20),
			array('infoLectures, teacherTitle', 'length', 'max'=>50),
			array('linkName', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('lectureID, lectureImageMain, lectureModule, lectureNumber, lectureNameText, lectureTypeText, lectureTypeImage, lectureTimeText, lectureMaxNumber, lectureIconImage, lectureUnwatchedImage, lectureOverlookedImage, infoLectures, thisLectureInfo, preLectureInfo, postLessonInfo, teacherTitle, linkName', 'safe', 'on'=>'search'),
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
			'lectureModule0' => array(self::BELONGS_TO, 'Modules', 'lectureModule'),
			'studentsaccesses' => array(self::HAS_MANY, 'Studentsaccess', 'lecture_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lectureID' => 'Lecture',
			'lectureImageMain' => 'Lecture Image Main',
			'lectureModule' => 'Lecture Module',
			'lectureNumber' => 'Lecture Number',
			'lectureNameText' => 'Lecture Name Text',
			'lectureTypeText' => 'Lecture Type Text',
			'lectureTypeImage' => 'Lecture Type Image',
			'lectureTimeText' => 'Lecture Time Text',
			'lectureMaxNumber' => 'Lecture Max Number',
			'lectureIconImage' => 'Lecture Icon Image',
			'lectureUnwatchedImage' => 'Lecture Unwatched Image',
			'lectureOverlookedImage' => 'Lecture Overlooked Image',
			'infoLectures' => 'Info Lectures',
			'thisLectureInfo' => 'This Lecture Info',
			'preLectureInfo' => 'Pre Lecture Info',
			'postLessonInfo' => 'Post Lesson Info',
			'teacherTitle' => 'Teacher Title',
			'linkName' => 'Link Name',
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

		$criteria->compare('lectureID',$this->lectureID);
		$criteria->compare('lectureImageMain',$this->lectureImageMain,true);
		$criteria->compare('lectureModule',$this->lectureModule);
		$criteria->compare('lectureNumber',$this->lectureNumber);
		$criteria->compare('lectureNameText',$this->lectureNameText,true);
		$criteria->compare('lectureTypeText',$this->lectureTypeText,true);
		$criteria->compare('lectureTypeImage',$this->lectureTypeImage,true);
		$criteria->compare('lectureTimeText',$this->lectureTimeText,true);
		$criteria->compare('lectureMaxNumber',$this->lectureMaxNumber);
		$criteria->compare('lectureIconImage',$this->lectureIconImage,true);
		$criteria->compare('lectureUnwatchedImage',$this->lectureUnwatchedImage,true);
		$criteria->compare('lectureOverlookedImage',$this->lectureOverlookedImage,true);
		$criteria->compare('infoLectures',$this->infoLectures,true);
		$criteria->compare('thisLectureInfo',$this->thisLectureInfo,true);
		$criteria->compare('preLectureInfo',$this->preLectureInfo,true);
		$criteria->compare('postLessonInfo',$this->postLessonInfo,true);
		$criteria->compare('teacherTitle',$this->teacherTitle,true);
		$criteria->compare('linkName',$this->linkName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lecture the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	function getThisMedal()  {
		return $this->thisLessonInfo[5]; // Медалька
	}
	// Попередній урок
	function getPre()  {
		if ( isset( $this->preLessonInfo))
		{
			return 'True';  // Існування елемента
		}
	}
	function getPreNumber()  {
		return $this->preLessonInfo[0];  // Номер
	}
	function getPreName()  {
		return $this->preLessonInfo[1]; // Назва
	}
	function getPreType()  {
		return $this->preLessonInfo[2]; // Тип
	}
	function getPreDur()  {
		return $this->preLessonInfo[3]; //	Тривалість
	}
	function getPreRait()  {
		return $this->preLessonInfo[4]; //	Рейтинг
	}
	function getPreMedal()  {
		return $this->preLessonInfo[5]; // Медалька
	}
	// Наступний урок
	function getPost()  {
		if ( isset( $this->postLessonInfo))
		{
			return 'True';  // Існування елемента
		}
	}
	function getPostNumber()  {
		return $this->postLessonInfo[0];  // Номер
	}
	function getPostName()  {
		return $this->postLessonInfo[1]; // Назва
	}
	function getPostType()  {
		return $this->postLessonInfo[2]; // Тип
	}
	function getPostDur()  {
		return $this->postLessonInfo[3]; //	Тривалість
	}
	function getPostRait()  {
		return $this->postLessonInfo[4]; //	Рейтинг
	}
	function getPostMedal()  {
		return $this->postLessonInfo[5]; // Медалька
	}
}
