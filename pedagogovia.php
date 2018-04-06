<?php include 'navbar.html';?>
<?php include 'config.php' ?>
<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="css/triedy.css">
<?php
$query = "SELECT * FROM pedagogovia";
$pedagogovia = $db->query($query);
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


    <?php if ($pedagogovia->num_rows > 0) {
    while($row = $pedagogovia->fetch_assoc()){
          echo "<tr> <td>";
                  echo $row['Meno'] . "</td><td>";

           echo $row['Aprobacia'] . "</td><td>";
           echo $row['Nastup'] . "</td><td>";
           echo $row['Kontakt'] .  "</td>" ;

} } ?>

  </tr>

  </tr>

</tbody>
</table>
<?php include 'footer.html';?>
