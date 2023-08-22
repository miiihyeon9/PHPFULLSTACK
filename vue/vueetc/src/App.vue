<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  
    <PostComponent :propsTest="1" ></PostComponent>
  <h1>{{ data.name }}</h1>
  <button @click="data.name = '김김김'">김김김</button>


  <!-- <h1>{{ test }}</h1> -->
  <!-- test의 값이 바뀌지 않음. 렌더링이 안돼서? -->
  <!-- <button @click="test = 'aaa'">김김김</button> -->

  <!-- <h2>{{ data2.name }}</h2>
  <button @click="data2.name = 'data2'">김김김</button> -->

  <!-- <router-link to="/">홈으로</router-link>
  <router-link to="/post">Post</router-link> -->

  <!-- <router-view :test="222"> -->
    <!-- <router-view >
      <span>222</span>
    </router-view> -->
  <!-- <ContainerComponent v-if="flg"></ContainerComponent>
  <PostComponent v-if="!flg"></PostComponent>
  <button @click="flg = !flg">바꾸기</button> -->
</template>

<script>
// import ContainerComponent from './components/ContainerComponent.vue';
// import PostComponent from './components/PostComponent.vue';
// route :외부에서 연결을 할때 이어주는 통로
// import { ref,reactive } from 'vue';
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';


export default {
  name: 'App',
  setup(){
    //compositon api는 무조건 reference(ref) 안에 작성해야함.
    //ref 는 모든 형태를 데이터바인딩해줌
    let data = ref({
          name: '홍길동',
          age: 20
        });
    
    // '객체'형태만 데이터바인딩이 됨. 잘 사용 하지 않음
    let data2 = reactive({
      name: '짱구',
          age: 5,
    });

    // let test = 'bbb';
    
    // lifecicyle의 beforecreate와 created는 setup()


    // onMounted(()=>{
    // })
    // composition은 항상 return해주어야함.
    // return { test, data ,data2 };
    // return { test, data };
    return { data ,data2 };

  },
  components:{
    PostComponent,
  }

  // data(){
  //   return {
  //     flg : true,
  //   }
  // },
  // components: {
  //   ContainerComponent,
  //   PostComponent,
  // }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
