@extends('layout/main')
@extends('layout/header')
@extends('layout/footer')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
@endsection


@section('body')

    <div class="container-fluid rolp-home-hero" >
        <div class="row hero-rolp-row" style="background-image: url('{{asset('assets/img/hero.png')}}')">
            <div class="col-md-12">

            </div>
        </div>

        <div class="row about-us-section">
            <div class="col-md-6 about-us-col">
                <img src="{{asset('assets/img/rolp-facade.png')}}" alt="">
            </div>
            <div class="col-md-6 about-us-col">
                <p>Resurrection of Our Lord Parish lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

                <a href="#" class="rolp-btn">LEARN MORE</a>
            </div>
        </div>

        <div class="row schedule-section">
            <div class="col-md-6 todays-col">
                <h3>SUNDAY'S SCHEDULE</h3>
                <ul>
                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>

                    <li>
                        <p class="rolp-title">Angelus</p>
                        <sp>06:00 am</sp>
                    </li>
                </ul>

                <a href="#" class="rolp-btn">SEE FULL</a>

            </div>
            <div class="col-md-6 upcoming-col">
                <h3>UPCOMING EVENTS</h3>

                <div class="upcoming-items">
                    <h4><a href="#">All Saints Day Parade</a></h4>
                    <p>03 Nov 2024, after 3:30 pm Mass</p>
                    <p>ROLP Church</p>

                </div>

                <div class="upcoming-items">
                    <h4><a href="#">All Saints Day Parade</a></h4>
                    <p>03 Nov 2024, after 3:30 pm Mass</p>
                    <p>ROLP Church</p>

                </div>

                <div class="upcoming-items">
                    <h4><a href="#">All Saints Day Parade</a></h4>
                    <p>03 Nov 2024, after 3:30 pm Mass</p>
                    <p>ROLP Church</p>

                </div>

                <a href="#" class="rolp-btn">SEE FULL</a>

            </div>
        </div>

        <div class="row message-section">
            <div class="col-md-9 message-col">
                <span class="blockquote">“</span>
                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </h2>

                <p class="by">LOREM IPSUM</p>
            </div>
        </div>

        <div class="row livestream-row">
            <div class="col-md-9 livestream-col">
                <h3>RECENT LIVE STREAM</h3>
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fresurrectionbf%2Fvideos%2F846153147665474%2F&show_text=false&width=560&t=0" width="700" height="414" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>            </div>
        </div>

        <div class="row activities-row">
            <div class="col-md-6 activity-col">
                <h3>LATEST ACTIVITY</h3>

                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fresurrectionbf%2Fposts%2Fpfbid02jhtwRtZndrHmGWwUQufZZsjDyREUCFAh3bsgvzSDWSVr4oSiFNNXuHo819fPBfabl&show_text=true&width=500" width="500" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D1011589884340458%26set%3Da.1011590711007042%26type%3D3&show_text=false&width=500" width="500" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="col-md-6 gallery">
                <img src="{{asset('assets/img/img-1.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-2.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-3.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-4.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-5.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-6.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-7.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-8.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-9.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-10.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-11.jpg')}}" alt="">
                <img src="{{asset('assets/img/img-12.jpg')}}" alt="">
            </div>
        </div>
    </div>


@endsection
