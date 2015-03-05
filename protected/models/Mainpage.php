<?php

/**
 * This is the model class for table "mainpage".
 *
 * The followings are the available columns in table 'mainpage':
 * @property integer $mainpageID
 * @property string $title
 * @property integer $carousel_id
 * @property string $sliderHeader
 * @property string $sliderText
 * @property string $sliderTextureURL
 * @property string $sliderLineURL
 * @property string $sliderButtonText
 * @property string $header1
 * @property string $subLineImage
 * @property string $subheader1
 * @property string $array_blocks
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

	function Mainpage($id){
		//setValueById($id);
	}

	public function setValueById($id)
	{
		$this->title=$this->findByPk($id)->title;
		$this->sliderText=$this->findByPk($id)->sliderText;
		$this->header1=$this->findByPk($id)->header1;
		$this->header2=$this->findByPk($id)->header2;
		$this->linkName=$this->findByPk($id)->linkName;
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
			array('mainpageID, title, carousel_id, sliderHeader, sliderText, sliderTextureURL, sliderLineURL, sliderButtonText, header1, subLineImage, subheader1, arrayBlocks, header2, subheader2, arraySteps, stepSize, linkName, hexagon, formHeader1, formHeader2, regText, buttonStart, socialText, imageNetwork, formFon', 'required'),
			array('mainpageID, carousel_id', 'numerical', 'integerOnly'=>true),
			array('title, subheader1, subheader2', 'length', 'max'=>100),
			array('sliderHeader, header1, header2, formHeader1, formHeader2, regText, buttonStart, socialText', 'length', 'max'=>50),
			array('sliderText, sliderTextureURL, sliderLineURL, subLineImage, hexagon, imageNetwork, formFon', 'length', 'max'=>255),
			array('sliderButtonText, linkName', 'length', 'max'=>20),
			array('arrayBlocks, arraySteps, stepSize', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mainpageID, title, carousel_id, sliderHeader, sliderText, sliderTextureURL, sliderlineURL, sliderButtonText, header1, subLineImage, subheader1, arrayBlocks, header2, subheader2, arraySteps, stepSize, linkName, hexagon, formHeader1, formHeader2, regText, buttonStart, socialText, imageNetwork, formFon', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'carousel_id' => 'Carousel',
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
			'formHeader1' => 'Form Header 1',
			'formHeader2' => 'Form Header 2',
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

		$criteria->compare('mainpageID',$this->mainpage_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('carousel_id',$this->carousel_id);
		$criteria->compare('sliderHeader',$this->slider_header,true);
		$criteria->compare('sliderText',$this->slider_text,true);
		$criteria->compare('sliderTextureURL',$this->slider_texture_url,true);
		$criteria->compare('sliderLineURL',$this->slider_line_url,true);
		$criteria->compare('sliderButtonText',$this->slider_button_text,true);
		$criteria->compare('header1',$this->header1,true);
		$criteria->compare('subLineImage',$this->subLineImage,true);
		$criteria->compare('subheader1',$this->subheader1,true);
		$criteria->compare('arrayBlocks',$this->array_blocks,true);
		$criteria->compare('header2',$this->header2,true);
		$criteria->compare('subheader2',$this->subheader2,true);
		$criteria->compare('arraySteps',$this->array_steps,true);
		$criteria->compare('stepSize',$this->step_size,true);
		$criteria->compare('linkName',$this->linkName,true);
		$criteria->compare('hexagon',$this->hexagon,true);
		$criteria->compare('formHeader1',$this->form_header_1,true);
		$criteria->compare('formHeader2',$this->form_header_2,true);
		$criteria->compare('regText',$this->reg_text,true);
		$criteria->compare('buttonStart',$this->button_start,true);
		$criteria->compare('socialText',$this->social_text,true);
		$criteria->compare('imageNetwork',$this->image_network,true);
		$criteria->compare('formFon',$this->form_fon,true);

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
