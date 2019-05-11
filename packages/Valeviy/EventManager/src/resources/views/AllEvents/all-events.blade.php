@extends('events::index')
@section('content')
    <div class="py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-3">
                    <div class="card box-shadow">
                        <img class="card-img-top" src="{{ asset("vendor/Valeviy/EventManager/img/event.png") }}">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div> <small class="text-muted">9 mins</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card box-shadow">
                        <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div> <small class="text-muted">9 mins</small> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card box-shadow">
                        <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div> <small class="text-muted">9 mins</small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection