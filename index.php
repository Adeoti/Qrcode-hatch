<?php
session_start();
date_default_timezone_set("Africa/Lagos");

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Generate free QR Codes in just  2 clicks | QRCode-Hatch</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="description" content="The best online tool to generate QR Codes in seconds. Generate Unlimited QR Codes for you and your business. No signup needed. 100% Free.">
				<meta name="robots" content="index, follow">
				<meta charset="UTF-8">

				<link rel="shortcut icon" type="image/png" href="images/logo.png"/>
				<?php require("styles/toplx.php");?>
				<link rel="stylesheet" href="mystyle.css">
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		</head>
		<body>
		
		
			<div class="container-fluid">
				<div class="row">
					<div class="modal fade aboutus">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title"><img src="images/logo.png" class="img img-fluid logo"> About QRCode-Hatch</h5>
										<button type="button" class="close modalclor" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<p>QRCode-Hatch is a free QR Code generator, which can be used to generate both static and customized QR Codes to boost branding, and facilitate work flows.</p>
									<br>
									<p>QRCode-Hatch is a kick-and-start tool that needs no registration to use; no delay, no dulling!</p>
								
									<hr>
									<p>
										<i class="fa fa-code" style="font-weight:600; color:#ff5466;"></i> Developed by <a href="https://wa.link/at79ks">Adeoti Nurudeen</a>, a seasonal fullstack programmer, based in Nigeria.
									</p>
								</div>
									
							</div>
						</div>
					</div>
				
				
					<div class="col-sm-12 col-md-12" style="padding:0px;">
							<?php require("navs.php");?>
					</div>
					<div class="col-sm-12 col-md-12 pddp" style="background:#f1edfd;" >
							<div class="row">
								<div class="col-sm-12 col-md-2"></div>
									<div class="col-sm-12 col-md-8">
										<?php require("leatherboard.php");?>
										<center><span class="spanhead hero">Generate Unlimited QR Codes in 2 Clicks</span>
											<span class="subhead hero">100% Free. No signing up!</span>
										</center>
										<?php require("toolpanel.php");?>
									</div>
								<div class="col-sm-12 col-md-2"></div>
							</div>
					</div>
					<div class="col-sm-12 col-md-12 pddp" style="background:#fff;">
								<div class="row">
							<div class="col-sm-12 col-md-2"></div>
								<div class="col-sm-12 col-md-8 text-center">
								<?php require("sharer.php");?>
								
								</div>
							<div class="col-sm-12 col-md-2"></div>
								</div>
					</div>
					<div class="col-sm-12 col-md-12 pddp" style="background:#fff2f4;">
							<div class="row">
							<div class="col-sm-12 col-md-2"></div>
								<div class="col-sm-12 col-md-8" id="howtostar">
									<center><span class="pad pink"><i class="fa fa-heart"></i> It's Awesome</span></center><br>
									<?php require("why_how.php");?>
								
								</div>
							<div class="col-sm-12 col-md-2"></div>
								</div>
					</div>	
					<div class="col-sm-12 col-md-12 pddp" style="background:#fffbe4;">
							<div class="row">
							<div class="col-sm-12 col-md-2"></div>
								<div class="col-sm-12 col-md-8">
									<center><span class="pad yellow"><i class="fa fa-question-circle-o"></i> Have a question?</span></center><br>
									<?php require("faq.php");?>	
								</div>
							<div class="col-sm-12 col-md-2"></div>
								</div>
					</div>
					<div class="col-sm-12 col-md-12 pddp" style="background:#ecffff;">
							<div class="row">
							<div class="col-sm-12 col-md-2"></div>
							<div class="col-sm-12 col-md-8" id="usestar">
							<center><span class="pad green"><i class="fa fa-qrcode"></i> Everyone uses it!</span></center><br>
								<?php require("usecases.php");?>
									
							</div>
							<div class="col-sm-12 col-md-2"></div>
							</div>
					</div>
					<div class="col-sm-12 col-md-12 pddp" style="background:#f6f3ff;">
							<div class="row">
								<div class="col-sm-12 col-md-2"></div>
							<div class="col-sm-12 col-md-2"><br><br><center><span class="pad purple"><i class="fa fa-share-alt"></i> Love it? Share it!</span></center><br></div>
							<div class="col-sm-12 col-md-6">
						
								<?php require("sharer.php");?>
									
									
									
									<br>
									
									<?php require("copyrightplus.php");?>
							</div>
							<div class="col-sm-12 col-md-2"></div>
							</div>
					</div>
						
						
						
					
					
					<?php require("stackads.php");?>
				</div>
			</div>
			
			<div class="toast_">
				<div class="msg">Hello...</div>
				<div class="closer"><a href="javascript:void(null)" class="close_toast"><i class="fa fa-times"></i></a></div>
					<div style="clear:both;"></div>
			</div>
			<script src="js/qwrs.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
			<script src="boot/js/bootstrap.min.js"></script>
			<script src="js/qrmi.js"></script>
			<script src="js/qrxtra.js"></script>
				
				<script src="js/qrcode_hatch.js"></script>
				 <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
				<script>
					      function googleTranslateElementInit() {  
            new google.translate.TranslateElement(  
                {pageLanguage: 'en'},  
                'google_translate_element'  
            );  
        }  
				</script>
				
				
		</body>
	</html>