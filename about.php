<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<link rel="stylesheet" type="text/css" href="css/about.css">
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			<div class="row row-colored load-json-here">
				<div class="col-sm-3">
					<img src="img/bethany-closeup.jpg" class="bethany-img center responsive" alt="Bethany Negash Picture">
				</div>
				<div class="col-sm-9 headline-content">
					<h2 class="headline-title">Headline 1</h2>
					<p class="headline-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<hr>
					<h2 class="headline-title">Headline 2</h2>
					<p class="headline-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<hr>
					<h2 class="headline-title">Headline 3</h2>
					<p class="headline-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<br>
					<hr>
					<div class="about-contact">
						<h3 class="headline-title">Contact Us: <div class="contact-phone">Phone: 678-555-5555</div></h3>


						<form role="form" action="/Minh/contact_admin.php" method="get">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="name" class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="comments">Comments (max 1000 characters)</label>
								<textarea class="form-control" rows="4" id="comment" maxlength="1000" name="comments-area"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>

					</div> <!-- end about-contact -->
				</div> <!-- end headline-content -->
			</div> <!-- end row load-json-here -->
		</div><!--End main-wrapper-->
		<!--Top of page-->
		<!--end of top of page-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
		<script src="js/aboutUs.js"></script>
	</body>
</html>