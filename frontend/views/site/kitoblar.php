<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Kitoblar</title>
	<!-- Favicon -->
	
	<!-- Fonts -->

	<!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Lato for Title -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Start Header -->
	<header id="mu-header" class="" role="banner" style='background-color: orange !important;'>
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Text Logo -->
						<a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> GolDen
							BooKS</a>

						<!-- Image Logo -->
						<!-- <a class="navbar-brand" href="index.html"><img src="/images/logo.png"></a> -->


					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav mu-menu navbar-right">
							<li><a href="index.html">ASOSIY</a></li>
							<li><a href="kitoblar.html">KITOBLAR</a></li>
							<li><a href="#mu-author">AFTORLAR</a></li>
							<li><a href="jamoa.html">JAMOA</a></li>
							<li><a href="murojat.html">MUROJAT</a></li>
							<li><a href="tel:+998994759755">+998 99 4759755</a></li>
							
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->



	<!-- Start main content -->

	<main role="main" style='margin-top:5%;'>


		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Yangi kitoblar</h2>
								<span class="mu-header-dot"></span>
								<p>Siz izlagan kitob shu yerda</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<a href="about-book.html"><img src="/images/photo_book1.jpg" alt=""></a>
											</span>
											<h4>Qaytganimda</h4>
											<h6>Kitob narxi: 40 000 so'm</h6>
											<p>Yoxud baxt va ayriliq.</p>
											<a href="#" type="button" class="btn btn-warning" data-toggle="modal"
											data-target="#myModal">Murojat qilish!</a>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<img src="/images/photo_book2.jpg" alt="">
											</span>
											<h4>Ishqqa oid 40 qoida</h4>
											<p>Elif Shafiq.</p>
											<a href="#" class="btn btn-warning">Murojat qilish!</a>
										</div>
									</div>
									<!-- / Book Overview Single Content -->
									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<img src="/images/photo_book1.jpg" alt="">
											</span>
											<h4>Qaytganimda</h4>
											<p>Yoxud baxt va ayriliq.</p>
											<a href="#" class="btn btn-warning">Murojat qilish!</a>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<img src="/images/photo_book2.jpg" alt="">
											</span>
											<h4>Ishqqa oid 40 qoida</h4>
											<p>Elif Shafiq.</p>
											<a href="#" class="btn btn-warning">Murojat qilish!</a>
										</div>
									</div>
								

									

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->




		
	</main>

	<!-- End main content -->

	
	<span type='button' class = 'open-button' onclick="openForm()"><img src="/images/popap_message_icon.png" alt=""></span>

	<div class="form-popup" id="myForm">
			<form action="/action_page.php" class="form-container">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" id="name" name="name"
						required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Telefon" id="email"
						name="email" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Xabar" id="message" name="message"
						required></textarea>
				</div>
				<button type="submit" class="mu-send-msg-btn"><span>SEND</span></button>
		  
			  <button type="button" class="mu-send-msg-btn" onclick="closeForm()">Close       X</button>
			</form>
		
	</div>

	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<p class="mu-copyright">&copy; MADE BY <a rel="nofollow" href="">Kamol Xamidullayevich</a>. All
					right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	<script>
	function openForm() {
	document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
	document.getElementById("myForm").style.display = "none";
	}
	</script>

	<!-- jQuery library -->
	


</body>

</html>