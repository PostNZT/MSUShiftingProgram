@extends('index')
@section('title')
  MSUOVCAA - STAFF 
@endsection
@section('content')
	<div class="container">
      <form class="form-login" action="{{\route('staff.login.submit')}}" method="POST">
        {{ csrf_field() }}
        <h2 class="form-login-heading">MSU Shifting Program</h2>
        @if ($errors->any())
            <div class="alert alert-danger text-xs">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="Username" value="{{\old('username')}}" autofocus>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <hr>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        
        </div>
       
      </form>
    </div>
@endsection