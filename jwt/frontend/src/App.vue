<template>
  <div v-if="vFlg == 0">
    <label for="id">ID</label>
    <input type="text" name="id" id="id">
    <button @click="login()">로그인</button>
  </div>
  <div v-if="vFlg == 1">
    <div v-for="item in list" :key="item">
      {{item}}
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'App',
  data() {
    return {
      token: '',
      list: null,
      vFlg: 0,
    }
  },
  methods: {
    login() {
      let id = document.getElementById('id').value;
      axios.get('http://localhost:8000/api/token?id=', {id: id})
      .then(res=> {
        console.log(res.data);
        this.token = res.data.token;
      })
      .catch( err => {
        if(err.status >= 400){
          console.log(err);
        }

      });
      
      const header = {
        'Authorization' : this.token,
      }
      axios.get('http://localhost:8000/api/list', {headers: header})
      .then(res=> {
        console.log(res.data);
        this.list = res.data;
        this.vFlg = 1;
      })
      .catch( err => {
        console.log(err);
      });
    },
  },
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
