<?php

/**
 * This is the model class for table "photos".
 *
 * The followings are the available columns in table 'photos':
 * @property integer $id
 * @property string $file
 * @property string $create
 * @property string $visible
 * @property string $title
 * @property string $description
 * @property string $md5hash
 *
 * The followings are the available model relations:
 * @property PhotosLocalization[] $photosLocalizations
 */
class Photos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Photos the static model class
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
		return 'photos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file, title', 'length', 'max'=>255),
			array('visible', 'length', 'max'=>5),
			array('md5hash', 'length', 'max'=>32),
			array('create, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, file, create, visible, title, description, md5hash', 'safe', 'on'=>'search'),
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
			'photosLocalizations' => array(self::HAS_MANY, 'PhotosLocalization', 'photos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'File',
			'create' => 'Create',
			'visible' => 'Visible',
			'title' => 'Title',
			'description' => 'Description',
			'md5hash' => 'Md5hash',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */

    public function ReturnPhotos()
    {
        $cb = Yii::app()->db->getCommandBuilder();
        $c = new CDbCriteria();//your criteria
        $result = $cb->createFindCommand('photos',$c)->queryAll();
        return $result;
    }

	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('create',$this->create,true);
		$criteria->compare('visible',$this->visible,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('md5hash',$this->md5hash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}