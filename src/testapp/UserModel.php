<?php
/**
 * Created by PhpStorm.
 * User: jlong
 * Date: 16/07/2014
 * Time: 20:51
 */

namespace TestApp;

/**
 * Class TestModel
 * @package TestApp
 */
class UserModel
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    
    private $lastName;
    
    /**
     * @var string
     */
    private $address1;
    
    /**
     * @var string
     */
    
    private $address2;
    
    /**
     * @var string
     */
            
    private $address3;
    
    /**
     * @var string
     */
    
    private $email;
    
    /**
     * @var string
     */
    
    private $phone;
    /**
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName, $address1, $address2, $address3, $email, $phone)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->address3 = $address3;
        $this->email = $email;
        $this->phone = $phone;       
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }
        /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

}