@extends('layout/main')
@extends('layout/header')
@extends('layout/footer')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
@endsection


@section('body')

    <div class="container-fluid rolp-home-hero page-about" >
        <div class="row hero-rolp-row" style="background-image: url('{{asset('assets/img/about.jpg')}}')">
            <div class="col-md-12">

            </div>
        </div>

        <div class="row about-us-section">
            <h1 class="mx-auto text-center">A MESSAGE FROM OUR PRIEST</h1>
            <div class="col-md-7 about-us-col">
                <span class="blockquote">“</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. </p>

                <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
            <div class="col-md-5 monsi-img">
                <img src="{{asset('assets/img/monsi2.jpg')}}" alt="">
            </div>
        </div>

        <div class="row our-priest">
            <h1 class="mx-auto text-center">OUR PRIESTS</h1>

            <div class="col-md-10 priest-col">
                <img src="{{asset('assets/img/monsi.jpg')}}" alt="">
                <img src="{{asset('assets/img/monsi.jpg')}}" alt="">
                <img src="{{asset('assets/img/monsi.jpg')}}" alt="">
            </div>

        </div>

        <div class="row staff-row">
            <h1 class="mx-auto text-center">OUR STAFF</h1>
            <div class="col-md-7 staff-img-col">
                <img src="{{asset('assets/img/staff.jpg')}}" alt="">
            </div>

            <div class="col-md-5 staff-text-col">
                <h3 class="text-bold">Office Staff</h3>
                <ul>
                    <li>Carolina Daep, Parish Cashier</li>
                    <li>Frederick Prevosa, Parish Secretary</li>
                    <li>Chiara Anchilla Camballa, Office Staff</li>
                    <li>Victoria Camelle Orendain, Front Cashier</li>
                    <li>Jovanie Limorinas, Office Staff</li>
                    <li>Christian Banate, Driver</li>
                    <li>Eleuterio Ragaodao, Maintenance Personnel</li>
                    <li>Elsie Sobremisana, Bookstore Staff</li>
                </ul>

                <h3>Rectory Staff</h3>
                <ul>
                    <li>Armando Sario, Sacristan Mayor</li>
                    <li>Rhea Marasigan, Cook</li>
                    <li>Rezyl Requiez, House Helpe</li>
                    <li>Allen Mendez, Sacristan</li>
                </ul>
            </div>


            <div class="col-md-6 about-img">
                <img src="{{ asset('assets/img/resu.jpg') }}" alt="">
            </div>
            <div class="col-md-6 about-img">
                <img src="{{ asset('assets/img/basileia.jpg') }}" alt="">
            </div>
        </div>
    </div>


@endsection
