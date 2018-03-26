<?php include 'navbar.html';?>
<body>
<!--
CAROUSEL
-->
<div class="photo-heading heading-maturita bgNRCC">
  <div class="heading-wrapper2">
    <h1 class="w700 ">Rada školy</h1>
  </div>
</div>



<div class="container">


<!-- ZAKLADNE INFORMACIE -->
  <div class="row">
  <div class="col-md-2"><img width="100%" src="img/reconstruction.png" >  </div>
    <div class="col-md-10 rekonstrukcia">

      <h2>Ospravedlňujeme sa, ale z dôvodu rekonštrukcie webovej stránky je táto sekcia nedostupná. Ďakujeme za pochopenie. </h2>

  </div>
  </div>




</div> <!-- KONIEC HLAVNEHO CONTAINERU -->


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
</body>






<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/backtotop.js"></script> <!-- Gem jQuery -->
<script src="js/lessmore.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

<script>
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
</script>

<script>$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});
</script>
<script>
		$(document).ready(function(){
			$('.dolessmore').dolessmore({lHeight : 150});
		});
	</script>
  <script>jQuery(function($){
  $('.dropdown').click(function(){
  $('.dropdown-content', this).toggleClass('activedropdown');
  });
  });
  </script>
  <script>jQuery(function($){
  $('.dropdown2').click(function(){
  $('.dropdown-content2', this).toggleClass('activedropdown');
  });
  });
  </script>
<script>
jQuery(function($){
$('.navbar-toggle').click(function(e){
$('.navbar-collapse').toggleClass('rightnav');
$('.navbar-toggle').toggleClass('indexcity');
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

<script>
$(document).ready(function(){

  // hide our element on page load
  $('.articles').css('opacity', 0);

  $('.articles').waypoint(function() {
      $('.articles').addClass('fadeInUp');
  }, { offset: '90%' });

});
</script>
<script>
$(document).ready(function(){

  // hide our element on page load
  $('.ImportantNews').css('opacity', 0);

  $('.ImportantNews').waypoint(function() {
      $('.ImportantNews').addClass('fadeInRight');
  }, { offset: '100%' });

});
</script>
<script>
$(document).ready(function(){

  // hide our element on page load
  $('.VLAVO').css('opacity', 0);

  $('.VLAVO').waypoint(function() {
      $('.VLAVO').addClass('fadeInLeft');
  }, { offset: '100%' });

});
</script>

<script>
$(document).ready(function(){

  // hide our element on page load
  $('.VPRAVO').css('opacity', 0);

  $('.VPRAVO').waypoint(function() {
      $('.VPRAVO').addClass('fadeInRight');
  }, { offset: '100%' });

});
</script>


<script>
$(document).ready(function(){

  // hide our element on page load
  $('.TEXT').css('opacity', 0);

  $('.TEXT').waypoint(function() {
      $('.TEXT').addClass('fadeInUp');
  }, { offset: '100%' });

});
</script>






</html>
