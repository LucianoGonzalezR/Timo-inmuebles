



<?php  include("Basededatos.php");?>



<?php 
  if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM contrato WHERE id = $id";
    $result = mysqli_query ($conn, $query);
    if (mysqli_num_rows($result) == 1){
      $row = mysqli_num_rows($result);
      $pago = $row['pago'];
      echo $pago;
  }
?>









































