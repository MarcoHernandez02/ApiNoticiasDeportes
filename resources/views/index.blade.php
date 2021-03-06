@extends('template.layout')

	@section('Encabezado')
		<h2>NOTICIAS DE DEPORTES</h2>
	@endsection

	@section('parrafo')
		<p>LO ÚLTIMO EN DEPORTES</p>
	@endsection

	@section('noticias')

@foreach($deportes as $deporte)
	
<!-- Portfolio -->

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-8 col-12-medium">

				<!-- Content -->
					<article class="box post">
						<a href="" class="image featured"><img src="{{$deporte['imagen']}}" alt=""></a>
							<header>
								<h3>{{$deporte['titulo']}}</h3>
								<p>{{$deporte['autor']}}</p>
							</header>
								<p>{{$deporte['contenido']}}</p>
					</article>

			</div>
			
			<div class="col-4 col-12-medium">
					</div>
				</section>

@endforeach					

@endsection
		