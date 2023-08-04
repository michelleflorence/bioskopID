<?php

/** @var yii\web\View $this */

$this->title = 'BioskopID';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
  </head>
  <body>

    <section class="home-slider js-fullheight owl-carousel bg-white">
          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(templatebootstrap/images/toy-story.jpg);">
                  <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <div class="text mt-md-5">
                    <h1 class="mb-4">Best Cinema <br> only in BioskopID</h1>
                    <p><a href="http://localhost:8080/index.php?r=pemesanan-film/create" class="btn btn-primary btn-lg"><b> Book A Ticket </b></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(templatebootstrap/images/bg_3.jpg);">
                  <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <div class="text mt-md-5">
                    <h1 class="mb-4">You can watch <br> anything you want!</h1>
                    <p><a href="http://localhost:8080/index.php?r=pemesanan-film/create" class="btn btn-primary btn-lg"><b> Book A Ticket </b></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(templatebootstrap/images/b-1.jpg);">
                  <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <div class="text mt-md-5">
                    <h1 class="mb-4">Everything you need <br> is on BioskopID</h1>
                    <p><a href="http://localhost:8080/index.php?r=pemesanan-film/create" class="btn btn-primary btn-lg"><b> Book A Ticket </b></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading"> Cinema </span>
          <h2 class="mb-4">Our Latest Movies</h2>
        </div>
      </div>
      
      <!-- Latest Movies -->
      <section id="movies-list">
          <!-- list 1 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/godzilla-vs-kong.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                  Godzilla vs Kong <br> (2021)
              </a>
          </div>
          <!-- list 2 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/raya.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                  Raya and The Last Dragon <br> (2021)
              </a>
          </div>
        <!-- list 3 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/peninsula.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Peninsula <br> (2021)
              </a>
          </div>
          
          <!-- list 4 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/venom-2.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                  Venom: Let There Be Carnage <br> (2021)
              </a>
          </div>
          <!-- list 5 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/mortal-kombat.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Mortal Kombat <br> (2021)
              </a>
          </div>
          <!-- list 6 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/mulan.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Mulan <br> (2020)
              </a>
          </div>
          

          <!-- list 7 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/dolittle.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Dolittle <br> (2020)
              </a>
          </div>
          <!-- list 8 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/ww-1984.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Wonder Woman 1984 <br> (2020)
              </a>
          </div>
          <!-- list 9 -->
          <div class="movies-box">
              <!-- code for insert image -->
              <div class="movies-img">
                  <div class="quality">HDRip</div>
                  <img src="templatebootstrap/images/bop.jpg">
              </div>
              <!-- code for insert text -->
              <a href="#">
                Birds Of Prey: Harley Quinn <br> (2020)
              </a>
          </div>
      </section>
    </section>

    <section>
      <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading"> Price List </span>
            <h2 class="mb-4">More Information Below:</h2>
          </div>
      </div>
      <div class="row">
         <!-- div 1 -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/godzilla-vs-kong.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Godzilla VS Kong (2021)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 40.000</span>
	                </div>
	              </div>
              </div>
            </div>

            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/raya.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Raya and The Last Dragon (2021)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 40.000</span>
	                </div>
	              </div>
	             </div>
            </div>

            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/peninsula.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Peninsula (2021)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 40.000</span>
	                </div>
	              </div>
	             </div>
            </div>
        	</div>

          <!-- Div 2 -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/venom-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Venom: Let There Be Carnage (2021)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 40.000</span>
	                </div>
	              </div>
              </div>
            </div>

            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/mortal-kombat.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
                    <h3>Mortal Kombat (2021)</h3>
	                </div>
	                <div class="one-forth">
                    <span class="price">IDR 40.000</span>
	                </div>
	              </div>
              </div>
            </div>

            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/mulan.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
                    <h3>Mulan (2020)</h3>
	                </div>
	                <div class="one-forth">
                    <span class="price">IDR 35.000</span>
	                </div>
	              </div>
	            </div>
            </div>
        	</div>

          <!-- Div 3 -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/dolittle.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Dolittle (2020)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 35.000</span>
	                </div>
	              </div>
	            </div>
            </div>

        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/ww-1984.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Wonder Woman 1984 (2020)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 35.000</span>
	                </div>
	              </div>
	            </div>
            </div>

        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(templatebootstrap/images/bop.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Birds of Prey: Harley Quinn (2020)</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">IDR 35.000</span>
	                </div>
	              </div>
	            </div>
            </div>
        	</div>

        </div>
    	</div>
    </section>
    
  </body>
</html>