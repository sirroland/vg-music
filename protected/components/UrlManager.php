<?php

    class UrlManager extends CUrlManager
    {
        public function createUrl($route,$params=array(),$ampersand='&')
        {// втули сюда языки, что ты сделал.
            if (!isset($params['language'])) {
				/*
                if (Yii::app()->user->hasState('language'))
                    Yii::app()->language = Yii::app()->user->getState('language');
                else if(isset(Yii::app()->request->cookies['language']))
                    Yii::app()->language = Yii::app()->request->cookies['language']->value;
				*/
				if (Yii::app()->language !== Yii::app()->sourceLanguage) 
					$params['language']=Yii::app()->language;			
            } /*else {
				if ($params['language'] == Yii::app()->sourceLanguage);
					$params['language']='';
			}*/
            return parent::createUrl($route, $params, $ampersand);
        }
    }

?>