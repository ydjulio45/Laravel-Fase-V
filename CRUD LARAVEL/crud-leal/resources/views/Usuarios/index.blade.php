@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Usuario</h5>
<br>
<div class="d-grid gap-2">
   <a href="usuarios/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Doc</th>
<th class="table-dark" scope="col">Rol</th>
<th class="table-dark" scope="col">Primer nombre</th>
<th class="table-dark" scope="col">Segundo Nombre</th>
<th class="table-dark" scope="col">Primer Apellido</th>
<th class="table-dark" scope="col">Segundo Apellido</th>
<th class="table-dark" scope="col">Correo</th>
<th class="table-dark" scope="col">Contraseña</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    
    @foreach ($usuario as $usuario) 

    <tr>

<td>{{ $usuario->idUsuario}}</td>
<td>{{ $usuario->idDoc}}</td>
<td>{{ $usuario->idRol}}</td>
<td>{{ $usuario->pNombre}}</td>
<td>{{ $usuario->sNombre}}</td>
<td>{{ $usuario->pApellido}}</td>
<td>{{ $usuario->sApellido}}</td>
<td>{{ $usuario->correo}}</td>
<td>{{ $usuario->contraseña}}</td>






<td><a href="usuarios/{{$usuario->idUsuario}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('usuarios.destroy',$usuario->idUsuario) }}" method="POST">
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