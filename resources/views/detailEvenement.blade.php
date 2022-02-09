@extends('layouts.principal')

@section('content')

    <h1>Invitation envoyé par {{ $organisateur }} </h1><br>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>

    <h3>Détail Cadeau: </h3>

    <h5> Titre Cadeau: {{ $detailGift->Title }}</h5>

    <h5>Prix: {{ $detailGift->Price }}</h5>
    <div>
        <img src="{{ $detailGift->PhotoURL }}" style="width:340px;height:200px;" />
    </div>

    <div>
        <p>Merci de saisir le montant de votre contribution</p>
        <form action="{{ route('participationAccepte') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="organisateur" value={{ $organisateur }}>
            <input type="hidden" name="idUserG" value={{ $idUserG }}>
            <input type="hidden" name="idEvent" value={{ $idEvent }}>
            <label for="contribution">Montant: </label>
            <input type="number" name="contribution" value='0.00' min="1"><br><br>

            <button class="btn btn-dark" type="submit" value="valider">Valider</button>
        </form>
    </div>

@endsection
