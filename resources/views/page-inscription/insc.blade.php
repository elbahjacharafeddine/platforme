@extends('layouts.user_type.auth')
@section('content')
<style>
     body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Etape 1</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Etape 2</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Etape 3</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Etape 4</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p><small>Etape 5</small></p>
            </div>
        </div>
    </div>

    <form role="form" action="/test" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h4 class="panel-title">Veuillez choisir votre Bac :</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Type de Baccalauréat</label>
                    <select name="type_bac" id="type_bac" class="form-control">
                        @foreach($data_bac as $key =>$item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Veuillez choisir votre filiere :</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Liste des filieres </label>
                    <select name="type_filiere" id="type_filiere" class="form-control">
                        <option value="">Specialite Enseignement Primaire</option>
                        <option value="">Specialite Enseignement secondaire -langue anglaise</option>
                        <option value="">Specialite Enseignement secondaire -Sc.Industrielles</option>
                        <option value="">Specialite Enseignement secondaire -Mathematiques</option>
                    </select>
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Veuillez saisir les notes des matieres suivantes :</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Math:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="note de Math" name="nname" pattern="[0-9]{2}+([\.][0-9]+)?" step="0.001" title="Veuillez saisir votre note correctement"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Physique:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="note de Physique" name="nname" pattern="[0-9]{2}+([\.][0-9]+)?" step="0.001" title="Veuillez saisir votre note correctement" />
                </div>
                <div class="form-group">
                    <label class="control-label">Francais:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="note de Francais" name="aname" pattern="[0-9]{2}+([\.][0-9]+)?" step="0.001" title="Veuillez saisir votre note correctement" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Veuillez saisir les notes des semestres suivants :</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">S 1:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="note de S 1" name="nname" />
                </div>
                <div class="form-group">
                    <label class="control-label">S 2:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="note de S 2" name="nname" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title text-center">FIN </h3>
            </div>
            <div class="panel-body text-center">
                <div class="form-group ">
                    <img src="images/valide.png"/>
                </div>
                <button class="btn btn-warning pull-right" type="reset">Annuler ?</button>
                <button class="btn btn-success pull-left"  type="submit">Terminer !</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-success').addClass('btn-default');
        $item.addClass('btn-success');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function () {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-success').trigger('click');
});
</script>
@endsection
