<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Development</title>
    <link rel="shortcut icon" href="assets/images/ico.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="home" href="#1">KONSTANTIN<span id="nyc">.NYC</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a id="s1" href="#1">Welcome</a></li>
            <li><a id="s2" href="#2">Work</a></li>
            <li><a id="s3" href="#3">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank" href="https://www.linkedin.com/in/konstantin-zamaraev-2441756b"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a target="_blank" href="https://www.facebook.com/konstantin.zamaraev.9"><i class="fa fa-facebook-square"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/konstantin.nyc/"><i class="fa fa-instagram"></i></a></li>
            <li><a target="_blank" href="https://github.com/zamaraevk"><i class="fa fa-github"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- jumbotron -->
    <div class="jumbotron" id="1">
      <div class="container">
   
        <h1>"The only way to do great work is to love what you do." Steve Jobs</h1>
        <p>Web Development</p>
  
        <!-- submit -->
       
        		<!-- Button to trigger modal --> 
            <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-envelope-o"></i></a>
            <a class="btn btn-primary" target="_blank" href="http://zamaraevk.github.io/assets/Konstantin_Zamaraev_Resume.pdf">Resume</a>
            <!-- Modal -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">New Message</h4>
                </div>
                <div class="modal-body">
                   <form class="form-horizontal" name="commentform" method="post" action="index.php">
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-md-12">
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="email" class="form-control" id="email" name="email" placeholder="yourmail@mail.com"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <textarea rows="6" class="form-control" id="comments" name="comments"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <button type="submit" value="Submit" id="send" class="btn btn-primary pull-right">Send</button>
                          </div>
                      </div>
                  </form>
                </div><!-- End of Modal body -->
                </div><!-- End of Modal content -->
                </div><!-- End of Modal dialog -->
            </div><!-- End of Modal -->
        

        <!-- submit end-->
      </div>
    </div>
     <!-- jumbotron end-->
    <section class="note">
     <div class="container">
       <div class="row">     
          <div class="col-md-4">
              <div class="media">
                      <div class="media-left">
                        <i class="fa fa-html5"></i>
                      </div>
                      <div class="media-body">
                        <p>HTML5 for modern web sites + comfortable coding and using tables for structure of HTML Emails</p>
                      </div>
                    </div>
           </div>
           <div class="col-md-4">
              <div class="media">
                      <div class="media-left">
                        <i class="fa fa-css3"></i>
                      </div>
                      <div class="media-body">
                        <p>CCS3 + experience with Sass(extension language) </p>
                      </div>
                    </div>
           </div>
           <div class="col-md-4">
              <div class="media">
                      <div class="media-left">
                         Js
                     </div>
                      <div class="media-body">
                        <p>Javascript + DOM Manipulation</p>
                      </div>
                    </div>
           </div>
          
       </div>  
        
    </div>
    </section> 
   <section id="2" class="portfolio">
     <div class="container portfolio" ng-app="instantSearch" ng-controller="InstantSearchController">
         <div class="row">
             <div class="col-md-12">
		<!-- Create a binding between the searchString model and the text field -->
		       <input type="text" id="search" ng-model="searchString" placeholder="Search..." />
	       </div>
         </div>
       <div class="row"> 
         <div ng-repeat="i in items | searchFor:searchString" class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a target="_blank" href="{{i.url}}">
              <div class="thumb-img">
                 <img ng-src="{{i.image}}"> 
              </div>
            </a>  
              <div class="info">
                  <div class="name">{{i.title}}</div>
                  <a target="_blank" href="{{i.url_git}}"><i class="fa fa-github"></i></a>
                <div class="features">
                    <span class="feature" ng-repeat="child in i.features | searchFor:searchString">{{child.feature}}</span>
                </div>  
              </div>
          </div>
        </div>
     </div>
       </div>
  </section>
  <section id="3" class="about">
  	<div class="container">
     <div class="row">
     				<h2>Hi, I'm Konstantin, Front-End Developer + Email Marketing Specialist.</h2>
         <div class="col-md-6">
         	<img src="https://s3.amazonaws.com/StartupStockPhotos/uploads/26.jpg" width="100%" style="padding-bottom:25px;">
         </div>
         <div class="col-md-6">
         	 <p> I graduated as an Engineer at Ufa State Petroleum Technological University in Russia in 2009, where I studied fundamentals of Computer Science and began building websites as a hobby. </p>
          
          <p> In 2014, I moved to New York and started deeply learning modern tools, frameworks and ways of creating digital experience. So far, I covered Responsive Design, Bootstrap 3, Sass, jQuery and Git. 
          
          I've worked for the Creative Circle agency as a freelancer and at the end of 2014 I started work as a email specialist at the marketing company Affinity Solutions, where I am responsible for building HTML emails and delivering. 
          
          <p>I have become very interested in MVC and covered some Ruby on Rails, but I have since changed my direction to JavaScript. I just fell in love with idea of using one language across full-stack development.</p>
          
          <p>Currenty I am learning AngularJS on my own and looking for place where I can grow as a web developer. I can't wait to dive and get deep understanding of Node JS:)</p>
          
             <p> Let's work together. Email me <a href="mailto:zamaraevk@gmail.com">here</a>. </p>
         </div>
    </div>
  </div>
 </section>        
  <section id="footer">
  	<div class="container">
   		<div class="row">
     			 <div class="col-md-8">
         		<p>&copy; 2016 - Portfolio Konstantin Zamaraev. All rights reserved.</p>
         </div>
         
         <div class="col-md-4">
         		<a target="_blank" href="https://www.linkedin.com/in/konstantin-zamaraev-2441756b"><i class="fa fa-linkedin-square"></i></a>
           <a target="_blank" href="https://www.facebook.com/konstantin.zamaraev.9"><i class="fa fa-facebook-square"></i></a>
           <a target="_blank" href="https://www.instagram.com/konstantin.nyc/"><i class="fa fa-instagram"></i></a>
           <a target="_blank" href="https://github.com/zamaraevk"><i class="fa fa-github"></i></a>
        </div>
   </div>
  </section>
      <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "zamaraevk@gmail.com";
    $email_subject = "Email from my website";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||        
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required    
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z\s.'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";   
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=http://zamaraevk.github.io">";
?>
 
<?php
}
?>
    <script src="assets/js/lib/angular.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery-2.2.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/lib/bootstrap.min.js"></script>
  </body>
</html>