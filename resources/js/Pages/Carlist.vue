<template>

    <Header />
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/wallpaperflare.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Cars
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Car Style</h1>
                </div>
            </div>
        </div>

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

    <Footer></Footer>
</template>

<script setup>

import { Link, usePage } from '@inertiajs/vue3';
const{ carlists} = usePage().props

import Footer from '@/Components/Footer.vue';
import Header from '@/Components/Header.vue';

</script>

<style scoped>
/* Add your component-specific styles here */
</style>