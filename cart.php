<?php

include('inc/topbar.php');

?>
<body class="animsition">

<?php

include('inc/navbar.php');

?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-11 mx-auto">
				<div class="row mt-5 gx-3">
					<!-- left side div -->
					<div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
						<div class="card p-4">
							<h2 class="py-4 font-weight-bold">Cart (items)</h2>
							<div class="row">
								<!-- cart images div -->
								<div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
									<img src="assets\images\black_coffee.jpg" class="img-fluid" alt="cart img">
								</div>

								<!-- cart product details -->
								<div class="col-md-7 col-11 mx-auto px-4 mt-2">
									<div class="row">
										<!-- product name  -->
										<div class="col-6 card-title">
											<h1 class="mb-4 product_name">coffee</h1>
											<!-- <p class="mb-2">SHIRT - BLUE</p>
											<p class="mb-2">COLOR: BLUE</p>
											<p class="mb-3">SIZE: M</p> -->
										</div>
										<!-- quantity inc dec -->
										<div class="col-6">
											<ul class="pagination justify-content-end set_quantity">
												<li class="page-item">
													<button class="page-link " onclick="decreaseNumber('textbox','itemval')">
														<i class="fas fa-minus"></i> </button>
												</li>
												<li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox">
												</li>
												<li class="page-item">
													<button class="page-link" onclick="increaseNumber('textbox','itemval')"> <i class="fas fa-plus"></i></button>
												</li>
											</ul>
										</div>
									</div>
									<!-- //remover move and price -->
									<div class="row">
										<div class="col-8 d-flex justify-content-between remove_wish">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, quaerat.</p>
										</div>
										<div class="col-4 d-flex justify-content-end price_money">
											<h3>$<span id="itemval">0.00 </span></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr />
						<!-- 2nd cart product -->
						<div class="card p-4">
							<div class="row">
								<!-- cart images div -->
								<div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
									<img src="assets\images\drink-2.jpg" class="img-fluid" alt="cart img">
								</div>
								<!-- cart product details -->
								<div class="col-md-7 col-11 mx-auto px-4 mt-2">
									<div class="row">
										<!-- product name  -->
										<div class="col-6 card-title">
											<h1 class="mb-4 product_name">Drinks</h1>
							
										</div>
										<!-- quantity inc dec -->
										<div class="col-6">
											<ul class="pagination justify-content-end set_quantity">
												<li class="page-item">
													<button class="page-link " onclick="decreaseNumber('textbox1','itemval1')"> <i class="fas fa-minus"></i> </button>
												</li>
												<li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox1">
												</li>
												<li class="page-item">
													<button class="page-link" onclick="increaseNumber('textbox1','itemval1')"> <i class="fas fa-plus"></i></button>
												</li>
											</ul>
										</div>
									</div>
									<!-- //remover move and price -->
									<div class="row">
										<div class="col-8 d-flex justify-content-between remove_wish">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, quia.</p>
										</div>
										<div class="col-4 d-flex justify-content-end price_money">
											<h3>$<span id="itemval1">0.00 </span> </h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- right side div -->
					<div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
						<div class="right_side p-3 shadow bg-white">
							<h2 class="product_name mb-5">The Total Amount Of</h2>
							<div class="price_indiv d-flex justify-content-between">
								<p>Product amount</p>
								<p>$<span id="product_total_amt">0.00</span></p>
							</div>
							<div class="price_indiv d-flex justify-content-between">
								<p>Delivering Charge</p>
								<p>$<span id="shipping_charge">50.0</span></p>
							</div>
							<hr />
							<div class="total-amt d-flex justify-content-between font-weight-bold">
								<p>The total amount of (including VAT)</p>
								<p>$<span id="total_cart_amt">0.00</span></p>
							</div>
							<button class="btn btn-primary text-uppercase">Checkout</button>
						</div>
					
						<!-- discount code ends -->
						<div class="mt-3 shadow p-3 bg-white">
							<div class="pt-4">
								<h5 class="mb-4">Expected delivery date</h5>
								<p>With in 1 Hour</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var product_total_amt = document.getElementById('product_total_amt');
		var shipping_charge = document.getElementById('shipping_charge');
		var total_cart_amt = document.getElementById('total_cart_amt');
		var discountCode = document.getElementById('discount_code1');
		const decreaseNumber = (incdec, itemprice) => {
			var itemval = document.getElementById(incdec);
			var itemprice = document.getElementById(itemprice);
			console.log(itemprice.innerHTML);
			// console.log(itemval.value);
			if (itemval.value <= 0) {
				itemval.value = 0;
				alert('Negative quantity not allowed');
			} else {
				itemval.value = parseInt(itemval.value) - 1;
				itemval.style.background = '#fff';
				itemval.style.color = '#000';
				itemprice.innerHTML = parseInt(itemprice.innerHTML) - 15;
				product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 15;
				total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
			}
		}
		const increaseNumber = (incdec, itemprice) => {
			var itemval = document.getElementById(incdec);
			var itemprice = document.getElementById(itemprice);
			// console.log(itemval.value);
			if (itemval.value >= 5) {
				itemval.value = 5;
				alert('max 5 allowed');
				itemval.style.background = 'red';
				itemval.style.color = '#fff';
			} else {
				itemval.value = parseInt(itemval.value) + 1;
				itemprice.innerHTML = parseInt(itemprice.innerHTML) + 15;
				product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) + 15;
				total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
			}
		}
		// // Vinod Bahadur Thapa
		// const discount_code = () => {
		// 	let totalamtcurr = parseInt(total_cart_amt.innerHTML);
		// 	let error_trw = document.getElementById('error_trw');
		// 	if (discountCode.value === 'thapa') {
		// 		let newtotalamt = totalamtcurr - 15;
		// 		total_cart_amt.innerHTML = newtotalamt;
		// 		error_trw.innerHTML = "Hurray! code is valid";
		// 	} else {
		// 		error_trw.innerHTML = "Try Again! Valid code is thapa";
		// 	}
		// }
	</script>

<?php
include('inc/footer.php');
?>