<!DOCTYPE html>
<html>
  <head>
    <title> Mananca sanatos! </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">

    <style>
    body{
      overflow-x: hidden;
    }
    </style>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="css/product-page.css" type="text/css"/>
    <link rel="stylesheet" href="css/footer.css" type="text/css"/>
    <link rel="stylesheet" href="css/colors.css" type="text/css"/>
    <link rel="stylesheet" href="css/grid.css" type="text/css">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Slick CSS (product sliders) -->
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>

    <!-- Emoji CSS -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <!-- Range Slider CSS -->
    <link rel="stylesheet" href="css/range-slider/bootstrap-slider.css" type="text/css"/>
    <link rel="stylesheet" href="css/range-slider/bootstrap-slider.min.css" type="text/css"/>
    
    <!-- Multiselect css and jquery -->
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
    <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-custom">

      <!-- top elements on mobile only-->
      <div class="float-left d-lg-none">
        <button class="navbar-toggler px-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img class="nav-mobile-icon-img logo-white" src="images/logo-white.gif">
      </div>

      <div class="float-right d-lg-none">
        <a href="#" class="nav-mobile-icon-a"> <img class="nav-mobile-icon-img" src="images/phone-mobile.svg"></a>
        <a href="#" class="nav-mobile-icon-a"> <img class="nav-mobile-icon-img" src="images/my-account-mobile.svg"></a>
        <a href="#" class="nav-mobile-icon-a"> <img class="nav-mobile-icon-img" src="images/shopping-cart-mobile.svg"></a>
      </div>

      <div class="col-12 d-lg-none px-0">
        <form>
          <div class="form-group my-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cauta produsul dorit...">
                  <span class="input-group-btn">
                      <button class="btn btn-danger custom-btn-color-mobile" type="button" name="search"><i class="fas fa-search"></i></button>
                  </span>
            </div>
          </div>
        </form>
      </div>

    <div class="collapse navbar-collapse div-flex" id="collapsibleNavbar">
      <ul class="navbar-nav">

        <!-- elements on desktop only-->
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link custom-nav-hover" href="#"><b> Informatii e-commerce: 0740 104 194 </b> </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link custom-nav-hover" href="#"> Categorii </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a></li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link custom-nav-hover" href="#"> Produse </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a></li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link custom-nav-hover" href="#"> Parteneri</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link" href="#"> Bine ai venit, Nume cont! </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link custom-nav-hover" href="#"> <i class="fas fa-user"></i> Logout </a>
        </li>
        <li class="nav-item d-none d-lg-block point-chr"> <a class="nav-link"> ● </a> </li>
        <li class="nav-item d-none d-lg-block">
          <div class="dropdown">
             <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="em em-flag-ro"></i> RO</a>
            <div class="dropdown-menu dropdown-languages">
              <a class="dropdown-item language-item" href="#"><i class="em em-flag-ro"></i> RO</a>
              <a class="dropdown-item language-item" href="#"><i class="em em-gb"></i> EN</a>
              <a class="dropdown-item language-item" href="#"><i class="em em-de"></i> DE</a>
              <a class="dropdown-item language-item" href="#"><i class="em em-fr"></i> FR</a>
            </div>
          </div>
        </li>

        <!-- elements only on mobile navbar -->
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Fructe Proaspete </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Legume Proaspete </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Sucuri Naturale </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Salate si Plante Aromatice </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Soia, Vegetale si Ceaiuri </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Produse pentru diete speciale </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link mobile-nav-link" href="#"> Alimente si suplimente sport </a>
        </li>

      </ul>
    </div>
  </nav>


<!-- Header -->
<div class="container d-none d-lg-block px-0 header-style" >

  <!-- Logo -->
  <div class="row header-background">

    <div class="col-md-2 d-flex logo-header">
      <img class="mx-auto my-auto logo logo-white" src="images/logo-white.gif" alt ="Logo-header">
    </div>

    <!-- Search form -->
    <div class="col-md-8 my-1">
        <form>
          <div class="form-group my-3 mx-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cauta produsul dorit...">
                  <span class="input-group-btn">
                      <button class="btn btn-danger custom-btn-color" type="button" name="search"><i class="fas fa-search"></i></button>
                  </span>
            </div>
          </div>
        </form>
      </div>

      <!-- My account & my cart dropdowns -->
      <div class="col-md-2 d-flex justify-content-center align-self-center px-1">
        <div class="d-flex align-self-center padds">

          <div class="dropdown show">
          <a class="nav-top-right" href="#">
            <img class="mx-auto my-auto nav-svg" src="images/my-account.svg" alt="my-account" >
            <span class="pstyle">
              Contul <br> meu
            </span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item header-item" href="#">Nume cont</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Detalii Cont</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Companii</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Adrese de livrare</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Comenzi</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Facturi</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Plati</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Mesaje</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item log-out-item" href="#">Log out</a>
          </div>
        </div>

        </div>

        <div class="d-flex align-self-center padds">

          <div class="dropdown show">
          <a class="nav-top-right" href="#" data-toggle="tooltip" data-placement="right" title="Total: 6769 lei">
            <span class="badge badge-pill badge-danger badge-translate py-1 px-1">17</span>
            <img class="mx-auto my-auto nav-svg" src="images/shopping-cart.svg" alt="shopping-cart">
            <span class="pstyle">
              Cosul <br> meu
           </span>
          </a>

          <div class="dropdown-menu dropdown-menu-right dropdown-cart" aria-labelledby="dropdownMenuLink">
            <div class="container product-scroll">

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 1 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x3 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 134,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 2 Cu Nume Foarte Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x30 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 2454,95Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 3 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x13 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 1304,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 4 Cu Nume Lung Extrem De Lung Foarte Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x103 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 94134,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 5 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x23 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 1534,76Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 6 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x8 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 523,99Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 7 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x20 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 4524,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 8 Cu Nume Foarte Lung Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x1 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 99,95Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 9 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x10 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 25,00Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 10 Cu Nume Lung Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x2 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 456,79Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>
          </div>

            <div class="row product-totals my-auto mx-auto">
              <div class="col">
                <span> 10005 produse</span>
              </div>

              <div class="col text-right">
                <span> 1234,56 lei</span>
              </div>

            </div>

            <div class="row justify-content-center my-2 mx-2">
              <button class="btn btn-danger w-100 button-cart"> vezi cos </button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Product catalog dropdown-->

    <div class="row product-catalog-row">
      <div class="col-md-2 n1 d-flex justify-content-between">
          <div class="dropdown show">
            <a class="product-catalog-a py-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CATALOG PRODUSE &nbsp;
              <span>
                <i class="fas fa-align-justify"></i>
              </span>
            </a>

            <div class="dropdown-menu product-catalog-menu" aria-labelledby="dropdownMenuLink">
              <div class="container px-0 product-catalog-dropdown">
                <div class="row">
                  <div class="col-md-2 px-0 product-tab">
                    <div class="list-group product-list" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action product-item" id="list-category0-list" data-toggle="list" href="#list-category0" role="tab" aria-controls="category0"> Fructe Proaspete</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category1-list" data-toggle="list" href="#list-category1" role="tab" aria-controls="category1"> Legume Proaspete</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category2-list" data-toggle="list" href="#list-category2" role="tab" aria-controls="category2"> Sucuri Naturale</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category3-list" data-toggle="list" href="#list-category3" role="tab" aria-controls="category3"> Salate si Plante Aromatice</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category4-list" data-toggle="list" href="#list-category4" role="tab" aria-controls="category4"> Soia, Vegetale si Ceaiuri</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category5-list" data-toggle="list" href="#list-category5" role="tab" aria-controls="category5"> Produse pentru diete speciale</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category6-list" data-toggle="list" href="#list-category6" role="tab" aria-controls="category6"> Alimente si suplimente sport</a>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="tab-content h-100" id="nav-tabContent">
                      <div class="tab-pane fade show active h-100" id="list-category0" role="tabpanel" aria-labelledby="list-category0-list">

                        <div class="row h-100 tab-list-background tlb-bg0">
                          <div class="col-md-6">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> Rosaceae </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Mere & Pere </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Piersici & Caise </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Visine & Cirese </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Capsuni </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Zmeura </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Berries </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> Afine </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Coacaze </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Kiwi </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Struguri </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Avocado</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Citrice</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> Lamai </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Portocale</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Mandarine & Clementine</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Grapefruit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Pomelo </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Alte fructe proaspete </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Banane </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Mango </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Pepeni </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category1" role="tabpanel" aria-labelledby="list-category1-list">
                        <div class="row h-100 tab-list-background tlb-bg1">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category2" role="tabpanel" aria-labelledby="list-category2-list">
                        <div class="row h-100 tab-list-background tlb-bg2">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category3" role="tabpanel" aria-labelledby="list-category3-list">
                        <div class="row h-100 tab-list-background tlb-bg3">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category4" role="tabpanel" aria-labelledby="list-category4-list">
                        <div class="row h-100 tab-list-background tlb-bg4">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category5" role="tabpanel" aria-labelledby="list-category5-list">
                        <div class="row h-100 tab-list-background tlb-bg5">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category6" role="tabpanel" aria-labelledby="list-category6-list">
                        <div class="row h-100 tab-list-background tlb-bg6">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>

      <div class="col-md-10 n2">
          <a href="#" class="float-right"> <i class="fas fa-info-circle"></i>&nbsp;INFOCENTER</a>
      </div>
  </div>

  </div>
  </script>

<!-- Header after scroll -->
<div class="d-none d-lg-block px-0 header-style header-background header-scroll sticky-top" >
<div class="container head-height">

  <div class="row head-height">

    <!-- Product catalog dropdown-->
    <div class="col-lg-1 my-auto">
    <div class="product-catalog-row py-1 font-sz-imp">
      <div class="n1 d-flex justify-content-between pad-cust-imp" >
          <div class="dropdown show mx-auto">
            <a class="product-catalog-a py-3 px-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span>
                <i class="fas fa-align-justify"></i>
              </span>
            </a>

            <div class="dropdown-menu translate-menu" aria-labelledby="dropdownMenuLink" >


              <div class="container px-0 product-catalog-dropdown">
                <div class="row">
                  <div class="col-md-2 px-0 product-tab">
                    <div class="list-group product-list" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action product-item" id="list-category0-copy-list" data-toggle="list" href="#list-category0-copy" role="tab" aria-controls="category0-copy"> Fructe Proaspete</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category1-copy-list" data-toggle="list" href="#list-category1-copy" role="tab" aria-controls="category1-copy"> Legume Proaspete</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category2-copy-list" data-toggle="list" href="#list-category2-copy" role="tab" aria-controls="category2-copy"> Sucuri Naturale</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category3-copy-list" data-toggle="list" href="#list-category3-copy" role="tab" aria-controls="category3-copy"> Salate si Plante Aromatice</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category4-copy-list" data-toggle="list" href="#list-category4-copy" role="tab" aria-controls="category4-copy"> Soia, Vegetale si Ceaiuri</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category5-copy-list" data-toggle="list" href="#list-category5-copy" role="tab" aria-controls="category5-copy"> Produse pentru diete speciale</a>
                      <a class="list-group-item list-group-item-action product-item" id="list-category6-copy-list" data-toggle="list" href="#list-category6-copy" role="tab" aria-controls="category6-copy"> Alimente si suplimente sport</a>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="tab-content h-100" id="nav-tabContent">
                      <div class="tab-pane fade h-100 show active h-100" id="list-category0-copy" role="tabpanel" aria-labelledby="list-category0-copy-list">

                        <div class="row h-100 tab-list-background tlb-bg0">
                          <div class="col-md-6">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> Rosaceae </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Mere & Pere </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Piersici & Caise </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Visine & Cirese </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Capsuni </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> Zmeura </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Berries </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> Afine </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Coacaze </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Kiwi </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Struguri </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Avocado</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Citrice</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> Lamai </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Portocale</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Mandarine & Clementine</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Grapefruit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Pomelo </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> Alte fructe proaspete </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Banane </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Mango </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> Pepeni </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category1-copy" role="tabpanel" aria-labelledby="list-category1-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg1">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category2-copy" role="tabpanel" aria-labelledby="list-category2-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg2">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category3-copy" role="tabpanel" aria-labelledby="list-category3-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg3">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category4-copy" role="tabpanel" aria-labelledby="list-category4-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg4">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category5-copy" role="tabpanel" aria-labelledby="list-category5-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg5">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade h-100" id="list-category6-copy" role="tabpanel" aria-labelledby="list-category6-copy-list">
                        <div class="row h-100 tab-list-background tlb-bg6">
                          <div class="col-md-7">

                            <div class="row">
                              <div class="col">

                                <!-- First column of links -->
                                <div class="row">
                                  <ul class="links">
                                    <li>
                                    <a href="#" class="top-link"> montes </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> eros </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> faucibus proin venenatis dolor </a>
                                    </li>
                                    <li>
                                    <a href="#" class="secondary-link"> arcu justo habitant</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> eleifend phasellus tristique </a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> mauris suspendisee </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> dapibus amet </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> cubilia bibendum ultrices </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> quam cras litora consectetur </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link">  dui lacus aliquam quis velit</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>

                              <div class="col">

                                <!-- Second column of links -->
                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> feugiat eleifend</a>
                                    </li>

                                    <li>
                                      <a href="#" class="secondary-link"> eget id </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> penetiubus tempor tristique</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> congaue</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> henderit</a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> fames dictustm sensectus</a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="row">

                                  <ul class="links">
                                    <li>
                                      <a href="#" class="top-link"> lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> auctor magna </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> massa senescut arcu </a>
                                    </li>
                                    <li>
                                      <a href="#" class="secondary-link"> curabitur ultrices </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>
    </div>
    </div>

    <!-- Logo -->
    <div class="col-lg-1 px-0 my-auto d-flex logo-header">
      <img class="mx-auto my-auto logo logo-height logo-white" src="images/logo-white.gif" alt ="Logo-header">
    </div>

    <!-- Search form -->
    <div class="col-lg-7 my-auto">
        <form>
          <div class="form-group mx-2 my-auto">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cauta produsul dorit...">
                  <span class="input-group-btn">
                      <button class="btn btn-danger custom-btn-color" type="button" name="search"><i class="fas fa-search"></i></button>
                  </span>
            </div>
          </div>
        </form>
      </div>

      <!-- My account & my cart dropdowns -->
      <div class="col-lg-3 d-flex justify-content-center align-self-center mx-auto my-auto">
        <div class="d-flex align-self-center padds">

          <div class="dropdown show">
          <a class="nav-top-right" href="#">
            <img class="mx-auto my-auto nav-svg" src="images/my-account.svg" alt="my-account" >
            <span class="pstyle lh-normal">
              Contul <br> meu
            </span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item header-item" href="#">Nume cont</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Detalii Cont</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Companii</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Adrese de livrare</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Comenzi</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Facturi</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Plati</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item my-account-item" href="#">Mesaje</a>
            <div class="dropdown-divider my-0"></div>
            <a class="dropdown-item log-out-item" href="#">Log out</a>
          </div>
        </div>

        </div>

        <div class="d-flex align-self-center padds">

          <div class="dropdown show">
          <a class="nav-top-right" href="#" data-toggle="tooltip" data-placement="right" title="Total: 6769 lei">
            <span class="badge badge-pill badge-danger badge-translate-scroll py-1 px-1">17</span>
            <img class="mx-auto my-auto nav-svg" src="images/shopping-cart.svg" alt="shopping-cart">
            <span class="pstyle lh-normal">
              Cosul <br> meu
           </span>
          </a>

          <div class="dropdown-menu dropdown-menu-right dropdown-cart" aria-labelledby="dropdownMenuLink">
            <div class="container product-scroll">

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 1 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x3 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 134,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 2 Cu Nume Foarte Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x30 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 2454,95Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 3 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x13 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 1304,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 4 Cu Nume Lung Extrem De Lung Foarte Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x103 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 94134,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 5 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x23 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 1534,76Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 6 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x8 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 523,99Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 7 </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x20 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 4524,45Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 8 Cu Nume Foarte Lung Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x1 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 99,95Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 9 Cu Nume Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x10 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 25,00Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>

              <div class="row product-in-cart my-2">

                <div class="col-8 product-in-cart-details">
                  <img class="product-image" name="product-image-1" src="images/product-image-1.jpg" >
                  <span class="product-name" name="product-name-1"> Produs 10 Cu Nume Lung Lung </span>
                </div>

                <div class="col product-order-details">
                  <div class="text-right" >
                    <span name="product-amount"> x2 </span>
                  </div>
                  <div class="text-right">
                    <span name="product-total-price"> 456,79Lei </span>
                  </div>
                  <div class="text-right">
                    <a class="delete-product" name="delete-product-1" href="#"> sterge </a>
                  </div>
                </div>

              </div>

              <div class="dropdown-divider my-1"></div>
          </div>

            <div class="row product-totals my-auto mx-auto">
              <div class="col">
                <span> 10005 produse</span>
              </div>

              <div class="col text-right">
                <span> 1234,56 lei</span>
              </div>

            </div>

            <div class="row justify-content-center my-2 mx-2">
              <button class="btn btn-danger w-100 button-cart"> vezi cos </button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
