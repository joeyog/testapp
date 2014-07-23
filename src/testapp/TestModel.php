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
class TestModel
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $age;

    /**
     * @param string $name
     * @param string $age
     */
    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}