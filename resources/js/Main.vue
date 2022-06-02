<template>
<div>
<NavBar></NavBar>
]<router-view></router-view>

</div>
</template>
<script>
import navBar from './components/navBar'
export default
{
    name:"Main",
    component:{
        navBar
    }
}


</script>