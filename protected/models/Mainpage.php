<?php

/**
 * This is the model class for table "mainpage".
 *
 * The followings are the available columns in table 'mainpage':
 * @property integer $mainpage_id
 * @property string $title
 * @property integer $carousel_id
 * @property string $slider_header
 * @property string $slider_text
 * @property string $slider_texture_url
 * @property string $slider_line_url
 * @property string $slider_button_text
 * @property string $header1
 * @property string $subLineImage
 * @property string $subheader1
 * @property string $array_blocks
 * @property string $header2
 * @property string $subheader2
 * @property string $array_steps
 * @property string $step_size
 * @property string $linkName
 * @property string $hexagon
 * @property string $form_header_1
 * @property string $form_header_2
 * @property string $reg_text
 * @property string $button_start
 * @property string $social_text
 * @property string $image_network
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
		$this->slider_text=$this->findByPk($id)->slider_text;
		$this->header1=$this->findByPk($id)->header1;
		$this->header2=$this->findByPk($id)->header2;
		$this->linkName=$this->findByPk($id)->linkName;
		$this->slider_button_text=$this->findByPk($id)->slider_button_text;
		$this->slider_texture_url=Yii::app()->request->baseUrl.$this->findByPk($id)->slider_texture_url;
		$this->slider_header=$this->findByPk($id)->slider_header;
		$this->step_size=$this->findByPk($id)->step_size;
		$this->subheader1=$this->findByPk($id)->subheader1;
		$this->subheader2=$this->findByPk($id)->subheader2;
		$this->subLineImage=Yii::app()->request->baseUrl.$this->findByPk($id)->subLineImage;
		$this->hexagon=Yii::app()->request->baseUrl.$this->findByPk($id)->hexagon;
		$this->slider_line_url=Yii::app()->request->baseUrl.$this->findByPk($id)->slider_line_url;
		$this->slider_button_text=$this->findByPk($id)->slider_button_text;
		$this->form_header_1 = $this->findByPk($id)->form_header_1;
		$this->form_header_2 = $this->findByPk($id)->form_header_2;
		$this->reg_text = $this->findByPk($id)->reg_text
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
			array('mainpage_id, title, carousel_id, slider_header, slider_text, slider_texture_url, slider_line_url, slider_button_text, header1, subLineImage, subheader1, array_blocks, header2, subheader2, array_steps, step_size, linkName, hexagon, form_header_1, form_header_2, reg_text, button_start, social_text, image_network', 'required'),
			array('mainpage_id, carousel_id', 'numerical', 'integerOnly'=>true),
			array('title, subheader1, subheader2', 'length', 'max'=>100),
			array('slider_header, header1, header2, form_header_1, form_header_2, reg_text, button_start, social_text', 'length', 'max'=>50),
			array('slider_text, slider_texture_url, slider_line_url, subLineImage, hexagon, image_network', 'length', 'max'=>255),
			array('slider_button_text, linkName', 'length', 'max'=>20),
			array('array_blocks, array_steps, step_size', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mainpage_id, title, carousel_id, slider_header, slider_text, slider_texture_url, slider_line_url, slider_button_text, header1, subLineImage, subheader1, array_blocks, header2, subheader2, array_steps, step_size, linkName, hexagon, form_header_1, form_header_2, reg_text, button_start, social_text, image_network', 'safe', 'on'=>'search'),
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
			'mainpage_id' => 'Mainpage',
			'title' => 'Title',
			'carousel_id' => 'Carousel',
			'slider_header' => 'Slider Header',
			'slider_text' => 'Slider Text',
			'slider_texture_url' => 'Slider Texture Url',
			'slider_line_url' => 'Slider Line Url',
			'slider_button_text' => 'Slider Button Text',
			'header1' => 'Header1',
			'subLineImage' => 'Sub Line Image',
			'subheader1' => 'Subheader1',
			'array_blocks' => 'Array Blocks',
			'header2' => 'Header2',
			'subheader2' => 'Subheader2',
			'array_steps' => 'Array Steps',
			'step_size' => 'Step Size',
			'linkName' => 'Link Name',
			'hexagon' => 'Hexagon',
			'form_header_1' => 'Form Header 1',
			'form_header_2' => 'Form Header 2',
			'reg_text' => 'Reg Text',
			'button_start' => 'Button Start',
			'social_text' => 'Social Text',
			'image_network' => 'Image Network',
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

		$criteria->compare('mainpage_id',$this->mainpage_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('carousel_id',$this->carousel_id);
		$criteria->compare('slider_header',$this->slider_header,true);
		$criteria->compare('slider_text',$this->slider_text,true);
		$criteria->compare('slider_texture_url',$this->slider_texture_url,true);
		$criteria->compare('slider_line_url',$this->slider_line_url,true);
		$criteria->compare('slider_button_text',$this->slider_button_text,true);
		$criteria->compare('header1',$this->header1,true);
		$criteria->compare('subLineImage',$this->subLineImage,true);
		$criteria->compare('subheader1',$this->subheader1,true);
		$criteria->compare('array_blocks',$this->array_blocks,true);
		$criteria->compare('header2',$this->header2,true);
		$criteria->compare('subheader2',$this->subheader2,true);
		$criteria->compare('array_steps',$this->array_steps,true);
		$criteria->compare('step_size',$this->step_size,true);
		$criteria->compare('linkName',$this->linkName,true);
		$criteria->compare('hexagon',$this->hexagon,true);
		$criteria->compare('form_header_1',$this->form_header_1,true);
		$criteria->compare('form_header_2',$this->form_header_2,true);
		$criteria->compare('reg_text',$this->reg_text,true);
		$criteria->compare('button_start',$this->button_start,true);
		$criteria->compare('social_text',$this->social_text,true);
		$criteria->compare('image_network',$this->image_network,true);

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
