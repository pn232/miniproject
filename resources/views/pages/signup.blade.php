@extends('layouts.default')

@section('content')

<div class="card at -3 pl-2 pr-2">
    <div class="card-title"><h1>Signup</h1><p class="lead">Welcome</p></div>
    <div class="card-body">


        <form action="/Signup" method="post">

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="name" class="form-control" id="Name" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="email">email address</label>
                <input type="email" class="form-control" id="email"></input>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password"></input>
            </div>
            <div class="form-group">
                <label for="confirm password">confirm password</label>
                <input type="confirm password" class="form-control" id="confirm password"></input>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</div>
@endsection