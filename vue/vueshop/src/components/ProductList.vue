<template >
    <!-- <div>dllddlld</div> -->
    <!-- 상품 리스트 -->
    <div class="products"  >
      <div >
        <!-- <img alt="perfume" :src=require(`@/assets/{{item.image}}`)> -->
        <img alt="perfume" :src="product.image">
        <!-- <img alt="perfume" :src={{item.image}}> -->
        <!-- <h4 v-for="name in products" :key="name">{{ name }}</h4>-->
        <h4 @click="$emit('openModal')">{{ product.name }}</h4>
        <p >{{ product.price }}원</p>
        <p>{{ product.count }}개</p>
        <!-- <button type="button" class="countBtn" @click="item.count++" >수량 증가</button><span>{{ item.count }}</span> -->
        
        <!-- <span>{{ item.count }}</span> -->
        <!-- <div class="bg_black" v-if="modalFlg" >
          <div class="bg_white" >
            <button @click="modal()">취소</button>
            <img src="./assets/perfume1.jpg">
            <h4>{{item.name}}</h4>
            <p>설명</p>
            <p>{{item.price}}</p>
          </div>
        </div> -->
      </div>
    </div>
</template>
<script>


export default {
    name: 'ProductList',
    props: {
        // 부모에서 받아온 이름 : 데이터타입
        product: Object,
        // methods: Object,
        modalFlg:Boolean,
    }
    
  }


</script>
<style >
    
</style>