@extends('layouts.principal')
@section('content')

    <h1>Mes Événements organisés</h1>
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
                <th class="text-center">Cadeau</th>
                <th class="text-center">Prix</th>
                <th class="text-center">Photo cadeau</th>


            </tr>
        </thead>


        @foreach ($mesevenementsorganises as $event)
            <tr>
                <td>{{ $event->Title }}</td>
                <td class="text-center">{{ $event->DateOfEvent }}</td>
                <td class="text-center">{{ $gift = App\models\Gift::find($event->GiftID)->Title }}</td>
                <td class="text-center">{{ $giftprice = App\models\Gift::find($event->GiftID)->Price }}</td>
                <td class="text-center"><img src={{ $giftimage = App\models\Gift::find($event->GiftID)->PhotoURL }}
                        style="width:50px;height:50px;border:2px solid #a0a0a0;margin:4px;" /></td>
            </tr>
        @endforeach

    </table>

@endsection
