<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Custom css -->
	<link rel="stylesheet" href="css/colors.css" type="text/css">
   	<link rel="stylesheet" type="text/css" href="css/styles.css">
  	<link rel="stylesheet" href="css/opt1_style.css" type="text/css">
  	<link rel="stylesheet" href="css/index_style.css" type="text/css">
  	
  	<!-- Font awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  	
  	<!-- Animate css -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  	<!--
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
	-->

	<!-- Bootstrap css, js-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Multiselect css and jquery -->
	<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
	<script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

  <title> Barcode reader </title>
</head>

<body>

  <header>
    <nav class="navbar navbar-toggleable-sm navbar-expand-sm sticky-top custom-nav" >
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand nope" href="#">
        <img src="images/logo_whtie.png" alt="Logo" class="cust1">
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link-cust" href="index.php">Acasa</a>
            <a class="nav-item nav-link-cust" href="#">Optiune2</a>
            <a class="nav-item nav-link-cust" href="#">Optiune3</a>
            <a class="nav-item nav-link-cust" href="#">Optiune4</a>
          </div>
      </div>
    </nav>
  </header>

  <div class="overlay">

  </div>
  <div class="container container-style mt-5">

  <div id="orientaregif">
      <form action="barcode-reader.php" class="form-group well" method="get">
          <h1 class="text-center">Verificati alergenii produsului</h1>
          <hr>
          <div class="row">
          	<div class="col-9">
	          <h3 id="form" class="text-center"> 1. Selectati alergenii care va pot provoca alergii sau intolerante:</h3>
	        </div>
	        <div class="col">
	          <div id="round3">
	              <div class="row text-center" >
	                  <div class="col-4 mx-auto">
			            <select class="custom-select" title="alergeni" name="alergeni[]" id="multiselect" multiple="multiple">
			                <option value="gluten">Gluten</option>
		                    <option value="ovăz">Ovaz</option>
		                    <option value="secară">Secara</option>
		                    <option value="crustacean">Crustacee</option>
		                    <option value="mollusc">Moluste</option>
		                    <option value="fish">Peste</option>
		                    <option value="peanut">Alune</option>
		                    <option value="lupine">Lupin</option>
		                    <option value="soy">Soia</option>
		                    <option value="egg">Oua</option>
		                    <option value="milk">Lapte</option>
		                    <option value="celery">Telina</option>
		                    <option value="mustard">Mustar</option>
		                    <option value="sesame">Susan</option>
		                    <option value="sulfur_dioxide">Dioxid de Sulf</option>
		                    <option value="dragoste">Dragoste</option>
			            </select>
			       		</div>
	                </div>
	            </div>
	        </div>
		    </div>
              <hr>
              <div class="col">
	              <h3 id="form" class="text-left">2. Introduceti/Scanati codul de bare:</h3>
	              <div class="row my-2">
	              	<div class="col-6 mx-auto">
	              		<input autofocus id="scanner_input" class="form-control input-barcode my-auto" name="barcode" placeholder="Introduceti codul de bare..." type="text" />
	              	</div>

	              	<div class="col-6 mx-auto">
	              		<button class="btn btn-custom btn-scan w-100" type="button" data-toggle="modal" data-target="#livestream_scanner" data-backdrop="false" id="pad1">
			                <i class="fas fa-camera mx-auto"></i> 	
		                  	<span class="mx-auto"> Sau scanati codul direct</span>
	                  	</button>
	              	</div>
	              </div>
	          </div>
              <hr>

              	<div class="col-12 mx-auto my-2">
              		<button id="#"  class="btn btn-custom txt-bold form-control" type="submit" name="buton_trimitere"> Trimitere</button>
              	</div>

          <?php
          include ("get_information.php");
          if(isset($_GET['buton_trimitere'])) {
              if(!empty($_GET['alergeni'])){
                  $ok = 0;
                  $my_allergens = array();
                  $my_allergens = $_GET['alergeni'];
                  foreach ($my_allergens as $alergen){
                      if($alergen == 'dragoste'){
                          $ok = 1;
                      }
                  }
              }
              else{
                  $ok = 0;
              }
              $message_ok = "
             	<div class='alert bg-success text-white alert-dismissible fade show mx-3' role='alert'>
				  <strong>Produsul nu contine alergenii selectati!</strong>
				  <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
				";
              $message_love = "<!-- <audio controls autoplay='autoplay' hidden='hidden'> <source src='images/uhah.mp3' type='audio/mp3'> </audio> --> 

             	<div class='alert bg-danger text-white alert-dismissible fade show mx-3' role='alert'>
				  <strong> Pentru remedierea problemei de dragoste va rugam vizitati site-ul <a class='white-link' href='https://www.bautura-online.ro/catalogsearch/result/?q=jack+daniels&&gclid=Cj0KEQjwofHHBRDS0Pnhpef89ucBEiQASEp6LPcVaQjw7EyVhQ611Ikl8cbgVuFieq5WZkzL0S_ICDMaAtvb8P8HAQ' target='_blank'>acesta</a>!
				  </strong>
				  <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
              	";
              if (!empty($barcode)){
                  if(is_numeric($barcode)) {
                      if ($existence == 1) {
                          if(!empty($product_allergens)){
                              //echo "<br/> alergenii produsului: ";

                              $vector_alergeni = array();
                              $nrcrt = 0;
                              if(!empty($my_allergens)){
                                  foreach ($my_allergens as $alergenul_meu) {
                                      if($alergenul_meu == 'dragoste'){
                                          echo "$message_love";
                                      }
                                      foreach ($product_allergens as $alergenul_prod) {
                                          //echo "$alergenul_prod ";
                                          if (strstr("$alergenul_prod", "$alergenul_meu") != null) {
                                              //echo "WARNING CONTAINS $alergenul_meu <br/>";
                                              $vector_alergeni[$nrcrt++] = $alergenul_meu;
                                          }
                                      }
                                  }
                                  if (!empty($vector_alergeni)) {
                                      foreach ($vector_alergeni as $alerta) {
                                          $message_allergen = "
                                          	<div class='alert bg-danger text-white alert-dismissible fade show mx-3' role='alert'>
	                                          <strong> Atentie! </strong> 
	                                          Produsul contine alergenul 
	                                          <strong>$alerta</strong>! 
											  <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
											    <span aria-hidden='true'>&times;</span>
											  </button>
											</div>
                                          ";
                                          echo "$message_allergen";
                                      }
                                  } else {
                                      echo "$message_ok";
                                  }
                              }
                              else{
                                  echo "$message_ok";
                              }
                          }
                          else{
                              if(!empty($my_allergens)) {
                                  foreach ($my_allergens as $alergenul_meu) {
                                      if ($alergenul_meu == 'dragoste') {
                                          echo "$message_love";
                                      }
                                  }
                              }
                              echo "$message_ok";
                          }
                          if (!empty($product_name)) {
                              echo "<div class='text-center'><br/><strong >Produs: </strong>$product_name</div>";
                          }
                          if (!empty($product_brand)) {
                              echo "<div class='text-center'><br/><strong >Brand: </strong>$product_brand </div>";
                          }
                          if (!empty($product_picture)) {
                              echo "<br/><img id='enter' src='$product_picture'><br/>";
                          } else {
                              include ("simple_html_dom.php");
                              $search_keyword = "$product_name" . " " . "$product_brand";
                              $search_keyword = str_replace(' ', '+', $search_keyword);
                              $newhtml = file_get_html("http://www.google.com/search?q=" . $search_keyword . "&tbm=isch&gws_rd=cr&ei=16E0WMGSKYmisAHmp6b4Ag");
                              $result_image_source = $newhtml->find('img', 0)->src;
                              echo '<br/><img id="enter" src="' . $result_image_source . '"><br>';
                          }
                      } else {
                          echo "$message_nan";
                      }
                  }
              }
              elseif($ok == 0){
                  $message_missing = '<div class="alert warning"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>Introduceti un cod de bare!</strong></div>';
                  echo $message_missing;
              }
              else{
                  echo "$message_love";
              }
          }
          ?>
          </div>
      </form>
  </div>
  </div>

  <footer>

  	<!-- Initialize the plugin: -->
	<script>
	$(function() {  
	 $('#multiselect').multiselect();

	 $('#multiselectwithsearch').multiselect({
	            includeSelectAllOption: true,
	            enableFiltering: true,
	            enableCaseInsensitiveFiltering: true,
	            filterPlaceholder: 'Search for something...'
	        }); 
	});
	</script>
  </footer>
</body>

</html>
