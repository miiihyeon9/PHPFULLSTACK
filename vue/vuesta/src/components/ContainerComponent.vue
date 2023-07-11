<template >
<!-- {{ $store.state.boardData  }} -->
<!-- :product="product" v-for="(product, i ) in products" :key="i"  -->
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0 ">
        <PostComponent></PostComponent>
    </div>
    <!-- <PostComponent :item="item" v-for="(item,i) in $store.state.boardData " :key="i" ></PostComponent> -->
    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1 ">
        <div class="upload-img " :class="$store.state.filterName" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div class="filter-box">
            <div class="filter" :class="item" v-for="item in filterList" :key="item" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}" @click="uploadFilter(item)" >
                <span>{{ item }}</span>
            </div>

        </div>
    </div>
    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg == 2 ">
        <div class="upload-img" :class="$store.state.filterName" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div >
            <textarea name="content" class="write-box" id="content" placeholder="글을 작성하세요."></textarea>
        </div>

    </div>
</template>
<script>
import PostComponent from './PostComponent.vue'


export default {
    name:'ContainerComponent',    
    data(){
        return {
            filterList : [ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"],
        }
    },
    methods:{
        uploadFilter(filter){
                this.$store.commit('filterName',filter);
        },
        // changeImg(){
        //     this.$store.commit('changeImg');
        // },
    },
    components : {
        PostComponent,
    }
}
</script>
<style >
    
</style>