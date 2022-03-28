@extends('User.master')

@section('content')

    <div class="row mt-4">
        <div class="col-lg 6 d-flex justify-content-center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary d-flex justify-content-center">See Profile</a>
                </div>
            </div>
        </div>
    </div>

@endsection