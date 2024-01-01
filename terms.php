<?php 
session_start();
error_reporting(0);
require_once("db.php");
	//include("functions.php");
	$logPath = "log/terms_".date("Ymd").".txt";
	error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
  include 'header.php';
?>  

    <!-- hero-terms starts from here -->

    <section class="hero-terms">
      <div class="container-fluid d-flex justify-content-center">
        <h1 data-aos="fade-right" class="text-white text-center heading-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-end" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
          <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
        </svg> Terms & Conditions <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FB8202" class="bi bi-align-start" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
          <path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
        </svg></h1>
      </div>
    </section>
      <!-- hero-terms ends here -->
  

    <!-- terms starts from here -->

    <div class="container padding-top padding-bottom">
	<p data-aos="zoom-in" class="heading-4 mt-5 text-dark">Please read these term and conditions carefully before using https website (the “droidgames Service”, “Services”) provided by (Techview and JetSynthesys “ Provider “) with Ethio telecom, “Operator”</p>
	<p data-aos="zoom-in" class="heading-4 mt-2 text-dark">Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service. </p>
        
        <ul>
            <li data-aos="zoom-in" class="heading-4 mt-2 text-dark">  By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize your operator to share your mobile number with us, 
You can subscribe the services by sending Keyword OK to short code 7248
</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> Subscription would be automatically renewed and your account would be debited with 2ETB/day until you unsubscribe to the service.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> To unsubscribe you can click on the link in the My Account page or send STOP to 7248 </li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> To make use of this service, one must be more than 18 years old.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	Provider shall at no point be held responsible for any damage to the user’s hardware or software while using this service in any form. The user acknowledges that he/she is using the service purely at their own risk.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	Data charges apply for browsing & downloading contents on this portal.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	Upon subscription to this service you are giving the right to the operator and to Provider to send any promotional and notifications messages to your mobile number.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	All other standard operator terms and conditions apply.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	This service and the content provided via this service is owned by Provider and its partners/affiliates. This service & its content is meant for personal use of the subscriber. A subscription to this service gives no right to the user to use the service or the content it has acquired via this service for any commercial purposes. Any such misuse of service or its content without prior written approval of Provider may be considered a violation of the Intellectual property of Provider.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark"> 	Provider on its part will make best efforts to ensure that the content made available on the service is as per the Ethiopian law. If at any point a user finds the content offensive or inappropriate, it warrants not hold Provider responsible for any payment of any damages as such an act is to be considered purely unintentional on Provider’ s part.</li>
            <li data-aos="zoom-in" class="heading-4 mt-3 text-dark">  Provider at its sole discretion has the right to modify the terms and conditions of this service without any prior notice to the user. Provider also holds the right to stop, limit the use of or access to any and all parts of this to this service for a user without any prior notice.</li>
			<li data-aos="zoom-in" class="heading-4 mt-3 text-dark">  To reach our customer support team 
         Please call to +251977990404 
                     Email: sProvider10@gmail.com
</li>
            
          </ul>
    </div>



    <!-- terms ends here -->



    <?php 
  include 'footer.php';
?> 
