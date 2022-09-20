@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Tipo de documento</h5>
<br>
<div class="d-grid gap-2">
   <a href="documentos/create" class="btn btn-outline-primary"  >CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Tipo Documento</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($tipodocumentos as $tipodocumento)

    <tr>

<td>{{ $tipodocumento->idDoc}}</td>
<td>{{ $tipodocumento->tipoDoc}}</td>






<td><a href="documentos/{{$tipodocumento->idDoc}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('documentos.destroy',$tipodocumento->idDoc) }}" method="POST">
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