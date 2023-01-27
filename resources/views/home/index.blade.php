<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <link rel="icon" type="image/png" href="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}" />
    <title>Halaman Utama</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>{{ $profile->nama }}</h1>
                            <p>{{ $profile->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Produk</h2>
            </div>
        </div>

        <div class="row margin-b-50">
            @foreach ($product as $value)
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}"
                                alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h3><a href="#">{{ $value->nama }}</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                        magna ut
                        consequat siad esqudiat dolor
                    </p>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}">
                        </div>
                    </div>
                    <h4>
                        <a href="#">{{ $value->nama }}</a> <span class="text-uppercase margin-l-20">Design</span>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                        magna ut
                        consequat siad esqudiat dolor
                    </p>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}">
                        </div>
                    </div>
                    <h3><a href="#">{{ $value->nama }}</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                        magna ut
                        consequat siad esqudiat dolor
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</body>

@include('layout.footer')

</html>
