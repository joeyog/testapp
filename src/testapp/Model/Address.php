<?php
/**
 * User: joeyog
 * Date: 23/07/2014
 * Time: 18:51
 */

namespace TestApp\Model;

/**
 * Class Address
 * @package TestApp
 */

class Address
{
    /**
     * @var string
     */
    private $add1;

    /**
     * @var string
     */
    private $add2;

    /**
     * @param string $add1
     * @param string $add2
     */
    public function __construct($add1, $add2)
    {
        $this->add1 = $add1;
        $this->add2 = $add2;
    }

    /**
     * @return mixed
     */
    public function getAdd1()
    {
        return $this->add1;
    }

    /**
     * @return mixed
     */
    public function getAdd2()
    {
        return $this->add2;
    }
}