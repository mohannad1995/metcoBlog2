@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @if(count($errors) >0)
                @foreach($error->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif

                @if(session('response'))
            <div class="alert alert-success">{{session('response')}}</div>
                @endif

            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Username</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="username" class="form-control
                                    {{ $errors->has('username') ? ' is-invalid' : '' }}
                                    " name="username" value="{{ old('username') }}" required autofocus>
    
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="designation" class="col-md-4 col-form-label text-md-right">Designation</label>
    
                                <div class="col-md-6">
                                    <input id="designation" type="input" class="form-control
                                    {{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" required>
    
                                    @if ($errors->has('designation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('designation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                    <label for="profile_pic" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
        
                                    <div class="col-md-6">
                                        <input id="profile_pic" type="file" class="form-control 
                                        {{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="profile_pic" required>
        
                                        @if ($errors->has('profile_pic'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('profile_pic') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="  btn btn-primary ">
                                       Add Profile
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
