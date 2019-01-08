@extends('layouts.main')

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col-md-8 col-lg-12 order-1 order-md-2 mb-5 mb-md-0">
			<form method="GET" action="{{ URL::to('listings/handleFilter') }}">
				<input type="hidden" name="currentUrl" value="{{ URL::current() }}" />
				@foreach($_GET as $key => $value)
					<input type="hidden" name="{{ $key }}" value="{{ $value }}" />
				@endforeach
				<div class="row align-items-center justify-content-between mb-4">
					<div class="col-auto mb-3 mb-sm-0">
						<label>Sort By</label>
						<select class="form-control border" name="sortBy" onchange="this.form.submit()">
							<option value="makeAsc" @if(Request::get('sortBy') === 'makeAsc') selected @endif>Make (A-Z)</option>
							<option value="makeDesc" @if(Request::get('sortBy') === 'makeDesc') selected @endif>Make (Z-A)</option>
							<option value="modelAsc" @if(Request::get('sortBy') === 'modelAsc') selected @endif>Model (A-Z)</option>
							<option value="modelDesc" @if(Request::get('sortBy') === 'modelDesc') selected @endif>Model (Z-A)</option>
							<option value="updateAsc" @if(Request::get('sortBy') === 'updateAsc') selected @endif>Last Update (new to old)</option>
							<option value="updateDesc" @if(Request::get('sortBy') === 'updateDesc') selected @endif>Last Update (old to new)</option>
							<option value="priceAsc" @if(Request::get('sortBy') === 'priceAsc') selected @endif>Price (low to high)</option>
							<option value="priceDesc" @if(Request::get('sortBy') === 'priceDesc') selected @endif>Price (high to low)</option>
							<option value="ttAsc" @if(Request::get('sortBy') === 'ttAsc') selected @endif>Total Time (low to high)</option>
							<option value="ttDesc" @if(Request::get('sortBy') === 'ttDesc') selected @endif>Total Time (high to low)</option>
							<option value="yearAsc" @if(Request::get('sortBy') === 'yearAsc') selected @endif>Year (oldest to newest)</option>
							<option value="yearDesc" @if(Request::get('sortBy') === 'yearDesc') selected @endif>Year (newest to oldest)</option>
							<option value="engineAsc" @if(Request::get('sortBy') === 'engineAsc') selected @endif>Engine Time (low to high)</option>
							<option value="engineDesc" @if(Request::get('sortBy') === 'engineDesc') selected @endif>Engine Time (high to low)</option>
						</select>
					</div>
					<div class="col-auto">
						<label>Results per page</label>
						<select class="form-control border" name="pageSize" onchange="this.form.submit()" style="min-width: 60px">
							<option value="10" @if(Request::get('pageSize') === '10') selected @endif>10</option>
							<option value="25" @if(Request::get('pageSize') === '25') selected @endif @if(Request::get('pageSize') === null) selected @endif>25</option>
							<option value="50" @if(Request::get('pageSize') === '50') selected @endif>50</option>
							<option value="75" @if(Request::get('pageSize') === '75') selected @endif>75</option>
							<option value="100" @if(Request::get('pageSize') === '100') selected @endif>100</option>
						</select>
					</div>
				</div>
			</form>
			<hr />
			@forelse($listings as $listing)
				<div class="product row align-items-center mb-5">
					<div class="col-md-5 col-lg-12 col-xl-6 mb-4 mb-md-0 mb-lg-4 mb-xl-0">
						<div class="image-frame">
							<span class="image-frame-wrapper">
							<a href="{{ URL::to('listing/'.$listing->id) }}">
								<img src="{{ URL::asset($listing->get_primary_image_location()) }}" class="img-fluid" alt="">
							</a>
							</span>
						</div>
					</div>
					<div class="col-md-7 col-lg-12 col-xl-6">
						<div class="row">
							<div class="col-md-6">
								<h2 class="line-height-1 font-weight-bold text-4 mb-2"><a href="{{ URL::to('listing/'.$listing->id) }}" class="link-color-dark">{{ $listing->year.' '.$listing->manufacturer.' '.$listing->model }}</a></h2>
								<h6>{{ $listing->category->name }}</h6>
								<span class="price font-primary text-4"><strong class="text-color-dark">${{ number_format($listing->price / 100, 2) }}</strong></span>

							</div>
							<div class="col-md-6 text-right">
								<p class="text-black-50">TT: {{ $listing->total_time }}</p>
								@if($listing->engine_details->count() > 0)
									<p class="text-black-50">
										@foreach($listing->engine_details as $x => $ed)
											Eng #{{ $x + 1 }}: {{ $ed->overhaul_time.' '.$ed->overhaul_type }}
											@if(count($listing->engine_details) > $x + 1)
												, 
											@endif
										@endforeach
									</p>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p class="mt-4">{{ $listing->truncated_description() }}</p>
								<hr class="my-4">
								<a href="{{ URL::to('listing/'.$listing->id) }}" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-3 btn-fs-2">View Aircraft</a>
								<a href="#" class="btn btn-secondary btn-rounded font-weight-semibold btn-v-3 btn-h-3 btn-fs-2">Watch Aircraft</a>
							</div>
						</div>
					</div>
				</div>
			@empty

			@endforelse

			<hr class="mt-5 mb-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mb-3 mb-sm-0">
					<span>Showing {{ ($listings->perPage() * $listings->currentPage()) - $listings->perPage() + 1 }}-{{ ($listings->perPage() * $listings->currentPage()) }} of {{ $listings->total() }} results</span>
				</div>
				<div class="col-auto">
					<nav aria-label="Page navigation example">
						{{ $listings->appends(request()->input())->links() }}
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection