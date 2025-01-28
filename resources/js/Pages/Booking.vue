<template>
    <Header />
    <div>
        <!-- Breadcrumb Section -->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li>Cars</li>
                    </ul>
                    <h1>Booking A Car</h1>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        <div v-if="flash.msg" class="alert alert-success">
            {{ flash.msg }}
        </div>

        <div v-if="flash.errorMsg" class="alert alert-danger">
            {{ flash.errorMsg }}
        </div>

        <!-- Car Details Section -->
        <section class="car-details section-padding">
            <div class="container">
                <div class="car-details-wrapper">
                    <div class="row g-5">
                        <div v-if="carlists.length > 0" class="col-lg-12">
                            <!-- Booking Form -->
                            <div class="car-booking-items">
                                <div class="booking-header">
                                    <h3>Request for Booking</h3>
                                    <p>Send your requirement to us. We will check your request and contact you soon.</p>
                                </div>
                                <!-- Success and Error Alerts -->
                                <div v-if="msg" class="alert alert-success">{{ msg }}</div>
                                <div v-if="errorMsg" class="alert alert-danger">{{ errorMsg }}</div>
                                <form @submit.prevent="submitBooking" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Car List</label>
                                                <select v-model="form.carlist" class="form-control">
                                                    <option value="">Choose Car</option>
                                                    <option v-for="car in carlists" :key="car.id" :value="car.id">
                                                        {{ car.brand }} -> {{ car.model }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Driver</label>
                                                <select v-model="form.driver" class="form-control">
                                                    <option value="">Choose Driver</option>
                                                    <option v-for="driver in drivers" :key="driver.id" :value="driver.id">
                                                        {{ driver.name }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Pick-up Date</label>
                                                <input type="date" v-model="form.pick_up_date" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-clt">
                                                <label class="label-text">Drop-off Date</label>
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
    <Footer/>
</template>

<script setup>
import { reactive, ref, onMounted } from 'vue';
import { useForm, usePage } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

// Scroll to top on page load
onMounted(() => {
    const scrollPath = document.querySelector('.scroll-path');
    if (scrollPath) {
        scrollPath.scrollIntoView({ behavior: 'smooth' });
    } else {
        console.warn('scrollPath is null or undefined.');
    }
});

// Props
defineProps({
    carlists: Array,
    drivers: Array
});

// State and Flash Messages
const { props } = usePage();
const flash = props.flash || {}; // Ensure props.flash is at least an empty object
const msg = ref(flash.msg || ''); // Handle undefined msg
const errorMsg = ref(flash.errorMsg || ''); // Handle undefined errorMsg

// Form Setup
const form = useForm({
    carlist: '',
    driver: '',
    pick_up_date: '',
    drop_off_date: ''
});

// Submit Booking
const submitBooking = () => {
    form.post(route('book.store'), {
        onSuccess: () => {
            console.log('Booking success!');
        },
        onError: (errors) => {
            console.error(errors);
        }
    });
};
</script>

<style scoped>
.alert {
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.alert-success {
    background-color: #25d14d;
    color: white;
}

.alert-danger {
    background-color: #e63030;
    color: white;
}
</style>