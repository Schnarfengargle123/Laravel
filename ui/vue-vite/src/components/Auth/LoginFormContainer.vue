<script setup>
import { ref } from "vue";
import LoginFormInput from "./LoginFormInput.vue";

let isRegistered = false;

const emailInput = ref("");
const passwordInput = ref("");
const confirmPasswordInput = ref("");
const usernameInput = ref("");

const login = (event) => {
    // const email = $refs.email.value;
    // const password = $refs.password.value;

    const user = { email };

    console.log(email);

    event.preventDefault();

    // fetch("http://127.0.0.1:8000/api/auth", {
    //     method: "POST",
    //     headers: {
    //         Accept: "application/json",
    //         "Content-Type": "application/json",
    //     },
    //     body: JSON.stringify({ email, password }),
    // })
    //     .then((res) => {
    //         const loggedInUser = res.json();
    //         console.log(loggedInUser);
    //         console.log("You just logged in, Yay!");
    //     })
    //     .catch((err) => console.log(err));
};

const register = (event) => {
    event.preventDefault();

    const email = emailInput.value;
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    const username = usernameInput.value;

    const user = { email, username };

    // console.log(user);

    console.log(email);
    console.log(password);
    console.log(confirmPassword);
    console.log(username);

    if (confirmPassword === password) {
        fetch("http://127.0.0.1:8000/api/auth", {
            method: "POST",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ email, password, username }),
        })
            .then((res) => {
                const loggedInUser = res.json();
                console.log(loggedInUser);
                console.log("You just registered, Yay!");
            })
            .catch((err) => console.log(err));
    } else {
        console.log('Confirm password does not match password');
    }
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
                v-model="emailInput"
            />

            <!-- {{ emailInput }} -->

            <LoginFormInput
                label="Password"
                type="password"
                placeholder="••••••••••••"
                v-model="passwordInput"
            />

            <!-- {{ passwordInput }} -->

            <LoginFormInput
                v-show="!isRegistered"
                label="Confirm Password"
                type="password"
                placeholder="••••••••••••"
                v-model="confirmPasswordInput"
            />

            <!-- {{ confirmPasswordInput }} -->

            <LoginFormInput
                v-show="!isRegistered"
                label="Username"
                type="text"
                placeholder="username1"
                v-model="usernameInput"
            />

            <!-- {{ usernameInput }} -->

            <button @click="login($event)" v-show="isRegistered">Login</button>

            <button @click="(event) => register(event)" v-show="!isRegistered">
                Register
            </button>
        </form>
    </div>
</template>
