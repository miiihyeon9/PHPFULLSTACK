<template>
  <!-- {{ $store.state.test }} -->
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li class="header-button header-button-left" @click="$store.commit('changeTabFlg',0);$store.commit('clearState')" v-if="$store.state.tabFlg != 0">취소</li>
      <li >
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li class="header-button header-button-right" @click="$store.commit('changeTabFlg',2)" v-if="$store.state.tabFlg != 2">다음</li>
    </ul>
  </div>
  <!-- {{ $store.state.lastId }} -->
  <!-- 컨텐츠 -->
  <ContainerComponent></ContainerComponent>
  <button style="margin:10px;" @click="$store.dispatch('getMoreList')" v-if=" $store.state.addBtnFlg === true && $store.state.tabFlg == 0" >더보기</button>
  <!-- <button style="margin:10px;" >더보기</button> -->

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
                                                                        <!-- mutations 사용할 때는 commit -->
      <input accept="image/*" type="file" id="file" class="input-file" @change="updateImg"   >
    </div>
  </div>
</template>

<script>
import ContainerComponent from "./components/ContainerComponent.vue";


export default {
  name: 'App',
  created(){
    // store.js의 actions에 접근
    this.$store.dispatch('getMainList');
  },
  methods : {
    updateImg(e){
      let file = e.target.files;
      console.log(e.target);
      console.log(e.target.value);
      let imgUrl = URL.createObjectURL(file[0]);
      // file의 0번방에 있는 파일을 url화 해줌
      this.$store.commit('changeImgUrl',imgUrl);
      this.$store.commit('changeTabFlg',1);
      e.target.value = '';
    }
  },
  components: {
    ContainerComponent,
    },
}
</script>

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
