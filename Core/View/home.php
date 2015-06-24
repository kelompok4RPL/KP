<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI-KePra SI</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">SI</span> Kerja Praktek
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Beranda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="user/infokp">Informasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#jadwal">Jadwal Seminar</a>
                    </li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal">Login</i></a>
					</li>
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <?php
                        if (isset($_SESSION['uid'])){
                            echo '<h1 class="brand">Selamat datang '.$_SESSION[uid].'</h1>';
                        }
                        ?>
                        <h1 class="brand">Sistem Informasi Kerja Praktek</h1>
                        <p class="intro-text">Jurusan Sistem Informasi<br>UNIVERSITAS ANDALAS</p>
						
						<a href="mahasiswa/daftarkp" class="btn btn-default btn-lg ">Daftar KP</a><br>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<!-- HOME Section
		<section id="home" class="content-section text-center">
			<div class="download-section">
				<div class="container">
					<div class="col-lg-8 col-lg-offset-2">
						<h2>Download Grayscale</h2>
						<p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
						<a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
					</div>
				</div>
			</div>
		</section> -->

		<!-- Informasi Section -->
    <section id="info" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Disini Informasi tentang KP</h2>
                <p>Syarat2 KP dll Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            </div>
        </div>
    </section>

    

    <!-- Jadwal Section -->
    <section id="jadwal" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Di sini jadwal seminar dalam bulan ini</h2>
				<table class='table table-bordered'>
					<tr>
						<td><strong>Tanggal</strong></td>
						<td><strong>Nama Mahasiswa</strong></td>
						<td><strong>Jadwal Seminar</strong></td>
						<td><strong>Judul KP</strong></td>
						<td><strong>Pembimbing</strong></td>
					</tr>
					<tr>
						<td><center>26-06-2015</center></td>
						<td><center>Nama Mahasiswa</center></td>
						<td><center>10.00</center></td>
						<td><center>Judul KP</center></td>
						<td><center>Saya PAK</center></td>
					</tr>				
				</table>
				
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">si.unand@fti.unand.ac.id</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/siunand" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Kelompok4RPL 2015</p>
        </div>
    </footer>
	
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
								
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<center><h3 style=�height:100%;margin-left:20px;color:#444;font-family: 'Lato', sans-serif;�>LOGIN</h3>
                </center>
            </div>
            <div class="modal-body row">
			<?php 
			//kode php ini kita gunakan untuk menampilkan pesan eror
			if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
							echo '<h3>NIM dan Password belum diisi!</h3>';
					} else if ($_GET['error'] == 2) {
							echo '<h3>NIM belum diisi!</h3>';
					} else if ($_GET['error'] == 3) {
							echo '<h3>Password belum diisi!</h3>';
					} else if ($_GET['error'] == 4) {
							echo '<h3>NIM dan Password tidak terdaftar!</h3>';
					}
			}
			?>
				
				
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" name="login" action="user/login" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="NIM" name="nim">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
						<br><input type="submit" name="login" value="Masuk" class="btn btn-danger btn-lg btn-block"/>
                        <!-- <button class="btn btn-danger btn-lg btn-block">Masuk</button> -->
						
						<a href="mahasiswa/daftarkp" class="btn btn-primary btn-lg btn-block ">Daftar KP</a>
                    </div>
                </form>
				<br>
            </div>
            
        </div>
    </div>
	</div>
<!-- ========================================================================================================================== -->
		
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/grayscale.js"></script>

</body>

</html>
