@extends('layouts.frontend')

@section('content')



<section class="breadcrumb-area style2" style="background-image: url(/frontend/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>contact</span>
                        <h1 style="font-weight: 500;">ติดต่อเรา</h1>
                        <h4 style="padding-bottom: 3em; color:aliceblue; font-weight: 200;" ></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="working-process-style2-area" style="background-image:url(images/parallax-background/working-process-bg-style3.jpg);">
    <div class="container">
        <div class="sec-title">
            <p>Google Map -> <a href="https://www.google.com/maps/place/Tvpool/@13.778135,100.628484,14z/data=!4m6!3m5!1s0x311d62025f97483d:0x4717bba4c48b3e44!8m2!3d13.7781348!4d100.6284836!16s%2Fg%2F11b67gdprt?hl=th&entry=ttu" target="_blank"  >คลื๊กที่นี่</a></p>
            <div class="title">{{ $contact_us->name }}</div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="working">
                    <div class="iframe-container">
                        <iframe src="{{ $contact_us->map }}" width="1169" height="516" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <br><br><br>
                <div class="about-style2-text">
                    <div class="sec-title">
                        <p>About US</p>
                        <div class="title"><h1 style="font-size: 20px; font-weight: 700;" >{{ $contact_us->name }}</h1></div>
                    </div>
                    <div class="text">
                        <p><b>ตั้งอยู่ที่ :</b> {{ $contact_us->address }}</p>
                        <p><b>เบอร์โทร :</b> {{ $contact_us->phone }}</p>
                        <p><b>E-mail :</b> {{ $contact_us->email }}</p>
                        <b>facebook :</b> <a href="{{ $contact_us->facebook }}">โฟมเซรั่ม 24 พลัส ของแท้ 100%</a><br>
                        <b>Shopee :</b> <a href="{{ $contact_us->shopee }}">24 Plus</a><br>
                        <b>Lazada :</b> <a href="{{ $contact_us->Lazada }}">24 Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
