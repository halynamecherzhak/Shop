<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/21/2018
 * Time: 8:37 AM
 */
class Characteristic{

    public static $products= array ('tulip' => 'Imported from Holland,available amount:50',
        'orchid'=>'Imported from America,available amount:25',
        'chocolate'=>'Imported from Switzerland,available amount:15'
        );

    public static function getProducts(): array
    {
        return self::$products;
    }
    public static function setFlowers(array $products): void
    {
        self::$products = $products;
    }
     public static function printProducts()
     {
         foreach(self::getProducts() as $key => $value)
         {
             echo "$key = $value <br />";
         }
     }
}
?>

