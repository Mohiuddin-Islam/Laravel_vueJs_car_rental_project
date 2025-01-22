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
                                <form :action="route('myprofile')" method="get">
                                    <button type="submit" class="btn btn-sm btn-success">My Profile</button>
                                </form>
                            </li>
                            <li>
                                <!-- <form :action="route('customer.logout')" method="post">
                                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" style="color:rgb(235, 24, 24)">LogOut</a>
                                </form> -->
                                <Link :href="route('customer.logout')">Logout</Link>
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

        
    </header>
</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

// Log the user prop to the console to verify it's being received correctly
const { user } = usePage().props;
console.log('User:', user);

// Create a computed property to check if the user is logged in
const isLoggedIn = computed(() => !!user);
</script>

<style lang="scss" scoped>

</style>