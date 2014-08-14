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
class User
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
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
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
}