@extends('layout/main')
@extends('layout/header')
@extends('layout/footer')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
@endsection


@section('body')
<body>
    <div class="container-fluid home-container">
        <div class="row home-row">
           
            <div class="col-md-6 col-sm-6 col-12 home-announcement row">
                
                    <div class="col-md-12 announcement-item"><h2>Latest News and Announcements</h2></div>
                    <div class="col-md-12 announcement-item">
                        <h3>SEPT. 20, 2021</h3>
                        <p>Remembering Our Faithful Departed This November</p>
                    </div>

                    <div class="col-md-12 announcement-item">
                        <h3>SEPT. 20, 2021</h3>
                        <p>Remembering Our Faithful Departed This November</p>
                    </div>

                    <div class="col-md-12 announcement-item">
                        <h3>SEPT. 20, 2021</h3>
                        <p>Remembering Our Faithful Departed This November</p>
                    </div>
                    

            </div>

            <div class="col-md-6 d-flex flex-column ">
                <h1>this is test</h1>
                <h1>this is test 2</h1>
            </div>


        </div>
        
    </div>
</body>
@endsection