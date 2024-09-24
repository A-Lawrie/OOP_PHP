<?php
    class person{
        var $name;

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