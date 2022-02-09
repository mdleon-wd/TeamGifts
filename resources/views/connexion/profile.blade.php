@extends('layouts.principal')
@section('content')

    <h1 class="title" style="text-align:center;">Bienvenue {{ $userG->FullName }}</h1>

    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="{{ url('/deconnexion') }}" method="Get">
        {{ csrf_field() }}
        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>
    <br><br><br>

    <div class="">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-dark" href="{{ route('newevement', $userG->ID) }} ">Créer
                            un événement</a></h5>
                    <p class="card-text">Invitez vos amis à participer à un événement</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-dark"
                            href="{{ route('listeEventsRecus', $userG->ID) }} ">Toutes les invitations reçus</a></h5>
                    <p class="card-text">Consultez toutes vos invitations que vous avez reçus de vos amis</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"> <a class="btn btn-dark"
                            href="{{ route('listeMescontributions', $userG->ID) }} ">Liste de mes contributions</a></h5>
                    <p class="card-text">Consultez vos participations détaillés avec votre contribution</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title"> <a class="btn btn-dark"
                        href="{{ route('listeMesevenementorganise', $userG->ID) }} ">Liste de mes événements organisés</a>
                </h5>
                <p class="card-text">Consultez le détails de vos événements que vous avez organisés</p>
            </div>
        </div>
    </div>
    </div>






    {{-- <div>
  <h1>Mes évenements recus</h1><br>      
  <table  class="table table is-bordered" >
      <thead>
          <tr>
        
            <th>Titre évenement</th>
            <th>Date évenement</th>
            <th>Organisateur</th>
            <th>Etat</th>
         
          </tr>
        </thead>

      @foreach ($allEvent as $infoEv)
          @for ($i = 0; $i < count($tabIdEvent); $i++)
              @if ($tabIdEvent[$i] == $infoEv->ID)
                 <tr>
                      <td>{{$infoEv->Title }}</td>
                      <td>{{$infoEv->DateOfEvent }}</td>
                      <td>{{$organisateur=app\models\UserG::find($infoEv->OrganizerID)->FullName }}</td> 
                      <td><form action="{{ route('detailEvenement') }}" method="POST">
                          {{ csrf_field() }}
                       {{--  <input type="hidden" name="idParticipant" value={{ $infoEv->ParticipantID }}>
                       <input type="hidden" name="idUserG" value={{ $idUserG }}>
                        <input type="hidden"  name="idEvent" value={{$infoEv->ID}}>  
                        <input type="hidden" name="idorganisateur" value={{ $infoEv->OrganizerID }}>  
                        <input type="hidden" name="organisateur" value={{$organisateur}}> 
                          <input type="submit" value="accepter ">
                      </form><br>
                      </td>
                  </tr>
                  @endif
              
           @endfor   
      @endforeach
      

</div> --}}

@endsection
