<template>
    <Header></Header>
    <div>
        <!-- Car Details Section Start -->
        <section class="car-details fix section-padding">
            <div class="container">
                <div class="car-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-12" v-if="car">
                            <div class="car-details-items">
                                <div class="car-image">
                                    <img :src="car.image" alt="Car Image" />
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
                                    <h3>{{ car.model }}</h3>
                                    <h6>${{ car.price_per_day }} <span>/ Day</span></h6>
                                    <p class="mt-4 mb-4">{{ car.description }}</p>
                                    <div class="icon-details-area">
                                        <h4>Key Features</h4>
                                        <div class="icon-details-main-items">
                                            <div class="icon-items" v-for="feature in car.features" :key="feature.id">
                                                <div class="icon">
                                                    <img :src="feature.icon" alt="Feature Icon" />
                                                </div>
                                                <div class="content">
                                                    <h6>{{ feature.name }}:</h6>
                                                    <p>{{ feature.value }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Booking Form -->
                            <div class="car-booking-items">
                                <div class="booking-header">
                                    <h3>Request for Booking</h3>
                                    <p>
                                        Send your requirement to us. We will check email and contact
                                        you soon.
                                    </p>
                                </div>
                                <form @submit.prevent="submitBooking" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Car List</label>
                                                <div class="category-oneadjust">
                                                    <select v-model="form.carlist" class="form-control">
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
                                                    <select v-model="form.driver" class="form-control">Choose Driver
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
                        <div v-else>
                            <p>Car details not available. Please select a valid car.</p>
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
import { ref } from "vue";
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
            description: "",
            features: [],
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
    if (!user) {
        alert("Please login first.");
        return;
    }

    form.post(route("book.store"), {
        onFinish: () => {
            if (form.errors.carlist) {
                alert("This car is already booked for the selected dates. Please choose another date.");
            } else if (form.errors.auth) {
                alert("Please login first.");
            } else {
                alert("Booking successfully created!");
            }
    },
    });
};
</script>

<style scoped>
/* Add your custom styles here */
</style>