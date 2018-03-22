<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/20/2018
 * Time: 11:29 PM
 */
class Product
{
    private $type;
    private $price;
    private $category;

    public function __construct($type,$price,$category)
    {
        $this->type=$type;
        $this->price=$price;
        $this->category=$category;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function showAvailableProducts()
    {
        return "Name: ".$this->getType()." Price".$this->getPrice()."UAH"." Category: ".$this->getCategory();
    }
}
?>