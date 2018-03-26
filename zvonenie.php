<?php include 'navbar.html';?>

<link rel="stylesheet" type="text/css" href="css/zvonenie.css">
<link href ="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
<body>
<div class="container2">

<div class="zvonenie">

<h1 class="zvonenie-topic animated bounceIn">ZVONENIE</h1>
<p class="zvonenie-text animated bounceIn">
0. hodina - 7:05-7:50 <br>
1. hodina - 8:00-8:45 <br>
2. hodina - 8:50-9:35 <br>
3. hodina - 9:45-10:30 <br>
4. hodina - 10:50-11:35 <br>
5. hodina - 11:45-12:30 <br>
6. hodina - 12:40-13:25 <br>
7. hodina - 13:30-14:15 <br>
8-9. hodina - 14:30-16:00 <br>
</p>
</div>

<div class="alarm"><img width="100%" src="img/zvonenie/alarm.png" ></div>

</div> <!-- KONIEC HLAVNEHO CONTAINERU -->
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/lessmore.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

<script>
    $(document).ready(function() {

      // place this within dom ready function
      function showpanel() {
        $('nav').addClass('shrink');
     }

     // use setTimeout() to execute
     setTimeout(showpanel, 500)

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
}
})
});
</script>
</html>
