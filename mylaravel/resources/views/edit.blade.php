@extends('layouts.default')
@section('title')
    CAMP-66 | Register
@endsection
@section('body')
    login-page bg-body-secondary
@endsection
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{url('login')}}"><b>Camp</b> - 66</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Edit</p>
                <form action="{{url('/user')}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{$user -> id}}">

                    <div class="input-group mb-3">
                        <input type="text" value="{{ $user -> name  }}" name="name" class="form-control"
                               placeholder="Full Name"/>
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{$user -> email}}" class="form-control"
                               placeholder="Email"/>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                <p class="mb-0">
                    <a href="{{url('login')}}" class="text-center"> I already have a membership </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
@endsection