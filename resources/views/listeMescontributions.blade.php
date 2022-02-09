@extends('layouts.principal')
@section('content')

    <h1>Mes contributions</h1><br>

    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>
    <table class="table table is-bordered">
        <thead>
            <tr>

                <th>Titre événement</th>
                <th class="text-center">Date événement</th>
                <th class="text-center">État</th>
                <th class="text-center">Contribution</th>

            </tr>
        </thead>


        @foreach ($participationsAcceptes as $participation)
            <tr>
                <td>{{ $titre = app\models\Event::find($participation->EventID)->Title }}</td>
                <td class="text-center">{{ $titre = app\models\Event::find($participation->EventID)->DateOfEvent }}</td>
                <td class="text-center"> accepté </td>
                <td class="text-center">{{ $participation->Contribution }} </td>
            </tr>
        @endforeach

    </table>

@endsection
