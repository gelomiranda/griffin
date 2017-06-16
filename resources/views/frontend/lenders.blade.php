@extends('layouts.front')

@section('title', 'Page Title')
@section('content')
	<!-- Section: intro -->
    <section id="intro" class="intro how_it_works_intro">
		<div class="slogan">
			<img src="{{ URL::asset('public/frontend/img/stack/lenders.png') }}">
			<h2>Lenders</h2>
			<h4>Discover new loan deals based on your preferences.</h4>
		</div>
		<div class="page-scroll">
			<button type="button" class="btn btn-lg btn-success">Talk to us</button>
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
				<h2>Streamlined Loan Requests</h2>
				<p>Tell us about about the types of loan deals you prefer based on </p>
				<p>criteria such as loan size, asset type, and geography.  We gather </p>
				<p>project information and connect you to sponsors as new </p>
				<p>opportunities become available.  </p>
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
						<h2 class="margintop-50">Secure Systems</h2>
						<p class="text-light">Loan offers are privately returned to sponsors in a  </p>
						<p class="text-light">secure, interactive format.</p>
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
					<h2 class="margintop-50">Quote and Win</h2>
					<p>Retrieve deal information, communicate, and </p>
					<p>quote a loan deal all within the Griffin Crowd & </p>
					<p>Capital platform.</p>
					<button type="button" class="btn btn-lg btn-success">Let's Talk</button>
				</div>
			</div>
		</div>
	</div>	
@endsection	