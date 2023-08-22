<template lang="">
    <div>
        <h1>PostComponent.vue</h1>
        <!-- <p>{{ test }}</p> -->
        <p>{{ propsTest }}</p>
    </div>
    <div>
        <!-- slot => html요소 자체를 보냄 -->
        <slot></slot>
    </div>
</template>
<script>
import { toRefs,ref } from 'vue';

export default {
    name:'PostComponent',
    props:{
        propsTest: Number ,
    },
    setup(props){
        let data = ref([]);
        let { propsTest } = toRefs(props);
        console.log(propsTest.value);


        
        return { data };
    }
}
</script>
<style lang="">
    
</style>