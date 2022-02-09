@extends('layouts.principal')
@section('content')

    <h1>Mes évenements reçus</h1>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:20px;"  href="{{ route('home') }}">Retour</button>
    </form>
    <table class="table table is-bordered">
        <thead>
            <tr>

                <th>Titre événement</th>
                <th class="text-center">Date événement</th>
                <th>Organisateur</th>
                <th class="text-center">État</th>

            </tr>
        </thead>

        @foreach ($allEvent as $infoEv)
            @for ($i = 0; $i < count($tabIdEvent); $i++)
                @if ($tabIdEvent[$i] == $infoEv->ID)
                    <tr>
                        <td>{{ $infoEv->Title }}</td>
                        <td class="text-center">{{ $infoEv->DateOfEvent }}</td>
                        <td>{{ $organisateur = app\models\UserG::find($infoEv->OrganizerID)->FullName }}</td>
                        <td>
                            <form class="text-center" action="{{ route('detailEvenement') }}" method="POST">
                                {{ csrf_field() }}

                                <input type="hidden" name="idUserG" value={{ $idUserG }}>
                                <input type="hidden" name="idEvent" value={{ $infoEv->ID }}>
                                <input type="hidden" name="idorganisateur" value={{ $infoEv->OrganizerID }}>
                                <input type="hidden" name="organisateur" value={{ $organisateur }}>
                                <button class="btn btn-dark type="submit" value="accepter ">Accepter</button>
                            </form><br>
                        </td>
                    </tr>
                @endif

            @endfor
        @endforeach

    </table>

@endsection
