@extends('template.layout')

	@section('Encabezado')
		<h2>NOTICIAS DEL PAÍS</h2>
	@endsection

	@section('parrafo')
		<p>LO ÚLTIMO EN NOTICIAS DE NUESTRO PAÍS</p>
	@endsection

@section('noticias1')

@foreach($news as $new)
	
<!-- Portfolio -->

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-8 col-12-medium">

				<!-- Content -->
					<article class="box post">
						<a href="" class="image featured"><img src="{{$new['urlToImage']}}" alt=""></a>
							<header>
								<h3>{{$new['title']}}</h3>
								<p>{{$new['description']}}</p>
							</header>
								<p>{{$new['url']}}</p>
					</article>

			</div>
			
			<div class="col-4 col-12-medium">
					</div>
				</section>

@endforeach					

@endsection