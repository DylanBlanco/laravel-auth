@extends('layouts.app')

@section('page-title', 'Tutti i project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tutti i Project
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row"> {{ $project->id }} </th>
                            <td> {{ $project->title }} </td>
                            <td> {{ $project->author }} </td>
                            <td> {{ $project->date_create }} </td>
                            <td> {{ $project->description }} </td>
                            <td class="d-flex">
                                <a href="{{ route('projects.show', $project->id) }}">Visualizza</a>
                                <a href="{{ route('projects.create') }}">Crea Nuovo Project</a>
                                <a href="{{ route('projects.edit', $project->id) }}">Modifica Project</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit">Elimina</button> --}}
                                    <input type="submit" value="Cancella">
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
