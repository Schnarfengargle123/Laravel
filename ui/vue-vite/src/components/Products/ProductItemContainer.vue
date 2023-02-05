<script setup>
import { ref } from "vue";
import ProductItemCard from "./ProductItemCard.vue";

let allProducts = ref([]);

let moreProducts = [
    {
        availability: 2,
        brand: "Paco Rabanne",
        concentration: "Eau de Toilette",
        created_at: null,
        gender: "Men",
        id: 2,
        name: "Invictus",
        price: "39.99",
        size: "50ml",
        updated_at: null,
    },
];

fetch("http://127.0.0.1:8000/api/products")
    .then((res) => res.json())
    .then((data) => (allProducts.value = data))
    .then(() => console.log(allProducts.value))
    .catch((err) => console.log(err));

// fetch("http://127.0.0.1:8000/api/products")
//     .then((res) => res.json())
//     .then((data) => console.log(data))
//     .catch((err) => console.log(err));
</script>

// fetch("http://127.0.0.1:8000/api/auth", { // method: "POST", // headers: { //
Accept: "application/json", // "Content-Type": "application/json", // }, //
body: JSON.stringify({ email, password, username }), // }) // .then((res) => {
// const loggedInUser = res.json(); // console.log(loggedInUser); //
console.log("You just registered, Yay!"); // }) // .catch((err) =>
console.log(err));

<template>
    <h2>Product Item Container</h2>

    <li v-if="allProducts" v-for="product in allProducts">
        <ProductItemCard
            :product="product"
            :key="product.id"
            :index="index"
            :brand="product.brand"
            :name="product.name"
            :category="product.category"
            :gender="product.gender"
            :price="product.price"
        />
    </li>
</template>
