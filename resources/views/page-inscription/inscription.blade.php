@extends('layouts.user_type.auth')
@section('content')
<style>
    body{background: #eee}
    #regForm{background-color: #ffffff;margin: 0px auto;font-family: Raleway;padding: 40px;border-radius: 10px}
    h1{text-align: center}
    input{padding: 10px;width: 100%;font-size: 17px;font-family: Raleway;border: 1px solid #aaaaaa}
    select{padding: 10px;width: 100%;font-size: 17px;font-family: Raleway;border: 1px solid #aaaaaa}
    input.invalid{background-color: #ffdddd}
    .tab{display: none}
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
            <form id="regForm">
                <h1 id="register">Inscription</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                    <label for="type_bac">Type de Baccalauréat</label>
                    <select name="type_bac" id="type_bac">
                        <option value="t">test</option>
                    </select>
                    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                </div>
                <div class="tab">
                    <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
                    <p><input placeholder="State" oninput="this.className = ''" name="nn"></p>
                </div>
                <div class="tab">
                    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                </div>
                <div class="tab">
                    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Thanks for your information!</h3> <span>Your information has been saved! we will contact you shortly!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    function index(){
        var x =document.getElementById('type_bac').value;
        alert(x);
    }
var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {
            showTab(currentTab);
});

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("nextprevious").style.display = "none";
        document.getElementById("all-steps").style.display = "none";
        document.getElementById("register").style.display = "none";
        document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
        y[i].className += " invalid";
        valid = false;
    }
    }
    if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
}
function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}

</script>

