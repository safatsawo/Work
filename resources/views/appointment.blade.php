@extends('layout')
@section('content')

<body>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate 
                
                text-center">
                    <h1 class="mb-2 bread">Appointment</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
        style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <span class="subheading">Consultation</span>
                        <h2 class="mb-4">Free Consultation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form  method="POST" action="/appointaction" class="appointment-form ftco-animate">
                    {{ csrf_field()}}  
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input name="first_name" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group ml-md-4">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </section>

    @endsection
