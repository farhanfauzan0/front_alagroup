<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Hubungi Kami</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Hubungi Kami</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">New York</a> <span class="text-uppercase margin-l-20">Head Office</span>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 1 012 3456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> hq@acidus.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">London</a> <span class="text-uppercase margin-l-20">Operation</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 44 77 3456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> operation@acidus.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">Singapore</a> <span class="text-uppercase margin-l-20">Finance</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 50 012 456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> finance@acidus.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->
            </div>
            <!--// end row -->
        </div>
    </div>
</body>

@include('layout.footer')

</html>
