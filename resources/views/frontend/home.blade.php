@extends('layouts.front')

@section('title', 'Page Title')
@section('content')	
	<!-- Section: intro -->
    <section id="intro" class="intro home_intro">
		<div class="slogan">
			<h2>The Online Platform for</h2>
			<h2>Commercial Real Estate Loans</h2>
			<h4>Use the faster, smarter financing engine today.</h4>
		</div>
		<div class="page-scroll">
			<button type="button" class="btn btn-lg btn-success">Get a loan</button>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Who uses Stack Source</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                    	<div class="avatar"><img src="{{ URL::asset('frontend/img/stack/property-owners.png') }}" alt="" class="img-responsive img-circle" /></div>
						<h5>Property Owners</h5>
                        <p class="subtitle">Easily find the best lender for your commercial real estate investment.</p>
                        <button type="button" class="btn btn-primary">Learn More</button>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<div class="avatar"><img src="{{ URL::asset('frontend/img/stack/mortgage+brokers.png') }}" alt="" class="img-responsive img-circle" /></div>

						<h5>Brokers and Debt Teams</h5>
                        <p class="subtitle">Centralize and track your process from building the OM to negotiating term sheets.</p>
                        <button type="button" class="btn btn-primary">Learn More</button>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
                    	<div class="avatar"><img src="{{ URL::asset('frontend/img/stack/commercial-real-estate-lenders.png') }}" alt="" class="img-responsive img-circle" /></div>
						<h5>Lenders</h5>
                        <p class="subtitle">Access pre-processed lending opportunities from brokers and sponsors.</p>
                        <button type="button" class="btn btn-primary">Learn More</button>
					</div>
                </div>
				</div>
            </div>
		</div>		
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>The Online Platform for Commercial Real Estate Loans</h2>
					<p>StackSource is an online platform for getting a commercial real estate loan, also known as a commercial mortgage. Commercial property owners and developers can use StackSource to find the best financing for their asset, lenders get hooked in to relevant loan deal flow, and brokers and debt teams benefit from an efficient, centralized process. StackSource connects borrowers and lenders seeking all loan types including bridge loans, term loans, and long term loans.</p>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr class="marginbot-50">
				<p>StackSource connects borrowers with lenders for all commercial real estate asset types</p>
			</div>
		</div>
        <div class="row">
            <div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/office-property-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Office Loans</h5>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/Industrial+Property+Loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Industrial Loans</h5>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/retail-property-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Retail Loans</h5>
					</div>
                </div>
				</div>
            </div>
			
			<div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/Hotel+Loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Hotel Loans</h5>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/mutifamily-property-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Multifamily Loans</h5>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-2 col-md-2">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/download.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>And More</h5>
					</div>
                </div>
				</div>
            </div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<hr class="marginbot-50">
				<p>StackSource finds the right lender for your financing scenario</p>
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/new-development-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>New Development</h5>
						<p>Get competitive offers from banks and private lenders for your construction loan.</p>
					</div>
                </div>
				</div>
            </div>
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/redevelopment-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Redevelopment</h5>
						<p>Raise capital to maximize the value of your commercial asset from simple rehab to a full repositioning.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/acquisition-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Acquisition</h5>
						<p>Connect to lenders with the flexibility you need to get your deal done.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ URL::asset('frontend/img/stack/refinance-loans.png') }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Refinance</h5>
						<p>Find the best rate by comparing commercial property refinance loans from multiple lenders.</p>
					</div>
                </div>
				</div>
            </div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<hr class="marginbot-50">
					<h4>Connect with lenders for your commercial mortgage in 10 minutes</h4>
					<p>All you need to get started is basic property information and a financial summary.</p>
					<button type="button" class="btn btn-lg btn-success">Start Now</button>
				</div>
			</div>

		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
						<div class="section-heading">
							<h2>Get in touch</h2>
							<i class="fa fa-2x fa-angle-down"></i>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<p>Our offices are located throughout the greater <strong>Los Angeles area and Southern California</strong></p>
				<address>

				  <strong>22632 Golden Springs Dr</strong><br>
				  Diamond Bar, CA 91765<br>
				  <abbr title="Phone">P:</abbr> (888) 806-1018
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">info@griffincrowdcapital.com</a>
				</address>	
				<address>
			  		<strong>We're on social networks</strong><br>
                   	<ul class="company-social">
                        <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>					  	  
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->
@endsection
