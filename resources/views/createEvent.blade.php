@extends('layouts.principal')
@section('content')



    <h1>Création d'un nouvel événement </h1>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>
    <form action="{{ route('CreerEventPart') }}" method="post">
        @csrf
        <label class="label">Titre</label><br>
        <input class="input" size="43" type="text" name="titreEvent"><br>
        <label class="label">Nom de la personne qui reçoit le cadeau</label><br>
        <input class="input" size="43" type="text" name="nom_recepteur"><br>
        <input class="input" type="hidden" name="idUserG" value={{ $idUserG }}>
        <label class="label">Date de l'événement:</label><br>
        <input class="input" type="date" name="dateofEvent"> <br>
        
        <h3>Liste des cadeaux</h3>
        @foreach ($gifts as $gift)
            <div class="form-group">
                <div style="border:2px solid #000000;width:400px;margin:4px;">
                    <img src="{{ $gift->PhotoURL }}"
                        style="width:50px;height:50px;border:2px solid #a0a0a0;margin:4px;" />
                    <input class="custom-control-input" type='radio' name="gift" value='{{ $gift->ID }}'>
                    <label class="custom-control-label" for="gift"> {{ $gift->Title }} , Le prix est {{ $gift->Price }}

                    </label>
                </div>
            </div>
        @endforeach



        <h3>Liste des participants</h3>

        @foreach ($participants as $participant)

            <div class="form-group">
                <input class="custom-control-input" type='checkbox' name="idParticipant[]"
                    value='{{ $participant->ID }}'>
                <label class="custom-control-label" for="idParticipant"> {{ $participant->FullName }}
                </label>
            </div>
        @endforeach

        <br>
        <button class="btn btn-dark" type="submit">Créer Événement</button>
    </form>


@endsection
