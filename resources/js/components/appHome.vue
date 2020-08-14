<template>
    <div>
        <toolBar></toolBar>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>
</template>
<script>
import toolBar from './toolBar'
import appFooter from './footer'
    export default{
        components:{toolBar,appFooter}
    }
</script>
<style>

</style>
