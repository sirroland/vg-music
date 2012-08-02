<?php

class UrlManager extends CUrlManager
{
    public function createUrl($route, $params=array(), $ampersand='&')
    {
        if (!isset($params['language'])) {
            /*
                   // use to set lang from cookie/session
                   if (Yii::app()->user->hasState('language'))
                       Yii::app()->language = Yii::app()->user->getState('language');
                   else if(isset(Yii::app()->request->cookies['language']))
                       Yii::app()->language = Yii::app()->request->cookies['language']->value;
                   */
            // if lang hasn't passed to createUrl add APP lang from config to links (only if it is not default)
            if (Yii::app()->language !== Yii::app()->sourceLanguage)
                $params['language'] = Yii::app()->language;
            // don't add lang to links if lang == default lang (even if it has passed)
        } elseif ($params['language'] === Yii::app()->sourceLanguage) {
            unset($params['language']);
        }
        // so lang is added to links only if it != default lang
        return parent::createUrl($route, $params, $ampersand);
    }
}

?>