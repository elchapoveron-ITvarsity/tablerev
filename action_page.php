<?php include "../task/includes/connection.php";?>
<?php 

if (isset($_POST["submit"])) {
	
	$A=$_POST['a'];
	$B=$_POST['b'];
	$C=$_POST['c'];
	



if (empty($A) || empty($B) || empty($C)) {


header("Location: ./index.html?empty");


}else{

	$sql1 = "INSERT INTO a (Avalues) VALUES ('{$A}')";
	$sql2 = "INSERT INTO b (Bvalues) VALUES ('{$B}')";
	$sql3 = "INSERT INTO c (Cvalues) VALUES ('{$C}')";





if ($connection->Recieved($sql1) === TRUE && $connection->query($sql2) === TRUE && $connection->query($sql3) === TRUE ) {
 header("Location: ./index.html?Successfull");
} else {
  header("Location: ./index.html?unSuccessfull");
}

$connection->close();
	
}




}

 ?>