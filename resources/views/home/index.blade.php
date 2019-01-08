@extends('layouts.main')

@section('content')
<section class="page-header parallax page-header-text-light overlay overlay-color-dark overlay-show overlay-op-8" data-plugin-parallax="" data-plugin-options="{'speed': 1.2}" data-image-src="{{ URL::asset('images/parallax-1.jpg') }}" style="position: relative; overflow: hidden;">
	<div class="parallax-background" style="background-image: url('{{ URL::asset('images/parallax-1.jpg') }}'); background-size: cover; background-position: 50% center; position: absolute; top: 0px; left: 0px; width: 100%; height: 180%; transform: translate3d(0px, -62.8125px, 0px);"></div>
	<div class="container d-flex flex-column">
		<div class="row align-items-center position-relative min-height-370 z-index-10">
			<div class="col-md-12">
				<div class="row text-left">
					<div class="col-md-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
						<h1>Buy or Sell Your Plane Today!</h1>
						<p class="lead">AvMarket makes it easy to browse, create, or manage listings</p>
					</div>
				</div>
				<div class="row mx-auto pt-5">
					<div class="col-md-12">
						<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-3 btn-fs-2 mx-1 px-5">Find Aircraft</a>
						<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-3 btn-fs-2 mx-1 px-5">Sell Aircraft</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section-height-2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="font-weight-semibold mb-0 text-center">Categories<hr /></h3>
				<div class="row">
					<div class="col-md-6">
						<ul class="list list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="{{ URL::to('listings/piston-single') }}">Single-Engine Piston</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Multi-Engine Piston</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Piston Helicopters</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Special Use</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Aircraft Wanted</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Jets</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Turboprops</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Turbine Helicopters</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Swap/Trade</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">More...</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="font-weight-semibold mb-0 text-center">Manufacturers<hr /></h3>
				<div class="row">
					<div class="col-md-6">
						<ul class="list list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Cessna</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Beechcraft</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Mooney</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Piper</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Cirrus</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Socata</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Robinson</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Eurocopter</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">Bell</a></li>
							<li class="mb-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> <a href="#">More...</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-md-4 col-xs-12 offset-md-4">
				<a href="#" class="btn btn-outline btn-quaternary btn-block btn-4 btn-v-3 mb-2">Advanced Search</a>
			</div>
		</div>
	</div>
</section>
@endsection