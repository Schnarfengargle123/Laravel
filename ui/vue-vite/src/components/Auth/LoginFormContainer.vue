<script setup>
import LoginFormInput from "./LoginFormInput.vue";

let isRegistered = false;

const login = (event) => {
    event.preventDefault();
    console.log("You just logged in, Yay!");
};

const register = (event) => {
    event.preventDefault();
    console.log("You just registered, Yay!");
};
</script>

<template>
    <div class="h-screen">
        <form class="w-3/5 h-4/5 bg-slate-400">
            <h1>Login Form</h1>

            <LoginFormInput
                label="Email"
                type="email"
                placeholder="user@email.com"
            />

            <LoginFormInput
                label="Password"
                type="password"
                placeholder="••••••••••••"
            />

            <LoginFormInput
                v-show="!isRegistered"
                label="Confirm Password"
                type="password"
                placeholder="••••••••••••"
            />

            <LoginFormInput
                v-show="!isRegistered"
                label="Username"
                type="text"
                placeholder="username1"
            />

            <button @click="login($event)" v-show="isRegistered">Login</button>

            <button @click="(event) => register(event)" v-show="!isRegistered">
                Register
            </button>
        </form>
    </div>
</template>
