<?php

use yii\helpers\Url;
use common\models\UserProfile;
use yii\widgets\ActiveForm;
use common\models\Transaction;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>GB</title>


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
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Text Logo -->
						<a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i>
							GB</a>

						<!-- Image Logo -->
						<!-- <a class="navbar-brand" href="index.html"><img src="/images/logo.png"></a> -->


					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav mu-menu navbar-right">
							<li><a href="<?= Url::to(['/']) ?>">ASOSIY</a></li>
							<li><a href="<?= Url::to(['/site/kitoblar']) ?>">KITOBLAR</a></li>
							<li><a href="<?= Url::to(['/site/aftorlar']) ?>">AFTORLAR</a></li>
							<li><a href="<?= Url::to(['/site/jamoa']) ?>">JAMOA</a></li>
							<li><a href="<?= Url::to(['/site/murojat']) ?>">MUROJAT</a></li>
							<?php if (Yii::$app->user->isGuest) : ?>
								<li><a href="<?= Url::to(['/site/login']) ?>">SIGN IN</a></li>
								<li><a href="<?= Url::to(['/site/signup']) ?>">SIGN UP</a></li>
							<?php else : ?>
								<div class="dropdown">
									<a href="#" class='avatar'> <img style="width:50px; border-radius:50%;" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar"></a>
									<div class="dropdown-content">
										<a href="#">Ваш депозит ( <?= $user_profile->deposit ?> ) sum </a>
										<a href='#' type='button' data-toggle="modal" data-target="#exampleModal">добавить депозит</a>
										<a href="#">Настройки</a>
									</div>
								</div>

							<?php endif ?>
							<li><a href="tel:+998994759755">+998 99 4759755</a></li>

						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="/images/glavni3.jpg" alt="Ebook img">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>Golden Books sizning online kitob do'koningiz</h1>
						<p>Biz sizga baxt ulashamiz.</p>
						<a href="#" class="mu-primary-btn">Murojat qilish!</a>
						<span>Bizda yetkazib berish bepul</span>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Start Featured Slider -->

	<!-- Start main content -->

	<main role="main">



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
											<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
												Murojat qilish
											</a>
											<a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2" class="btn btn-success">Sotib olish!</a>
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
											<a href="#" class="btn btn-success">Sotib olish!</a>
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

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Xisob raqamni to'ldirish</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Номер вашего счета <?= $user_profile->schot_user ?></h4>
						<div class="" id="">
							<?php $form = ActiveForm::begin(['action' => ['/site/transaction']]); ?>
							<?php $status = Transaction::find()->where(['user_id' => Yii::$app->user->id])->orderBy('data DESC')->limit(1)->one(); ?>

							<?php if (strtotime("now") - 60 > strtotime($status->data)) : ?>

								<div class="form-group">
									<label for="summa">Введите сумму: Summa kiriting </label>
									<?= $form->field($trAction, 'summa_vkalada')->label('') ?>
									<button type="submit" class="mu-send-msg-btn"><span>SEND</span></button>
								</div>
							<?php else : ?>
								<h4>Sizni statusingiz blocklangan, 1 daqiqa kuting.</h4>
								<h4>Ваш статус заблокирован, подождите 1 минуту.</h4>
							<?php endif; ?>

							<?php ActiveForm::end() ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
		</div>

		<!-- modal  -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Xisob raqamni to'ldirish</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Ваш заказ </h4>
						<div class="" id="">
							<?php $form = ActiveForm::begin(['action' => ['/site/transaction']]); ?>
							<?php $status = Transaction::find()->where(['user_id' => Yii::$app->user->id])->orderBy('data DESC')->limit(1)->one(); ?>


							<?php ActiveForm::end() ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

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
									<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Telefon +99899 362 1125" id="email" name="email" required>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Xabar qoldiring" id="message" name="message" required></textarea>
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


		<!-- modal  end  -->





		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Bizga habar yuboring !</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div id="form-messages"></div>
								<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
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


	</main>

	<!-- End main content -->


	<span type='button' class='open-button' onclick="openForm()"><img style='width:80px;' src="/images/popap_message_icon.png" alt=""></span>

	<div class="form-popup" id="myForm">
		<form action="/action_page.php" class="form-container">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Telefon" id="email" name="email" required>
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Xabar" id="message" name="message" required></textarea>
			</div>
			<button type="submit" class="mu-send-msg-btn"><span>SEND</span></button>

			<button type="button" class="mu-send-msg-btn" onclick="closeForm()">Close X</button>
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