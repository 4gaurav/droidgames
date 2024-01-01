<?php 
session_start();
error_reporting(0);
require_once("db.php");

	//include("functions.php");
	$logPath = "log/footer_".date("Ymd").".txt";
	error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
	//$msisdn =$_GET['msisdn'];
	//$_SESSION['msisdn']=$msisdn;
  //include 'header.php';
?>   <!-- footer starts from here -->
  <section class="footer">
    <div class="container footer-logo ">
      <h1 data-aos="fade-up" class="text-center text-white heading-3 pt-5">Let's Play Together</h1>
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
        <div class="col mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <img src="./assets/logo/DG-logo-640x120.png" alt="">
          </a>
          <p class="text-white heading-2">Droid Games is a leading gaming company, which provides new generation games
            to the world full of gamers.</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
          <h5 class="text-white heading-1">Resources</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/index.php" class="nav-link p-0 text-white heading-2">Home</a></li>
            <li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/subscription.php" class="nav-link p-0 text-white heading-2">My
                Subscription</a></li>
            <li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/terms.php" class="nav-link p-0 text-white heading-2">T&C</a></li>
          </ul>
        </div>

        <div class="col-md-3 offset-md-1 mb-3">
          <h5 class="text-white heading-1">Games</h5>
          <ul class="nav flex-column">

            <li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/html5.php" class="nav-link p-0 text-white heading-2">HTML5 Games</a>
            </li>
            <!--<li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/android.php" class="nav-link p-0 text-white heading-2">Android
                Games</a></li>-->
            <li class="nav-item mb-2"><a href="http://35.154.62.230/DROIDGAMESNEW/subscription.php" class="nav-link p-0 text-white heading-2">My
                Subscription</a></li>
          </ul>
          <!-- <form>
            <h5 class="text-white heading-1">Subscribe to our updates</h5>
            <p class="text-white heading-2">Monthly digest of what's new</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden heading-2">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary heading-2" type="button">Subscribe</button>
            </div>
          </form> -->
        </div>
      </footer>
    </div>

    <div class="container footer-below">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-white heading-2">© 2023 Droid Games</p>

        <a href="/"
          class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="./assets/logo/DG-logo-640x120.png" alt="">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="http://35.154.62.230/DROIDGAMESNEW/terms.php" class="nav-link px-2 text-white heading-2">Privacy Policy</a></li>
          <li class="nav-item"><a href="http://35.154.62.230/DROIDGAMESNEW/terms.php" class="nav-link px-2 text-white heading-2">T&C</a></li>

        </ul>
      </footer>
    </div>
  </section>

  <!-- footer ends here -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script> -->
  <script src="./script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script>
  var loader = document.getElementById("preloader");
  
  window.addEventListener("load", function(){
    
    loader.style.display = "none";
  })
</script>
</body>

</html>