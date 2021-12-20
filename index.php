<?php
include 'includes/template/header.php';
?>
<section class="section">
	<div class="swiper-form-wrap">
		<!-- Swiper-->
		<div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-1.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>Hundreds of Amazing Destinations</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">We offer a variety of destinations to travel to, ranging from exotic to some extreme ones. They include very popular countries and cities like Paris, Rio de Janeiro, Cairo and a lot of others.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-2.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>The Trip of Your Dream</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">Our travel agency is ready to offer you an exciting vacation that is designed to fit your own needs and wishes. Whether it’s an exotic cruise or a trip to your favorite resort, you will surely have the best experience.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-3.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>unique Travel Insights</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">Our team is ready to provide you with unique weekly travel insights that include photos, videos, and articles about untravelled tourist paths. We know everything about the places you’ve never been to!</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Swiper controls-->
			<div class="swiper-pagination-wrap">
				<div class="container container-bigger">
					<div class="row">
						<div class="col-sm-12">
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container container-bigger form-request-wrap form-request-wrap-modern">
			<div class="row row-fix justify-content-sm-center justify-content-lg-end">
				<div class="col-lg-6 col-xxl-5">
					<div class="form-request form-request-modern bg-gray-lighter novi-background">
						<h4>SOLICITAR PAQUETE TURISTICO</h4>
						<!-- RD Mailform-->
						<form class="rd-mailform form-fix">
							<div class="row row-20 row-fix">
								<div class="col-sm-12">
									<label class="form-label-outside">Paquete</label>
									<div class="form-wrap form-wrap-inline">
										<select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
											<option value="1">New York</option>
											<option value="2">Lisbon</option>
											<option value="3">Stockholm</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Fecha Salida</label>
									<div class="form-wrap form-wrap-validation">
										<!-- Select -->
										<input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
										<label class="form-label" for="dateForm">Selecciona Fecha</label>
										<!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
										<!--  option(value="1") Choose the date-->
										<!--  option(value="2") Primary-->
										<!--  option(value="3") Middle-->
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Tiempo Estadía</label>
									<div class="form-wrap form-wrap-validation">
										<!-- Select 2-->
										<select class="form-input select-filter" data-placeholder="Todos" data-minimum-results-for-search="Infinity" name="city">
											<option value="1">1 día</option>
											<option value="2">2 día</option>
											<option value="3">3 día</option>
											<option value="4">4 día</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="form-label-outside">Adults</label>
									<div class="form-wrap form-wrap-modern">
										<input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="2">
									</div>
								</div>
								<div class="col-lg-6">
									<label class="form-label-outside">Children</label>
									<div class="form-wrap form-wrap-modern">
										<input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0">
									</div>
								</div>
							</div>
							<div class="form-wrap form-button">
								<button class="button button-block button-secondary" type="submit">search flight</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-variant-1 bg-default novi-background bg-cover">
	<div class="container container-wide">
		<div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
			<div class="col-xl-8">
				<div class="parallax-text-wrap">
					<h3>Our Best Tours</h3><span class="parallax-text">Hot tours</span>
				</div>
				<hr class="divider divider-decorate">
			</div>
			<div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="#">view all tours</a></div>
		</div>
		<div class="row row-50">
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-01-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">France, Paris</a></h5><span class="heading-5">from $280</span>
					</div>
				</article>
			</div>
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-02-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">USA, Boston</a></h5><span class="heading-5">from $480</span>
					</div>
				</article>
			</div>
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-03-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">Italy, Venice</a></h5><span class="heading-5">from $350</span>
					</div>
				</article>
			</div>
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-04-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">Spain, Benidorm</a></h5><span class="heading-5">from $350</span>
					</div>
				</article>
			</div>
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-05-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">Egypt, Sharm El Sheikh</a></h5><span class="heading-5">from $520</span>
					</div>
				</article>
			</div>
			<div class="col-md-6 col-xl-4">
				<article class="event-default-wrap">
					<div class="event-default">
						<figure class="event-default-image"><img src="images/landing-private-airlines-06-570x370.jpg" alt="" width="570" height="370" />
						</figure>
						<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
					</div>
					<div class="event-default-inner">
						<h5><a class="event-default-title" href="#">UK, London</a></h5><span class="heading-5">from $600</span>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<!-- our advantages-->
<section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
	<div class="container container-wide">
		<h3>our services</h3>
		<div class="divider divider-decorate"></div>
		<div class="row row-50 justify-content-sm-center text-left">
			<div class="col-sm-10 col-md-6 col-xl-3">
				<article class="box-minimal box-minimal-border">
					<div class="box-minimal-icon novi-icon mdi mdi-airplane"></div>
					<p class="big box-minimal-title">Air Tickets</p>
					<hr>
					<div class="box-minimal-text text-spacing-sm">At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</div>
				</article>
			</div>
			<div class="col-sm-10 col-md-6 col-xl-3">
				<article class="box-minimal box-minimal-border">
					<div class="box-minimal-icon novi-icon mdi mdi-map"></div>
					<p class="big box-minimal-title">Voyages & Cruises</p>
					<hr>
					<div class="box-minimal-text text-spacing-sm">Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers looking for awesome experiences.</div>
				</article>
			</div>
			<div class="col-sm-10 col-md-6 col-xl-3">
				<article class="box-minimal box-minimal-border">
					<div class="box-minimal-icon novi-icon mdi mdi-city"></div>
					<p class="big box-minimal-title">Hotel Bookings</p>
					<hr>
					<div class="box-minimal-text text-spacing-sm">We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</div>
				</article>
			</div>
			<div class="col-sm-10 col-md-6 col-xl-3">
				<article class="box-minimal box-minimal-border">
					<div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
					<p class="big box-minimal-title">Tailored Summer Tours</p>
					<hr>
					<div class="box-minimal-text text-spacing-sm">Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</div>
				</article>
			</div>
		</div>
	</div>
</section>

<!-- Tips & tricks-->
<section class="section section-lg novi-background bg-cover bg-default text-center">
	<div class="container-wide">
		<div class="row row-50">
			<div class="col-sm-12">
				<h3>Latest News</h3>
				<div class="divider divider-decorate"></div>
				<!-- Owl Carousel-->
				<div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
					<article class="post-blog"><a class="post-blog-image" href="#"><img src="images/landing-private-airlines-7-570x415.jpg" alt="" width="570" height="415" /></a>
						<div class="post-blog-caption">
							<div class="post-blog-caption-header">
								<ul class="post-blog-tags">
									<li><a class="button-tags" href="#">Hotels</a></li>
								</ul>
								<ul class="post-blog-meta">
									<li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
								</ul>
							</div>
							<div class="post-blog-caption-body">
								<h5><a class="post-blog-title" href="#">Top 10 Hotels to Stay At: Exclusive Rating by Sealine Travel Experts</a></h5>
							</div>
							<div class="post-blog-caption-footer">
								<time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
							</div>
						</div>
					</article>
					<article class="post-blog"><a class="post-blog-image" href="#"><img src="images/landing-private-airlines-8-570x415.jpg" alt="" width="570" height="415" /></a>
						<div class="post-blog-caption">
							<div class="post-blog-caption-header">
								<ul class="post-blog-tags">
									<li><a class="button-tags" href="#">Tips</a></li>
								</ul>
								<ul class="post-blog-meta">
									<li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
								</ul>
							</div>
							<div class="post-blog-caption-body">
								<h5><a class="post-blog-title" href="#">How to Plan Your Vacation in Advance and Why It’s Beneficial</a></h5>
							</div>
							<div class="post-blog-caption-footer">
								<time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
							</div>
						</div>
					</article>
					<article class="post-blog"><a class="post-blog-image" href="#"><img src="images/landing-private-airlines-9-570x415.jpg" alt="" width="570" height="415" /></a>
						<div class="post-blog-caption">
							<div class="post-blog-caption-header">
								<ul class="post-blog-tags">
									<li><a class="button-tags" href="#">Traveling</a></li>
								</ul>
								<ul class="post-blog-meta">
									<li><span>by</span>&nbsp;<a href="#">Ronald Chen</a></li>
								</ul>
							</div>
							<div class="post-blog-caption-body">
								<h5><a class="post-blog-title" href="#">Your Personal Guide to 5 Best Places to Visit on Earth</a></h5>
							</div>
							<div class="post-blog-caption-footer">
								<time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
							</div>
						</div>
					</article>
				</div>
			</div>
			<div class="col-12"><a class="button button-secondary button-nina button-offset-lg" href="#">view all blog posts</a></div>
		</div>
	</div>
</section>
<?php
include 'includes/template/footer.php';
?>