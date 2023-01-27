<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <link rel="icon" type="image/png" href="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}" />
    <title>Portofolio</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>PORTOFOLIO</h1>
                        </div>
                        {{-- <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Portofolio</h2>
            </div>
        </div>

        @foreach ($portofolio as $value)
            <div class="row margin-b-50">
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ 'https://backend.ala-group.id/' . $value->foto }}">
                        </div>
                    </div>
                    <h3>
                        <a href="{{ 'https://backend.ala-group.id/' . $value->foto }}">{{ $value->nama }}</a>
                        <p>{{ $value->desc }}</p>
                    </h3>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ 'https://backend.ala-group.id/' . $value->foto }}">
                        </div>
                    </div>
                    <h3>
                        <a href="{{ 'https://backend.ala-group.id/' . $value->foto }}">{{ $value->nama }}</a>
                        <p>{{ $value->desc }}</p>
                    </h3>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ 'https://backend.ala-group.id/' . $value->foto }}">
                        </div>
                    </div>
                    <h3><a href="{{ 'https://backend.ala-group.id/' . $value->foto }}">{{ $value->nama }}</a>
                        <p>{{ $value->desc }}</p>
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</body>

@include('layout.footer')

</html>
