<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CollectorRepository")
 * @ORM\Table(name="collector", indexes={
 *     @ORM\Index(name="key_idx", columns={"col_key"}),
 *     @ORM\Index(name="value_int_idx", columns={"col_value_int"})
 * })
 */

class Collector
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="col_key", type="string", nullable=true)
     */
    protected $key;

    /**
     * @ORM\Column(name="col_value", type="text", nullable=true)
     */
    protected $value;

    /**
     * @ORM\Column(name="col_value_int", type="integer", nullable=true)
     */
    protected $valueInt;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValueInt()
    {
        return $this->valueInt;
    }

    /**
     * @param mixed $valueInt
     */
    public function setValueInt($valueInt)
    {
        $this->valueInt = $valueInt;
    }

}