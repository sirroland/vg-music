<?php

    class AdminController extends Controller
    {
        public $layout="/layouts/admin";

        public function __construct($id,$module=null)
        {
            //$this->layout="/layouts/admin";
            parent::__construct($id,$module);
        }
    }

?>