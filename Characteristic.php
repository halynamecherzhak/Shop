<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/21/2018
 * Time: 8:37 AM
 */
class Characteristic{

    public static $characteristic=array(0=>array("Tulip"=>"Imported from Holland","Term"=>"3months","Color"=>"Red,Yellow,Pink"),
        1=>array("Orchid"=>"Imported from America","Term"=>"Unlimited","Color"=>"White,Pink,Violet")
    );
    public static function getCharacteristic()
    {
        return self::$characteristic;
    }
}
?>