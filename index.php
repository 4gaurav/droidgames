<?php 
session_start();
error_reporting(0);
require_once("db.php");

	//include("functions.php");
	$logPath = "log/index_".date("Ymd").".txt";
	error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
	$msisdn =$_GET['msisdn'];
	$_SESSION['msisdn']=$msisdn;
	error_log("called url: ".date('Ymd His').": ".$_SESSION['msisdn']."\n", 3, $logPath);
  include 'header.php';
?>  

  <!-- hero starts from here -->

  <section class="hero">
    <div class="container-fluid p-0">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <a href=""><img src="./assets/hero/bg7.png" class="d-block w-100" alt="..." /></a>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <a href=""><img src="./assets/hero/bg6.png" class="d-block w-100" alt="..." /></a>
          </div>
          <div class="carousel-item">
            <a href=""><img src="./assets/hero/bg4.png" class="d-block w-100" alt="..." /></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- hero ends here -->

  <!-- about us starts from here -->

  <!-- <section id="about" class="about padding-top padding-bottom">
      <div class="container">
        
        <div class="row">
          <div  class="col-md-7">
            <h1 data-aos="fade-right"  class="heading-3 text-dark mt-5">
              Droid Games - <br> The Games World Company
            </h1>
            <h3 data-aos="zoom-in" class="heading-4 mt-4">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore deleniti cumque perspiciatis corporis amet molestiae, vero magni possimus cum incidunt, assumenda ipsum culpa blanditiis harum sequi odit ab inventore quae tenetur delectus perferendis est nam! Iusto, consequuntur doloribus molestiae provident aliquid voluptatem iste fugiat. Ipsa, quisquam corporis.</h3>
            <h3 data-aos="zoom-in" class="heading-4 mt-4">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore deleniti cumque perspiciatis corporis amet molestiae, vero magni possimus cum incidunt, assumenda ipsum culpa blanditiis harum sequi odit ab inventore quae tenetur delectus perferendis est nam! Iusto, consequuntur doloribus molestiae provident aliquid voluptatem iste fugiat. Ipsa, quisquam corporis.</h3>
            
          </div>
          <div data-aos="fade-up" class="col-md-5 mt-5 img-hover-zoom">
          <a href=""><img src="./assets/about/about.png" class="img-fluid" alt=""></a>
          </div>
        </div>
        
      </div>
    </section> -->

  <!-- <section class="skills">
      <div class="container">
        <div class="skills-flex-container">
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div>
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div>
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div>
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div>
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div>
          <div class="box">
            <div class="image">
              <a href=""><img src="./assets/top/n1.png" alt="xd"></a>
            </div>
            <div class="title">lorem</div>
          </div> -->
  <!-- <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/illustrator.png" alt="illustrator">
            </div>
            <div class="title">Illustrator</div>
          </div>
    
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/pr.png" alt="premiere pro">
            </div>
            <div class="title">Premiere Pro</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/ae.png" alt="after effects">
            </div>
            <div class="title">After Effects</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/blender.png" alt="blender">
            </div>
            <div class="title">Blender</div>
          </div> -->
  <!-- </div>
      </div>
    </section> -->


  <section>
    <div class="container padding-top padding-bottom about">
      <h1 data-aos="fade-right" class="heading-3 text-dark"> New Games <svg xmlns="http://www.w3.org/2000/svg"
          width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></h1>
      <div class="row row-cols-2 row-cols-md-4 mt-5">

        <div class="col mb-3 ">
          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/speedpurge/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/speedpurge.png"></a>
          </div>
          <div class="">
            <div data-aos="fade-left" class=" text-center mt-3 text-dark heading-5">Speed Purge</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/candyrush/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/CandyRush.jpeg"></a>
          </div>
          <div class="">
            <div data-aos="fade-up-left" class="text-center mt-3 text-dark heading-5">Candy Rush</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/stickpanda/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/stickpanda.png"></a>
          </div>
          <div class="">
            <div data-aos="fade-right" class="text-center mt-3 text-dark heading-5">Stick Panda</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/cars/index.html"><img data-aos="fade-down-right" src="http://35.154.62.230/content/htmlgames/cars.png" class="card-img-top" style="border-radius:3rem;"
                alt="..." /></a>
          </div>
          <div class="">
            <div data-aos="fade-right" class="text-center mt-3 text-dark heading-5">Cars</div>
          </div>


        </div>
        <!-- <div data-aos="zoom-in" class="col-md-3 mb-3">
            <div class="card new">
              <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n4.jpg"></a>
              <div class="new-po">
                <div class="new-text">Overwatch</div>
              </div>

            </div>
          </div> -->
      </div>

      <div class="row row-cols-2 row-cols-md-4 mt-4">

        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/duckshooter/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/duckshooter.png"></a>
          </div>
          <div class="">
            <div data-aos="fade-left" class="text-center mt-3 text-dark heading-5">Duck Shooter</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/funnysoccer/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/funnysoccer.png"></a>
          </div>
          <div class="">
            <div data-aos="fade-up-right" class="text-center mt-3 text-dark heading-5">Funny Soccer</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
            <a href="http://35.154.62.230/content/htmlgames/brickout/index.html"><img data-aos="fade-down-right"
                class="img-fluid " style="border-radius:3rem;"  alt="100%x280"
                src="http://35.154.62.230/content/htmlgames/BrickOut.png"></a>
          </div>
          <div class="">
            <div data-aos="fade-right" class="text-center mt-3 text-dark heading-5">Brick Out</div>
          </div>


        </div>
        <div class="col mb-3">

          <div class="d-flex justify-content-center ">
           <a href="http://35.154.62.230/content/htmlgames/slowdown/index.html"><img data-aos="fade-down-right" src="http://35.154.62.230/content/htmlgames/slowdown.png" class="card-img-top" style="border-radius:3rem;"
                alt="..." /></a>
          </div>
          <div class="">
            <div data-aos="fade-right" class="text-center mt-3 text-dark heading-5">Slow Down</div>
          </div>


        </div>
        <!-- <div data-aos="zoom-in" class="col-md-3 mb-3">
            <div class="card new">
              <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n8.jpg"></a>
              <div class="new-po">
                <div class="new-text">Bioshock</div>
              </div>

            </div>
          </div> -->
      </div>
    </div>
  </section>

  <!-- about us ends here -->

  <!-- top games starts from here -->

  <section>
    <div class="container">
      <h1 data-aos="fade-right" class="heading-3 text-dark">Top Games <svg xmlns="http://www.w3.org/2000/svg"
          width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></h1>
    </div>
  </section>

  <section class="top">

    <div class="container-fluid p-0 padding-bw">



      <article class="wrapper">
        <div class="marquee">
          <div class="marquee__group img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/billiards/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Billiards_new.jpg" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/bearchase/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Bear_Chase.png" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/bable/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Babel_tower.jpeg" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/animalcrush/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Animal_Crush_new.png" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/2048/index.html"><img
                src="http://35.154.62.230/content/htmlgames/2048_new.jpg" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/fruitsnake/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Fruit_Snake_new.png" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/frogsuperbubbles/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Frog_Super_Bubbles.png" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>
            <a href="http://35.154.62.230/content/htmlgames/flappybounce/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Flappy_Bounce_new.jpeg" data-aos="zoom-in-down" class="img-fluid"
                alt=""></a>

          </div>

          <div aria-hidden="true" class="marquee__group img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/billiards/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Billiards_new.jpg" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/bearchase/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Bear_Chase.png" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/bable/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Babel_tower.jpeg" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/animalcrush/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Animal_Crush_new.png" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/2048/index.html"><img
              src="http://35.154.62.230/content/htmlgames/2048_new.jpg" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/fruitsnake/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Fruit_Snake_new.png" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/frogsuperbubbles/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Frog_Super_Bubbles.png" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>
          <a href="http://35.154.62.230/content/htmlgames/flappybounce/index.html"><img
              src="http://35.154.62.230/content/htmlgames/Flappy_Bounce_new.jpeg" data-aos="zoom-in-down" class="img-fluid"
              alt=""></a>


          </div>
        </div>


    </div>
    </article>


    </div>
  </section>



  <!-- top games ends here -->




  <!-- featured games starts from here -->


  <section>
    <div class="container padding-top padding-bottom">
      <h1 data-aos="fade-right" class="heading-3 text-dark">Featured Games <svg xmlns="http://www.w3.org/2000/svg"
          width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></h1>
      <div class="row row-cols-2 row-cols-md-4 g-4 mt-2">
        <div data-aos="flip-left" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/flapcatsteampunk/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Flappy_Cat_new.png" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Flap Cat</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-up" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/FishingLife/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Fishing_Life_new.png" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Fishing Life</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-right" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/dragonjump/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Dragon_Jump_new.png" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Dragon Jump</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-right" class="col">
          <div class="card h-100 img-hover-zoom">
             <a href="http://35.154.62.230/content/htmlgames/candyfusion/index.html"><img
                src="http://35.154.62.230/content/htmlgames/CandyFusion.png" class="card-img-top" alt="..." /></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Candy Fusion</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-md-4 g-4 mt-2">
        <div data-aos="flip-left" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/blocker/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Blocker_new.png" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Blocker</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-up" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/crazyrunner/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Crazy_Runner_new.png" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Crazy Runner</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-right" class="col">
          <div class="card h-100 img-hover-zoom">
            <a href="http://35.154.62.230/content/htmlgames/crazycowboy/index.html"><img
                src="http://35.154.62.230/content/htmlgames/Crazy_Cowboy_new.jpg" class="card-img-top" alt="..."></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Crazy Cowboy</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="flip-right" class="col">
          <div class="card h-100 img-hover-zoom">
             <a href="http://35.154.62.230/content/htmlgames/snakeblast/index.html"><img src="http://35.154.62.230/content/htmlgames/snakeblast.png" class="card-img-top"
                alt="..." /></a>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-7">
                  <h3 class="heading-5 space">Snake Blast</h3>
                </div>
                <div class="col-md-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#09174A" class="bi bi-star-half"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- featured games ends here -->

  <!-- quotes starts from here -->

  <section>
    <div class="container-fluid quotes">
    </div>
  </section>

  <!-- quotes ends here -->

  <!-- new games starts from here -->


  <!-- <section>
      <div class="container-fluid padding-top">
        <h1 data-aos="fade-right" class="heading-3 text-dark px-5 mx-5">New Games <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg></h1>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">

                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n1.webp"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Redemption</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n2.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Diablo</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n3.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Fandango</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n4.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Civilization</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n5.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Tetris</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n6.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Fortress</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n7.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Fighter</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n8.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Scrolls</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n9.jpg"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Metal Gear</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n10.png"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Quoder</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n11.webp"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Pinciobat</div>
                    </div>

                  </div>
                </div>
                <div data-aos="zoom-in" class="col-md-3 mb-3">
                  <div class="card new">
                    <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n12.avif"></a>
                    <div class="new-po">
                      <div class="new-text text-dark heading-5">Herber</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section> -->


  <section>
    <div class="container padding-top">
      <h1 data-aos="fade-right" class="heading-3 text-dark">Fun Games <svg xmlns="http://www.w3.org/2000/svg"
          width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></h1>
      <div class="row row-cols-2 row-cols-md-4 mt-4">

        <div data-aos="zoom-in" class="col mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/flappywitchfly/index.html"><img class="img-fluid new-img"
                alt="100%x280" src="http://35.154.62.230/content/htmlgames/flappywitchfly.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Flappy Witch</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/defthand/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/defthand.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Defthand</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/dangerrunning/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/dangerrunning.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Danger Running</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/ropeninja/index.html"><img src="http://35.154.62.230/content/htmlgames/ropeninja.jpg" class="card-img-top new-img"
                alt="..." /></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Rope Ninja</div>
            </div>

          </div>
        </div>
        <!-- <div data-aos="zoom-in" class="col-md-3 mb-3">
            <div class="card new">
              <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n4.jpg"></a>
              <div class="new-po">
                <div class="new-text">Overwatch</div>
              </div>

            </div>
          </div> -->
      </div>

      <div class="row row-cols-2 row-cols-md-4">

        <div data-aos="zoom-in" class="col mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/crazymatch3/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/crazymatch3.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Crazy Match 3</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/escape/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/escape.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Escape</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/catandghosts/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/catandghosts.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Cat and Ghosts</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
             <a href="http://35.154.62.230/content/htmlgames/princessgoldbladeandthedangerouswaters/index.html"><img src="http://35.154.62.230/content/htmlgames/princessgoldbladeandthedangerouswaters.png" class="card-img-top new-img"
                alt="..." /></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Princess Gold</div>
            </div>

          </div>
        </div>
        <!-- <div data-aos="zoom-in" class="col-md-3 mb-3">
            <div class="card new">
              <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n8.jpg"></a>
              <div class="new-po">
                <div class="new-text">Bioshock</div>
              </div>

            </div>
          </div> -->
      </div>


      <div class="row row-cols-2 row-cols-md-4">

        <div data-aos="zoom-in" class="col mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/trackracer/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/trackracer.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Track Racer</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/tetriscube/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/tetriscube.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Tetris Cube</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/sweetmatch3/index.html"><img class="img-fluid new-img"
              alt="100%x280" src="http://35.154.62.230/content/htmlgames/sweetmatch3.png"></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Sweet Match 3</div>
            </div>

          </div>
        </div>
        <div data-aos="zoom-in" class="col-md-3 mb-3">
          <div class="card new">
            <a href="http://35.154.62.230/content/htmlgames/candypig/index.html"><img
                src="http://35.154.62.230/content/htmlgames/CandyPig.png" class="card-img-top new-img" alt="..." /></a>
            <div class="new-po">
              <div class="new-text text-dark heading-5">Candy Pig</div>
            </div>

          </div>
        </div>
        <!-- <div data-aos="zoom-in" class="col-md-3 mb-3">
            <div class="card new">
              <a href=""><img class="img-fluid new-img" alt="100%x280" src="./assets/new/n12.avif"></a>
              <div class="new-po">
                <div class="new-text">Skater</div>
              </div>

            </div>
          </div> -->
      </div>

    </div>
  </section>


  <!-- new games ends here -->




  <!-- testimonials starts from here -->

  <section>

    <div class="container test mt-5 mb-5">
      <h1 data-aos="fade-right" class="heading-3 text-dark">Games Review <svg xmlns="http://www.w3.org/2000/svg"
          width="20" height="20" fill="#FB8202" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg></h1>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img data-aos="flip-right" class="rounded-circle shadow-1-strong mb-4 center" src="http://35.154.62.230/content/htmlgames/CandySuperLines.png"
              alt="avatar" style="width: 300px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 data-aos="zoom-in-down" class="mb-3 text-center heading-2 text-dark">Candy Superlines</h5>

                <p data-aos="zoom-out-up" class=" text-center heading-6 text-dark">
                  <i class="bi bi-quote text-dark"></i>
                  Candy Superlines is the most popular game of this generation that you can Latest Mega 2019 games offer you
                   league and also alow you to make youe and smile
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
            </ul>

          </div>
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="http://35.154.62.230/content/htmlgames/Crazy_Runner_new.png" alt="avatar"
              style="width: 300px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3 text-center heading-2 text-dark">Crazy Runner</h5>

                <p class="text-center heading-6 text-dark">
                  <i class="bi bi-quote text-dark"></i>
                  Crazy Runner is the most popular game of this generation that you can Latest Mega 2019 games offer you
                  league and also alow you to make youe and smile
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
            </ul>
          </div>
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="http://35.154.62.230/content/htmlgames/Fishing_Life_new.png" alt="avatar"
              style="width: 300px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3 text-center heading-2 text-dark">Fishing Life</h5>

                <p class="text-center heading-6 text-dark">
                  <i class="bi bi-quote text-dark"></i>
                  Fishing Life is the most popular game of this generation that you can Latest Mega 2019 games offer you
                 league and also alow you to make youe and smile
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
              <li><i class="bi bi-star-fill"></i></li>
            </ul>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>



  <!-- testimonials ends here -->




  <?php 
  include 'footer.php';
?>  