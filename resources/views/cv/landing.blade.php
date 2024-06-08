<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @include('cv.partials.css')

</head>

<body data-bs-spy="scroll" data-offset="70">

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="preloader__wrapper">
                    <div class="preloader__circle">
                        <div class="preloader__circle-line preloader__circle-line--1"></div>
                        <div class="preloader__circle-line preloader__circle-line--2"></div>
                        <div class="preloader__circle-line preloader__circle-line--3"></div>
                        <div class="preloader__circle-line preloader__circle-line--4"></div>
                        <div class="preloader__circle-line preloader__circle-line--5"></div>
                        <div class="preloader__circle-line preloader__circle-line--6"></div>
                        <div class="preloader__circle-line preloader__circle-line--7"></div>
                        <div class="preloader__circle-line preloader__circle-line--8"></div>
                        <div class="preloader__circle-line preloader__circle-line--9"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('cv.partials.navbar')


    {{-- @include('cv.partials.demos') --}}


    <div class="main-area">
        <div class="main-left-img">
            <img src="{{ asset('landing/img/banner/banner-main1.jpg') }}" alt="Image">
        </div>
        <div class="main-content">
            <x-landing.home />
            <x-landing.about />
            <x-landing.area />
            <x-landing.experience-area />
            <x-landing.portfolio />
            <x-landing.awards />
            <x-landing.blog />
            <x-landing.review />
            <x-landing.contact />
            <x-landing.footer />
        </div>
    </div>


    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>

    @include('cv.partials.js')


</body>

<!-- Mirrored from templates.hibootstrap.com/pufo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 14:46:45 GMT -->

</html>
