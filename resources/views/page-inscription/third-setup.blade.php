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
            <form id="regForm" action="/fourth-setup" method="POST"  enctype="multipart/form-data" >
            @csrf
                <h1 id="register">Inscription</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span><span class="step"></span> </div>
                @foreach($data_matiere as $key => $item)
                <div class="col-auto">
                    <label for="" class="col-form-label">Note de {{$item->name}} :</label>
                </div>
                <div class="col-auto">

                    <input type="text" name="" id="" class="form-control" required pattern="[0-9]{2}+([\.][0-9]+)?" step="0.001" title="This should be a number with up to 3 decimal places."/>
                </div>
                @endforeach
                <div style="overflow:auto;" id="nextprevious">
                <br>
                    <div style="float:right;"><button type="submit" id="nextBtn" >Submit</button> </div>
                    <div style="float:left;"> <a href="{{url('/second-setup')}}"><button type="button" id="prevBtn" >Previous</button></a></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
