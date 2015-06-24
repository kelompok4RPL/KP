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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a class="page-scroll" href="home">Beranda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#info">Informasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#jadwal">Jadwal Seminar</a>
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
    <!-- <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand">Sistem Informasi Kerja Praktek</h1>
                        <p class="intro-text">Jurusan Sistem Informasi<br>UNIVERSITAS ANDALAS</p>
						
						<a href="daftarkp.html" class="btn btn-default btn-lg ">wahid</a><br>
                    </div>
                </div>
            </div>
        </div>
    </header> -->


    <header class="intro">
	<div class="intro-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <h2>Form Pendaftaran KP</h2>
				<form action='index2.html'   method='POST'  >
				<center>
					<br>
					<table>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input  type='text' name='nim' style="color:black;"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type='text' name='nama' style="color:black;"> </td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><select name="jeniskelamin" style="color:black;">
							<option value="Laki-Laki" style="color:black;">Laki-Laki</option>
							<option value="Perempuan" style="color:black;">Perempuan</option>
							</select></td>
						</tr>
						<tr>
							<td>Jumlah SKS yang telah diambil</td>
							<td>:</td>
							<td><input type='text' name='sks' style="color:black;"> </td>
						</tr>
						<tr>
							<td>Tanggal Pelaksanaan</td>
							<td>:</td>
							<td><input type='text' name='tgl_kp' id="datepicker" style="color:black;"> </td>
						</tr>
						<tr>
							<td> Tempat Pelaksanaan </td>
							<td>:</td>
							<td><input type='text' name='tempatkp' style="color:black;"> </td>
						</tr>
						<tr>
							<td> IPK </td>
							<td>:</td>
							<td><input type='password' name='ipk' style="color:black;"> </td>
						</tr>
						<tr>
							<td> E-mail </td>
							<td>:</td>
												<td> <input type="email" style="color:black;" name="alamatEmail"  placeholder="Enter a valid email address"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></td>
						</tr>
						<tr>
							<td> No telepon </td>
							<td>:</td>
							<td> <input type="text" name="noTelepon" style="color:black;"></td>
						<tr>
							<td> Username </td>
							<td>:</td>
							<td><input type='text' name='user' style="color:black;"> </td>
						</tr>
						<tr>
							<td> Password </td>
							<td>:</td>
							<td><input type='password' name='password' style="color:black;"> </td>
						</tr>
						<tr>
							<td> Upload Foto </td>
							<td>:</td>
							<td> <input type='file' name='namafile' size="30"></td>
						</tr>
					</table>
					<br><input type="submit" name='submit' value="Daftar" class="btn btn-success">
				</center>
				</form>
				
               
            </div>
        </div>
	</div>
	</div>
    </header>

    

    <!-- Jadwal Section -->
    <section id="jadwal" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
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
				<center><h3 style=”height:100%;margin-left:20px;color:#444;font-family: 'Lato', sans-serif;”>LOGIN</h3>
                </center>
            </div>
            <div class="modal-body row">
                
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg btn-block">Masuk</button>
						
						<a href="daftarkp.html" class="btn btn-primary btn-lg btn-block ">Daftar KP</a>
                    </div>
                </form>
				<br>
            </div>
            
        </div>
    </div>
	</div>
	
	
	
	
	
	
	
    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/js/grayscale.js"></script>

</body>

</html>
