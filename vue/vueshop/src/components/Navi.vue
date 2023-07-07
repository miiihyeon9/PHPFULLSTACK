<template>

        <!-- 네비 bar -->
    <nav class="nav">
        <a href="#" v-for=" item in navList" :key="item">{{ item }}</a>
        
        <a href="#">{{ product1 }}</a>
    </nav>

</template>
<script>
export default {
    name:'Navi',
    props: {
        // 부모에서 받아온 이름 : 데이터타입
        product1: String,
        navList: Array,
        num:setInterval,
    }
}
</script>
<style >
    
</style>