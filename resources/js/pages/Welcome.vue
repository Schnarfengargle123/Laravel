<template>
  <h1 class="bg-orange-500">{{title}}</h1>
  <router-link to="/auth">Login</router-link>
</template>

<script>
  export default {
    setup: () => ({
      title: "Laravel Monolith with Webpack & Vue"
    })
  }
</script>