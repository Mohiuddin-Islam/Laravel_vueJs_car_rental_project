<template>
    <div :style="backgroundStyle">
        <Header />
        <div class="container my-4">
            <form @submit.prevent="submit" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="username" class="form-label">UserName</label>
                    <input v-model="form.name" class="form-control" type="text" id="username"
                        placeholder="Enter your Username">
                </div>
                <div class="form-group mb-3">
                    <label for="emailaddress" class="form-label">Email Address</label>
                    <input v-model="form.email" class="form-control" type="email" id="emailaddress"
                        placeholder="Enter your Email">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input v-model="form.password" class="form-control" type="password" id="password"
                        placeholder="Enter your Password">
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input v-model="form.password_confirmation" class="form-control" type="password" id="new-password"
                        placeholder="Enter Confirm Password">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input v-model="form.phone" class="form-control" type="text" id="phone"
                        placeholder="Enter Phone Number">
                </div>
                <div class="form-group d-flex mb-3">
                    <div class="col-12">
                        <div class="form-check">
                            <input v-model="form.agree" type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">
                                I agree to the <a href="#" class="text-primary fw-medium">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 row">
                    <div class="col-12">
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <Footer />
    </div>
</template>

<script setup>
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("customer.register"));
};

const backgroundStyle = {
    backgroundImage: url("images/hero/bg4.jpg"),
    backgroundPosition: 'center',
    backgroundSize: 'cover',
};
</script>

<style scoped>
/* Add any custom styles here */
</style>