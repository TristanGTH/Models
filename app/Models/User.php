<?php

namespace App\Models;

class User extends Model {

    public $id;
    public $created_at;
    public $updated_at;
    public $first_name;
    public $last_name;
    public $email;
    protected $password;

    public function __toString()
    {
        return json_encode($this);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = hash('sha256', $password );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getFullName(){
        return $this->first_name . $this->last_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getUpdatedAt()
    {
        return $this->changeDate($this->updated_at);
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getCreatedAt()
    {
        return $this->changeDate($this->created_at);
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}