
@extends('layout/main')
@extends('layout/header')
@extends('layout/footer')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/basileia.css')}}">
@endsection


@section('body')
<div class="container-fluid rolp-home-hero page-about" >
        <div class="row hero-rolp-row" style="background-image: url('{{asset('assets/img/basileia.jpg')}}')">
            <div class="col-md-12">

            </div>
        </div>

        

        <div class="row about-us-section">
    <h1 class="mx-auto text-center" style="font-size: 30px;">BASILEIA TOU THEOU SANCTUARY OF CREMATED</h1>
    <div class="col-md-10 about-us-col">
        <p style="font-size: 19px;"><strong>Basileia Tou Theou Sanctuary of Cremated</strong> remains is 2-floor final resting place of cremated remains of our 
            faithful departed.
            It shall be a venue of prayer and memorial for our dearly beloved who had gone ahead of us. 
            There will be open chapels in each floor dedicated to St. John the Apostle and St. Mary Magdalene, two saints who had accompanied Jesus unto His death on the Cross at Calvary. </br>
            
                <p><strong>WHAT DO WE OFFER?</strong></p>
                    1. A Two-storey airconditioned edifice with an elevator.
                    <br>2. A solemn place to visit for prayers and holy remembrance of our love ones.</br>
                    3. Each niche can accommodate up to 4 urns.
                    <br>4. Specially Designed Niches at the Chapel</br>
                    5. An Air-conditioned Chapel:St. John the Beloved and St. Mary Magdalene    
                    <br>6. An Air-conditioned comfort room</br>
                    7. Prime and Regular niches are standing on Nine (9) Levels categorized and priced according to eye, upper and lower levels.
                    <br>8. Proximate, convenient, and safe.</br>
                    9. Guaranteed clean, secured with CCTV, and modern in design with durable materials that last a lifetime.
                    <br>10. Your beloved departed will be blest yearly during the celebration of All Saints' Day and All Souls' Day.</br></p>
                    
                    <br><strong>TARGET COMPLETION</strong>
                    Within the Golden Jubillee of the Parish</br>

                    <br><strong>FOR MORE INQUIRIES:</strong>
                    Call: 8519-2281 or 8519-2282</br>
                    Email: rolp.basileia@gmail.com</br>  

                    <br><strong>  </strong></br>
                    
            </div>


            <div class="col-sm-12 basileia-col">
               
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
                <img src="{{asset('assets/img/basileia.jpg')}}" alt="">
            
            </div>
           
            <div class="col-md-6 about-img" style="padding: 0px;">
                <img src="{{ asset('assets/img/resu.jpg') }}" alt="">
            </div>
            <div class="col-md-6 about-img" style="padding: 0px;">
                <img src="{{ asset('assets/img/basileia.jpg') }}" alt="">
            </div>
</div>
        </div>

@endsection



