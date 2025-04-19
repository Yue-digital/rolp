@extends('layout/main')
@extends('layout/header')
@extends('layout/footer')
@section('style')
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/home/history.css')}}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
@endsection


@section('body')

    <div class="container-fluid rolp-home-hero" >
        <div class="row hero-rolp-row" style="background-image: url('{{asset('assets/img/hero.png')}}')">
            <div class="col-md-12">
                {{-- <img src="{{asset('assets/img/hero.png')}}" alt="" srcset=""> --}}
            </div>
        </div>

       
    </div>


    <div class="container about-history-container">
        <div class="row">
            <div class="row about-us-section about-history-section">
                <div class="col-md-12 about-us-col">
                    <h1>OUR JOURNEY IN FAITH</h1>
                    <p>The year was 1972. BF Homes Parañaque was a small, albeit sprawling community with clusters of houses here and there. There were only a few stores in what passed as a commercial center. Water problems were unheard of. Road barriers with security guards did not exist. Travel time from BF to Makati was only fifteen minutes. BF also had no church of its own. There was just a makeshift chapel with only twenty pews donated by the BF management. The nearest church, San Antonio de Padua, was some 10 kilometers away.</p>

                    <p>On February 23 of that same year, His Eminence Rufino J. Cardinal Santos, Archbishop of Manila, canonically erected the Parokya ng Simbahan ng Pagkabuhay, or the Parish of the Resurrection, based in BF Homes, with Fr. Ceferino Sanchez as its first parish priest. Comprising the new parish, aside from BF Homes, were Tahanan Village, RGC Village, Ireneville Subdivision, Teoville Subdivision, Sta. Rita Compound, and Goodwill Subdivision, all located along Sucat in Parañaque.</p>

                    <p>Over the years these neighboring subdivisions were given their own new parishes—Jesus the Divine Healer Parish in Tahanan, Our Lady of Grace Parish in Ireneville, Ascension of Our Lord Parish in Goodwill Subdivision, plus a second one within BF Homes—the Presentation of the Child Jesus Parish in Phase 3. The jurisdiction of the Parish of the Resurrection was thus officially trimmed down to its present area bounded on the north by Elizalde Street from President's Avenue all the way to and including Ipil and Clinic sites; on the west by Dela Rama Street; on the east by President's Avenue from Elizalde Street up to and including Phase VI-A (now Presidents Heights); and on the south by Inner Circle Homeowners' Association just before the Alabang-Zapote Road.</p>

                    <p>Initial plans to improve the makeshift chapel were made in the early years of the parish, with ground breaking ceremonies held in 1979. Construction and completion of the new church building took place in 1981. Taking almost two years to build, the Church of the Resurrection was transformed into a basilica-like edifice. It was again improved, and in December 1985 the new church structure was inaugurated with no less than the Apostolic Nuncio to the Philippines, Archbishop Bruno Torpigliani, and His Eminence Jaime Cardinal Sin as main celebrants, and with a number of bishops, monsignori and priests as concelebrants.</p>

                    <p>With the help of educator Mrs. Loreto Tomelden-Herrera, Msgr. Sanchez put up the Veritas Parochial School to bring quality Catholic education to the children of the parish. A Perpetual Eucharistic Adoration (PEA) room was also inaugurated in 1986—the first such prayer room in the entire country—to deepen the spirituality of the parishioners. This prayer room within the church would later become a separate chapel across the street. The new PEA Chapel provided parishioners and visitors with a welcome respite in times of trouble, and a place to express the joys of their daily life to the Lord.</p>

                    <p>Msgr. Sanchez ended his term in 1989 and he was succeeded as parish priest by Msgr. Agerico Galang, but the latter stayed only for less than a year.</p>

                    <p>In January 1990, the parish, now under the new leadership of Msgr. Feliciano S. Santos, saw the renewal of the laity's commitment to participate in the spiritual enrichment of the community. In order to accommodate the ever-growing number of parishioners attending Sunday Masses and other activities, the church needed to be further expanded. Prior to his retirement in 1997, Msgr. Santos initiated the renovation work on the church structure and along with it came the installation of a prominent feature which remains to this day—the striking stained glass mural of the Resurrection scene filling up almost the entire upper façade of the church.</p>
                </div>
            </div>
    
            
        </div>
    </div>

    <!-- Image Slider Section -->
    <div class="container-fluid image-slider-container">
        <div class="container slider-bg">
        </div>
        <div class="row">
            <div class="col-md-12 image-slider-col">
                <div class="image-slider-container">
                    <div class="swiper image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 3">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 4">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 5">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 5">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 5">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 5">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/img-5.jpg')}}" alt="Parish History 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container about-history-container about-history-container-second">
        <div class="row">
            <div class="row about-us-section about-history-section">
                <div class="col-md-12 about-us-col">
                    <h1>OUR JOURNEY IN FAITH</h1>
                    <p>The year was 1972. BF Homes Parañaque was a small, albeit sprawling community with clusters of houses here and there. There were only a few stores in what passed as a commercial center. Water problems were unheard of. Road barriers with security guards did not exist. Travel time from BF to Makati was only fifteen minutes. BF also had no church of its own. There was just a makeshift chapel with only twenty pews donated by the BF management. The nearest church, San Antonio de Padua, was some 10 kilometers away.</p>

                    <p>On February 23 of that same year, His Eminence Rufino J. Cardinal Santos, Archbishop of Manila, canonically erected the Parokya ng Simbahan ng Pagkabuhay, or the Parish of the Resurrection, based in BF Homes, with Fr. Ceferino Sanchez as its first parish priest. Comprising the new parish, aside from BF Homes, were Tahanan Village, RGC Village, Ireneville Subdivision, Teoville Subdivision, Sta. Rita Compound, and Goodwill Subdivision, all located along Sucat in Parañaque.</p>

                    <p>Over the years these neighboring subdivisions were given their own new parishes—Jesus the Divine Healer Parish in Tahanan, Our Lady of Grace Parish in Ireneville, Ascension of Our Lord Parish in Goodwill Subdivision, plus a second one within BF Homes—the Presentation of the Child Jesus Parish in Phase 3. The jurisdiction of the Parish of the Resurrection was thus officially trimmed down to its present area bounded on the north by Elizalde Street from President's Avenue all the way to and including Ipil and Clinic sites; on the west by Dela Rama Street; on the east by President's Avenue from Elizalde Street up to and including Phase VI-A (now Presidents Heights); and on the south by Inner Circle Homeowners' Association just before the Alabang-Zapote Road.</p>

                    <p>Initial plans to improve the makeshift chapel were made in the early years of the parish, with ground breaking ceremonies held in 1979. Construction and completion of the new church building took place in 1981. Taking almost two years to build, the Church of the Resurrection was transformed into a basilica-like edifice. It was again improved, and in December 1985 the new church structure was inaugurated with no less than the Apostolic Nuncio to the Philippines, Archbishop Bruno Torpigliani, and His Eminence Jaime Cardinal Sin as main celebrants, and with a number of bishops, monsignori and priests as concelebrants.</p>

                    <p>With the help of educator Mrs. Loreto Tomelden-Herrera, Msgr. Sanchez put up the Veritas Parochial School to bring quality Catholic education to the children of the parish. A Perpetual Eucharistic Adoration (PEA) room was also inaugurated in 1986—the first such prayer room in the entire country—to deepen the spirituality of the parishioners. This prayer room within the church would later become a separate chapel across the street. The new PEA Chapel provided parishioners and visitors with a welcome respite in times of trouble, and a place to express the joys of their daily life to the Lord.</p>

                    <p>Msgr. Sanchez ended his term in 1989 and he was succeeded as parish priest by Msgr. Agerico Galang, but the latter stayed only for less than a year.</p>

                    <p>In January 1990, the parish, now under the new leadership of Msgr. Feliciano S. Santos, saw the renewal of the laity's commitment to participate in the spiritual enrichment of the community. In order to accommodate the ever-growing number of parishioners attending Sunday Masses and other activities, the church needed to be further expanded. Prior to his retirement in 1997, Msgr. Santos initiated the renovation work on the church structure and along with it came the installation of a prominent feature which remains to this day—the striking stained glass mural of the Resurrection scene filling up almost the entire upper façade of the church.</p>
                </div>
            </div>
    
            
        </div>
    </div>
  
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.image-slider', {
                slidesPerView: 4,
                spaceBetween: 20,
                centeredSlides: false,
                allowTouchMove: true,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        allowTouchMove: true,
                    },
                    768: {
                        slidesPerView: 2,
                        allowTouchMove: true,
                    },
                    1024: {
                        slidesPerView: 4,
                        allowTouchMove: true,
                    },
                }
            });


            function aboutResize(){
            const sliderContainer = document.querySelector('.image-slider-container');
            const aboutHistorySection = document.querySelector('.about-history-section');

            if (sliderContainer && aboutHistorySection) {
                const computedStyle = window.getComputedStyle(sliderContainer);
                const marginTop = computedStyle.marginTop;

                // Apply the marginTop of .image-slider-container to .about-history-section
                aboutHistorySection.style.marginTop = marginTop;

                console.log('Applied Margin Top:', marginTop);
            }
           }

            // Force update after initialization
            swiper.update();
            // aboutResize()

            // Force Swiper to recalculate on window resize
            window.addEventListener('resize', () => {
                swiper.update();
                // aboutResize()
            });

          
        });
    </script>

@endsection
