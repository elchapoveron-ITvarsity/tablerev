<?php require_once 'Connection.php';?>


<?php
function alerts(){

if (isset($_GET['Successfull'])) {
?>

<script type="text/javascript">
  alert("The data has been saved Successfully");
</script>
<?php
}
 ?>


 <?php 
if (isset($_GET['unSuccessfull'])) {
?>

<script type="text/javascript">
  alert("The data has not been saved!Try again");
</script>
<?php
}
 ?>

 <?php 
if (isset($_GET['empty'])) {
?>

<script type="text/javascript">
  alert("please fill all the inputs");
</script>
<?php
}

}



function button1(){

global $connection;

	$sql = "SELECT * FROM a";
    $result = mysqli_query($connection,$sql);

if (isset($_POST["submit1"])) {
  

 ?>
 
 	<h4>All values of table A</h4>
<table>
	<thead>
        <tr>
            <td>A</td>
            
        </tr>
     </thead>
        <?php
 
            while ($row = mysqli_fetch_array($result)) {
                 
        ?>
        <tr>
            <td><?php  echo $row['Avalues'];  ?></td>
            
        </tr>
    <?php
 
        }
 
    ?>
    </table>
    </div>
    <?php  

}

}
function button2(){

global $connection;

	$sql = "SELECT Avalues, Bvalues, Cvalues FROM a, b, c where a.id=b.id and b.id=c.id";
    $result = mysqli_query($connection,$sql);

if (isset($_POST["submit2"])) {
  

 ?>

	<h4>all values of table A,B and C</h4>
	<thead>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            
        </tr>
    </thead>
        <?php
 
            while ($row = mysqli_fetch_array($result)) {
                 
        ?>
        <tr>
            <td><?php  echo $row['Avalues'];  ?></td>
            <td><?php  echo $row['Bvalues'];  ?></td>
            <td><?php  echo $row['Cvalues'];  ?></td>
            
        </tr>
    <?php
 
        }
 
    ?>
    </table>
    </div>
    <?php  

}

}
function button3(){

global $connection;

	$sql = "SELECT Cvalues, Bvalues FROM b,c where c.id=b.id";
    $result = mysqli_query($connection,$sql);

if (isset($_POST["submit3"])) {
  

 ?>
 
	<h4>all values of table C and B</h4>
	<thead>
        <tr>
            <td>C</td>
            <td>B</td>
            
        </tr>
    </thead>
        <?php
 
            while ($row = mysqli_fetch_array($result)) {
                 
        ?>
        <tr>
            <td><?php  echo $row['Cvalues'];  ?></td>
            <td><?php  echo $row['Bvalues'];  ?></td>
            
        </tr>
    <?php
 
        }
 
    ?>
    </table>
    </div>
    <?php  

}

}

function button4(){

global $connection;

	$sql = "SELECT * FROM B ORDER BY Bvalues ASC";
    $result = mysqli_query($connection,$sql);

if (isset($_POST["submit4"])) {
  

 ?>
 
	<h4>all values of table B in ascending order</h4>
	<thead>
        <tr>
            <td>B</td>
            
        </tr>
    </thead>
        <?php
 
            while ($row = mysqli_fetch_array($result)) {
                 
        ?>
        <tr>
            <td><?php  echo $row['Bvalues'];  ?></td>
            
        </tr>
    <?php
 
        }
 
    ?>
    </table>
    </div>
    <?php  

}

}








function button5(){

global $connection;

	$sql = "SELECT * FROM b ORDER BY Bvalues DESC";
    $result = mysqli_query($connection,$sql);

if (isset($_POST["submit5"])) {
  

 ?>
 
	<h4>all values of table B in dedcending order</h4>
	<thead>
        <tr>
            <td>B</td>
            
        </tr>
     </thead>
        <?php
 
            while ($row = mysqli_fetch_array($result)) {
                 
        ?>
        <tr>
            <td><?php  echo $row['Bvalues'];  ?></td>
            
        </tr>
    <?php
 
        }
 
    ?>
    </table>
    </div>
    <?php  

}

}
?>


