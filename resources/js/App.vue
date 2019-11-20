<template>
    <div class="app">
        <nav></nav>
        <router-link to="/">Home</router-link> 
        <router-link to="/Contact">Contact</router-link> 
        <router-view></router-view>
        <footer></footer>
    </div>
</template>

<script>
export default {
    name: 'app'
}
</script>