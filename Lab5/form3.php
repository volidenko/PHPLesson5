<?
session_start();
if(mb_strlen($_POST["Surname"])>0)
{
    $_SESSION["Surname"]=$_POST["Surname"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age</title>
</head>

<body>
    <form method='POST' action='form4.php'>
        <div><label for='Age'>Enter your Age:</label>
            <input type='number' name='Age' /></div>
        <input type='submit' name='accept' value='Отправить' />
    </form>
</body>

</html>
<?
}
else
{
    header("location: form2.php");
}
?>