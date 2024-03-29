@extends('front.layouts.base')

@section('content')
    	<!-- hod -->
	<div class="hod">
		<div class="container">
			<div class="col-md-6 hod-left">
				<img src="assets/images/14.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 hod-right">
				<h2>Publishing packages and web page</h2>
				<p>The point of using as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- hod -->
	<!-- tels -->
	<div class="tels">
		<div class="container">
			@foreach ($type as $t)
			<div class="col-md-4 tels-left">
				<h4>{{ $t->name }}<span> {{$t->price}}</span></h4>
				@if ($t->image != "")
				<img src="{{$t->image}}" class="img-responsive" alt="">
				@else
				<img src="/assets/images/img404.png" class="img-responsive" alt="">
				@endif
				<div class="text" style="height: 180px; overflow: hidden;">
					<p >{{ $t->short_desc}}</p>
				</div>
				<a class="hvr-shutter-in-horizontal" href="{{route("room.show", $t->ID)}}">Book Now</a>
			</div>				
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- tels -->
	<!-- special -->
	<div class="special">
		<div class="container">
			<div class="spe-info">
				<h3>Special Offer</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			</div>
		</div>
	</div>
	<!-- special -->
	<!-- quick -->
	<div class="quick">
		<div class="container">
			<div class="col-md-4 quick-left">
				<h3>Most Popular</h3>
					<ul>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
					</ul>
			</div>
			<div class="col-md-4 quick-left">
				<h3>News & Events</h3>
				<div class="new">
					<div class="n-lft">
						<h5>10</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>Lorem Ipsum is that it has a more-or-less normal<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-1">
					<div class="n-lft">
						<h5>15</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>That it has a more-or-less normal distribution<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 quick-left">
				<h3>Quick Message</h3>
					<form>
						<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Submit">
					</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- quick -->
@endsection