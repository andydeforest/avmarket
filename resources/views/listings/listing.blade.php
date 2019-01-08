@extends('layouts.main')

@section('content')
<div role="main" class="main">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb mt-3">
					<li><a href="{{ URL::to('/') }}">Home</a></li>
					<li><a href="{{ URL::to('listings/'.$listing->category->uri) }}">{{ $listing->category->name }}</a></li>
					<li><a href="{{ URL::to('manufacturer/'.$listing->manufacturer) }}">{{ $listing->manufacturer }}</a></li>
					<li><a href="{{ URL::to('model/'.$listing->model) }}">{{ $listing->model }}</a></li>
				</ul>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-5 mb-5 mb-md-0">
				<div class="owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3 owl-loaded owl-drag" id="thumbGalleryDetail">
					<div class="owl-stage-outer">
						<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1820px;">
							<?php
								$act = 'active';
							?>
							@foreach($listing->images as $image)
								<div class="owl-item {{ $act }}" style="width: 445px; margin-right: 10px;">
									<div>
										<img src="{{ URL::asset($image->location) }}" class="img-fluid" alt="">
									</div>
								</div>
								<?php
									$act = '';
								?>
							@endforeach
						</div>
					</div>
					<div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"></button><button type="button" role="presentation" class="owl-next"></button></div>
					<div class="owl-dots disabled"></div>
				</div>
				<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt owl-loaded owl-drag" id="thumbGalleryThumbs">
					<div class="owl-stage-outer">
						<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 460px;">
							@foreach($listing->images as $image)
								<div class="owl-item active" style="width: 100px; margin-right: 15px;">
									<div>
										<span class="d-block">
										<img alt="Product Image" src="{{ URL::asset($image->location) }}" class="img-fluid">
										</span>
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
					<div class="owl-dots disabled"></div>
				</div>
			</div>
			<div class="col-md-7">
				<h2 class="line-height-1 font-weight-bold mb-2">{{ $listing->manufacturer.' '.$listing->model }}</h2>
				<span class="price font-primary text-4"><strong class="text-color-dark">${{ number_format($listing->price / 100, 2) }}</strong></span>
				<div class="row py-3">
					<div class="col-6">
						<button class="btn btn-lg btn-primary btn-block"><i class="far fa-envelope"></i> Contact Seller</button>
					</div>
					<div class="col-6">
						<button class="btn btn-lg btn-default btn-block"><i class="fas fa-search"></i> Watch Aircraft</button>

					</div>
				</div>
				<div class="row">
					<div class="col py-3">
						<table class="table pt-2">
							<tbody>
								<tr>
									<th class="border-top-0" scope="row">Year</th>
									<td class="border-top-0">{{ $listing->year }}</td>
								</tr>
								<tr>
									<th scope="row">Make/Model</th>
									<td>{{ $listing->manufacturer.' '.$listing->model }}</td>
								</tr>
								<tr>
									<th scope="row">Registration</th>
									<td>{{ $listing->registration }}</td>
								</tr>
								<tr>
									<th scope="row">Serial #</th>
									<td>{{ $listing->serial_number }}</td>
								</tr>
								<tr>
									<th scope="row">Location</th>
									<td>{{ $listing->city.', '.$listing->state }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-12">
				<h2>General Details</h2>
				<hr class="pb-3" />
				<div class="row">
					<div class="col">
						<strong>Total Time:</strong>&nbsp;{{ $listing->total_time }}
					</div>
					@foreach($listing->engine_details as $x => $ed)
						<div class="col">
							<strong>Engine #{{ $x + 1 }} Time:</strong>&nbsp;{{ $ed->overhaul_time.' '.$ed->overhaul_type }}
						</div>
					@endforeach
					@foreach($listing->prop_details as $x => $pd)
						<div class="col">
							<strong>Prop #{{ $x + 1 }} Time:</strong>&nbsp;{{ $pd->overhaul_time.' '.$pd->overhaul_type }}
						</div>
					@endforeach
					<div class="col">
						<strong>Flight Rules:</strong>&nbsp;{{ $listing->flight_rules }}
					</div>
					<div class="col">
						<strong>Seats:</strong>&nbsp;{{ $listing->seat_count }}
					</div>
				</div>
			</div>
		</div>
		@if(strlen($listing->description) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Description</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							<p>{{ $listing->description }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif
		@if(strlen($listing->avionics_description) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Avionics/Equipment</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							<p>{{ $listing->avionics_description }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif
		@if(strlen($listing->additional_equipment_description) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Additional Equipment</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							<p>{{ $listing->additional_equipment_description }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif
		@if(strlen($listing->interior_description) > 0 || strlen($listing->exterior_description) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Interior/Exterior</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							@if(strlen($listing->interior_description) > 0)
								<p><strong>Interior:</strong>&nbsp;{{ $listing->interior_description}}</p>
							@endif
							@if(strlen($listing->exterior_description) > 0)
								<p><strong>Exterior:</strong>&nbsp;{{ $listing->exterior_description}}</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		@endif
		@if(strlen($listing->mod_details) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Engines / Props / Mods</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							<p>{{ $listing->mod_details }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif
		@if(strlen($listing->inspection_status) > 0)
			<div class="row mb-4">
				<div class="col-12">
					<h2>Inspection Status</h2>
					<hr class="pb-3" />
					<div class="row">
						<div class="col">
							<p>{{ $listing->inspection_status }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif
	</div>
</div>
@endsection