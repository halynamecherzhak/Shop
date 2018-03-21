<html>
<body>
<h2>Available goods </h2>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/20/2018
 * Time: 11:30 PM
 */
require_once ("Product.php");
require_once ("Customer.php");
require_once ("Characteristic.php");

//$name = $email = $delivery= $type = $number = "";
$number="";
$nameErr = $emailErr = $deliveryErr = $typeErr = $numberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"]))
{
    $nameErr = "Name is required";
}else {
    $name = test_input($_POST["name"]);
}
if (empty($_POST["email"]))
{
    $emailErr = "Email is required";
}
else {
    $email = test_input($_POST["email"]);

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $emailErr = "Invalid email format";
    }
}
if (empty($_POST["address"]))
{
    $address= "Address is required";
}
else
{
    $address = test_input($_POST["address"]);
}
    if (empty($_POST["type"]))
    {
        $type= "Type is required";
    }
    else
    {
        $type = test_input($_POST["type"]);
    }
    if (empty($_POST["number"]))
    {
        $number= "Number is required";
    }
    else
    {
        $number = test_input($_POST["number"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$flower=new Product('tulip',15,'plant');
$flowerPot=new Product('flowerpot',50,'plant');
$chocolate=new Product('chocolate',30,'sweet');

//echo $flower->getType().$flower->getPrice().$flower->getCategory();
echo $flower->showAvailableProducts()."<br>";
Characteristic::getCharacteristic();

echo $flowerPot->showAvailableProducts()."<br>";
echo $chocolate->showAvailableProducts();

?>

<html>
<head>
    <title>Flower Shop</title>
</head>
<body>
<h2>Characteristic</h2>
<h2>Ordering Form </h2>
<p><span class = "error">* required field.</span></p>
<form method = "POST" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>";
<table>
    <tr>
        <td>Name:</td>
        <td><input type = "text" name = "name">
            <span class = "error">* <?php echo $nameErr;?></span>
        </td>
    </tr>

    <tr>
        <td>E-mail:</td>
        <td><input type = "text" name = "email">
            <span class = "error">* <?php echo $emailErr;?></span>
        </td>
    </tr>
    <tr>
        <td>Delivery:</td>
        <td><input type = "text" name = "delivery">
            <span class = "error">* <?php echo $deliveryErr;?></span>
        </td>
    </tr>
    <tr>
        <td>Type:</td>
        <td><input type = "text" name = "type">
            <span class = "error">* <?php echo $typeErr;?></span>
        </td>
    </tr>
    <tr>
        <td>Number:</td>
        <td><input type = "text" name = "number">
            <span class = "error">* <?php echo $numberErr;?></span>
        </td>
    </tr>
    <tr>
        <td>
            <input type = "submit" name = "submit" value = "Submit">
        </td>
    </tr>
</table>
</form>
<?php
echo "<h2>Your Given details are as :</h2>";
echo "Name-> ".$name;
echo "<br>";

echo "E-mail-> ".$email;
echo "<br>";

echo "Address-> ".$adress;
echo "<br>";

echo "Type-> ".$type;
echo "<br>";

echo "Amount-> ".$number;
echo "<br>";
?>
</body>
</html>

