<html><body>
<?php
$quantity = $_POST['quantity'];
$item = $_POST['item'];
$con = mysqli_connect("localhost","root","","milly");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}// Make a MySQL Connection

// Insert a row of information into the table "example"
mysqli_query($con"INSERT INTO example 
(name, age) VALUES('item', 'quantity' ) ") 
or die(mysqli_error());  






echo "You ordered ". $quantity . " " . $item . ".<br />";
echo "Thank you for ordering from Tizag Art Supplies!";

?>
</body></html>
