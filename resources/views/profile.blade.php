@extends ('layouts.app')
@section('content')
<div class="container">
    <h1 class="fs-1 fw-bold my-5">Edit Profile</h1>
    <form id="formAccountSettings" method="POST" action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data" class="needs-validation" role="form" novalidate>
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="name" class="form-label">{{ trans('Name')}}</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                    <div class="invalid-tooltip">{{ trans('Name is required')}}</div>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="email" class="form-label">{{ trans('Email Address')}}</label>
                    <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                    <div class="invalid-tooltip">{{ trans('Email Address isrequired')}}</div>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="oldPassword" class="form-label">{{ trans('Current Password')}}</label>
                    <input class="form-control" type="password" id="oldPassword" name="oldPassword" placeholder="***********">
                    <div class="invalid-tooltip">{{ trans('Password Incorrect')}}</div>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="newPassword" class="form-label">{{ trans('New Password')}}</label>
                    <input class="form-control" type="password" id="newPassword" name="newPassword"  placeholder="***********">
                    <div class="invalid-tooltip">{{ trans('Password Invalid')}}</div>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="confirmPassword" class="form-label">{{ trans('Confirm Password')}}</label>
                    <input class="form-control" type="password" id="confirmPassword" name="newPassword_confirmation" placeholder="***********">
                    <div class="invalid-tooltip">{{ trans('Password Invalid')}}</div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-outline-dark button-create me-2">{{ trans('Save changes')}}</button>
                    <a href="/menu"><button type="submit" class="btn btn-dark button-create me-2">{{ trans('Cancel')}}</button></a>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection