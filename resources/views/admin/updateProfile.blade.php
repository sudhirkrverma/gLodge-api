@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('onboardingStatus'))
    <div class="alert alert-success font-weight-bold" role="alert">
        {{ session('onboardingStatus') }}
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header font-weight-bold text-center">{{ __('Onboarding to gLodge - Update Your Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="/glodge/public/admin/updateProfile" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="lodge_name" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Name') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_name" type="text" class="form-control @error('lodge_name') is-invalid @enderror" name="lodge_name" value="{{ old('lodge_name') }}" required autocomplete="off" autofocus>

                                @error('lodge_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="owner_name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                            <div class="col-md-6">
                                <input id="owner_name" type="text" class="form-control @error('owner_name') is-invalid @enderror" name="owner_name" value="{{ old('owner_name') }}" required autocomplete="off" autofocus>

                                @error('owner_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="owner_contact" class="col-md-4 col-form-label text-md-right">{{ __('Owner Contact') }}</label>

                            <div class="col-md-6">
                                <input id="owner_contact" type="number" class="form-control @error('owner_contact') is-invalid @enderror" name="owner_contact" value="{{ old('owner_contact') }}" required autocomplete="off" autofocus>

                                @error('owner_contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="receptionist_contact" class="col-md-4 col-form-label text-md-right">{{ __('Receptionist Contact') }}</label>

                            <div class="col-md-6">
                                <input id="receptionist_contact" type="number" class="form-control @error('receptionist_contact') is-invalid @enderror" name="receptionist_contact" value="{{ old('receptionist_contact') }}" required autocomplete="off" autofocus>

                                @error('receptionist_contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $username}}" readonly autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lodge_desc" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Tag Line/ Description') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_desc" type="text" class="form-control @error('lodge_desc') is-invalid @enderror" name="lodge_desc" value="{{ old('lodge_desc') }}" required autocomplete="off" autofocus>

                                @error('lodge_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Here we upload images -->
                        <div class="form-group row">
                            <label for="lodge_img" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Image') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_img" type="file" class="form-control @error('lodge_img') is-invalid @enderror" name="lodge_img" value="{{ old('lodge_img')}}" required autocomplete="off">

                                <span class="text-secondary">Please use landscape images for better view and experience.</span>
                                @error('lodge_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lodge_img1" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Image Front View') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_img1" type="file" class="form-control @error('lodge_img1') is-invalid @enderror" name="lodge_img1" value="{{ old('lodge_img1')}}" required autocomplete="off">
                                <span class="text-secondary">Please use landscape images for better view and experience.</span>

                                @error('lodge_img1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lodge_img2" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Image Side View') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_img2" type="file" class="form-control @error('lodge_img2') is-invalid @enderror" name="lodge_img2" value="{{ old('lodge_img2')}}" required autocomplete="off">
                                <span class="text-secondary">Please use landscape images for better view and experience.</span>

                                @error('lodge_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lodge_img3" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Image Back View') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_img" type="file" class="form-control @error('lodge_img3') is-invalid @enderror" name="lodge_img3" value="{{ old('lodge_img3')}}"  autocomplete="off">
                                <span class="text-secondary">Please use landscape images for better view and experience.</span>

                                @error('lodge_img3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Address') }}</label>

                            <div class="col-md-6">
                                <input id="lodge_address" type="text" class="form-control @error('lodge_address') is-invalid @enderror" name="lodge_address" value="{{ old('lodge_address') }}" required autocomplete="off" autofocus>

                                @error('lodge_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row">
                            <label for="lodge_status" class="col-md-4 col-form-label text-md-right">{{ __('Lodge Status') }}</label>

                            <div class="col-md-6">
                                <select name="lodge_status" id="lodge_status" class="form-control" required autocomplete="off" >
                                    <!-- <option value="1">Active</option> -->
                                    <option value="0">Ready for Onboarding </option>
                                </select>
                              
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
