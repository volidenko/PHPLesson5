<?
session_start();
if(mb_strlen($_POST["Name"])>0)
{
    $_SESSION["Name"]=$_POST["Name"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surname</title>
</head>

<body>
    <form method='POST' action='form3.php'>
        <div><label for='Surname'>Enter your Surname:</label>
            <input type='text' name='Surname' /></div>
        <input type='submit' name='accept' value='Отправить' />
    </form>
</body>

</html>
<?
}
else
{
    header("location: form1.php");
}
?>