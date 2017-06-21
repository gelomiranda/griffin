@extends('layouts.front')

@section('title', 'Page Title')
@section('content')
	<!-- Section: intro -->
    <section id="intro" class="intro how_it_works_intro">
		<div class="slogan">
			<img src="{{ URL::asset('public/frontend/img/stack/how_it_works.png') }}">
			<h2>Property Owners</h2>
			<h4>Griffin Crowd & Capital helps you find your best commercial real </h4>
			<h4>estate loan.  Simple access to competitive loan offers.</h4>
​			<h4>Our Lenders: Banks, CMBS, Fannie Mae, Freddie Mac, HUD/FHA,</h4>
			<h4>Private Equity, and Crowdfunders.</h4>
		</div>
		<div class="page-scroll">
			<button type="button" class="btn btn-lg btn-success">Get a loan</button>
		</div>
    </section>
	<!-- /Section: intro -->
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
	      
	    <div class="row">
	        <div class="col-md-12  text-center">
				<div class="" data-wow-delay="0.2s">
				<h2>1. Submit a Loan Request</h2>
				<p>Submit a single loan application through our interactive guide to </p>
				<p>be instantly matched with top commercial real estate lenders.</p>
	            <img src="{{ URL::asset('public/frontend/img/stack/laptop.png') }}"  class="img-responsive img-center marginbot-40" />
				</div>
	        </div>
	    </div>
	</div>	
	<!-- Section: intro -->
    <section id="intro" class="section intro how_it_works_intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="slogan">
						<h2 class="margintop-50">2. Investor Review</h2>
						<p class="text-light">Our investors receive your loan request and immediately </p>
						<p class="text-light">start reviewing your submission.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<img src="{{ URL::asset('public/frontend/img/stack/tablet.png') }}"  class="img-responsive img-center" />
					
				</div>
			</div>
		</div>	
    </section>	
    <div class="container">
		<div class="col-lg-6">
    		<img src="{{ URL::asset('public/frontend/img/stack/dashboard.png') }}"  class="img-responsive img-center margintop-50 marginbot-50" />
    	</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="slogan">
					<h2 class="margintop-50">3. Receive Loan Offers</h2>
					<p>Receive instant emails with loan offers, scenarios,  </p>
					<p>and requirements.</p>
					<button type="button" class="btn btn-lg btn-success">Start NOW</button>
				</div>
			</div>
		</div>
	</div>	
@endsection	