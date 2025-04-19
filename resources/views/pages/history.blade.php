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
        <div class="row about-us-section about-history-section">
            <div class="col-md-12 about-us-col">
                <p>
                    In October 1997, Msgr. Ernesto A. Joaquin was appointed as the new parish priest. Msgr. Joaquin’s installation also marked the rededication of the renovated church of the Parish of the Resurrection and the silver jubilee of the Parish, making it a truly significant day, indeed, for the parish. The parish continued to grow under his watch. During the latter part of his term, the parish was deeply involved in preparations for the First Diocesan Pastoral Assembly (DPA) of the Diocese of Parañaque (DOP).
                </p>

                <p>
                    Msgr. Mario F. Martinez took over as parish priest in 2005. His term as pastor saw a dynamic transformation at the diocesan level where many activities were taking shape in our then two-year-old Diocese of Parañaque. From Feb. 20-24, 2006, the first DPA was convened, participated in by over 400 clergy, religious and lay people from the 50 parishes. Following this, parish priority commissions and parish-based organizations were refocused and realigned to conform to our DOP DPA vision and mission. It was during this time also that the parish was officially renamed Resurrection of Our Lord Parish or ROLP.
                </p>

                <p>
                    In July 2011, Msgr. Manuel Gabriel was installed as the sixth parish priest of ROLP. His expertise as a pastor, educator, BEC promoter and builder enabled him to direct the parish into a new way of being a Church. He accelerated the creation and animation of BECs in the various enclaves and developed formation and evangelization programs for the parish. Healing Masses and home visitations for the sick were conducted in the various enclaves. But he still had a bigger vision for the parish.
                
                </p>

                <p>
                    Under Msgr. Gabriel, ROLP undertook what may be the boldest physical transformation initiative ever to take place in its history—the Air-conditioning Project (Phase 1) and Church Improvements Project (Phase 2). Powerful air-conditioning units and electrical conduits were installed within its structure, along with aluminum and glass enclosures and acoustic panels. New retablos with hand-carved designs were installed behind and on both sides of the altar, and the baptistery was renovated. The Gallery of Saints was converted into a side chapel and renamed “Chapel of the Agony,” where Masses for small groups can be held. An Infant Care Room was also put up for “out of control” kids and infants. All of these were done to make our church a “prayer-conditioned” place of worship.
                </p>

                <p>
                    In 2015, to mark the first Apostolic Visit of Pope Francis to the country and having in mind the concern for the elderly, the abandoned, the sick and handicapped, “the least, the last and the lost,” Msgr. Gabriel initiated the creation of various pastoral flagship programs to take care of both the corporal and spiritual needs of the people: Kasalang Bayan, Kumpilang Bayan, Malasakitang Bayan, Handog sa Pagkabuhay ng Kabataan (Church of the Poor Apostolate for the Youth). Plans are also being finalized for the putting up of a five-story building across the street, to be named Home of God’s Mercy, which will house the PEA Chapel, parish office, meeting and function rooms, and residence for priests.
                </p>

                <p>These, indeed, are just some of ROLP’s ways going back to its true identity as “A Poor Church for the Poor.”</p>

                <p>From 1972 to the present, from being a small makeshift chapel to a big prayer-conditioned church, from a tiny and simple place of worship to a parish complete with clear Mission-Vision-Goals, pioneering infrastructures, well-planned and tested pastoral and formation programs—this Journey in Faith has now become part of ROLP’s evolving rich and dynamic history.</p>
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
