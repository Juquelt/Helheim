<?php

class Users {
    private $errors = [],
    $id,
    $name,
    $email,
    $password;

    const NAME_INVALID = 1;
    const EMAIL_INVALID = 2;
    const PASSWORD_INVALID = 3;

    //CONSTRUCT
    public function __construct($data = []){
        $this->hydrater($data);
    }

    public function hydrater($data){
        foreach ($data as $attribut => $value){
            $setterMethod = 'set'.ucfirst($attribut);

            $this->$setterMethod($value);
        }
    }

    //FUNCTION

    public function isUserValid(){
        // if  (!empty($_POST)){
        //     $this->setName($name);
        //     $this->setEmail($email);
        //     $this->setPassword($password);
        // }

        // return true;
        return !(empty($this->name) || empty($this->email) || empty($this->password));
    }



    //SETTER
    public function setId($id){
        if(!empty($id)) {
            $this->id = (int) $id;
        }
    }

    public function setName($name){
        if (!is_string($name) || empty($name)){
            $this->errors[] = self::NAME_INVALID;
        } else {
            $this->name = $name;
        }
    }

    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }else{
            $this->errors[] = self::EMAIL_INVALID;
        }
        
    }

    public function setPassword($password){
        if (!is_string($password) || empty($password)){
            $this->errors[] = self::PASSWORD_INVALID;
        }else{
            $this->password = $password;
        }
        
    }



    //GETTER
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getErrors(){
        return $this->errors;
    }
}