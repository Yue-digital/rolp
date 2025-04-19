<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-12">
            <div class="image-slider-container" style="overflow: hidden;">
                <div class="image-slider">
                    <div class="slide">
                        <img src="{{ asset('assets/img/slider/slide1.jpg') }}" alt="Slide 1" class="img-fluid">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('assets/img/slider/slide2.jpg') }}" alt="Slide 2" class="img-fluid">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('assets/img/slider/slide3.jpg') }}" alt="Slide 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.image-slider-container {
    position: relative;
    width: 100%;
    margin: 0;
    padding: 0;
}

.image-slider {
    width: 100%;
}

.slide {
    position: relative;
    width: 100%;
    height: 500px; /* Adjust height as needed */
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
</style>

<script>
$(document).ready(function(){
    $('.image-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });
});
</script> 