<script setup>
import { RouterLink, RouterView } from 'vue-router';
</script>

<template>
  <header>

    <div class="wrapper">
      <h1 class="text-3xl font-bold underline">Shop</h1>

      <nav>
        <RouterLink to="/auth">Login</RouterLink>
        <RouterLink to="/products">Products</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>
