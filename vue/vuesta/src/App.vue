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
      <!-- dispatch()는 actions의 method를 사용할 때 사용
            commit()은 mutations의 method를 사용할 때 사용-->
      <li class="header-button header-button-right" @click="$store.dispatch('writeContent'); " v-if="$store.state.tabFlg == 2">작성</li>

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
                                                                        <!-- @change => input의 값이 변했을 때 실행-->
      <input accept="image/*" type="file" id="file" class="input-file" @change="updateImg"   >

    </div>
  </div>
</template>

<script>
import ContainerComponent from "./components/ContainerComponent.vue";


export default {
  name: 'App',
  // 초기 데이터를 불러올 때에 created에 해야 효율이 좋음
  // beforemount나 mounted에 할 경우 업데이트될 수 있기 때문에 효율이 created보다 떨어짐
  created(){
    // store.js의 actions에 접근
    this.$store.dispatch('getMainList');
  },
  methods : {
    // e : js에서 자동으로 이벤트가 발동했을 때 해당 태그의 정보를 e에 담아줌 
    updateImg(e){
      // e.target => input
      let file = e.target.files;
      // console.log(e.target);
      // console.log(e.target.value);
      // console.log(file[0]);
      let imgUrl = URL.createObjectURL(file[0]);
      // file의 0번방에 있는 파일을 url화 해줌
      this.$store.commit('changeImgUrl',imgUrl);
      this.$store.commit('changeTabFlg',1);
      this.$store.commit('changePostImg',file[0]);  //
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
