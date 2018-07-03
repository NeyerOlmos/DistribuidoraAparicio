@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Almacen</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                <!--errors lo RECIVIMOS DEL ARCHIVO REQUEST-->
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <!--enviar parametros -->
            <!--URL envia desde web, con post llama a store  controller-->
            {!!Form::open(array('url'=>'inventario/almacen','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}} <!---->
            <div class="form-group">
                <label for="descripcion">Descripcion</label><!---->
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
                 <label for="ubicacion">Ubicacion</label><!---->
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicacion..."><!--name="tipo" tipo es reconocido por TBformRequest-->
                <!--Tambien es usado por TBController en el metodo store-->
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}              
        </div>
    </div>
@endsection