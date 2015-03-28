<?php include('perch/runtime.php');?>
<?php include("inc/head-one.html"); ?>
  <title>Bondi Speed Shop – Cars</title>
<?php include("inc/head-two.html"); ?>
<body id="cars">
<?php include("inc/nav.html"); ?>
  

  <?php
  if (perch_get('s')) {

   // Detail mode
   perch_content_custom('Cars', array(
        'template' => 'car.html',
        'filter' => 'slug',
        'match' => 'eq',
        'value' => perch_get('s'),
        'count' => 1,
   )); 
  } else {

   // List mode
   perch_content_custom('Cars', array(
        'template' => 'car-listing.html',
   )); 
  }

  ?>


  
  <?php include("inc/footer.html"); ?> 
</body>
<?php include("inc/scripts.html"); ?> 