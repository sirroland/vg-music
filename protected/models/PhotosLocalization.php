<?php

/**
 * This is the model class for table "photos_localization".
 *
 * The followings are the available columns in table 'photos_localization':
 * @property integer $id
 * @property integer $photos_id
 * @property string $title
 * @property string $description
 * @property string $culture
 *
 * The followings are the available model relations:
 * @property Photos $photos
 */
class PhotosLocalization extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhotosLocalization the static model class
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
		return 'photos_localization';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('photos_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('culture', 'length', 'max'=>4),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, photos_id, title, description, culture', 'safe', 'on'=>'search'),
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
			'photos' => array(self::BELONGS_TO, 'Photos', 'photos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'photos_id' => 'Photos',
			'title' => 'Title',
			'description' => 'Description',
			'culture' => 'Culture',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('photos_id',$this->photos_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('culture',$this->culture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}