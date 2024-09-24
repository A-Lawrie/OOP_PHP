<?php
    class person{
        //These are the different access modifiers
        var $name;
        public $height;
        protected $social_insurance;
        private $pinn_number;

        //Creating a constructor
        function __construct($person_name){
            $this->name = $person_name;
        }

        function set_name($new_name){
            $this->name = $new_name;
        }
        function get_name(){
            return $this->name;
        }
    }
?>