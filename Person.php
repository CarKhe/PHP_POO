<?php

class Person{  
    private $name;
    private $lastname;
    private $age;

    function __construct($name, $lastname, $age){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    function __get($propety){
        if(property_exists($this,$propety)){
            return $this->$propety;
        }
    }

    function __set($propety, $value){
        if(property_exists($this,$propety)){
            $this->$propety = $value;
        }
    }

    function is_adult(){
        return $this->age >= 21;
    }

    function full_name(){
        return $this->name." ".$this->lastname;
    }


}


$person = new Person("Carlos","Rodriguez",4);

if ($person->is_adult()){
    echo $person->full_name();
    echo(" YES");
} else{
    echo $person->full_name();
    echo(" NO");
}

echo $person->name





?>