
@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-5 m-auto">
        <div class="card" style="background-color: #95afc0">
            <div class="card-title text-center mt-3">
                <img src="{{asset('images/rgob-logo.png')}}" alt="rgob-logo" width="150px" height="150px">
            </div>
            <div class="card-body">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-2x"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Citizenship ID">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-2x"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <p class="text-white"><input type="checkbox">&nbsp;Remember Me
                    <a href="#" class="float-right text-white">Forgot Password?</a></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-success w-50">Login</button>
                </div><br><br>
                </form>

            </div>

        </div>

    </div>

</div>

@endsection
