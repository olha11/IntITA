<?php

/**
 * This is the model class for table "studentprofile".
 *
 * The followings are the available columns in table 'studentprofile':
 * @property integer $id
 * @property string $firstName
 * @property string $middleName
 * @property string $secondName
 * @property string $nickname
 * @property string $birthday
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $address
 * @property string $education
 * @property string $educform
 * @property string $interests
 * @property string $aboutUs
 * @property string $aboutMy
 * @property string $role
 */
class StudentReg extends CActiveRecord
{
    public $password_repeat;
    public $send_letter;
    public $upload;
    public $letterTheme;

    public function getDbConnection()
    {
        return Yii::app()->db;
    }
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'studentprofile';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('firstName, email, password, password_repeat', 'required', 'message'=>'Будь ласка введіть {attribute}.'),
            array('email', 'email', 'message'=>'Email не являється правильною {attribute} адресою'),
            array('birthday', 'date','format' => 'dd/MM/yyyy','message'=>'Введіть дату народження в форматі дд.мм.рррр'),
            array('password', 'compare', 'compareAttribute'=>'password_repeat', 'message'=>'Паролі не співпадають'),
            array('firstName, secondName, nickname, email, password, education', 'length', 'max'=>255),
            array('birthday', 'length', 'max'=>11),
            array('phone', 'length', 'max'=>15),
            array('educform', 'length', 'max'=>60),
            array('address, interests, aboutUs,send_letter, role, educform, aboutMy, avatar','safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, firstName, secondName, nickname, birthday, email, password, phone, address, education, educform, interests, aboutUs, password_repeat, middleName,aboutMy, avatar, upload, role', 'safe', 'on'=>'search'),
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
            'firstName' => 'Ім\'я',
            'middleName'=> 'По-батькові',
            'secondName' => 'Прізвище',
            'nickname' => 'Нік',
            'birthday' => 'Дата народження',
            'email' => 'Email',
            'password' => 'Пароль',
            'password_repeat' => 'Повтор пароля',
            'phone' => 'Телефон',
            'address' => 'Адреса',
            'education' => 'Освіта',
            'educform' => 'Форма навчання',
            'interests' => 'Захоплення',
            'aboutUs' => 'Звідки про нас?',
            'send_letter'=> 'Повідомлення',
            'letterTheme'=> 'Тема',
            'aboutMy'=> 'Про себе',
            'avatar'=> 'Аватар',
            'upload'=> 'Up',
            'role'=> 'Роль',
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
        $criteria->compare('firstName',$this->firstName,true);
        $criteria->compare('middleName',$this->middleName,true);
        $criteria->compare('secondName',$this->secondName,true);
        $criteria->compare('nickname',$this->nickname,true);
        $criteria->compare('birthday',$this->birthday,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('phone',$this->phone,true);
        $criteria->compare('address',$this->address,true);
        $criteria->compare('education',$this->education,true);
        $criteria->compare('educform',$this->educform,true);
        $criteria->compare('interests',$this->interests,true);
        $criteria->compare('aboutUs',$this->aboutUs,true);
        $criteria->compare('aboutMy',$this->aboutMy,true);
        $criteria->compare('send_letter',$this->send_letter,true);
        $criteria->compare('avatar',$this->avatar,true);
        $criteria->compare('upload',$this->upload,true);
        $criteria->compare('role',$this->role,true);


        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }


    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return StudentReg the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function getYearsTermination ($num)
    {
        //Оставляем две последние цифры от $num
        $number = substr($num, -2);

        //Если 2 последние цифры входят в диапазон от 11 до 14
        //Тогда подставляем окончание "ЕВ"
        if($number > 10 and $number < 15)
        {
            $term = " років";
        }
        else
        {

            $number = substr($number, -1);

            if($number == 0) {$term = " років";}
            if($number == 1 ) {$term = " рік";}
            if($number > 1 ) {$term = " роки";}
            if($number > 4 ) {$term = " років";}
        }

        echo  $term;
    }
}
