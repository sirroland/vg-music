<?php

    class User extends CActiveRecord
    {

        const ROLE_ADMIN = 'administrator';
        const ROLE_MODER = 'moderator';
        const ROLE_USER = 'user';
        const ROLE_BANNED = 'banned';

        public static function model($className=__CLASS__)
        {
            return parent::model($className);
        }

        public function tableName()
        {
            return 'user';
        }
    }

?>