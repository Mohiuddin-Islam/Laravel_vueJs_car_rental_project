<template>

    <Header></Header>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
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
                <h1 class="wow fadeInUp" data-wow-delay=".5s">Single Car</h1>
            </div>
        </div>
    </div>

    <!-- Car Details Section Start -->
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="car-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="car-details-items">
                            <div class="car-image">
                                <img src="assets/img/car/car-details.webp" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h3>Hyundai Accent Limited</h3>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <p class="mt-4 mb-4">
                                    To deliver on the promise of technology and human We help our clients become sions
                                    of themselves. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. orem ipsum has been the industry’s standard dummy text ever since the
                                    1500s.
                                </p>
                                <div class="icon-details-area">
                                    <h4>Key Features</h4>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>body:</h6>
                                                <p>Sedan</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Mileage:</h6>
                                                <p>70.000 (Mi)</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Year:</h6>
                                                <p>2024</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Engine:</h6>
                                                <p>2500 cc</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/door.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Passengers:</h6>
                                                <p>6 Seats</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/seat.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Gear:</h6>
                                                <p>Automatic</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/automatic.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Gear:</h6>
                                                <p>Automatic</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/petrol.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Fuel:</h6>
                                                <p>Petrol</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="car-booking-items">
                            <div class="booking-header">
                                <h3>Request for Booking</h3>
                                <p>Send your requirement to us. We will check email and contact you soon.</p>
                            </div>
                            <form @submit.prevent="handelSubmit" id="contact-form" method="POST"
                                enctype="multipart/form-data" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label class="label-text">CarList</label>
                                            <div class="category-oneadjust">
                                                <select name="carlist" class="form-control" v-model="data.carlist">
                                                    <option value="" class="option selected">Choose Car</option>
                                                    <option v-for="car in carlists" :key="car.id" :value="car.id">
                                                        {{ car.brand }} - {{ car.model }}
                                                    </option>
                                                </select>
                                                <span class="text-red-600">{{ errors.carlist }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label class="label-text">Driver</label>
                                            <div class="category-oneadjust">
                                                <select name="driver" class="form-control" v-model="data.driver">
                                                    <option value="" class="option selected">Choose Driver</option>
                                                    <option v-for="driver in drivers" :key="driver.id"
                                                        :value="driver.id">
                                                        {{ driver.name }}
                                                    </option>
                                                </select>
                                                <span class="text-red-600">{{ errors.driver }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label for="pick_up_date" class="label-text">Pick-up Date</label>
                                            <input type="date" id="pick_up_date" name="pick_up_date" v-model="data.pick_up_date"
                                                class="form-control">
                                                <span class="text-red-600">{{ errors.pick_up_date }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label for="drop_off_date" class="label-text">Drop-off Date</label>
                                            <input type="date" id="drop_off_date" name="drop_off_date" v-model="data.drop_off_date"
                                                class="form-control">
                                                <span class="text-red-600">{{ errors.drop_off_date}}</span>
                                                <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="theme-btn" type="submit">Book Now</button>
                                    </div>
                                </div>

                            </form>

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
import { ref } from 'vue';

const { props } = usePage();
const { flash } = props;
const { carlists, drivers } = usePage().props;

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

const data = ref({
    carlist: "",
    driver: "",
    pick_up_date: "",
    drop_off_date: "",
});

const errors = ref({});

function setData(field, value) {
    data.value[field] = value;
}

function post(route, options) {
    // Handle form submission here
    // For example, send the data to the backend and handle the response
    // Reset the form after successful submission
    console.log("Form submitted:", data.value);
    if (options.onSuccess) {
        options.onSuccess();
    }
}

function reset() {
    data.value = {
        carlist: "",
        driver: "",
        pick_up_date: "",
        drop_off_date: "",
    };
    errors.value = {};
}

function handelSubmit(e) {
    e.preventDefault();
    post("book.store", {
        onSuccess: () => reset(),
    });
}
</script>

<style scoped>
/* Add your component-specific styles here */
</style>