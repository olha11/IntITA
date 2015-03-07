<?php

/**
 * This is the model class for table "mainpage".
 *
 * The followings are the available columns in table 'mainpage':
 * @property integer $mainpageID
 * @property string $language
 * @property string $title
 * @property string $sliderHeader
 * @property string $sliderText
 * @property string $sliderTextureURL
 * @property string $sliderLineURL
 * @property string $sliderButtonText
 * @property string $header1
 * @property string $subLineImage
 * @property string $subheader1
 * @property string $arrayBlocks
 * @property string $header2
 * @property string $subheader2
 * @property string $arraySteps
 * @property string $stepSize
 * @property string $linkName
 * @property string $hexagon
 * @property string $formHeader1
 * @property string $formHeader2
 * @property string $regText
 * @property string $buttonStart
 * @property string $socialText
 * @property string $imageNetwork
 * @property string $formFon
 */
class Mainpage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mainpage';
	}

    public function setValueById($id)
    {
        $this->title=$this->findByPk($id)->title;
        $this->sliderText=$this->findByPk($id)->sliderText;
        $this->header1=$this->findByPk($id)->header1;
        $this->header2=$this->findByPk($id)->header2;
        $this->linkName=$this->findByPk($id)->linkName;
        $this->sliderButtonText=$this->findByPk($id)->sliderButtonText;
        $this->sliderTextureURL=Yii::app()->request->baseUrl.$this->findByPk($id)->sliderTextureURL;
        $this->sliderHeader=$this->findByPk($id)->sliderHeader;
        $this->stepSize=$this->findByPk($id)->stepSize;
        $this->subheader1=$this->findByPk($id)->subheader1;
        $this->subheader2=$this->findByPk($id)->subheader2;
        $this->subLineImage=Yii::app()->request->baseUrl.$this->findByPk($id)->subLineImage;
        $this->hexagon=Yii::app()->request->baseUrl.$this->findByPk($id)->hexagon;
        $this->sliderLineURL=Yii::app()->request->baseUrl.$this->findByPk($id)->sliderLineURL;
        $this->sliderButtonText=$this->findByPk($id)->sliderButtonText;
        $this->formHeader1 = $this->findByPk($id)->formHeader1;
        $this->formHeader2 = $this->findByPk($id)->formHeader2;
        $this->regText = $this->findByPk($id)->regText;
        $this->buttonStart = $this->findByPk($id)->buttonStart;
        $this->socialText = $this->findByPk($id)->socialText;
        $this->imageNetwork = Yii::app()->request->baseUrl.$this->findByPk($id)->imageNetwork;
        $this->formFon = Yii::app()->request->baseUrl.$this->findByPk($id)->formFon;
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
			array('mainpageID, language, title, sliderHeader, sliderText, sliderTextureURL, sliderLineURL, sliderButtonText, header1, subLineImage, subheader1, arrayBlocks, header2, subheader2, arraySteps, stepSize, linkName, hexagon, formHeader1, formHeader2, regText, buttonStart, socialText, imageNetwork, formFon', 'required'),
			array('mainpageID', 'numerical', 'integerOnly'=>true),
			array('language', 'length', 'max'=>2),
			array('title, subheader1, subheader2', 'length', 'max'=>100),
			array('sliderHeader, header1, header2, formHeader1, formHeader2, regText, buttonStart, socialText', 'length', 'max'=>50),
			array('sliderText, sliderTextureURL, sliderLineURL, subLineImage, hexagon, imageNetwork, formFon', 'length', 'max'=>255),
			array('sliderButtonText, linkName', 'length', 'max'=>20),
			array('arrayBlocks, arraySteps, stepSize', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mainpageID, language, title, sliderHeader, sliderText, sliderTextureURL, sliderLineURL, sliderButtonText, header1, subLineImage, subheader1, arrayBlocks, header2, subheader2, arraySteps, stepSize, linkName, hexagon, formHeader1, formHeader2, regText, buttonStart, socialText, imageNetwork, formFon', 'safe', 'on'=>'search'),
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
			'mainpageID' => 'Mainpage',
			'language' => 'Language',
			'title' => 'Title',
			'sliderHeader' => 'Slider Header',
			'sliderText' => 'Slider Text',
			'sliderTextureURL' => 'Slider Texture Url',
			'sliderLineURL' => 'Slider Line Url',
			'sliderButtonText' => 'Slider Button Text',
			'header1' => 'Header1',
			'subLineImage' => 'Sub Line Image',
			'subheader1' => 'Subheader1',
			'arrayBlocks' => 'Array Blocks',
			'header2' => 'Header2',
			'subheader2' => 'Subheader2',
			'arraySteps' => 'Array Steps',
			'stepSize' => 'Step Size',
			'linkName' => 'Link Name',
			'hexagon' => 'Hexagon',
			'formHeader1' => 'Form Header1',
			'formHeader2' => 'Form Header2',
			'regText' => 'Reg Text',
			'buttonStart' => 'Button Start',
			'socialText' => 'Social Text',
			'imageNetwork' => 'Image Network',
			'formFon' => 'Form Fon',
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

		$criteria->compare('mainpageID',$this->mainpageID);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('sliderHeader',$this->sliderHeader,true);
		$criteria->compare('sliderText',$this->sliderText,true);
		$criteria->compare('sliderTextureURL',$this->sliderTextureURL,true);
		$criteria->compare('sliderLineURL',$this->sliderLineURL,true);
		$criteria->compare('sliderButtonText',$this->sliderButtonText,true);
		$criteria->compare('header1',$this->header1,true);
		$criteria->compare('subLineImage',$this->subLineImage,true);
		$criteria->compare('subheader1',$this->subheader1,true);
		$criteria->compare('arrayBlocks',$this->arrayBlocks,true);
		$criteria->compare('header2',$this->header2,true);
		$criteria->compare('subheader2',$this->subheader2,true);
		$criteria->compare('arraySteps',$this->arraySteps,true);
		$criteria->compare('stepSize',$this->stepSize,true);
		$criteria->compare('linkName',$this->linkName,true);
		$criteria->compare('hexagon',$this->hexagon,true);
		$criteria->compare('formHeader1',$this->formHeader1,true);
		$criteria->compare('formHeader2',$this->formHeader2,true);
		$criteria->compare('regText',$this->regText,true);
		$criteria->compare('buttonStart',$this->buttonStart,true);
		$criteria->compare('socialText',$this->socialText,true);
		$criteria->compare('imageNetwork',$this->imageNetwork,true);
		$criteria->compare('formFon',$this->formFon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mainpage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
