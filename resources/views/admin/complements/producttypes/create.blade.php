@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Crear Tipo de Producto</strong>
				</div>
		
				<div class="panel-body">
					{!! Form::open(['route' => 'producttypes.store']) !!}

						@include('admin.complements.producttypes.partials.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection