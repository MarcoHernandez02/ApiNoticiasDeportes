@extends('template.layout')

@section('Encabezado')
		<h2>WORLD'S NEWS</h2>
	@endsection

	@section('parrafo')
		<p>WE KEEP YOU KNONWING ABOUT WHAT HAPPEN IN THE WORLD</p>
	@endsection

@section('noticias2')

@foreach($values as $value)
	
<!-- Portfolio -->

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-8 col-12-medium">

				<!-- Content -->
					<article class="box post">
						<a href="" class="image featured"><img src="{{$value['urlToImage']}}" alt=""></a>
							<header>
								<h3>{{$value['title']}}</h3>
								<p>{{$value['author']}}</p>
							</header>
								<p>{{$value['description']}}</p>
					</article>

			</div>
			
			<div class="col-4 col-12-medium">
					</div>
				</section>

@endforeach					

@endsection