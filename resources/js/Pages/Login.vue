<template>
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card p-3">
                                <div class="card-body">
                                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                        <div class="mb-4 p-0 text-center">
                                            <a href="index.html" class="auth-logo">
                                                <img src="assets/images/black-logo.svg" alt="logo-dark" class="mx-auto"
                                                    height="28" />
                                            </a>
                                        </div>

                                        <div class="auth-title-section mb-3 text-center">
                                            <h3 class="text-dark fs-20 fw-medium mb-2">
                                                Welcome back
                                            </h3>
                                            <p class="text-dark text-capitalize fs-14 mb-0">
                                                Customer Registration Form
                                            </p>
                                        </div>

                                        <div class="row">
                                            <div class="col-6 mt-2">
                                                <a
                                                    class="btn text-dark border fw-normal d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 48 48" class="me-2">
                                                        <path fill="#ffc107"
                                                            d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917" />
                                                        <path fill="#ff3d00"
                                                            d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691" />
                                                        <path fill="#4caf50"
                                                            d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44" />
                                                        <path fill="#1976d2"
                                                            d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917" />
                                                    </svg>
                                                    <span>Google</span>
                                                </a>
                                            </div>

                                            <div class="col-6 mt-2">
                                                <a
                                                    class="btn text-dark border fw-normal d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 256 256" class="me-2">
                                                        <path fill="#1877f2"
                                                            d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                                        <path fill="#fff"
                                                            d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z" />
                                                    </svg>
                                                    <span>Facebook</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="saprator my-4">
                                            <span>or continue with email</span>
                                        </div>

                                        <div class="pt-0">
                                            <form @submit.prevent="submit" enctype="multipart/form-data">

                                                <div class="form-group mb-3">
                                                    <label for="emailaddress" class="form-label">Email Address</label>
                                                    <input v-model="form.email" class="form-control" type="email"
                                                        id="emailaddress" placeholder="Enter your Email">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input v-model="form.password" class="form-control" type="password"
                                                        id="password" placeholder="Enter your Password">
                                                </div>


                                                <div class="form-group d-flex mb-3">
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input v-model="form.agree" type="checkbox"
                                                                class="form-check-input" id="checkbox-signin">
                                                            <label class="form-check-label" for="checkbox-signin">
                                                                I agree to the <a href="#"
                                                                    class="text-primary fw-medium">Terms and
                                                                    Conditions</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit">Login</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form><br>

                                            <div class="text-center text-muted mb-4">
                                                <p class="mb-0">Don't have an account ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='/customer/register'>Sign up</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <div class="auth-image">
                                <img src="assets/images/auth-images.svg" class="mx-auto img-fluid" alt="images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({

    email: "",
    password: "",

});

const errors = ref({});

const submit = () => {
    form.post(route("customer.login"), {
        onError: (error) => {
            errors.value = error;
        },
    });
};

</script>

<style lang="scss" scoped></style>
