<template >
    <!-- v-for="(product, i ) in products" :key="i" -->
    
    <div class="post"  v-for="item, in $store.state.boardData " :key="item" >
        <div class="post-img" :style="{ backgroundImage : `url('${item.img}')`}">
        </div>
        <div class="post-content">
            <p> {{item.likes}} 좋아요</p>
            <p><strong>{{item.name}}</strong>{{item.content}}</p>
            <p>2023-07-11</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'PostComponent',
}
</script>
<style>
</style>