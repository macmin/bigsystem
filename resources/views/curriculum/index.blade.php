@extends('layouts.admin')

@section('content')
    <h1>Crear cv</h1>




    <table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido P</th>
	      <th scope="col">Apellido M</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

	  <tbody>
	    
	    @foreach ($curriculums as $curriculum)

	    	<tr>
		      <th scope="row">{{ $curriculum->user_id }} </th>
		      <td> {{ $curriculum->name }} </td>
		      <td> {{ $curriculum->apellidoP }} </td>
		      <td> {{ $curriculum->apellidoM }} </td>
		      <td> <a href="{{ url('adminor/admincv/'.$curriculum->user_id) }}"> Ver más</a> </td>
	    	</tr>
	    @endforeach

	    
	  </tbody>
	</table>
@endsection
