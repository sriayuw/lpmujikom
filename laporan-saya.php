<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
<title>Laporan Pengaduan Masyarakat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
	 <?php 
		session_start();
		if($_SESSION['login'] == false ){
			header("location:auth/login-masyarakat.php");
		}
 ?>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<ul>
					<nav class="cl-effect-5">
						<li><a href="#">Laporan Pengaduan Masyarakat</span></a></li>
					</nav>
				</ul>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="/lpm"><span data-hover="Home">home</span></a></li>
				<li><a class="" href="#laporkan">Laporkan</li>
				<li><a href="#layanan">Layanan</a></li>
				<li><a href="#kontak">Kontak</span></a></li>
				<li><a href="laporan-saya.php">laporan saya</span></a></li>
				<li><a href="auth/logout-masyarakat.php">logout</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Laporan Pengaduan Masyarakat</h1> 
				   		 		<h2>Laporakan Segala Permasalahan</h2>
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
				   		 		<h1>Privasi Anda Aman</h1> 
				   		 		</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
				   	       <div class="banner_center">
				   		 		<h1>Anda Akan Dianggap Sebagai Anonim saat Melaporkan</h1> 
				   		 		</div>
				   		 </div>
					 </article>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
	<div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<!-- <div class="about-header">
			<h3>Ceritakan Laporan Anda</h3>
			<div class="about-imag">
			<img src="images/pic-9.jpg" alt=""/>
			</div>
			<div class="about-text">
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p> 
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. . </p>
			</div>
			<div class="clearfix"></div>
			</div> -->
			<div class="about-sectiongrids">
				<!-- <div class="col-md-6 about-leftgrid">
					<div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Graphic Design</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Ui/Ux</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Logo Design</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Html/Css</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>

	</div -->
		<div class="clearfix"></div>
	</div>
	<div class="arrow1">
	<a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
					</div>
	</div>
	</div>
	<!-- about-section-ends -->
	<!-- <div class="works-section" id="work" id="work">
	   <div class="works-header">
			<h3>works</h3>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
		</div>
		<div class="portfolio-section-bottom-row" id="portfolio">
			<div class="container">
				
						<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<link rel="stylesheet" href="css/swipebox.css">
							<script src="js/jquery.swipebox.min.js"></script> 
								<script type="text/javascript">
									jQuery(function($) {
										$(".swipebox").swipebox();
									});
								</script>
							<!-- Portfolio Ends Here -->
						<!-- <div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Branding</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Print</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Web design</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li>
									  <div class="clearfix"></div>
								  </ul>	
								<div id="portfoliolist">
									<div class="resp-tabs-container">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-3.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-4.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-5.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-6.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-7.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-8.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="clearfix"></div>	
											</div>
																				 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
														<a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-5.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-6.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-7.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-8.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
													<div class="clearfix"></div>	
											</div>	 	        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-3.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-4.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>		        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>										
									</div>	
								</div>
							</div>
						</div>				
 
				<div class="arrow">
					<a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
				</div>
			</div>
		</div> -->
	<!-- </div> --> 



	<!-- portfolio-section-ends -->
	<div class="services-section" id="layanan">

		<div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th>Tanggal</th>
                                                <th>Judul Laporan</th>
                                                <th class="text-center">Isi Laporan</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include ('function.php');
                                            $username   = $_SESSION['username'];
                                            $sql = "SELECT * FROM masyarakat WHERE username='$username'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows < 0) {
                                                echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
                                            } else { 
                                                while($row = $result->fetch_assoc()) {
                                                    $nik = $row['nik'];
                                                }
                                            }
                                            $sql = "SELECT * FROM laporan_pengaduan WHERE nik = '$nik'";
                                            $result = $conn->query($sql);

                                            $batas = 3;
                                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
                                            $previous = $halaman - 1;
                                            $next = $halaman + 1;
                                            $jumlah_data = mysqli_num_rows($result);
                                            $total_halaman = ceil($jumlah_data / $batas);
                                            $data_laporan = mysqli_query($conn,"SELECT * FROM `laporan_pengaduan` WHERE nik = '$nik' LIMIT $halaman_awal, $batas");
 $nomor = $halaman_awal+1;
while($d = mysqli_fetch_array($data_laporan)){
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $d['tanggal_pengaduan']; ?></td>
                        <td><?php echo $d['judul_laporan']; ?></td>
                        <td><?php echo $d['isi_laporan']; ?></td>
                        <td><?php echo $d['status']; ?></td>
                        <td><?php echo '<p>
                              <a href="dashboard/cetak-pengaduan.php?id='.$d['id'].'">
                                <button class="btn btn-success">Cetak Laporan
                                </button>
                              </a>
                            </p>';
                             ?>
                        </td>

                    </tr>
                    <?php
                }
    // cek apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    ?>
                                        </table>
                                        <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
            </li>
            <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
            ?>              
            <li class="page-item">
                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
            </li>
        </ul>
    </nav>
                                    </div>
		</div>
		<!-- services-section-ends -->
	</div>
	<div class="footer-section" id="kontak">
			<div class="container"> 
			<div class="contact-header">
				<h3> Kontak</h3>
					<p>Laporan semua kejadian masalah yang terjadi semua data pelapor aman data anda kami rahasiakan </p>
			</div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
			</div>
			<div class="footer-bottom">

					<p>&copy; Sri Ayu Wandira<a href="http://templatestock.com" target="target_blank">Sri Ayu Wandira</a></p>

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>