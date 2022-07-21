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
            <div class="thanks-message text-center" id="text-message"> <img src="{{URL::to('images/valide.png')}}" width="100" class="mb-4">
                    <h3>Thanks for your information!</h3> <span>Your information has been saved! we will contact you shortly!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">download pdf</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
