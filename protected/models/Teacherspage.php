<?php

/**
 * This is the model class for table "teacherspage".
 *
 * The followings are the available columns in table 'teacherspage':
 * @property integer $id
 * @property string $lang
 * @property string $header
 * @property string $courses
 * @property string $link1
 * @property string $link2
 * @property string $BCmain
 * @property string $BCteachers
 * @property string $title
 * @property string $profile
 */
class Teacherspage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teacherspage';
	}

	function Teacherspage($id){
		$this->id = $id;
	}


	public function setValuesById(){
		$this->link1 = $this->findByPk($this->id)->link1;
		$this->link2 = $this->findByPk($this->id)->link2;
		$this->header = $this->findByPk($this->id)->header;
		$this->courses = $this->findByPk($this->id)->courses;
		$this->BCmain = $this->findByPk($this->id)->BCmain;
		$this->BCteachers = $this->findByPk($this->id)->BCteachers;
		$this->title = $this->findByPk($this->id)->title;
		$this->profile = $this->findByPk($this->id)->profile;
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
			array('lang, header, courses, link1, link2, BCmain, BCteachers, title, profile', 'required'),
			array('lang', 'length', 'max'=>6),
			array('header, courses, title, profile', 'length', 'max'=>50),
			array('link1, link2', 'length', 'max'=>100),
			array('BCmain, BCteachers', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lang, header, courses, link1, link2, BCmain, BCteachers, title, profile', 'safe', 'on'=>'search'),
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
			'lang' => 'Lang',
			'header' => 'Header',
			'courses' => 'Courses',
			'link1' => 'Link1',
			'link2' => 'Link2',
			'BCmain' => 'Bcmain',
			'BCteachers' => 'Bcteachers',
			'title' => 'Title',
			'profile' => 'Profile',
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
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('courses',$this->courses,true);
		$criteria->compare('link1',$this->link1,true);
		$criteria->compare('link2',$this->link2,true);
		$criteria->compare('BCmain',$this->BCmain,true);
		$criteria->compare('BCteachers',$this->BCteachers,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('profile',$this->profile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teacherspage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
