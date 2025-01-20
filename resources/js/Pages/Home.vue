
<template>

<Header></Header>

<!-- Hero Section Start -->
<section class="hero-section hero-3 fix">
            <div class="array-button">
                <button class="image-array-left bg-cover" style="background-image: url('assets/img/');">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="image-array-right bg-cover" style="background-image: url('assets/img/');">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <h6 class="search-text">Search Any Car</h6>
            <div class="line-icon">
                <img src="assets/img/hero/icon.png" alt="img">
            </div>
            <div class="swiper hero-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/bgc.jpg');">
                            <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                                <img src="assets/img/hero/line-shape-1.png" alt="shape-img">
                            </div>
                            <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                                <img src="assets/img/hero/line-shape-2.png" alt="shape-img">
                            </div>
                        </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                    <div class="hero-content">
                                            <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Welcome to remons rentals
                                            </h4>
                                            <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Save big <br>
                                                with car rental
                                            </h1>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/slider1.png');">
                            <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                                <img src="assets/img/hero/line-shape-1.png" alt="shape-img">
                            </div>
                            <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                                <img src="assets/img/hero/line-shape-2.png" alt="shape-img">
                            </div>
                        </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                    <div class="hero-content">
                                            <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Welcome to remons rentals
                                            </h4>
                                            <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Save big <br>
                                                with car rental
                                            </h1>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
 <!-- Search Booking Section Start -->
 <section class="search-booking-section section-padding">
        <div class="container">
            <div class="search-booking-wrapper">
                <div class="booking-man float-bob-x">
                    <img src="assets/img/booking-man.webp" alt="img">
                </div>
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="search-booking-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Search Book & <br>
                                    Rent Vehicle Easily
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                Automotive companies have a unique opportunity to leverage social media for storytelling, showcasing innovation, and building a passionate community of enthusiasts and customers. The dynamic and visually driven nature of the automotive industry makes it a perfect fit for engaging content on social media. Here are bespoke social media tips for automotive companies, enriched with creative social media ideas designed to turbocharge your brand’s online presence.
                            </p>
                            <div class="icon-area">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                                    </div>
                                    <h4>
                                        Easier & <br>
                                        Faster Bookings
                                    </h4>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="assets/img/feature-benefit/icon-2.png" alt="icon-img">
                                    </div>
                                    <h4>
                                        Too Many <br>
                                        Pickup Locations
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="product-search-area">
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pickup Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="form-control">
                                                    <option value="1">
                                                        Broklyn Street
                                                    </option>
                                                    <option value="1">
                                                        Houston
                                                    </option>
                                                    <option value="1">
                                                        Texas
                                                    </option>
                                                    <option value="1">
                                                        New York
                                                    </option>
                                                    <option value="1">
                                                        Other Location
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pick-up Date</label>
                                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Drop-off Date</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Car Type</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="form-control">
                                                    <option value="1">
                                                        cars
                                                    </option>
                                                    <option value="1">
                                                        sedan
                                                    </option>
                                                    <option value="1">
                                                        sports
                                                    </option>
                                                    <option value="1">
                                                        jeep
                                                    </option>
                                                    <option value="1">
                                                        limousine
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <button type="submit" class="theme-btn">
                                                Find a Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
            <div class="container">
                <div class="section-title text-center">
                    <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Cars We’re Offering <br>
                        for Rentals
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s" v-for="carlist in carlists" :key="carlist.id">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img :src="carlist.image" alt="carlist.img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    {{carlist.model}}
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">{{carlist.brand}} {{carlist.engine}}</a></h4>
                                <h6>{{carlist.price_per_day}}<span>/ Day</span></h6>
                                <h6>{{carlist.status}}</h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <Link :href="route('booking')" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></Link>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <!-- Gallery Section Start -->
    <div class="gallery-section-2 fix">
        <div class="gallery-wrapper">
            <div class="row g-4">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6">
                            <div class="gallery-image">
                                <img src="assets/img/gallery/g-10.webp" alt="img">
                                <div class="icon-box">
                                    <a href="assets/img/gallery/g-10.webp" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="assets/img/gallery/g-11.webp" alt="img">
                                        <div class="icon-box">
                                            <a href="assets/img/gallery/g-webp" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="assets/img/gallery/g-12.webp" alt="img">
                                        <div class="icon-box">
                                            <a href="assets/img/gallery/g-12.webp"
                                                class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-5 col-md-6">
                    <div class="gallery-image style-width">
                        <img src="assets/img/gallery/g-13.webp" alt="img">
                        <div class="icon-box">
                            <a href="assets/img/gallery/g-13.webp" class="icon img-popup-2">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="mask"></div>
                        <div class="mask-second"></div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                    <div class="gallery-content">
                        <div class="icon">
                            <img src="assets/img/gallery/icon.png" alt="img">
                        </div>
                        <h2>
                            Trusted & Reliable
                            Car Rentals <br>
                            Gallery
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<Footer></Footer>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const{ carlists} = usePage().props

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

</script>

<style scoped>
/* Add your component-specific styles here */
</style>