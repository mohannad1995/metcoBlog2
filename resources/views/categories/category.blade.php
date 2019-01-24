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
                <div class="card-header"> Category</div>
                <div class="card-body">
                    <form  class="from-horizontal" method="POST" action="{{url('/addCategory') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Enter Category</label>
    
                                <div class="col-md-6">
                                    <input id="category" type="category" class="form-control
                                    {{ $errors->has('category') ? ' is-invalid' : '' }}
                                    " name="category" value="{{ old('category') }}" required autofocus>
    
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group ">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Add Category
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
