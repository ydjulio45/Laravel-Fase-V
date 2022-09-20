@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Categoria</h5>
<br>

<div class="d-grid gap-2">
   <a href="categorias/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th scope="col">ID </th>
<th scope="col">Tipo Categoria</th>
<th></th>
<th></th>

        </tr>
    </thead>
<tbody>
    @foreach ($categoria as $c)

    <tr>

<td>{{ $c->idCategoria}}</td>
<td>{{ $c->nombreCategoria}}</td>






<td><a href="categorias/{{$c->idCategoria}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('categorias.destroy',$c->idCategoria) }}" method="POST">
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