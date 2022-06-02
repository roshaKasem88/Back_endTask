<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <router-link class="navbar-brand" to="/">Adertising Compaign</router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link class="nav-link" href="/post/create">Create Post </router-link>
      </li>
     
     
    
    </ul>
  </div>
</nav>
</template>
<script>
export default
{
    name:"navBar"
}

</script>
<style scoped>
</style>

