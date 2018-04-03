<?php include 'navbar.html';?>
<?php include 'config.php' ?>
<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="css/triedy.css">
<?php
$query = "SELECT * FROM zamestnanci";
$zamestnanci = $db->query($query);
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

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


    <?php if ($zamestnanci->num_rows > 0) {
    while($row = $zamestnanci->fetch_assoc()){
          echo "<tr> <td>";
                 echo "<form action=pedagogovia.php method=post>";
                  echo $row['Meno'] . "</td><td>";

           echo $row['Akrobácia'] . "</td><td>";
           echo "<input type=text name=update value='" . $row['Kontakt'] . "' ";
          echo "</td><td>";
           echo "</form>";
} } ?>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>

</tbody>
</table>
<?php include 'footer.html';?>
