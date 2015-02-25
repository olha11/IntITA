<?php

/**
 * This is the model class for table "aboutus".
 *
 * The followings are the available columns in table 'aboutus':
 * @property integer $block_id
 * @property string $line2Image
 * @property string $iconImage
 * @property string $titleText
 * @property string $textAbout
 * @property string $linkAddress
 * @property string $imagesPath
 *
 * The followings are the available model relations:
 * @property Mainpage[] $mainpages
 * @property Mainpage[] $mainpages1
 * @property Mainpage[] $mainpages2
 */
class AboutUs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aboutus';
	}

	public function setValuesById($id)
	{
		$this->line2Image=Yii::app()->request->baseUrl.$this->findByPk($id)->line2Image;
		$this->iconImage=Yii::app()->request->baseUrl.$this->findByPk($id)->iconImage;
		$this->titleText=$this->findByPk($id)->titleText;
		$this->textAbout=$this->findByPk($id)->textAbout;
		$this->linkAddress=$this->findByPk($id)->linkAddress;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('line2Image, iconImage, titleText, textAbout, linkAddress, imagesPath', 'required'),
			array('line2Image, iconImage, textAbout, linkAddress, imagesPath', 'length', 'max'=>255),
			array('titleText', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('block_id, line2Image, iconImage, titleText, textAbout, linkAddress, imagesPath', 'safe', 'on'=>'search'),
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
			'mainpages' => array(self::HAS_MANY, 'Mainpage', 'block1'),
			'mainpages1' => array(self::HAS_MANY, 'Mainpage', 'block2'),
			'mainpages2' => array(self::HAS_MANY, 'Mainpage', 'block3'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'block_id' => 'Block',
			'line2Image' => 'Line2 Image',
			'iconImage' => 'Icon Image',
			'titleText' => 'Title Text',
			'textAbout' => 'Text About',
			'linkAddress' => 'Link Address',
			'imagesPath' => 'Images Path',
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

		$criteria->compare('block_id',$this->block_id);
		$criteria->compare('line2Image',$this->line2Image,true);
		$criteria->compare('iconImage',$this->iconImage,true);
		$criteria->compare('titleText',$this->titleText,true);
		$criteria->compare('textAbout',$this->textAbout,true);
		$criteria->compare('linkAddress',$this->linkAddress,true);
		$criteria->compare('imagesPath',$this->imagesPath,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aboutus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
