<template>
    <Header></Header>
    <div>
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{route('home')}}">
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
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Booking A Car</h1>
                </div>
            </div>
        </div>
        <!-- Car Details Section Start -->
        <section class="car-details fix section-padding">
            <div class="container">
                <div class="car-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-12" v-if="car">

                            <!-- Booking Form -->
                            <div class="car-booking-items">
                                <div class="booking-header">
                                    <h3>Request for Booking</h3>
                                    <p>
                                        Send your requirement to us. We will check email and contact
                                        you soon.
                                    </p>
                                </div>
                                <div v-if="$page.props.flash.msg" class="flash-message">
                                    {{ $page.props.flash.msg}}
                                    </div>

                                <form @submit.prevent="submitBooking" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">CarList</label>
                                                <div class="category-oneadjust">
                                                    <select v-model="form.carlist" class="form-control">
                                                        <option value="">Choose Car</option>
                                                        <option v-for="car in carlists" :key="car.id" :value="car.id">
                                                            {{ car.brand }} -> {{ car.model }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Driver</label>
                                                <div class="category-oneadjust">
                                                    <select v-model="form.driver" class="form-control">
                                                        <option value="">Choose Driver</option>
                                                        <option v-for="driver in drivers" :key="driver.id"
                                                            :value="driver.id">
                                                            {{ driver.name }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label for="pick_up_date" class="label-text">Pick-up Date</label>
                                                <input type="date" v-model="form.pick_up_date" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label for="drop_off_date" class="label-text">Drop-off Date</label>
                                                <input type="date" v-model="form.drop_off_date" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="theme-btn">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <Footer></Footer>
</template>

<script setup>

import { useForm } from "@inertiajs/inertia-vue3";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

// Define props
defineProps({
    car: {
        type: Object,
        default: () => ({
            image: "",
            model: "",
            price_per_day: "",

        }),
    },
    carlists: {
        type: Array,
        default: () => [],
    },
    drivers: {
        type: Array,
        default: () => [],
    },

    user: {
        type: Object,
        default: () => null,
    },
});

// Booking form setup
const form = useForm({
    carlist: "",
    driver: "",
    pick_up_date: "",
    drop_off_date: "",
});


const submitBooking = () => {
    form.post(route('book.store'), {
        onFinish: () => {
            form.reset();
        },
    });
};

</script>

<style scoped>
.flash-message {
    background-color: rgb(82, 194, 82);
    color: white;
    /* Makes the text white for better contrast */
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 10px;
}
</style>