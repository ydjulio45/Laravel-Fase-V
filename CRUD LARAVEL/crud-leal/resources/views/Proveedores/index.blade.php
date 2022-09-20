@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Proveedores</h5>
<br>

<div class="d-grid gap-2">
   <a href="proveedores/create" class="btn btn-outline-primary"  >CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark"  scope="col">Id </th>
<th class="table-dark"  scope="col">Nombre</th>
<th class="table-dark" scope="col">Telefono</th>
<th class="table-dark" scope="col">Correo</th>
<th class="table-dark" scope="col">Direccion</th>
<th class="table-dark" ></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($proveedore as $proveedore)

    <tr>

<td>{{ $proveedore->idProveedor}}</td>
<td>{{ $proveedore->nombre}}</td>
<td>{{ $proveedore->telefono}}</td>
<td>{{ $proveedore->correo}}</td>
<td>{{ $proveedore->direccion}}</td>






<td><a href="proveedores/{{$proveedore->idProveedor}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('proveedores.destroy',$proveedore->idProveedor) }}" method="POST">
@csrf
@method('DELETE')
    
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>

    </tr>
    @endforeach
</tbody>
</table>

@endsection