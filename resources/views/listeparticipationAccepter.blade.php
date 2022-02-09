@extends('layouts.principal')
@section('content')

    <h1>Mes participations acceptés</h1>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:10px;" type="submit"> Retour</button>
    </form>


    <table class="table table is-bordered">
        <thead>
            <tr>
                <th>Titre événement</th>
                <th>Date événement</th>
                <th>État</th>
                <th>Contribution</th>
            </tr>
        </thead>

        @foreach ($participationsAcceptes as $participation)
            <tr>
                <td>{{ $titre = app\models\Event::find($participation->EventID)->Title }}</td>
                <td>{{ $titre = app\models\Event::find($participation->EventID)->DateOfEvent }}</td>
                <td> accepté </td>
                <td>{{ $participation->Contribution }} </td>
            </tr>
        @endforeach


    </table>
@endsection
