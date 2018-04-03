<?php include 'navbar.html';?>
<?php include 'config.php' ?>
<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="css/triedy.css">
<?php
$query = "SELECT * FROM pedagogovia";
$pedagogovia = $db->query($query);
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM pedagogovia WHERE Kontakt = '$_POST[hidden]'";
mysqli_query($DeleteQuery, $conn);
};


if(isset($_POST['update'])){
$UpdateQuery = "UPDATE pedagogovia SET Kontakt='$_POST[Kontakt]'";
mysql_query($UpdateQuery, $conn);
};
?>

<div class="photo-heading heading-aktivity bgNRCC">
  <div class="heading-wrapper">
    <h1 class="w700 ">1. ROČNÍK</h1>

  </div>
</div>
<div class="container">

<table class="table-fill pedagogovia-table">
<thead>


<th>Meno</th>
<th>Aprobácia</th>
<th>Zamestnaný od</th>
<th>Kontakt</th>

</thead>
<tbody>


    <?php if ($pedagogovia->num_rows > 0) {
    while($row = $pedagogovia->fetch_assoc()){
          echo "<tr> <td>";
                 echo "<form action=pedagogovia.php method=post>";
                  echo $row['Meno'] . "</td><td>";

           echo $row['Aprobacia'] . "</td><td>";
           echo $row['Nastup'] . "</td><td>";
           echo "<input type=text name=update value='" . $row['Kontakt'] . "' ";
          echo "</td><td>";
          echo "<td>" . "<input type=submit name=update value=update" . " </td>";
           echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
           echo "</form>";
} } ?>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>

</tbody>
</table>
<?php include 'footer.html';?>
