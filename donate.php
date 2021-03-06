<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<link rel="stylesheet" type="text/css" href="css/donate.css">
		<title>Bethany homepage (testing)</title>
	</head>
		<?php require 'php/templates/nav.php';?>
		<body data-spy="scroll" data-target="#my-navbar">
			<div id="main-wrapper" class="container">
				<div class="row load-json-here">
					<div class="col-md-12 row donate-bkgd">
						<div class="col-md-6">
							<h1 class="catch-phrase">
								Help Us <br> Change Lives
							</h1>
						</div>
				        <div class="col-md-6 overlay-content">
							<h3 class="headline">How we use the money</h3>
							<p class="donate-p">
								<br>
								Your financial contribution is used to achieve our mission by educating more young minds. Our services include providing library books, computer access, internet access, and awards for outstanding learners. Your financial contribution helps pay for computers and books, and updating these resources; increases our internet bandwidth to support more children; and expand our services to more locations.
							</p>
							<div class="donate-warning">This button below will redirect you to PayPal to accept your donation</div>

							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> 
								<input type="hidden" name="cmd" value="_s-xclick"> 
								<input type="hidden" name="hosted_button_id" value="ZWMD84PNFXET2"> 
								<input type="image" src="img/dev/paypal-donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> 
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> 
							</form>

				        </div> <!-- end overlay content -->
					</div> <!-- end donate-bkgd -->
				</div> <!-- end row, load-json-here -->
			</div>
			<!--End of container fluid-->
			<!--Top of page-->
			<p id="back-top">
				<a href="#top"><span></span></a>
			</p>
			<!--end of top of page-->
			<?php require 'php/templates/footer.php';?>
			<?php require 'php/templates/footing.php';?>
			<script src="js/donate.js"></script>
		</body>
	</html>