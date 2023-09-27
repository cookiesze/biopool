<!--Start footer area Style4-->
<footer class="footer-area style4">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s4">
                    <div class="our-info-box">
                        <div class="footer-logo">
                            <!-- logo -->
                            <img style="width: 80px" src="{{ asset('assets/onsite/logo_biopool.png') }}" alt="banner-img">
                        </div>
                        <div class="text">
                            <p><strong style="color: #fff">บริษัท พลูสตาร์ จำกัด</strong> <br> ตั้งอยู่ที่ 197 ซอย ลาดพร้าว 101 เขตวังทองหลาง กรุงเทพมหานคร 10310 <br><strong style="color: #fff"></strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget s4">
                    <div class="title-style2">
                        <h3>Menu Links</h3>
                    </div>
                    <div class="links">
                        <ul class="float-left list-group list-group-flush">
                            <a style="margin: 0.2rem 0.2rem 0.2rem 0;" href="/" class="btn btn-outline-light" role="button" data-bs-toggle="button">Home</a>
                            <a style="margin: 0.2rem 0.2rem 0.2rem 0;"href="{{ url('/guest/product') }}" class="btn btn-outline-light" role="button" data-bs-toggle="button">Product</a>
                            <a style="margin: 0.2rem 0.2rem 0.2rem 0;" href="{{ url('/guest/post') }}" class="btn btn-outline-light" role="button" data-bs-toggle="button">News</a>
                            <a style="margin: 0.2rem 0.2rem 0.2rem 0;" href="{{ url('/guest/contact_us') }}" class="btn btn-outline-light" role="button" data-bs-toggle="button">Contact Us</a>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50-s4">
                    <div class="title-style2">
                        <h3>Tags</h3>
                    </div>
                    <div class="tag-box pull-left">
                            @foreach($tags as $arr)
                                <a class="btn btn-outline-light" style="margin: 0.2rem 0.2rem 0.2rem 0;" href="{{ url('guest/tags',['tag' => $arr->name]) }}">{{ $arr->name }}</a>
                            @endforeach
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area style4-->

