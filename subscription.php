<?php 
	session_start();
error_reporting(0);
require_once("db.php");
	//include("functions.php");
	$logPath = "log/subscription_".date("Ymd").".txt";
	error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
  include 'header.php';
//$_SESSION['msisdn']=$msisdn;
$msisdn=$_SESSION['msisdn'];
if($msisdn==''){
	$msisdn = $_GET['msisdn'];
}
if(!empty($msisdn))
    { 
$qry = "select  * from tbl_subscription_digicomethopia_droid where msisdn = '$msisdn'";
//echo $qry;
  $result = mysqli_query($con1,$qry);
  error_log("qry:" . date('Ymd His') . ": " . $qry . "\n", 3, $logPath);
  if (!$result) {
    echo mysqli_error();
  }
  $isSubscribed = mysqli_num_rows($result);  
  if($isSubscribed > 0) {
    $_SESSION['act'] ="1";
    $_SESSION['msisdn']=$msisdn;   
  } else {
     $_SESSION['msisdn'] = $msisdn;
	 $_SESSION['act'] ="5";
  }
}

?>  

<!-- hero-terms starts from here -->

<section class="hero-terms">
  <div class="container-fluid d-flex justify-content-center">
    <h1 data-aos="fade-right" class="text-white text-center heading-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-end" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
      <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
    </svg> My Subscription <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-start" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
      <path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
    </svg></h1>
  </div>
</section>
  <!-- hero-terms ends here -->


    <!-- subscription starts from here -->
	
<?php	if($_SESSION['act']=='1')
{	
$Query = "select  * from tbl_subscription_digicomethopia_droid.php where msisdn = '$msisdn' ";
			$result=mysqli_query($con1,$Query);
		while($mis_array=mysqli_fetch_assoc($result)) {			
			$regdate = $mis_array['regdate'];
			$validitydate = $mis_array['validitydate'];
			//$statuss = $mis_array['statuss'];
			//$price= $mis_array['price'];
		}
		 error_log("regdate:" . date('Ymd His') . ": " . $regdate . "\n", 3, $logPath);
		  error_log("qry:" . date('Ymd His') . ": " . $qry . "\n", 3, $logPath);
		echo "Last Billing Date & Time :  $regdate";
 		echo "<br>";
 		echo "<br>";
		echo " Next Billing Date & Time : $validitydate";
 		echo "<br>";
 		echo "<br>";
		
		echo "<center>";
		
		?> <div class="container sub padding-top padding-bottom">
 
<div data-aos="fade-up" >
  <h3  class="heading-5 mt-4 text-center text-dark">
    Dear Customer!</h3>
</div >
  <div data-aos="zoom-in">
    <h3  class="heading-4 mt-4 text-center text-dark">
      You are currently  subscribed for the "DroidGames" service</h3>
  </div>
  
    <div data-aos="flip-up" class="d-flex justify-content-center mt-5">
      <a href="sms:7248;?&body=stop" class="btn-sub">Unsubscribe</a>
    </div>
   
</div>
		
<?php } else {
error_log(date('Ymd His').": act= ".$_SESSION['act']."  into final else \n", 3, $logPath);
	?> 

<div class="container sub padding-top padding-bottom">
  <!-- <h1 data-aos="fade-right" class="text-center text-dark heading-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-end" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
    <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
  </svg> My Subscription <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-start" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
    <path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
  </svg></h1> -->
<div data-aos="fade-up" >
  <h3  class="heading-5 mt-4 text-center text-dark">
    Dear Customer!</h3>
</div >
  <div data-aos="zoom-in">
    <h3  class="heading-4 mt-4 text-center text-dark">
      You are currently not subscribed for the "DroidGames" service. Request you to please subscribe...</h3>
  </div>
  
    <div data-aos="flip-up" class="d-flex justify-content-center mt-5">
      <a href="sms:7248;?&body=ok" class="btn-sub">Subscribe Now</a>
    </div>
	
<!--	<button class="btn btn-primary" type="submit" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background-color:#27AE60;height:50px;width:250px;border-radius: 25px;font-size: 23px;">
<a href="sms:27000;?&body=START%20JOKE" title="sms" style="color:white;text-decoration: none;font-size: 25px;">SUBSCRIBE</a></button> -->
    
</div>

<?php  } ?>

    <!-- subscription ends here -->


    <?php 
  include 'footer.php';
?> 
