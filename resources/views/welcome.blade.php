@extends('layout.Master')
@section('title, About')

@section('content')
    <!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Furniture MAP</p>
								<h1>LET US DO THE HEAVY LIFTING</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">See Categories</a>
									<a href="contact.html" class="bordered-btn">Wath Video</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Furniture Map Will Help You </p>
								<h1>Moving Home Services</h1>
								<div class="hero-btns">
									<a href="/Shop" class="boxed-btn">Visit Shop</a>
									<a href="/Contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Welcom In furniture MAP</p>
								<h1>Need A Truck & Acessories For Moving ?  </h1>
								<div class="hero-btns">
									<a href="/Shop" class="boxed-btn">Visit Shop</a>
									<a href="/Contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- start reserveing date -->
	<div id="booking" class="section mt-2">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">	
						<h3 id="reserve_data">Reserve Date To Start Moving <h3>
						<form action=""method="post">
							@csrf
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label"><strong>Pick Up Location</strong></span>
										<select class="form-control" name="PickupLocation" required>
											<option value="Aqaba">Aqaba</option>
											<option value="Ma'an">Ma'an</option>
											<option value="Altafelah">Altafelah</option>
											<option value="Alkarak">Alkarak</option>
											<option value="Amman">Amman</option>
											<option value="jarash">Jarash</option>
											<option value="Alzarqaa">Alzarqaa</option>
											<option value="Madaba">Madaba</option>
											<option value="Alsalt">Alsalt</option>
											<option value="Almafraq">Almafraq</option>
											<option value="Irbid">Irbid</option>
											<option value="Ajloun">Ajloun</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row no-margin">
										<div class="col-md-7">
											<div class="form-group">
												<span class="form-label"><strong>Drop-Off Location</strong></span>
												<select class="form-control" name="DropOffLocation" required>
													<option value="Aqaba">Aqaba</option>
													<option value="Ma'an">Ma'an</option>
													<option value="Altafelah">Altafelah</option>
													<option value="Alkarak">Alkarak</option>
													<option value="Amman">Amman</option>
													<option value="jarash">Jarash</option>
													<option value="Alzarqaa">Alzarqaa</option>
													<option value="Madaba">Madaba</option>
													<option value="Alsalt">Alsalt</option>
													<option value="Almafraq">Almafraq</option>
													<option value="Irbid">Irbid</option>
													<option value="Ajloun">Ajloun</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<span class="form-label"><strong>Check Out</strong></span>
												<input type="datetime-local" class="form-control" name="StartTime" required>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<div >
										<button class="btn btn-primary orange" >Check availability</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end reserving date -->





	<!-- features list section -->
	<div class="list-section pt-80 pb-80 mt-5">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Transportation</h3>
							<p>For Moving House</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get Support All Day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-boxes"></i>
						</div>
						<div class="content">
							<h3>Loading / Unloading</h3>
							<p>Get Help To Load Or Upload Your Boxes </p>
						</div>
					</div>
				</div>
			</div>

			<div class="row pt-5 pb-2">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-map-marked-alt"></i>
						</div>
						<div class="content">
							<h3>Long Distance</h3>
							<p>Safe and Reliable For Long Distance Moving</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-retweet"></i>
							</div>
						<div class="content">
							<h3>Home Relocation</h3>
							<p>Offers The Best Home Relocation Services In Jordan</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-building"></i>
						</div>
						<div class="content">
							<h3>Office Relocation</h3>
							<p> Professional And Reliable Office Relocation Service In JORDAN</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features list section -->

	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 mt-lg-5">
					<div class="abt-bg">
						<a href="https://youtube/gLpxhK4IL_E" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">BEST MOVERS AROUND</p>
						<h3>We are <span class="orange-text">Furniture MAP</span></h3>
						<p>We are the leading movers and packers in Jordan, providing top-quality services at affordable prices. We are a family-owned and operated company, and we take pride in our reputation for excellence. We offer a wide range of services, including packing, moving, and storage, and we are dedicated to providing the highest level of customer service. Our team of experienced professionals will take care of everything for you, so you can relax and focus on your new home or office.</p>
						<a href="/About" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	

	<!-- cart banner section -->
	<section class="cart-banner pt-80 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off Packaging
                                </span>
                            </div>
                        </div>
                    	<img src="/img/Moving-house-1.jpeg" alt=""   style="border-radius:5%;"
						>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Master Bedroom Packaging</h4>
                    <div class="text">The Bedroom Master Packaging is our largest moving ideal for homes with Master bedroom . This kit includes all the supplies necessary to pack, organize, protect, and cushion all of the items in your home. The quantities of each item in the kit can be adjusted to best fit your moving and packing needs.</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2022/10/5"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<!-- <div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end testimonail-section -->
	
	<!-- shop banner -->
	<!-- <section class="shop-banner">
    	<div class="container" >
        	<h3 >December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">5 WAYS TO MAKE THE PROCESS EASIER FOR THE WHOLE FAMILY</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
    @endsection
