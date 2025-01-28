<template>
    <header class="header-section">
        <div class="header-top-section style-two" v-if="user">
            <div class="container-fluid">
                <div class="header-top-wrapper style-2">
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link"></a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            54 Inner Circular Road, Purana Paltan. Dhaka-Bangladesh
                        </li>
                    </ul>
                    <div class="header-top-right">
                        <ul class="top-list">
                            <li>
                                <!-- <form :action="route('myprofile')" method="get">
                                    <button type="submit" class="btn btn-sm btn-success">My Profile</button>
                                </form> -->

                                <a :href="route('myprofile')" class="btn btn-sm btn-primary" style="color: white;">My Profile</a>
                            </li>
                            <li>
                                <Link href="#" @click.prevent="logout" style="color:rgb(235, 24, 24)">LogOut</Link>
                            </li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-top-section style-two" v-else>
            <div class="container-fluid">
                <div class="header-top-wrapper style-2">
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link"></a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            54 Inner Circular Road, Purana Paltan. Dhaka-Bangladesh
                        </li>
                    </ul>
                    <div class="header-top-right">
                        <ul class="top-list">
                            <li>
                                <Link :href="route('customer.login')" style="color:rgb(27, 184, 27)">Login</Link>
                            </li>
                            <li>
                                <Link :href="route('customer.register')" style="color:rgb(44, 150, 211)">Registration</Link>
                            </li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="header-sticky" class="header-3">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="#" class="header-logo-1">
                                    <img src="assets/img/logo/white-logo-2.svg" alt="logo-img">
                                </a>
                                <a href="#" class="header-logo-2">
                                    <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <Link href="/">Home</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('about')">About</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('carlist')">CarList</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('faq')">FAQ</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('f_contact')">Contact</Link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="icon-items">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Call Anytime</p>
                                    <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                                </div>
                            </div>
                            <a href="#0" class="search-trigger search-icon">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                            <div class="header-button">
                                <Link :href="route('booking')" class="theme-btn">Book a Car</Link>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>


<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { route } from 'ziggy-js';

const { user } = usePage().props;
console.log('User:', user);

const isLoggedIn = computed(() => !!user);

const logout = () => {
    Inertia.post(route('customer.logout'));
};
</script>

<style lang="scss" scoped>

</style>