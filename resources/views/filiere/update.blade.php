@extends('layouts.user_type.auth')

@section('content')

<form class="container" action="/filiere/create" method="POST"  enctype="multipart/form-data" >
    @csrf
    <div class="row align-items-start">
        <div class="mb-3">

            <label class="form-label" for="filiere_name">Nom de Filiere</label>
            <input type="text" class="form-control" name="filiere_name" id="filiere_name" placeholder="nom de filiere" required>

        </div>

        <div class="col">
            <label>BAC :</label>
            @foreach($data_bac as $key =>$item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="checkbox_bac[]" value="{{$item->id}}" >
                <label class="form-check-label" >{{$item->name}}</label>
            </div>
            @endforeach
        </div>
        <div class="col">
            <div class="mb-3 ">
                <label>Bonus :</label>
                @foreach($data_bac as $key =>$item)
                <div class="form-check">
                    <input class="form-input" type="number" min="0" name="{{'bonus_bac'.$item->id}}" placeholder="{{'bonus de '.$item->name}}" >
                </div>
                @endforeach
            </div>
        </div>
        <div class="col">
            <div class="mb-3 ">
                <label>Coefficient :</label>
                @foreach($data_bac as $key =>$item)
                <div class="form-check">
                    <input class="form-input" type="number" min="0" name="{{'coefficient_bac'.$item->id}}" placeholder="{{'coefficient de '.$item->name}}" >
                </div>
                @endforeach
            </div>
        </div>

        <div class="col">
            <div class="mb-3 ">
                <label>Matiere :</label>
                @foreach($data_matiere as $key =>$item)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox_matiere[]" value="{{$item->id}}"  >
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
                    <input class="form-input" type="number" min="0" name="{{'coefficient_matiere'.$item->id}}" placeholder="{{'coefficient de '.$item->name}}" >
                </div>
                @endforeach
            </div>
        </div>
    </div>

        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3 ">
                    <label>Licence :</label>
                    @foreach($data_licence as $key =>$item)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox_licence[]" value="{{$item->id}}">
                        <label class="form-check-label" >{{$item->name}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col"  >
                <div class="mb-3 " style="margin-left:-190px;">
                    <label>Bonus :</label>
                    @foreach($data_licence as $key =>$item)
                    <div class="form-check">
                        <input class="form-input" type="text"  name="{{'bonus_licence'.$item->id}}" placeholder="{{'bonus de '.$item->name}}" >
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col"  >
                <div class="mb-3 " style="margin-left: -320px;">
                    <label>Coefficient</label>
                    @foreach($data_licence as $key =>$item)
                    <div class="form-check">
                        <input class="form-input" type="text"  name="{{'coefficient_licence'.$item->id}}" placeholder="{{'coefficient de '.$item->name}}" >
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

  </form>
@endsection