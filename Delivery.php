<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/22/2018
 * Time: 10:25 AM
 */
class Delivery
{
    private $city;
    private $post_type;
    public  function __construct($city,$post_type)
    {
        $this->city=$city;
        $this->post_type=$post_type;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getPostType()
    {
        return $this->post_type;
    }
    public function setPostType($post_type)
    {
        $this->post_type = $post_type;
    }

}
?>