@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/logo1.png') }}" alt="" width="50" height="50" class="m-3">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="m-3">
                            <label for="">Email</label>
                            <input id="email" type="email" class="form-control p-2 bg-transparent" placeholder="masukkan email" name="email" value="{{ old('email') }}" required  autofocus>
                        </div>
                        <div class="m-3">
                            <label for="">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" class="form-control p-2 bg-transparent" placeholder="masukkan password" name="password" required>
                                    <div class="input-group-text bg-transparent">
                                        <span><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toogle()"></i></span>
                                    </div>
                            </div>
                        </div>

                        <div class="row m-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Ingatkan saya
                                    </label>
                                </div>
                        </div>
                        <div class="m-3">
                        <button type="submit" class="btn btn-primary w-100 py-2">
                                    {{ __('Login') }}
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var state=false;
    function toogle(){
        if(state){
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").setAttribute("class", "fa fa-eye");
            state=false;
        }else{
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").setAttribute("class", "fa fa-eye-slash");
            state=true;
        }
    }
</script>
@endsection
