@extends('front.layouts.base')
@section('content')
<div class="single">
		<div class="container">
			@foreach ($type as $t)
			<div class="single-top">
				<div class="col-md-6 single-left">
					<a href="details.html">
						@if ($t->image != "")
						<img src="{{$t->image}}" class="img-responsive" alt="">
						@else
						<img src="/assets/images/img404.png" class="img-responsive" alt="">
						@endif
					</a>
				</div>
				<div class="col-md-6 single-right">
					<h3><a href="details.html">{{ $t->name }}</a></h3>
					<p>{{ $t->short_desc }}</p>
					<div class="sinbt">
						<a class="hvr-shutter-in-horizontal" href="{{route("room.show", $t->ID)}}">Book Now</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			@endforeach
		 </div>
	</div>

    @endsection