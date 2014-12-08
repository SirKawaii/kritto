
<?php $con=mysqli_connect("localhost","root","","medico");


if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$concarnet=mysqli_connect("localhost","root","","carnet");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	?>
