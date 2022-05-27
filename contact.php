<?php

include('inc/topbar.php');

?>

<body class="animsition">
	<?php

	include('inc/navbar.php');

	?>



<section class="bg-title-page flex-c-m p-t-100 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/contact_us.jpg);">
<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
						  For any Queries
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2 text-light">
						Contact Us
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto ">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9 text-light">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9 text-light">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
						</div>
					</div>

					<div class="col-md-4 ">
						<!-- Phone -->
						<span class="txt9 text-light">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9 text-light">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Submit
					</button>
				</div>
			</form>
				</div>
			</div>

			
		</div>
	</section>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113 ">
	
	</section>


	<?php
	include('inc/footer.php');
	?>