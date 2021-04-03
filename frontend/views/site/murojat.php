<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Murojat</title>


    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

<body>

	<!-- Start Header -->
	<header id="mu-header" style='background-color: orange !important;' class="" role="banner">
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
							<li><a href="#">ASOSIY</a></li>
							<li><a href="#mu-book-overview">KITOBLAR</a></li>
							<li><a href="#mu-author">AFTORLAR</a></li>
							<li><a href="#mu-testimonials">JAMOA</a></li>
							<li><a href="#mu-contact">MUROJAT</a></li>
							<li><a href="tel:+998994759755">+998 99 4759755</a></li>
							
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->
    <!-- Start main content -->

    <main role="main">


   


    <!-- modal  -->
        <div class="">

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Buyurtmani tasdiqlang</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">

                                    <div class="mu-heading-area">
                                        <img src="/images/photo_book1.jpg" style="height:250px;" alt="">
                                        <h4>Kitob narxi : 40 000 so'm</h4>
                                        <h4>Yetkazib berish: Bepul</h4>
                                    </div>

                                    <!-- Start Contact Content -->
                                    <div class="mu-contact-content">

                                        <div id="form-messages"></div>
                                        <form id="ajax-contact" method="post" action="mailer.php"
                                            class="mu-contact-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" id="name"
                                                    name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Telefon +99899 362 1125" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Xabar qoldiring"
                                                    id="message" name="message" required></textarea>
                                            </div>
                                            <button type="submit" class="mu-send-msg-btn"><span>SEND</span></button>
                                        </form>

                                    </div>
                                    <!-- End Contact Content -->

                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <!-- modal  end  -->

        <!-- Start Contact -->
        <section id="mu-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-contact-area">

                            <div class="mu-heading-area">
                                <h2 class="mu-heading-title">Bizga habar yuboring</h2>
                                <span class="mu-header-dot"></span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever</p>
                            </div>

                            <!-- Start Contact Content -->
                            <div class="mu-contact-content">

                                <div id="form-messages"></div>
                                <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter Email" id="email"
                                            name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message" id="message" name="message"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                                </form>

                            </div>
                            <!-- End Contact Content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Start Google Map -->
        <section id="mu-google-map" style="display:none;">
            <iframe src="https://goo.gl/maps/Z1Qu9Xfgbjxbc7VA6" width="100%" height="500" frameborder="0"
                style="border:0" allowfullscreen></iframe>
        </section>
        <!-- End Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24272.1073731957!2d68.75780189537359!3d40.49708625235046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b2068ad8d702f7%3A0x5395d8cf131294b1!2z0JPRg9C70LjRgdGC0LDQvSwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1616867660497!5m2!1sru!2s"
            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>

    <!-- End main content -->


    <span type='button' class='open-button' onclick="openForm()"><img src="/images/popap_message_icon.png"
            alt=""></span>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="mu-send-msg-btn"><span>SEND</span></button>

            <button type="button" class="mu-send-msg-btn" onclick="closeForm()">Close</button>
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

 


</body>

</html>