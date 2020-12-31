<?
session_start();
if($_POST["Age"]>0)
{
    $_SESSION["Age"]=$_POST["Age"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <?
        echo "Name: ";
        print_r($_SESSION["Name"]);
        echo "<br/>Surname: ";
        print_r($_SESSION["Surname"]);
        echo "<br/>Age: ";
        print_r($_SESSION["Age"]);
        echo " years old";
    ?>
</body>

</html>
<?
}
else
{
    header("location: form3.php");
}
?>