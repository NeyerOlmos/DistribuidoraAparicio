@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Paquete: {{ $paquetes->descripcion}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($paquetes,['method'=>'PATCH','route'=>['paquete.update',$paquetes->idPaquete]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" class="form-control" value="{{$paquetes->descripcion}}" placeholder="Descripcion...">
            </div>
            <div class="form-group">
            	<label for="cantidad">Cantidad</label>
            	<input type="text" name="cantidad" class="form-control" value="{{$paquetes->cantidad}}" placeholder="Cantidad...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection