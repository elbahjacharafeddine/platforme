@extends('layouts.user_type.auth')
@section('content')
<style>
    body{background: #eee}
    #regForm{background-color: #ffffff;margin: 0px auto;font-family: Raleway;padding: 40px;border-radius: 10px}
    h1{text-align: center}
    input{padding: 10px;width: 100%;font-size: 17px;font-family: Raleway;border: 1px solid #aaaaaa}
    select{padding: 10px;width: 100%;font-size: 17px;font-family: Raleway;border: 1px solid #aaaaaa}
    input.invalid{background-color: #ffdddd}
    /* .tab{display: none} */
    button{background-color: #4CAF50;color: #ffffff;border: none;padding: 10px 20px;font-size: 17px;font-family: Raleway;cursor: pointer}
    button:hover{opacity: 0.8}
    #prevBtn{background-color: #bbbbbb}
    .step{height: 15px;width: 15px;margin: 0 2px;background-color: #bbbbbb;border: none;border-radius: 50%;display: inline-block;opacity: 0.5}
    .step.active{opacity: 1}
    .step.finish{background-color: #4CAF50}
    .all-steps{text-align: center;margin-top: 30px;margin-bottom: 30px}
    .thanks-message{display: none}
</style>
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form id="regForm" action="/third-setup" method="POST"  enctype="multipart/form-data" >
            @csrf
                <h1 id="register">Inscription</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span><span class="step"></span> </div>
                <div class="tab">
                    <label for="type_filiere">les filieres possibles</label>
                    <select name="type_filiere" id="type_filiere">
                        @foreach($choix_filiere as $key =>$item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                <br>
                    <div style="float:right;"><button type="submit" id="nextBtn" >Next</button> </div>
                    <div style="float:left;"> <a href="{{url('/inscription')}}"><button type="button" id="prevBtn" >Previous</button></a></div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
