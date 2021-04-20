@extends('disseny')

@section('content')

<h1>Llista de Voluntaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>NIF</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Telèfon Fixe</td>
          <td>Telèfon Mòbil</td>
          <td>Email</td>
          <td>Edat</td>
          <td>Professió</td>
          <td>Hores Dedicades</td>
          <td>Nom ONG</td>
          <td>Data d'alta</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($voluntari as $vol)
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->nif}}</td>
            <td>{{$vol->nom}}</td>
            <td>{{$vol->cognoms}}</td>
            <td>{{$vol->adreca}}</td>
            <td>{{$vol->poblacio}}</td>
            <td>{{$vol->comarca}}</td>
            <td>{{$vol->fixe}}</td>
            <td>{{$vol->mobil}}</td>
            <td>{{$vol->email}}</td>
            <td>{{$vol->edat}}</td>
            <td>{{$vol->professio}}</td>
            <td>{{$vol->horesDedicades}}</td>
            <td>{{$vol->nomONG}}</td>
            <td>{{$vol->created_at}}</td>
            <td class="text-left">
                <a href="{{ route('voluntaris.edit', $vol->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('voluntaris.destroy', $vol->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('voluntaris/create') }}"><button class="btn btn-secondary" style="background-color:#33CFFF; border: 1px #33CFFF solid;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></button></a><br><br>
    <a href="{{ url('/treballadors') }}"><button class="btn btn-secondary" style="background-color:#FF7408; border: 1px #FF7408 solid;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></button></a>
@endsection
