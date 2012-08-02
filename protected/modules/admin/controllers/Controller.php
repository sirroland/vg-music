<?php

    class Controller extends CController
    {
        public function __construct($id,$module=null)
        {
            parent::__construct($id,$module);
            if(isset($_POST['language'])) {
                $lang = $_POST['language'];
                $this->redirect($_POST[$lang]);
            }
            if(isset($_GET['language'])) {
                Yii::app()->language = $_GET['language'];
            }
            else Yii::app()->language = Yii::app()->sourceLanguage;
        }

        public function createMultilanguageReturnUrl($lang = 'en')
        {
            // pass lang to createUrl for making lang-links
            if (count($_GET)>0){
                $arr = $_GET;
                $arr['language'] = $lang;
            }
            else
                $arr = array('language'=>$lang);

            return $this->createUrl('', $arr);
        }
    }

?>