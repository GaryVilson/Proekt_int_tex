<html>

<head>
    <title><?= PAGE_TITLE ?></title>
</head>

<body>



<p>Go:</p>
<?
$form_names = array("i1", "i2", "i3");
$form_values = array_values($_GET);
echo "name=".$form_values[0]."<br />";
echo "sity=".$form_values[1]."<br />";
echo "age=".$form_values[2]."<br />";
//
if ($form_values[1]=="Tiraspol"){
    echo "<p> Hi neighbour</p>";
    }
    else{
        echo "<p> Go out</p>";
    }
/*
echo "<p> Name = " .$username . "</p>";
echo "<p> Password = " .$password . "</p>";*/
?>

</body>

</html>