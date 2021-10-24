@extends('base')

@section('content')
<style>
    body{
    background: url(register.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
</style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header bg-secondary bg-gradient text-white">
                <h3 class="card-title">Register Now</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-primary bg-gradient" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop