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
                                <a href="#">Visualizza</a>
                                <a href="#">Modifica</a>
                                <form action="" method="post">
                                    <button type="submit">Elimina</button>
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
