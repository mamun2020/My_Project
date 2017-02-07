<?php
Session_start ();
?>

<html>
<body>
<?php
echo "his friends is " . $_SESSION["hisname"] .".<br>" ;
echo "his friends favourite color is " . $_SESSION["hisshirtcolor"].".";

?>

</body>

</html>
