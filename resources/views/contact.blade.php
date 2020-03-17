@extends('layout')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/cover1.jpeg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
        
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">


           
                <form method="POST" action="{{ route('contact.us') }}">
                    {{ csrf_field()}} 
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
    </div>
@endif

                    <div class="form-group">
                        <input type="text" name="full_name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea cols="30" name="message" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="author">UPLOAD YOUR PICTURE</label>
                        <input type="file" name="bookcover" class="form-control-file" id="author">
                    </div> -->
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
 
</section>
@endsection
