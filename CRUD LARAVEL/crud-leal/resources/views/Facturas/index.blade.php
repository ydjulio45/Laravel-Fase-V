@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Facturas</h5>
<br>

<div class="d-grid gap-2">
   <a href="facturas/create" class="btn btn-outline-primary"  >CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Id_Usuario</th>
<th class="table-dark" scope="col">Nombre</th>
<th class="table-dark" scope="col">Fecha</th>
<th class="table-dark" scope="col">Precio_Factura</th>
<th class="table-dark" ></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($factura as $f)

    <tr>

<td>{{ $f->idFactura}}</td>
<td>{{ $f->idUsuario}}</td>
<td>{{ $f->nombre}}</td>
<td>{{ $f->fecha}}</td>
<td>{{ $f->preciofact}}</td>






<td><a href="facturas/{{$f->idFactura}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('facturas.destroy',$f->idFactura) }}" method="POST">
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