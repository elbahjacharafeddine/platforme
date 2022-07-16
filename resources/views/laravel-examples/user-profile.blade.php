@extends('layouts.user_type.auth')

@section('content')


<section style="background-color: #eee;">
    <form action="/user-profile/update" method="POST"  enctype="multipart/form-data" class="container py-5">
    @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ URL::to('/images/images_profiles/'. auth()->user()->photo) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{auth()->user()->last_name}} {{auth()->user()->first_name}}</h5>
                        <label for="image_profile" class="btn btn-success">Changer Image</label>
                        <input type="file" value="{{ URL::to('/images/images_profiles/'. auth()->user()->photo) }}" id="image_profile" name="image_profile" accept="image/png, image/gif, image/jpeg" hidden />
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nom</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ auth()->user()->last_name }}" type="text" placeholder="your last Name" id="user-last_name" name="last_name">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Prenom</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ auth()->user()->first_name }}" type="text" placeholder="your first Name" id="user-first_name" name="first_name">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">الإسم العائلي</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ auth()->user()->last_name_arabic }}" type="text" placeholder="your last name with arabic" id="user-last_name_arabic" name="last_name_arabic">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">الإسم الشخصي</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ auth()->user()->first_name_arabic }}" type="text" placeholder="your first name with arabic" id="user-first_name_arabic" name="first_name_arabic">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Date Naissance</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{auth()->user()->birthday}}" type="date" placeholder="Name" id="user-birthday" name="birthday">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Lieu Naissance</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{auth()->user()->birth_place}}" type="text" placeholder="your birth place" id="user-birth_place" name="birth_place">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">CIN</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{auth()->user()->cin}}" type="text" placeholder="your cin" id="user-cin" name="cin">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">CNE</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{auth()->user()->cne}}" type="text" placeholder="your cne" id="user-first_name" name="cne">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Telephone</p>
                            </div>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{auth()->user()->phone}}" type="text" placeholder="your phone" id="user-phone" name="phone">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ auth()->user()->email }}" type="email" placeholder="@example.com" id="user-email" name="email" disabled>
                                @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">CIN (face 1)</p>
                            </div>
                            <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="file"  name="cin_first_face" accept="image/png, image/gif, image/jpeg"/>
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-3">
                                <p class="mb-0">CIN (face 2)</p>
                            </div>
                            <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="file" value="{{ URL::to('/images/images_cin/second_face/'. auth()->user()->cin_image_face2) }}"  name="cin_second_face" accept="image/png, image/gif, image/jpeg"/>
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
