@extends('layouts.main')

@section('content')
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="font-weight-bold">{{ $category->name }} Manufacturers</h1>

				</div>
			</div>
		</div>
	</section>
	<div class="container py-5">
		<div class="row">
			@foreach($manufacturers as $x => $manufacturer)
				<div class="col-md-4">
					<h5><a href="{{ URL::to('listings/'.$category->uri.'/'.strtolower(urlencode($manufacturer->manufacturer))) }}">{{ $manufacturer->manufacturer }} ({{ $manufacturer->listing_count }})</a></h5>
				</div>
			@endforeach
		</div>
	</div>
@endsection