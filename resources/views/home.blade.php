@extends('layouts/app')

@section('content')

<main class="text-white">
    <div class="container">

        <h2 class="mb-4">
            Treni in partenza oggi:
        </h2>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($trains as $key => $train)
                <tr>
                  <th scope="row">{{$key + 1}}</th>
                  <td>{{$train->azienda}}</td>
                  <td>{{$train->stazione_partenza}}</td>
                  <td>{{$train->stazione_arrivo}}</td>
                  <td>{{$train->orario_partenza}}</td>
                  <td>{{$train->codice_treno}}</td>
                  <td>
                    @if($train->in_orario == true)
                    Si
                    @else
                    No
                    @endif
                  </td>
                  <td>
                    @if($train->cancellato == true)
                    Si
                    @else
                    No
                    @endif
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</main>
@endsection