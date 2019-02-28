<header id="header" class="header-effect-shrink " data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120, 'stickyChangeLogo': false}">
	<div class="header-body">
		<div class="header-top bg-primary">
			<div class="header-top-container container">
				<div class="header-row text-white">
					<div class="header-column justify-content-end">
						<ul class="nav">
							<li class="nav-item">
								<a href="#" class="nav-link text-color-light">MY ACCOUNT</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-color-light">DAILY DEAL</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-color-light">MY WISHLIST</a>
							</li>
							<li class="nav-item d-none d-sm-block">
								<a href="#" class="nav-link text-color-light">BLOG</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column justify-content-start">
					<div class="header-logo">
						<a href="{{ URl::to('/') }}">
							<img src="{{ URL::asset('images/logo.png') }}" alt="AvMarket" />
						</a>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-search-expanded">
						<form method="GET">
							<div class="input-group bg-light border">
								<input type="text" class="form-control text-4" name="s" placeholder="I'm looking for..." aria-label="I'm looking for...">
								<span class="input-group-btn">
								<button class="btn" type="submit"><i class="lnr lnr-magnifier text-color-dark"></i></button>
								</span>
							</div>
						</form>
					</div>
					<div class="header-nav">
						<a href="#" class="header-search-button order-1 text-5 d-none d-sm-block mt-1 mr-xl-2">
							<i class="lnr lnr-magnifier"></i>
						</a>
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect">
							<nav class="collapse">
								<ul class="nav flex-column flex-lg-row" id="mainNav">
									<li class="dropdown dropdown-mega dropdown-mega-style-2">
										<a class="dropdown-item dropdown-toggle" href="#">
											Aircraft
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="dropdown-mega-content container">
													<div class="row">
														<div class="col-lg-4">
															<span class="dropdown-mega-sub-title">Categories</span>
															<ul class="dropdown-mega-sub-nav">
																<li><a class="dropdown-item" href="#">Single-Engine Pistons</a></li>
																<li><a class="dropdown-item" href="#">Multi-Engine Pistons</a></li>
																<li><a class="dropdown-item" href="#">Piston Helicopters</a></li>
																<li><a class="dropdown-item" href="#">Jets</a></li>
																<li><a class="dropdown-item" href="#">Turboprop</a></li>
																<li><a class="dropdown-item" href="#">Turbine Helicopters</a></li>
																<li><a class="dropdown-item" href="#">Wanted</a></li>
																<li><a class="dropdown-item" href="#">Swap or Trade</a></li>
															</ul>
														</div>
														<div class="col-lg-4">
															<span class="dropdown-mega-sub-title">Top Manufacturers</span>
															<ul class="dropdown-mega-sub-nav">
																<li><a class="dropdown-item" href="#">Cessna</a></li>
																<li><a class="dropdown-item" href="#">Beechcraft</a></li>
																<li><a class="dropdown-item" href="#">Piper</a></li>
																<li><a class="dropdown-item" href="#">Mooney</a></li>
																<li><a class="dropdown-item" href="#">Socata</a></li>
																<li><a class="dropdown-item" href="#">Robinson</a></li>
																<li><a class="dropdown-item" href="#">Cirrus</a></li>
																<li><a class="dropdown-item" href="#">Diamond</a></li>
															</ul>
														</div>
														<?php
															$featured = App\Helpers::randomFeatured();
														?>
														@if(!is_null($featured))
															<div class="col-lg-4 dropdown-mega-sub-content-block d-none d-lg-block">
																<span class="top-sub-title text-color-light-2 d-block">Check it out this featured listing:</span>
																<span class="text-color-light font-weight-bold d-block text-4">{{ $featured->year }}&nbsp;{{ $featured->manufacturer }}&nbsp;{{ $featured->model }}</span>
																<p class="text-color-light-2 font-weight-bold d-block text-4">${{ number_format($featured->price / 100) }}</p>

																<img src="{{ URL::asset($featured->get_primary_image_location()) }}" class="img-responsive pb-1" alt="" height="100" />
																<p class="pt-2">
																	<a class="btn d-inline-block content-block-button text-color-primary font-weight-bold p-0" href="{{ URL::to('listing/'.$featured->id) }}">SHOW ME</a>
																</p>
															</div>
														@endif
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Avionics</a>
									</li>
									<li>
										<a href="#">Engines</a>
									</li>
									<li>
										<a href="#">Services</a>
									</li>
								</ul>
							</nav>
						</div>
						<a href="#" class="btn btn-link text-color-default font-weight-bold order-3 d-none d-sm-block ml-auto mr-2 pt-1 text-1">Login</a>
						<button class="header-btn-collapse-nav order-4 ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
						<span class="hamburguer">
						<span></span>
						<span></span>
						<span></span>
						</span>
						<span class="close">
						<span></span>
						<span></span>
						</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>