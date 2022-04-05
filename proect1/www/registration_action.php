<?
define("PAGE_TITLE","Registrstion2");
?>
<html>

<head>
    <title><?= PAGE_TITLE ?></title>
</head>

<body>



<p>Go:</p>
<?
$form_names = array("name", "email");
$form_values = array_values($_GET);
echo "name=".$form_values[0]."<br />";
echo "email=".$form_values[1]."<br />";
//$username=$_GET["name"];
$passwords=$_GET["pword"];
echo "first password = ".$passwords[0];
echo "<br />";
echo "second password = ".$passwords[1];
if ($passwords[0]==$paswswords[1]){
    echo "<p> Password are right</p>";
    }
    else{
        echo "<p> Password are wrong</p>";
    }
/*
echo "<p> Name = " .$username . "</p>";
echo "<p> Password = " .$password . "</p>";*/
?>

</body>

</html>