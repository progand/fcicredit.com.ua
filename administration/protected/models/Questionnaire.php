<?php

/**
 * This is the model class for table "ws_form".
 *
 * The followings are the available columns in table 'ws_form':
 * @property integer $id
 * @property string $last_edit
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property string $product_type
 * @property string $requested_ammount
 * @property string $currency_code
 * @property string $term_string
 * @property string $contact_phone
 * @property string $email
 * @property string $contact_time_string
 * @property string $visitor_ip
 * @property string $source_url
 * @property string $agent_code
 * @property string $web_request_id
 * @property string $city
 */
class Questionnaire extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Questionnaire the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ws_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, , product_type, requested_ammount, currency_code, term_string, contact_phone, email, contact_time_string, visitor_ip, source_url, agent_code', 'required'),
			array('first_name, last_name, middle_name, product_type, requested_ammount, term_string, contact_phone, email, contact_time_string, visitor_ip, agent_code', 'length', 'max'=>255),
			array('currency_code', 'length', 'max'=>50),
			array('source_url', 'length', 'max'=>500),
                        array('first_name', 'match', 'pattern'=>"/^([а-яА-ЯіІєЄїЇ\\ \\-'`])+$/u", 'message'=>'Ім’я містить недопустимі символи.'),
                        array('last_name', 'match', 'pattern'=>"/^([а-яА-ЯіІєЄїЇ\\ \\-'`])+$/u", 'message'=>'Прізвище містить недопустимі символи.'),
                        array('middle_name', 'match', 'pattern'=>"/^([а-яА-ЯіІєЄїЇ\\ \\-'`])+$/u", 'message'=>'По-батькові містить недопустимі символи.'),
                        array('product_type', 'match', 'pattern'=>"/^([а-яА-ЯіІєЄїЇ\\ \\-'`])+$/u", 'message'=>'Продукт містить недопустимі символи.'),
                        array('requested_ammount', 'match', 'pattern'=>"/^\\d*$/", 'message'=>'Сума містить недопустимі символи.'),
                        array('currency_code', 'match', 'pattern'=>"/(^UAH$)|(^USD$)|(^EUR$)|(^CHF$)|(^RUB$)/", 'message'=>'Валюта містить недопустимі символи.'),
                        array('term_string', 'match', 'pattern'=>"/^([\\dа-яА-ЯіІєЄїЇ\\ \\-])*$/u", 'message'=>'Строк містить недопустимі символи.'),
                        array('contact_phone', 'match', 'pattern'=>"/^([\\d\\(\\)\\-\\ \\+])+$/", 'message'=>'Контактний телефон містить недопустимі символи.'),
                        array('email', 'email', 'message'=>'E-mail містить недопустимі символи.'),
			array('contact_time_string', 'match', 'pattern'=>'/^([\\dа-яА-ЯіІєЄїЇ\\ \\-])*$/u', 'message'=>'Зручний час контакту містить недопустимі символи.'),
			array('visitor_ip', 'match', 'pattern'=>'/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/', 'message'=>'Ip вдвідувача містить недопустимі символи.'),
			array('source_url', 'match', 'pattern'=>'/^.*$/', 'message'=>'URL джерела містить недопустимі символи.'),
			array('agent_code', 'match', 'pattern'=>'/^[\\d\\-]*$/', 'message'=>'Код агента містить недопустимі символи.'),
			array('city', 'match', 'pattern'=>"/^([а-яА-ЯіІєЄїЇ,\\ \\-'`])+$/u", 'message'=>'Місто містить недопустимі символи.'),
                        
                        // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, last_edit, first_name, last_name, middle_name, product_type, requested_ammount, currency_code, term_string, contact_phone, email, contact_time_string, visitor_ip, source_url, agent_code', 'safe', 'on'=>'search'),
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
			'last_edit' => 'Last Edit',
			'first_name' => 'Ім’я',
			'last_name' => 'Прізвище',
			'middle_name' => 'По-батькові',
			'product_type' => 'Продукт',
			'requested_ammount' => 'Бажана сума кредиту',
			'currency_code' => 'Валюта',
			'term_string' => 'Строк',
			'contact_phone' => 'Контактний телефон',
			'email' => 'E-mail',
			'contact_time_string' => 'Зручний час контакту',
			'visitor_ip' => 'Ip відвідувача',
			'source_url' => 'Url джерела',
			'agent_code' => 'Код агента',
                        'web_request_id' => 'Номер заявки',
                        'city' => 'Місто',
		);
	}

	/**eb_request_id
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('last_edit',$this->last_edit,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('product_type',$this->product_type,true);
		$criteria->compare('requested_ammount',$this->requested_ammount,true);
		$criteria->compare('currency_code',$this->currency_code,true);
		$criteria->compare('term_string',$this->term_string,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact_time_string',$this->contact_time_string,true);
		$criteria->compare('visitor_ip',$this->visitor_ip,true);
		$criteria->compare('source_url',$this->source_url,true);
		$criteria->compare('agent_code',$this->agent_code,true);
                $criteria->compare('web_request_id',$this->web_request_id,true);
                $criteria->compare('city',$this->city,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}