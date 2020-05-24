<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("function.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome_resp'];
   $nome = $_SESSION['user']['nome_filho'];
   $email = $_SESSION['user']['email'];
   $telefone = $_SESSION['user']['telefone'];
   $estado = $_SESSION['user']['estado'];
   $cidade = $_SESSION['user']['cidade'];
   $unidade = $_SESSION['user']['unidade'];
   $sobre = $_SESSION['user']['sobre'];
   $id = $_SESSION['user']['id']


?>

<?php 

$con = mysqli_connect("localhost", "root", "root", "mysqlapp") 
or die("Error " . mysqli_error($con));


 $last_id = mysqli_insert_id($con);

 $que = "SELECT * FROM usuario where id='$id' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);
  

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">
<!--<![endif]-->

<head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Meses Dourados</title>
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
  ================================================== -->

<link rel="stylesheet" href="stylesheets/animate.css">
<link rel="stylesheet" href="stylesheets/layout.css">
<link rel="stylesheet" href="stylesheets/responsive.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="image_gallery/css/jquery.fancybox.css">
<link rel="stylesheet" href="image_gallery/css/styles.css">
    
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

 

<!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="stylesheets/ie7.css">
<![endif]-->
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Favicons
	================================================== -->
<link rel="shortcut icon" href="img/favicon.png">



</head>
<body>

<!-- Primary Page Layout
	================================================== --> 
     <!-- Start  Mobile & Tab Header-->
    <div class="rzm_mobile_header col-sm-12 col-xs-12 hidden-lg hidden-md">
        <div class="mob_nav  navbar navbar-inverse navbar-fixed-top" id="slide-nav">
        	
        	<div class="navbar-header">
				 <a class="navbar-toggle"></a>
             </div>

             <div id="slidemenu" class="navbar-default navbar-inverse">
                    <ul class="nav navbar-nav primary">
               
                    <li><a href="#home">About </a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#client">Clients</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a class="contact-form" href="#contact">Contact</a></li>
                    
                  </ul>
             </div>
        </div>
    </div>
  
    <!-- End  Mobile & Tab Header-->
   <!-- Start outside-header -->
<div class="rzm_outside-header" id="home">
 
  
</div>
<!-- End outside-header -->
<!-- Start Outside Main -->

<div class="outside-main" id="page-content">
  
  <!-- Start Main Container -->
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 rzm_profile_nav">
            <div class="sticky">
           <div class="logo">
            <img src="img/profile_photo.jpg" alt="profile_photo" class="img-responsive img-circle">
           </div>
             <!-- Start primary navigation -->
          <div class="rzm_main_menu hidden-sm hidden-xs">
              <ul class="primary">
           
                <li class="first"><a href="#home">About </a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#client">Clients</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a class="contact-form" href="#contact">Contact</a></li>
                <li><a href="#home" class="go_to_top">Top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
              </ul>
              
              <div class="social_nav">
               <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-behance" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
              </div>
          </div>
          <!-- End Primary navigation -->
        </div>
    
        </div>
    
    <div class="clearfix"></div>
    <!-- Start Profile Section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 first profile rez_about">
      <div class="rez_top_title">
      		<h1>Olá, Bem-Vind@ <?php echo $nome ?> </h1>
            <p>I draw lines & shapes with colors and make them awesome!</p>
      </div>
      <h1 class="title">About Me</h1>
     
      <!-- Start About section -->
      <div class="col-md-12 col-sm-12 col-xs-12  omega  about">
        <p class="about_info">Born & raised in California, America. I'm genuinely inspired by industrial minimalism and different cultures. Over eight years in business, I have had a chance to work on a variety of projects, with agencies, companies or even individuals. Custom work is my territory, branding, web design, UI/UX design, print design & any offline design.<br><br>

You can find my all design work on <a href="#">Dribbble</a> and <a href="#">Behance,</a> random thoughts on <a href="#">Twitter</a> and beautiful pics on <a href="#">Instagram.</a> If you want to hire me please send me an <a href="#">email</a> or <a href="#">contact.</a> </p>

        <div class="rzm_progress_bar">
            <h4>Photoshop</h4>
            <small class="pull-right rzm_perchantage">90%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width: 10%;">
                    <span class="sr-only">90% Complete</span>
                  </div>
            </div>
        </div><!--Progress Item One-->
    
        <div class="rzm_progress_bar">
            <h4>Illustrator</h4>
            <small class="pull-right rzm_perchantage">100%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:5%;">
                    <span class="sr-only">100% Complete</span>
                  </div>
            </div>
        </div><!--Progress Item Two-->
    
        <div class="rzm_progress_bar">
            <h4>InDesign</h4>
            <small class="pull-right rzm_perchantage">85%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85" style="width:10%;">
                    <span class="sr-only">85% Complete</span>
                  </div>
            </div>
        </div><!--Progress Item three-->
    
        <div class="rzm_progress_bar">
            <h4>HTML/CSS</h4>
            <small class="pull-right rzm_perchantage">60%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60" style="width: 5%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
            </div>
        </div><!--Progress Item three-->
    
        <div class="rzm_progress_bar">
            <h4>After Effects</h4>
            <small class="pull-right rzm_perchantage">70%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70" style="width: 10%;">
                    <span class="sr-only">70% Complete</span>
                  </div>
            </div>
            
       </div><!--Progress Item four-->
      </div>
      
      <!-- End About -->
      
      <div class="clear">
      </div>
      
    </section>
    <!-- End About section -->
   
    
    <!-- Start Portfolio section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_portfolio" id="portfolio">
      <h1 class="title">Portfolio</h1>
      <section class="filter-section">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                   
                        <div class="filter-container isotopeFilters3">
                            <ul class="list-inline filter">
                                <li class="active"><a href="#" data-filter="*">All </a></li>
                                <li><a href="#" data-filter=".illustrations">Logo</a></li>
                                <li><a href="#" data-filter=".photography">Branding</a></li>
                                <li><a href="#" data-filter=".websites">Web</a></li>
                                <li><a href="#" data-filter=".art">Photography</a></li>
                                <li><a href="#" data-filter=".art">Poster</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            
        </section>
        <section class="portfolio-section port-col">
                <div class="row">
                    <div class="isotopeContainer3">
                    
                    <div class="col-sm-6 isotopeSelector art">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/22.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-22" href="image_gallery/images/23.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/24.jpg" rel="portfolio-22"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/25.jpg" rel="portfolio-22"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                        </article>
                    </div>
                    
                    <div class="col-sm-6 isotopeSelector illustrations">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/23.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-23" href="image_gallery/images/24.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/25.jpg" rel="portfolio-23"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/26.jpg" rel="portfolio-23"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                           
                        </article>
                    </div>
                    
                    <div class="col-sm-6 isotopeSelector websites">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/24.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-24" href="image_gallery/images/25.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/26.jpg" rel="portfolio-24"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/27.jpg" rel="portfolio-24"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                        </article>
                    </div>
                    
                    <div class="col-sm-6 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/25.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-25" href="image_gallery/images/26.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/27.jpg" rel="portfolio-25"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/23.jpg" rel="portfolio-25"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                        </article>
                    </div>
                    
                    <div class="col-sm-6 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/26.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-26" href="image_gallery/images/27.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/23.jpg" rel="portfolio-26"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/24.jpg" rel="portfolio-26"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                           
                        </article>
                    </div>
                    
                    <div class="col-sm-6 isotopeSelector art">
                        <article class="">
                            <figure>
                                <img src="image_gallery/images/27.jpg" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-27" href="image_gallery/images/23.jpg"><i class="fa fa-plus-circle"></i></a>
                                            <a title="Second Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/24.jpg" rel="portfolio-27"></a>
                                            <a title="Third Image"  class="fancybox-pop" style="display: none" href="image_gallery/images/25.jpg" rel="portfolio-27"></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    
                    
                    
                    
                    </div>
                </div>
        </section>
        <div class="rzm_button">
             <a href="" class="btn btn-sm btn-default">Show More</a>
        </div>
	</section>
 <!-- End Profile Section--> 
   <!-- Start Experience section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_experience" id="experience">
      <h1 class="title">My Experience</h1>
      <div id="rzm_timeline">
            
        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge active_box">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Mar 2016 - Present </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-xs-12  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul active">
                                <li><span class="rzm_importo">Vebox Creative</span></li>
                                <li><span class="rzm_causale">CEO, Graphic Designer </span> </li>
                                
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        
        <!--due -->
        
        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge ">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Aug 2015 - Mar 2016 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">Gravity Inc</span></li>
                                <li><span class="rzm_causale">Web Analysist, UI Designer </span> </li>
                                </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
<!--Expeeience Item two-->
<div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Jan 2013 - Aug 2015 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">WebFX Corporation</span></li>
                                <li><span class="rzm_causale">UI/UX Desinger, SEO Specialist </span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
  </div>
<!--expereince Item three-->
<div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge">    
            </div>
        
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Sep 2013 - Jan 2013 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">Colorista</span></li>
                                <li><span class="rzm_causale">Retoucher, Assistant Photographer </span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
<!--expereince Item four-->
<div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge">    
            </div>
        
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Nov 2010 - Sep 2013 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">GraphicPen</span></li>
                                <li><span class="rzm_causale">Print Designer, UI Designer </span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
<!--expereince Item Five-->
    
        </div>
		<div class="rzm_button">
        	<a href="" class="btn btn-sm btn-default"><i class="fa fa-download" aria-hidden="true"></i>Resume</a>
        </div>
    </section>
   <!-- End Experience section -->
   
   <!-- Start Client section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_client" id="client">
    	<h1 class="title">Clients</h1>
        <p>Had the privilege to work with companies such as Adobe, Udemy, Puma, Google, GravityPayments & more.</p>
        <small>Also featured in Behance, SitePoint, Envato, DesignMag, Dribbble etc.</small>
        <div class="rzm_client_img">
        	<img src="img/reebook.png" alt="" class="no_padding_left">
            <img src="img/Cocacola.png" alt="">
            <img src="img/adidas.png" alt="">
            <img src="img/sony.png" alt="" class="no_padding_right">           
        </div>
    </section>
   <!-- End Client section -->
   <!-- Start Testimonial section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_Testimonial" id="testimonial">
    	<h1 class="title">Testimonial</h1>
        <div class="rzm_testimonial_content">
              <div id="carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel" data-slide-to="1"></li>
                  <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/testimonial_1.jpg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                              <blockquote class="adjust2">
                                <p>Daniel Ray</p>
                                <small>CEO, GravityPayments</small> </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/testimonial_2.jpg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                              <blockquote class="adjust2">
                                <p>Steven M.</p>
                                <small>Marketing Administrator, Hoslk llc</small> 
                              </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/testimonial_3.jpg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                              <blockquote class="adjust2">
                                <p>D. Riccardi</p>
                                <small>HR Administrator, Tubliv llc</small> 
						    </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                
                 </div>
            </div>

    </section>
   <!-- End Testimonial section -->
   
   <!-- Start Contact section -->
   <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_contact" id="contact">
   		<h1 class="title">Contact</h1>
      <!-- Start Contact Form -->
<form id="contact-form" method="post" action="contact-form.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                  <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                          
                              
                          
                            <div class="row">
                                <div class="col-md-12 col-xs-12 input-group rzm_msz_box">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Type your email here! If you want to say just “Hi”, that is also okay." rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send main-btn center-block" value="Send message">
                                </div>
                            </div>
                        </div>

                    </form>   
<!-- End Contact Form -->
   </section>
   <!-- End Contact section -->
  
 </div>
 </div><!-- End Main Container-->
 </div> <!-- End Outside Main-->
 
  <!-- Start footer section -->
   		<section class="col-md-12 col-sm-12 col-xs-12 rzm_footer container-fluid">
        	<div class="container">
                <h4>Find Me on</h4>
                <div class="rez_footer_social">
                
                       <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                   
                </div>
                <p>© All the works in my portfolio is my property, Please do not use them without my permission.</p>
            </div>
        </section>
   <!-- End footer section -->
<!-- JS
	================================================== --> 

<script src="javascripts/jquery.tipsy.js"></script> 

<script src="javascripts/jquery.scrollTo-min.js" ></script> 
<script src="javascripts/jquery.localscroll-min.js" ></script> 
<script  src="javascripts/jquery.easing.1.3.js"></script> 
<script src="javascripts/script.js"></script> 

<!--contact form script starts-->
<script src="contact.js"></script> 
<script src="javascripts/jquery.validate.js" type="text/javascript"></script>

<script src="image_gallery/js/isotope.min.js"></script>
<script src="image_gallery/js/jquery.fancybox.pack.js"></script>
<script src="image_gallery/js/main.js"></script>



<!-- End Document
================================================== -->
</body>


</html>