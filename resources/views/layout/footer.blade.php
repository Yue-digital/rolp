@section('footer')
    <footer class="rolp-footer container-fluid">
        <div class="row footer-row">
            <div class="col-md-5 footer-address">
                <h3>RESURRECTION OF OUR LORD PARISH</h3>
                <p>E. Gaches corner J. Cabarrus Streets,</p>
                <p>BF Homes, Parañaque City 1720, Philippines</p>
            </div>

            <div class="col-md-5 footer-contact">
                <div class="footer-items">
                    <h5>PARISH OFFICE</h5>
                    <p>E. Gaches Street, BF Homes,</p>
                    <p>Parañaque City 1720, Philippines</p>
                    <p>Business Hours: 8:00 a.m. - noon; 2:00 - 6:00 p.m.</p>
                    <p>(Tuesday to Sunday)</p>
                </div>

                <div class="footer-items">
                    <h5>CONTACT US</h5>
                    <p>+63 2 85192281 / 85192282</p>
                    <p>inquiry@rolpbf.org / rolp1972@yahoo.com</p>
                </div>


            </div>
        </div>

        <div class="copy-row row">
            <p>© 2024 RESURRECTION OF OUR LORD PARISH  - All Rights Reserved</p>
            <p>BY Konbini Digital & ROLP SOCCOM</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('/js/lightbox.js')}}"></script>

    <script>
        lightbox.option({
            alwaysShowNavOnTouchDevices: true,
            showImageNumberLabel: false,
            fadeDuration: 300,
            imageFadeDuration: 300,
            resizeDuration: 200,
            wrapAround: true,
            
        })
    </script>
@endsection
