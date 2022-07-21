@extends('layouts.user_type.guest')
@section('content')
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" >
      <span class="mask bg-gradient-dark opacity-6" style=" background-image: url('../assets/img/curved-images/ensaj.jpg');"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenue!</h1>
            <h3 class="text-lead text-white">créer un nouveau compte .</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Connexion</h5>
            </div>

            <div class="card-body">
              <form role="form text-left" method="POST" action="/inscription">
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" name="agreement" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                  J'accepte <a href="javascript:;" class="text-dark font-weight-bolder">Les Termes et  Conditions</a>
                  </label>
                  @error('agreement')
                    <p class="text-danger text-xs mt-2">Tout d'abord, acceptez les conditions générales, puis réessayez de vous inscrire.s</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">S'inscrire</button>
                </div>
                <p class="text-sm mt-3 mb-0">Vous avez déjà un compte?<a href="Accueil" class="text-dark font-weight-bolder">s'identifier</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

