<html>
    <body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
echo $name;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
    </body>
</html>


