<title>Home | Online Digital Learning</title>

<body>
    <nav>
        @include('Frontend/includes/header')
    </nav>

    <br><br><br><br>
    <p style="font-size:40px; color:white; margin-left:10px; border-bottom: 2px solid white; margin-bottom: 20px;">
        Online Digital Learning</p>

    <div class="slider">
        <div class="banner">
            <img src="{{asset('images/banner.png')}}" alt="">
        </div>
        <div class="banner-box">
            <div class="headings-home">
                <strong>Admissions are Open.</strong>
            </div>
            <div class="info-home">
                <p>Fiver Freelancing complete course available. Register Yourself Now.</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="slider-items">

            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
            <div class="info-home">
                <button id="see-details" class="show-details" onclick="showDetals()">See Details</button>
            </div>
        </div>

        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>


        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
        <div class="slider-items">
            <div class="headings-home">
                <strong>Admissions are Open!</strong>
            </div>
            <div class="info-home">
                <p>Admissions for December Batch are open Now!</p>
                <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <br>

    <!-- showing dialogue box popup -->
    <div id="show-details" onclick="closeDetals()">
        <img src="{{asset('backend/img/course/2120853414.jpg')}}" alt="" class="popup-img">
    </div>


    <footer>
        @include('Frontend/includes/footer')
    </footer>
</body>
</html>