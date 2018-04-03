<?php include 'navbar.html';?>
<?php include 'config.php' ?>
<?php include 'db.php' ?>
<?php
$query = "SELECT * FROM persons";
$test = $db->query($query); ?>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "triedy");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
<link rel="stylesheet" type="text/css" href="css/triedy.css">
<body>
  <div class="photo-heading heading-aktivity bgNRCC">
    <div class="heading-wrapper">
      <h1 class="w700 ">1. ROČNÍK</h1>

    </div>
  </div>
  <div class="container">

  <div class="container">


<div class="tabulky">
<div class="row">

  <div class="col-sm-3">
  <table class="table-fill">
  <thead>
  <tr>
  <th  >I.A</th>

  </tr>
  </thead>
  <tbody class="table-hover">
    <tr>
    	<?php if ($test->num_rows > 0) {
      while($row = $test->fetch_assoc()){ ?>  <tr><td><?php echo $row['first_name']?> </td>
<?php } } ?>
    </tr>
    <tr>
    <td>Lenka Beránková</td>

    </tr>
    <tr>
    <td>Lea Debnárová</td>

    </tr>
    <tr>
    <td>	Tamara Gecková</td>

    </tr>
    <tr>
    <td  >Lucia Hanispalová</td>
    </tr>
    <tr>
    <td>Laura Hisirová</td>
    </tr>
    <tr>
    <td >Monika Hrinková</td>
    </tr>
    <tr>
    <td>	Emma Hudáková</td>
    </tr>
    <tr>
    <td >Matej Tadeáš Zentko</td>
    </tr>
    <tr>
    <td>	Viktória Barnová</td>

    </tr>
    <tr>
    <td>Lenka Beránková</td>

    </tr>
    <tr>
    <td>Lea Debnárová</td>

    </tr>
    <tr>
    <td>	Tamara Gecková</td>

    </tr>
    <tr>
    <td  >Lucia Hanispalová</td>
    </tr>
    <tr>
    <td>Laura Hisirová</td>
    </tr>
    <tr>
    <td >Monika Hrinková</td>
    </tr>
    <tr>
    <td>	Emma Hudáková</td>
    </tr>
    <tr>
    <td >Matej Tadeáš Zentko</td>
    </tr>
    <tr>
    <td>	Viktória Barnová</td>

    </tr>
    <tr>
    <td>Lenka Beránková</td>

    </tr>
    <tr>
    <td>Lea Debnárová</td>

    </tr>
    <tr>
    <td>	Tamara Gecková</td>

    </tr>
    <tr>
    <td  >Lucia Hanispalová</td>
    </tr>
    <tr>
    <td>Laura Hisirová</td>
    </tr>
    <tr>
    <td >Monika Hrinková</td>
    </tr>
    <tr>
    <td>	Emma Hudáková</td>
    </tr>
    <tr>
    <td >Matej Tadeáš Zentko</td>
    </tr>
  </tbody>
  </table>
  </div>



<div class="col-sm-3">
<table class="table-fill">
<thead>
<tr>
<th  >I.B</th>

</tr>
</thead>
<tbody class="table-hover">
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
</tbody>
</table>
</div>



<div class="col-sm-3">
<table class="table-fill">
<thead>
<tr>
<th  >I.C</th>

</tr>
</thead>
<tbody class="table-hover">
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
</tbody>
</table>
</div>

<div class="col-sm-3">
<table class="table-fill">
<thead>
<tr>
<th  >I.D</th>

</tr>
</thead>
<tbody class="table-hover">
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
  <tr>
  <td>	Viktória Barnová</td>

  </tr>
  <tr>
  <td>Lenka Beránková</td>

  </tr>
  <tr>
  <td>Lea Debnárová</td>

  </tr>
  <tr>
  <td>	Tamara Gecková</td>

  </tr>
  <tr>
  <td  >Lucia Hanispalová</td>
  </tr>
  <tr>
  <td>Laura Hisirová</td>
  </tr>
  <tr>
  <td >Monika Hrinková</td>
  </tr>
  <tr>
  <td>	Emma Hudáková</td>
  </tr>
  <tr>
  <td >Matej Tadeáš Zentko</td>
  </tr>
</tbody>
</table>
</div>
</div>
</div>


<form action="triedy.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>

  </div>
            <a href="#0" class="cd-top">Top</a>    <!-- BACK TO TOP -->


  <!-- KONIEC HLAVNEHO CONTAINERU -->

  </body>

  <!-- FOOTER
  -->
  <div class="row footerup">
            <div class="col-sm-6 textkontakt"><p class="p3 w600">Pre viac info kliknite tu</p></div>
            <div class="col-sm-6 kontaktbutton"><a href="kontakt.html" class="footerkontakt">KONTAKT</a></div>
           </div>
           <div class="row footermiddle">
             <div class="col-sm-2 collumwidth">
             <ul >
               <li class="footermiddlenadpis">O škole</li>
               <li><a href="#">História Školy</a></li>
               <li><a href="#">Charakteristika Školy</a></li>
               <li><a href="#">Súčasnosť Šrobárky</a></li>
               <li><a href="#">Certifikáty</a></li>
               <li><a href="#">Organizácia šk. roka</a></li>
             </ul>
           </div>
             <div class="col-sm-2 collumwidth">
             <ul >
               <li class="footermiddlenadpis">ŠTÚDIUM</li>
               <li><a href="#">Prečo Študovať na Šrobárke</a></li>
               <li><a href="#">Prijímačky</a></li>
               <li><a href="#">Maturita</a></li>
               <li><a href="#">PK Informatika</a></li>
               <li><a href="#">PK Nemecký jazyk</a></li>
             </ul>
            </div>
            <div class="col-sm-2 collumwidth">
            <ul >
              <li class="footermiddlenadpis">Informácie</li>
              <li><a href="#">Školská jedáleň</a></li>
              <li><a href="#">Združenie rodičov školy</a></li>
              <li><a href="#">Rada školy</a></li>
              <li><a href="#">OZ Priatelia Šrobárky</a></li>
              <li><a href="#">Darujte Nám</a></li>
              <li><a href="#">Povinné zverejňované informácie</a></li>
              <li><a href="#">Žiacka rad</a></li>
            </ul>
          </div>
            <div class="col-sm-2 collumwidth">
            <ul >
              <li class="footermiddlenadpis">Pre študentov</li>
              <li><a href="#">Zastupovanie</a></li>
              <li><a href="#">Rozvrh</a></li>
              <li><a href="#">Elektronická žiacka knižka</a></li>
              <li><a href="#">Jedálny lístok</a></li>
              <li><a href="#">Zvonenie</a></li>
            </ul>
           </div>
           <div class="col-sm-2 collumwidth">
           <ul>
             <li class="footermiddlenadpis">Aktivity</li>
             <li><a href="#">Projekty Učiteľov</a></li>
             <li><a href="#">Projekty Absolventovy</a></li>
             <li><a href="#">Každoročné aktivity</a></li>
             <li><a href="#">Kalamajky</a></li>
             <li><a href="#">Študentské slovo</a></li>
           </ul>
         </div>
         <div class="col-sm-2 collumwidth">
           <ul>
             <li class="footermiddlenadpis">O škole</li>
             <li><a href="#">História Školy</a></li>
             <li><a href="#">Charakteristika Školy</a></li>
             <li><a href="#">Súčasnosť Šrobárky</a></li>
             <li><a href="#">Certifikáty</a></li>
             <li><a href="#">Organizácia šk. roka</a></li>
           </ul>
          </div>

           </div>

           <div class="row footerbottom">

             <div class="col-sm-8 bottominfo">
               <p>Gymnázium Šrobárobva 1, Košice</p>
             </div>
            <div class="col-sm-4 bottomlegends">
               <p>@Tomáš Krajník Tomáš Šoltés Viktor Kačeňák 2018</p>
               </div>

           </div>






  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/backtotop.js"></script> <!-- Gem jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>



 <!-- ZMENSOVANIE NAVIGACNEHO PANELU -->
  <script>
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('nav').addClass('shrink');
    } else {
      $('nav').removeClass('shrink');
    }
  });
  </script>


  <!-- VYTAHOVANIE HLAVNEHO DROPDOWNU -->
  <script>
  $(document).ready(function() {
          $(".navtoggler").click(function(){
              $(this).siblings('.dropdown-content').toggleClass('activedropdown');
          });
     });

  </script>
<!-- ZMENA HAMBURGER IKONKY -->
  <script>$(document).ready(function(){
    $(".hamburger").click(function(){
      $(this).toggleClass("is-active");
    });
  });
  </script>
<!-- VYTAHOVANIE POMOCNEHO DROPDOWNU -->
    <script>jQuery(function($){
    $('.dropdown2').click(function(){
    $('.dropdown-content2', this).toggleClass('activedropdown');
    });
    });
    </script>


  <!-- VYTIAHNUTIE MOBILNEHO NAVIGACNEHO -->
  <script>
  jQuery(function($){
  $('.navbar-toggle').click(function(e){
  $('.navbar-collapse').toggleClass('rightnav');
  $('.navbar-toggle').toggleClass('indexcity');
  $('body').toggleClass('overflowhidden');
  });
  $(document).click(function(e){
    if(!$(e.target).closest('.navbar-toggle, .rightnav, .navbar-collapse').length){
  $('.navbar-collapse').removeClass('rightnav');
  $('.navbar-toggle').removeClass('indexcity');
  $('.hamburger').removeClass('is-active');
  $('.dropdown').removeClass('activedropdown');
  $('.dropdown2').removeClass('activedropdown');
  }
  })
  });
  </script>




  </html>
