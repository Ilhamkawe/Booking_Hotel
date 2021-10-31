@extends('front.layouts.base')

@section('content')
	
    <!-- details -->
	<div class="details">
		<div class="container">
			<div class="col-md-7 details-left">
				@if ($type[0]->image != "")
				<img src="{{$type[0]->image}}" class="img-responsive" alt="">
				@else
				<img src="/assets/images/img404.png" class="img-responsive" alt="">
				@endif
			</div>
			<div class="col-md-5 details-right">
				<span><strong>Rp.{{$type[0]->price}}</strong></span>
				@foreach ($type[0]->perks as $perk)
				<li>{{$perk}}</li>
				@endforeach
				<p>{{ $type[0]->short_desc}}</p>
			</div>
			<div class="clearfix"> </div>
			<div class="details-top">
				{{ $type[0]->details}}
			</div>
			<div class="booking-form">
				 <div class="col-md-6">			 
					<form>
						<h5>NAMA</h5>
						<input type="text" value="">
						<h5>E-MAIL</h5>
						<input type="text" value="">
						<h5>NO. TELEPHONE</h5>
						<input type="text" value="">
					</form>
				</div>
				<div class="col-md-6">		
					<form>
						<h5>CHECK IN</h5>
							<select class="arrival">
								 <option>01</option>
								 <option>02</option>
								 <option>03</option>
								 <option>04</option>
								 <option>05</option>
								 <option>06</option>
								 <option>08</option>
								 <option>09</option>
								 <option>10</option>
								 <option>11</option>
								 <option>12</option>
								 <option>13</option>
								 <option>14</option>
								 <option>15</option>
								 <option>16</option>
								 <option>17</option>
								 <option>18</option>
								 <option>19</option>
								 <option>20</option>
								 <option>21</option>
								 <option>22</option>
								 <option>23</option>
								 <option>24</option>
								 <option>25</option>
								 <option>26</option>
								 <option>27</option>
								 <option>28</option>
								 <option>29</option>
								 <option>30</option>
								 <option>31</option>					 
							 </select>
							 <select class="arrival">
								 <option>Jan</option>
								 <option>Feb</option>
								 <option>Mar</option>
								 <option>Apr</option>
								 <option>May</option>
								 <option>June</option>
								 <option>July</option>
								 <option>Aug</option>
								 <option>Sep</option>
								 <option>Oct</option>
								 <option>Nov</option>					 
								 <option>Dec</option>
							 </select>
							 <select class="arrival">
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							 </select>
						<h5>CHECK OUT</h5>
							 <select class="arrival">
								 <option>01</option>
								 <option>02</option>
								 <option>03</option>
								 <option>04</option>
								 <option>05</option>
								 <option>06</option>
								 <option>08</option>
								 <option>09</option>
								 <option>10</option>
								 <option>11</option>
								 <option>12</option>
								 <option>13</option>
								 <option>14</option>
								 <option>15</option>
								 <option>16</option>
								 <option>17</option>
								 <option>18</option>
								 <option>19</option>
								 <option>20</option>
								 <option>21</option>
								 <option>22</option>
								 <option>23</option>
								 <option>24</option>
								 <option>25</option>
								 <option>26</option>
								 <option>27</option>
								 <option>28</option>
								 <option>29</option>
								 <option>30</option>
								 <option>31</option>					 
							 </select>
							 <select class="arrival">
								 <option>Jan</option>
								 <option>Feb</option>
								 <option>Mar</option>
								 <option>Apr</option>
								 <option>May</option>
								 <option>June</option>
								 <option>July</option>
								 <option>Aug</option>
								 <option>Sep</option>
								 <option>Oct</option>
								 <option>Nov</option>					 
								 <option>Dec</option>
							 </select>
							 <select class="arrival">
								<option>2012</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
							 </select>
				 <h5 class="mem">MEMBERS</h5>
				 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
				 <h5>REQUIRED</h5>
				 <textarea value=""></textarea>
				 <input type="submit" value="Submit">
				 <input type="reset" value="Reset">
				 </form>			      
			 </div>

			</div>
		 </div>
	</div>
<!-- details -->
@endsection