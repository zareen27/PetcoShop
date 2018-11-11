@extends('gallery.main')


@section('content')

<div class="container">
	<div class="wallpaper-menu">
		<ul>
			<li class="active" data-filter="*">All Catagory</li>
			<li data-filter=".car">Cow</li>
			<li data-filter=".bike">Cat</li>
			<li data-filter=".plane">Dog</li>
		</ul>
	</div>

	<div class="wallpaper-item">
		<div class="item car">
			<img src="{{ URL::to('/img/car_1.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item car">
			<img src="{{ URL::to('/img/car_2.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item bike">
			<img src="{{ URL::to('/img/bike_1.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item bike">
			<img src="{{ URL::to('/img/bike_2.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item plane">
			<img src="{{ URL::to('/img/plane_1.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item car">
			<img src="{{ URL::to('/img/car_3.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item bike">
			<img src="{{ URL::to('/img/bike_3.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item plane">
			<img src="{{ URL::to('/img/plane_2.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item plane">
			<img src="{{ URL::to('/img/plane_3.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item car">
			<img src="{{ URL::to('/img/car_4.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item car">
			<img src="{{ URL::to('/img/car_5.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item plane">
			<img src="{{ URL::to('/img/plane_4.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item bike">
			<img src="{{ URL::to('/img/bike_4.jpg')}}" alt="" height="300" width="300"/>
		</div>

		<div class="item bike">
			<img src="{{ URL::to('/img/bike_5.jpg')}}" alt="" height="300" width="300"/>
		</div>
		<div class="item plane">
			<img src="{{ URL::to('/img/plane_5.jpg')}}" alt="" height="300" width="300"/>
		</div>
	</div>
</div>




 @endsection