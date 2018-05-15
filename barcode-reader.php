<?php require 'header_footer/header.php';?>

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
	                  <div class="col-12 mx-auto">
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
                              echo "
                              <div class='row'>
                              <div class='col-8 text-left'>
                                <div class='col-12 my-1'>
                                <span class='txt-bold'>Produs: </span> $product_name
                                </div>
                              ";
                          echo "<hr class='my-0'>";
                          }
                          if (!empty($generic_name)) {
                              echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'>Nume general: </span> $generic_name
                                </div>

                              ";
                          echo "<hr class='my-0'>";
                          }
                          if (!empty($product_brand)) {
                              echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'>Brand: </span> $product_brand
                                </div>

                              ";
                          echo "<hr class='my-0'>";
                          }
                          if(!empty($categories)){
                            echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'> Categorii: </span>
                                  $categories
                                </div>

                              ";
                          echo "<hr class='my-0'>";
                          }
                          if(!empty($product_allergens)){
                            echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'> Substanțe sau produse care cauzează alergii sau intoleranțe: </span>
                              ";
                            $last_element = end($product_allergens);
                            foreach((array)$product_allergens as $alergen){
                              $alergen = substr((string)$alergen,3);
                              echo ucfirst("$alergen");

                              if($alergen != substr((string)$last_element,3))
                                echo", ";
                            }
                            echo "
                            </div>
                            ";
                          echo "<hr class='my-0'>";
                          }
                          if(!empty($traces)){
                            echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'> Poate contine urme de: </span>
                                  $traces
                                </div>

                              ";
                          echo "<hr class='my-0'>";
                          }
                          if(!empty($countries_array)){
                             echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'> Se vinde in: </span>
                              ";
                              $last_element = end($countries_array);
                               foreach($countries_array as $country){
                                    $country = substr((string)$country,3);
                                    echo ucfirst("$country");

                                    if($country != substr((string)$last_element,3))
                                      echo", ";
                                }
                              echo "</div>";
                          echo "<hr class='my-0'>";
                          }
                          if(!empty($ingredients)){
                            echo "
                              <div class='col-12 my-1'>
                                <span class='txt-bold'> Lista ingrediente: </span>
                                <br>
                                $ingredients
                              </div>
                              ";
                          echo "<hr class='my-0'>";
                          }

                          echo "</div>";
                          if (!empty($product_picture)) {
                              echo "
                              <div class='col-4'>
                              <img id='enter' class='mx-auto d-block' src='$product_picture'>
                              </div>
                              </div>
                              ";
                          } else {
                              include ("simple_html_dom.php");
                              if(!empty($product_brand))
                                $search_keyword = "$product_name" . " " . "$product_brand";
                              else
                                $search_keyword = "$product_name";
                              $search_keyword = str_replace(' ', '+', $search_keyword);
                              $newhtml = file_get_html("http://www.google.com/search?q=" . $search_keyword . "&tbm=isch&gws_rd=cr&ei=16E0WMGSKYmisAHmp6b4Ag&tbs=isz:lt,islt:svga,ic:specific,isc:white");

                              $result_image_source = $newhtml->find('img', 1)->src;
                              echo '
                                <div class="col-4">
                                  <img id="enter" class="d-block mx-auto" src="' . $result_image_source . '">
                                </div>
                                </div>
                              ';
                          }
                      } else {
                          echo "$message_nan";
                      }
                  }
              }
              elseif($ok == 0){
                  $message_missing = "
                    <div class='alert bg-warning text-dark alert-dismissible fade show mx-3' role='alert'>
                      <strong>Introduceti un cod de bare!</strong>
                      <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>
                    ";
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
	});
	</script>
  </footer>


  
<?php require 'header_footer/footer.php';?>
