<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->

  <!-- 네비 bar -->
  <!-- <nav class="nav">
      <a href="#" >홈</a>
      <a href="#" >상품</a>
      <a href="#" >기타</a>
    </nav> -->
  <!-- :product1은 자식쪽에서 사용할 거  -->
  <Navi :product1="product1" :navList="navList"></Navi>

  <!-- 모달 => 상품이름을 클릭했을 때 상품의 상세 정보 출력-->
  <!-- <div class="bg_black" v-if="modalFlg">
      <div class="bg_white">
        <button @click="modalFlg=false">취소</button>
        <img :src="products[num].image">
        <h4>{{products[num].name}}</h4>
        <p>{{products[num].content}}</p>
        <p>{{products[num].price}}</p>
        <p >{{ products[num].price * products[num].count }}원</p> -->
  <!-- <p>{{ productPrice }}원</p> -->
  <!-- <button type="button" class="countBtn" @click="plus(num)" v-if="products[num].count < 10">수량 증가</button>
        <button type="button" class="countBtn"  v-else>수량 증가</button>
        <button type="button" class="countBtn" @click="minus(num)" v-if="products[num].count > 1" >수량 감소</button>
        <button type="button" class="countBtn" v-else >수량 감소</button>
        <span>{{ products[num].count }}</span>
      </div>
    </div> -->
  <Modal :methods="methods" :modalFlg="modalFlg" :num="num" @closeModal="modalFlg = false" @plus="plus(num)" @minus="minus(num)" :products="products"></Modal>

  <ProductList :product="product" v-for="(product, i ) in products" :key="i"   @openModal="openModal(i)"></ProductList>
 
  <!-- <div>
      <h4>{{ product1 }}</h4>
      <p>{{ price1 }}원</p>
    </div>
    <div>
       속성 앞에 :을 사용하면 vue를 사용하겠다. 
      <h4 :style="styleR">{{ product2 }}</h4>
      <p>{{ price2 }}원</p>
    </div> -->
  <!-- if문 -->
  <!-- <p v-if="'1' === '1'">if문 테스트 </p> -->
</template>

<script>
import data from "./assets/js/data.js";

import Navi from "./components/Navi.vue";

import ProductList from "./components/ProductList.vue";

import Modal from "./components/Modal.vue";

export default {
  name: "App",
  data() {
    // 데이터 바인딩 => 값을 세팅하고 세팅된 걸 html에서 사용 가능
    return {
      navList: ["홈", "상품", "기타"],
      products: data,
      modalFlg: false,
      num: 0,
      product1: "양말",
      // productPrice : 0
    };
  },
  // 함수를 설정하는 영역
  methods: {
    // plus(i) {
    //   this.products[i].count++;
    plus(i) {
      this.products[i].count++;
      // this.productPrice = this.products[i].price * this.products[i].count;
    },
    minus(i) {
      this.products[i].count--;
      // this.productPrice = this.products[i].price * this.products[i].count;
    },
    openModal(i) {
      this.modalFlg = !this.modalFlg;
      this.num = i;
    },
  },
  components: {
    // 해당 컴포넌트 정의
    // App 안에서 사용할 이름 : import할 파일 이름
    // Navi:
    // (두개가 동일할 경우 밑의 경우처럼 사용 가능)
    Navi,
    ProductList,
    Modal,
  },
};
</script>

<style>
@import url("./assets/css/app.css");
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
/* .nav{
  background-color: #2c3e50;
  padding:15px;
  border-radius:5px;
}
.nav a{
  color:white;
  padding:10px;
}  */
</style>
