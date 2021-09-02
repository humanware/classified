@extends('layouts.app')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/slider/slider1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/slider/slider2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/slider/slider3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <span>
            <h1>Car</h1>
            <a href="#" class="text-right">View all</a>
        </span>
        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-interval="2500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3">
                            <img src="/product/car1.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car1.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car1.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color:#222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car1.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="/product/car2.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car2.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car2.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color:#222;">
                                Name of product/$500
                            </p>
                        </div>
                        <div class="col-3">
                            <img src="/product/car2.jpg" class="img-thumbnail">
                            <p class="text-center card-footer" style="color: #222;">
                                Name of product/$500
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection
