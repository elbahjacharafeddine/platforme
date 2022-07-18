@extends('layouts.user_type.auth')

@section('content')

<form class="container" action="test/test">
    <div class="row align-items-start">
        <div class="mb-3">
            <label class="form-label" for="filiere_name">Nom de Filiere</label>
            <input type="text" class="form-control" id="filiere_name" placeholder="nom de filiere">
        </div>

        <div class="col">
            <label>BAC :</label>
            @foreach($data_bac as $key =>$item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" >
                <label class="form-check-label" >{{$item->name}}</label>
            </div>
            @endforeach
        </div>

        <div class="col">
            <div class="mb-3 ">
                <label>Matiere :</label>
                @foreach($data_matiere as $key =>$item)    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" >
                    <label class="form-check-label" >{{$item->name}} </label>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col">
            <div class="mb-3 ">
                <label>Coefficient :</label>
                @foreach($data_matiere as $key =>$item)
                <div class="form-check">
                    <input class="form-input" type="number" min="0" >
                </div>
                @endforeach
            </div>
        </div>
    </div>

        <div class="row align-items-start">
            <div class="mb-3 ">
                <label>Licence :</label>
                @foreach($data_licence as $key =>$item)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" >
                    <label class="form-check-label" >{{$item->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

  </form>
@endsection
