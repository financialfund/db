<?php

include "data.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Financial Fund</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/spinkit.min.css">
        
        <div class="overlay" style="background-color:white;
                  position:fixed;
                  width:100%;
                  height:100%;
                  top:0px;
                  left:0px;
                  z-index:1000;">
        <div class="s" style="width: 60px; height: 60px; display: inline-block;margin: 0;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-align: center;
              background-color: white;">
          <div class="sk-fold" style="width: 100%;
              height: 100%;">
            <div class="sk-fold-cube"></div>
            <div class="sk-fold-cube"></div>
            <div class="sk-fold-cube"></div>
            <div class="sk-fold-cube"></div>
          </div>
        </div>
        </div>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style type="text/css">

          /* If the screen size is 601px wide or more, set the font-size of <div> to 80px */
          @media screen and (min-width: 601px) {
             .parallax h1{
              font-size: 80px;
            }
          }

          /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
          @media screen and (max-width: 600px) {
            .parallax h1{
              font-size: 48px;
            }
            .parallax1 h1{
              font-size: 30px;

            }
          }

            body{
            overflow-x:     hidden;
            overflow-y: hidden;
            user-select: none;
            -webkit-touch-callout: none;
  -webkit-user-select: none;
   -khtml-user-select: none;
     -moz-user-select: moz-none;
      -ms-user-select: none;
       -o-user-select: none;
          user-select: none;
          height: 100%;
        }
        html{
          height: 100%;
        }
        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            background-color: #a7cb00;
        }
        .parallax {
  /* The image used */
            vertical-align: middle;
            text-align: center;
            color: white;
            background-image: url('img/slider/slider-1.jpg');

            /* Full height */
            height: 90%; 

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }

          .parallax1 {
            /* The image used */
            vertical-align: middle;
            text-align: center;
            color: white;
            background-image: url('img/slider/slider-1.jpg');

            /* Full height */
            

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          .port{
            height: 320px; 
            width: auto !important;
          }
          .parallax h1{
            font-weight: 300;
          }
          .vertical-center {
            box-sizing: border-box;
            padding: 15px;
            width: 100%;
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: auto;
          }
          .area{
            height: 300px;
          }
          .def{
            color: #a7cb00;
          }
          /*body *{
            background-color: black;
          }*/
          .full{
             width: 100%;
          }
          .radial{
            height: 60px;
          }
          .canvas{
            height: 430px;
          }

          @media only screen and (max-device-width: 1366px) {
            .parallax, .parallax1 {
              background-attachment: scroll;
            }
          }

          
        </style>
        
        
      
      </head>

    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area" id="home">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
      					<div class="container box_1620">
      						<!-- Brand and toggle get grouped for better mobile display -->
      						<a class="navbar-brand logo_h" href="index.html"><h1>Financial Fund</h1></a>
      						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      							<span class="icon-bar"></span>
      							<span class="icon-bar"></span>
      							<span class="icon-bar"></span>
      						</button>
      						<!-- Collect the nav links, forms, and other content for toggling -->
      						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
      							<ul class="nav navbar-nav menu_nav justify-content-center">
      								<li class="nav-item"><a class="nav-link" href="#home">Home</a></li> 
      								<li class="nav-item"><a class="nav-link" href="#performance">Performance</a></li> 
      								<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a> </li>
      								<li class="nav-item"><a class="nav-link" href="#plans">Plans</a></li>
                      <li class="nav-item"><a class="nav-link" href="#getstarted">Get Started</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li>
      							</ul>
      							<ul class="nav navbar-nav navbar-right">
      								<li class="nav-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
      								<li class="nav-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
      								<li class="nav-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
      								<li class="nav-item"><a href="#"><i class="fa fa-behance"></i></a></li>
      								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
      							</ul>
      						</div> 
      					</div>
            	</nav>
            </div>
        </header>



        <div class="parallax">
          <div class="vertical-center">
          <h1 class="">WE VALUE MONEY AS MUCH AS YOU DO.</h1>
          <p >Sell at anytime from Saturday-Sunday 01:00-17:00 UTC.</p>
          <a class="banner_btn" href="#getstarted">Get Started</a>
          <a class="banner_btn2" href="#timeline">View Timeline</a>
          </div>
        </div>
        <!--================Header Menu Area =================-->

        <!-- divider -->
        <div class="mt-5" id="performance">
          <div class="col-12">
            <h1 class="display-4 text-center def pt-5">Performance</h1>
            <p class="text-center h6">Compare our historical performance.</p>
          </div>
        </div>
        <!-- divider -->

        <div class="mt-5">
          <div class="card-group col-12">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title" style="opacity: 0.8">Assets Under Management</h3>
                <h1 class="card-text" style="font-size: 40px; font-weight: 100;" id="totalasset"></h1>
              </div>
            </div>

            <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title" style="opacity: 0.8">Total Shares Outstanding</h3>
                <h1 class="card-text" style="font-size: 48px; font-weight: 100;" id="out"></h1>
              </div>
            </div>

          <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title" style="opacity: 0.8">% Held by Insiders</h3>
                <h1 class="card-text" style="font-size: 48px; font-weight: 100; color: #2ec551;" id="insider"></h1>
              </div>
            </div>
            
        </div>
        </div>
        

        <!--================Mission Area =================-->
        <section class="mission_area pt-5">
			<div class="row m0">
				<div class="col-lg-6 p0">
					<div class="left_img">
                        <div class="col-lg-12 m-auto">
                                <div>
                                  <canvas id="compare" style="height: 450px"></canvas>
                                </div>
                        </div>               
                    </div>
				</div>
				<div class="col-lg-6 p0">
					<div class="mission-text table-responsive">
						<table class="table col-lg-11">
                            <thead>
                                <tr>
                                  <th scope="col">Risk</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Last Change</th>
                                  <th scope="col">Change %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>No Risk, Fixed 0.15%</td>
                                  <td>
                                        <script type="text/javascript">
                                            document.write(fixed[fixed.length-1]);
                                        </script>
                                  </td>

                                  <td>
                                        <script type="text/javascript">
                                            var change = fixed[fixed.length-1]-fixed[fixed.length-2];
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(change.toFixed(2)));
                                            document.write("</span>");
                                        </script>
                                  </td>
                                  <td>
                                        <script type="text/javascript">
                                            var percent= change/fixed[fixed.length-2]*100;
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(percent.toFixed(2)));
                                            document.write("%</span>");
                                        </script>
                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                  <td>No Risk</td>
                                  <td>
                                        <script type="text/javascript">
                                            document.write(ninetyfive[ninetyfive.length-1]);
                                        </script>
                                  </td>

                                  <td>
                                        <script type="text/javascript">
                                            var change = ninetyfive[ninetyfive.length-1]-ninetyfive[ninetyfive.length-2];
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(change.toFixed(2)));
                                            document.write("</span>");
                                        </script>
                                  </td>
                                  <td>
                                        <script type="text/javascript">
                                            var percent= change/ninetyfive[ninetyfive.length-2]*100;
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(percent.toFixed(2)));
                                            document.write("%</span>");
                                        </script>
                                  </td>
                                  
                                                </tr>
                                                <tr>
                                  <td>Low Risk</td>
                                  <td>
                                        <script type="text/javascript">
                                            document.write(ninety[ninety.length-1]);
                                        </script>
                                  </td>

                                  <td>
                                        <script type="text/javascript">
                                            var change = ninety[ninety.length-1]-ninety[ninety.length-2];
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(change.toFixed(2)));
                                            document.write("</span>");
                                        </script>
                                  </td>
                                  <td>
                                        <script type="text/javascript">
                                            var percent= change/ninety[ninety.length-2]*100;
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(percent.toFixed(2)));
                                            document.write("%</span>");
                                        </script>
                                  </td>
                                  
                                                </tr>
                                                <tr>
                                  <td>Medium Risk</td>
                                  <td>
                                        <script type="text/javascript">
                                            document.write(doublerisk[doublerisk.length-1]);
                                        </script>
                                  </td>

                                  <td>
                                        <script type="text/javascript">
                                            var change = doublerisk[doublerisk.length-1]-doublerisk[doublerisk.length-2];
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(change.toFixed(2)));
                                            document.write("</span>");
                                        </script>
                                  </td>
                                  <td>
                                        <script type="text/javascript">
                                            var percent= change/doublerisk[doublerisk.length-2]*100;
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(percent.toFixed(2)));
                                            document.write("%</span>");
                                        </script>
                                  </td>
                                  
                                                </tr>
                                                <tr>
                                  
                                  <td>High Risk</td>
                                  <td>
                                        <script type="text/javascript">
                                            document.write(ultrarisk[ultrarisk.length-1]);
                                        </script>
                                  </td>

                                  <td>
                                        <script type="text/javascript">
                                            var change = ultrarisk[ultrarisk.length-1]-ultrarisk[ultrarisk.length-2];
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(change.toFixed(2)));
                                            document.write("</span>");
                                        </script>
                                  </td>
                                  <td>
                                        <script type="text/javascript">
                                            var percent= change/ultrarisk[ultrarisk.length-2]*100;
                                            if(change>0){
                                                document.write("<span style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
                                            }
                                            else if(change<0){
                                                document.write("<span style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
                                            }
                                            document.write(Math.abs(percent.toFixed(2)));
                                            document.write("%</span>");
                                        </script>
                                  </td>
                  
                                </tr>
                            </tbody>
                    </table>
					</div>
				</div>
			</div>
        </section>

        <section class="project_area">
            <div class="row m0">
                <div class="col-lg-4 col-md-6 p5">
                    <div class="">
                        <canvas id="mycanvas" class="canvas"></canvas>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 p5">
                    <div class="">
                        <canvas id="mycanvas1" class="canvas"></canvas>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 p5">
                    <div class="">
                        <canvas id="mycanvas2" class="canvas"></canvas>
                    </div>
                </div>
            </div>
        </section>





        <!-- divider -->
        <div class="" id="portfolio">
          <div class="col-12">
            <h1 class="display-4 text-center def pt-5">Portfolio</h1>
            <p class="text-center h6">Design your own portfolio.</p>
          </div>
        </div>
        <!-- divider -->


        <section class="project_area pt-4">
            <div class="row m0">
                <div class="col-lg-4 col-md-6 p0">
                    <div class="project_item mb-5">
                        <div class="text-center"> 
                          <img class="port" src="img/chart/conservative.jpg">
                        </div>
                        <div class="hover_text pb-4">
                            <h4>Conservative</h4>
                            <div class="cat">
                                <a >Stable Growth</a>
                            </div>
                            <a class="main_btn" href="#getstarted">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p0">
                    <div class="project_item mb-5">
                        <div class="text-center">
                          <img class="port" src="img/chart/aggresive.jpg">
                        </div>
                        <div class="hover_text pb-4">
                            <h4>Aggresive</h4>
                            <div class="cat">
                                <a >Fast Growth</a>
                            </div>
                            <a class="main_btn" href="#getstarted">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p0 m-auto">
                    <div class="project_item mb-5">
                        <div class="text-center">
                          <img class="port" src="img/chart/recommended.jpg">
                        </div>
                        <div class="hover_text pb-4">
                            <h4>Recommended</h4>
                            <div class="cat">
                                <a >Balanced</a>
                            </div>
                            <a class="main_btn" href="#getstarted">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- divider -->
        <div class=" pb-3" id="plans">
          <div class="col-12">
            <h1 class="display-4 text-center def pt-5">Plans</h1>
            <p class="text-center h6">Compare our plans.</p>
          </div>
        </div>
        <!-- divider -->

        <!--================Success Area =================-->
        <section class="success_area">
          <div class="row m0">
                <div class="col-lg-6 p0">
                    <div class="mission_text col-12">
                        <h4>No Risk, Fixed 0.15%</h4>
                        <p>No risk investment with 0.15% fixed return/week.</p>
                        <div class="row mt-3 mb-4">
                            <div class="col col-6">
                                <h5>Risk</h5>
                                <img class="radial" src="img/chart/zero.jpg">
                            </div>
                            <div class="col col-6">
                                <h5>Return</h5>
                                <img class="radial" src="img/chart/thirty.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                      <canvas id="myarea" class="area"></canvas>
                    </div>
                </div>
            </div>

            <div class="row m0">
                <div class="col-lg-6 p0">
                    <div class="mission_text col-12">
                        <h4>No Risk</h4>
                        <p>No risk investment with dynamic return. The maximum loss is limited to 0.</p>
                        <div class="row mt-3 mb-4">
                            <div class="col col-6">
                                <h5>Risk</h5>
                                <img class="radial" src="img/chart/zero.jpg">
                            </div>
                            <div class="col col-6">
                                <h5>Return</h5>
                                <img class="radial" src="img/chart/thirtyseven.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                      <canvas id="myarea1" class="area"></canvas>
                    </div>
                </div>
            </div>


            <div class="row m0">
                <div class="col-lg-6 p0">
                    <div class="mission_text col-12">
                        <h4>Low Risk</h4>
                        <p>Low risk investment with dynamic return.</p>
                        <div class="row mt-3 mb-4">
                            <div class="col col-6">
                                <h5>Risk</h5>
                                <img class="radial" src="img/chart/ten.jpg">
                            </div>
                            <div class="col col-6">
                                <h5>Return</h5>
                                <img class="radial" src="img/chart/fiftyfive.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <div>
                      <canvas id="myarea2" class="area"></canvas>
                    </div>
                </div>
            </div>
            <div class="row m0">
                <div class="col-lg-6 p0">
                    <div class="mission_text col-12">
                        <h4>Medium Risk</h4>
                        <p>Medium risk investment with dynamic return.</p>
                        <div class="row mt-3 mb-4">
                            <div class="col col-6">
                                <h5>Risk</h5>
                                <img class="radial" src="img/chart/fifty.jpg">
                            </div>
                            <div class="col col-6">
                                <h5>Return</h5>
                                <img class="radial" src="img/chart/seventyfour.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <div>
                      <canvas id="myarea3" class="area"></canvas>
                    </div>
                </div>
            </div>
            <div class="row m0">
                <div class="col-lg-6 p0">
                    <div class="mission_text col-12">
                        <h4>High Risk</h4>
                        <p>High risk investment with dynamic return.</p>
                        <div class="row mt-3 mb-4">
                            <div class="col col-6">
                                <h5>Risk</h5>
                                <img class="radial" src="img/chart/ninety.jpg">
                            </div>
                            <div class="col col-6">
                                <h5>Return</h5>
                                <img class="radial" src="img/chart/ninetyfive.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <div>
                      <canvas id="myarea4" class="area"></canvas>
                    </div>
                </div>
            </div>

        </section>

        <div class="" id="getstarted">
          <div class="col-12">
            <h1 class="display-4 text-center def pt-5">Get Started</h1>
            <p class="text-center h6">Saturday-Sunday 01:00-17:00 UTC</p>
          </div>
        </div>
        <!-- divider -->

    <div class="col-lg-12 col-xl-7 m-auto pt-2 pb-5">
    <div class="mt-3 text-center row">

      <div class="col-lg-4 col-md-6 p-2">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #5C6BC0;">
            <h4 class="my-0 font-weight-normal">No Risk, Fixed 0.15%</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><script type="text/javascript">
                document.write(fixed[fixed.length-1]);
            </script> <small class="text-muted">/ Share</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>No Risk</li>
              <li><script type="text/javascript">document.write(weekly[0])</script>% Fixed return/week</li>
              <li><script type="text/javascript">document.write(monthly[0])</script>% Fixed return/month</li>
              <li><script type="text/javascript">document.write(yearly[0]);</script>% Estimated return/year</li>
              <li>Minimum 1,000 shares</li>
              <li>Maximum 10,000 shares</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #5C6BC0;">Get Started</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #29B6F6">
            <h4 class="my-0 font-weight-normal">No Risk</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><script type="text/javascript">
                document.write(ninetyfive[ninetyfive.length-1]);
            </script> <small class="text-muted">/ Share</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>No Risk</li>
              <li><script type="text/javascript">document.write(weekly[1])</script>% Average return/week</li>
              <li><script type="text/javascript">document.write(monthly[1])</script>% Average return/month</li>
              <li><script type="text/javascript">document.write(yearly[1]);</script>% Estimated return/year</li>
              <li>Minimum 1,000 shares</li>
              <li>Maximum 10,000 shares</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #29B6F6;">Get Started</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #67BB6A">
            <h4 class="my-0 font-weight-normal">Low Risk</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><script type="text/javascript">
                document.write(ninety[ninety.length-1]);
            </script> <small class="text-muted">/ Share</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Low Risk</li>
              <li><script type="text/javascript">document.write(weekly[2])</script>% Average return/week</li>
              <li><script type="text/javascript">document.write(monthly[2])</script>% Average return/month</li>
              <li><script type="text/javascript">document.write(yearly[2]);</script>% Estimated return/year</li>
              <li>Minimum 1,000 shares</li>
              <li>Maximum 10,000 shares</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #67BB6A;">Get Started</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2 m-auto">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #f7c80a">
            <h4 class="my-0 font-weight-normal">Medium Risk</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><script type="text/javascript">
                document.write(doublerisk[doublerisk.length-1]);
            </script> <small class="text-muted">/ Share</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Medium Risk</li>
              <li><script type="text/javascript">document.write(weekly[3])</script>% Average return/week</li>
              <li><script type="text/javascript">document.write(monthly[3])</script>% Average return/month</li>
              <li><script type="text/javascript">document.write(yearly[3]);</script>% Estimated return/year</li>
              <li>Minimum 1,000 shares</li>
              <li>Maximum 10,000 shares</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #f7c80a;">Get Started</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2 m-auto">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #FFA726">
            <h4 class="my-0 font-weight-normal">High Risk</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><script type="text/javascript">
                document.write(ultrarisk[ultrarisk.length-1]);
            </script> <small class="text-muted">/ Share</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>High Risk</li>
              <li><script type="text/javascript">document.write(weekly[4])</script>% Average return/week</li>
              <li><script type="text/javascript">document.write(monthly[4])</script>% Average return/month</li>
              <li><script type="text/javascript">document.write(yearly[4]);</script>% Estimated return/year</li>
              <li>Minimum 1,000 shares</li>
              <li>Maximum 10,000 shares</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #FFA726;">Get Started</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 p-2 m-auto text-left">
        <div class="card shadow-sm">
          <div class="card-header text-light" style="background-color: #a7cb00">
            <h4 class="my-0 font-weight-normal">Portfolio</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title px-2"><span id="total">0.00</span><small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">

              <div class="row px-2 m-auto">
                <div class="custom-control custom-switch col-6">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Fixed</label>
                </div>
                <div class="col-6">
                  <input type="number" min="1000" max="10000" class="form-control form-control-sm" placeholder="Shares" id="fixedshare" disabled="true" value="1000">
                </div>
              </div>

              <div class="row px-2 m-auto">
                <div class="custom-control custom-switch col-6">
                  <input type="checkbox" class="custom-control-input" id="customSwitch2">
                  <label class="custom-control-label" for="customSwitch2">No Risk</label>
                </div>
                <div class="col-6">
                  <input type="number"  min="1000" max="10000" class="form-control form-control-sm" placeholder="Shares" id="noriskshare" disabled="true" value="1000">
                </div>
              </div>

              <div class="row px-2 m-auto">
                <div class="custom-control custom-switch col-6">
                  <input type="checkbox" class="custom-control-input" id="customSwitch3">
                  <label class="custom-control-label" for="customSwitch3">Low Risk</label>
                </div>
                <div class="col-6">
                  <input type="number"  min="1000" max="10000" class="form-control form-control-sm" placeholder="Shares" id="lowriskshare" disabled="true" value="1000">
                </div>
              </div>

              <div class="row px-2 m-auto">
                <div class="custom-control custom-switch col-6">
                  <input type="checkbox" class="custom-control-input" id="customSwitch4">
                  <label class="custom-control-label" for="customSwitch4">Medium Risk</label>
                </div>
                <div class="col-6">
                  <input type="number"  min="1000" max="10000" class="form-control form-control-sm" placeholder="Shares" id="mediumriskshare" disabled="true" value="1000">
                </div>
              </div>

              <div class="row px-2 m-auto">
                <div class="custom-control custom-switch col-6">
                  <input type="checkbox" class="custom-control-input" id="customSwitch5">
                  <label class="custom-control-label" for="customSwitch5">High Risk</label>
                </div>
                <div class="col-6">
                  <input type="number"  min="1000" max="10000" class="form-control form-control-sm" placeholder="Shares" id="highriskshare" disabled="true" value="1000">
                </div>
              </div>

              
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-light text-light" style="background-color: #a7cb00;">Get Started</button>
          </div>
        </div>
      </div>


  </div>
  </div>



        <!-- divider -->
        <div class="" id="timeline">
          <div class="col-12">
            <h1 class="display-4 text-center def pt-5">Timeline</h1>
            <p class="text-center h6">Our journey.</p>
          </div>
        </div>
        <!-- divider -->

        <div class="pb-5">
          <div class="container ">
            <div class="row pb-5">
              <div class="col-md-6 offset-md-3 mr-3">
                <ul class="timeline">

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Testing 1</span>
                    <span href="#" class="float-right">2019 Q4</span>
                    <p style="font-size: 16px;">We test our performance and risk management in the market</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Testing 1 Passed</span>
                    <span href="#" class="float-right">2019.12.31</span>
                    <p style="font-size: 16px;">The tests end up with very satisfying result</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Testing 2</span>
                    <span href="#" class="float-right">2020 Q1</span>
                    <p style="font-size: 16px;">We test our performance and risk management in the market</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Reverse Split 1 for 2</span>
                    <span href="#" class="float-right">2020.01.15</span>
                    <p style="font-size: 16px;">Price Doubled</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Economic instability</span>
                    <span href="#" class="float-right">2020.03.01</span>
                    <p style="font-size: 16px;">Trading paused due to economic instability (COVID-19 Outbreak)</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Testing 2 Result</span>
                    <span href="#" class="float-right">2020.03.31</span>
                    <p style="font-size: 16px;">. . .</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Insider Offering</span>
                    <span href="#" class="float-right">2020 Q2</span>
                    <p style="font-size: 16px;">We offer our shares to Insider and monitor the performance</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Trading Result</span>
                    <span href="#" class="float-right">2020.06.30</span>
                    <p style="font-size: 16px;">. . .</p>
                  </li>

                  <li>
                    <span style="color: #a7cb00; font-size: 20px;">Scheduled IPO</span>
                    <span href="#" class="float-right">2020 Q3</span>
                    <p style="font-size: 16px;">We offer our shares to Public</p>

                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="parallax1 pt-5 pb-5">
          <div>
              <h1 class="display-5 bg-light text-dark p-3" style="font-weight: 300; opacity: 0.8; display: inline-block; text-transform: uppercase;">"No one is Born a Great Trader, one learns by trading."</h1>
          </div>
        </div>
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Disclaimer</h6>
                            <p>
                                Futures, ETF and FX trading involves substantial risk and you can lose money. Please think carefully before investing. Do not invest or use money you can’t afford to lose.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#performance">Performance</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#plans">Plans</a></li>
                                        <li><a href="#getstarted">Get Started</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Contact</h6>
                            <p>Leave your email here.</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>				
                </div>
                
            </div>
            <div class="border_line"></div>
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
			</div>
        </footer>
		<!--================ End footer Area  =================-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            window.onload = function() {
              $( ".overlay" ).css("display", "none");
              $("body").css("overflow-y", "scroll");

            };
        </script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-datalabels.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/port.js"></script>
        <script type="text/javascript" src="js/chart.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="js/theme.js"></script>
        
    </body>
</html>
