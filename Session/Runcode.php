<?php

Session_start();
?>

<html>
<body>
<?php
$_SESSION["hisname"] = "Imran";
$_SESSION["hisshirtcolor"] = "red";
echo "this seassion set.";
?>

</body>
</html>