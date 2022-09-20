@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')
@section('contenido')
<h5 class="text-center">Roles</h5>
<br>
<div class="d-grid gap-2">
   <a href="roles/create" class="btn btn-outline-primary" >CREAR</a>
</div>  

<br>
<table class="table table-prymary table-striped md-4 " >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Tipo Rol</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($role as $r)

    <tr>

<td>{{ $r->idRol}}</td>
<td>{{ $r->tipoRol}}</td>






<td><a href="roles/{{$r->idRol}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('roles.destroy',$r->idRol) }}" method="POST">
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