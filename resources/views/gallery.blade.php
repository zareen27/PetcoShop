@extends('gallery.main')

@section('content')

<div class="grid-wrapper">
		<h1>Gallery</h1>
		<ul class="filter-menu">
			<li class="active" data-filter="*"><span >All</span></li>
			<li data-filter=".car"><span>Cow</span></li>
			<li data-filter=".bike"><span>Cats</span></li>
			<li data-filter=".truck"><span>Dogs</span></li>
			<li data-filter=".people"><span>Spa Zone</span></li>
		</ul>
		<div class="grid">
			<div class="grid-item car">
				<a href="#" title="Australian Cows">
					<img src="{{ URL::to('/img/car_1.jpg')}}">
				</a>
			</div>
			<div class="grid-item truck">
				<a href="#" title="Poodle">
				 <img src="{{ URL::to('/img/plane_5.jpg')}}">
				</a>
			</div>
			<div class="grid-item bike ">
				<a href="#" title="American Shorthair">
				 <img src="{{ URL::to('/img/bike_1.jpg')}}">
				</a>
			</div>
			<div class="grid-item people">
				<a href="#" title="Dog spa">
				 <img src="{{ URL::to('/img/plane_spa1.jpg')}}">
				</a>
			</div>
			<div class="grid-item bike">
				<a href="#" title="Bengal Cat">
				 <img src="{{ URL::to('/img/bike_5.jpg')}}">
				</a>
			</div>
			<div class="grid-item  truck">
				<a href="#" title="Chow Chow">
				 <img src="{{ URL::to('/img/plane_3.jpg')}}">
				</a>
			</div>
			

			

			<div class="grid-item truck">
				<a href="#" title="American Eskimo">
				 <img src="{{ URL::to('/img/plane_4.jpg')}}">
				</a>
			</div>
			<div class="grid-item  people">
				<a href="#" title="Cat Spa">
				 <img src="{{ URL::to('/img/bike_spa.jpg')}}">
				</a>
			</div>
			<div class="grid-item car">
				<a href="#" title="Indian Cows">
				 <img src="{{ URL::to('/img/car_4.jpg')}}">
				</a>
			</div>
		</div>
	</div>



@endsection