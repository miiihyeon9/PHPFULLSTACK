<template >
    <div class="box">
        <Todo @insertTodo="insertTodo()"></Todo>
        <List :todo="todo" @list="getMainList()"></List>
        <!-- <button @click="getMainList">dddd</button> -->
    </div>
</template>
<script>
import Todo from "./components/Todo.vue";

import List from "./components/List.vue";

export default {
    name: 'App',
    created(){
        this.getMainList();
    },
    data() {
    return {
        todo: [],
    };
  },
  methods:{
    
    getMainList(){
            // constext => store를 말함
            axios.get('/api/items')
            .then(res => {
                console.log(res.data);
                this.todo = res.data;
                // console.log(this.todo);
                // context.boardData = res.data;
                // 함수명, 보내줄 데이터
                // 나한테 있는 함수를 사용할 때 this 사용
                // commit()=> mutations의 함수에 접근할 때 사용
            }).catch(err => {console.log(err);
            })
        },
    insertTodo(){
        let text = document.getElementById('text');
        // console.log(text);
        const data = {
            "item": {
                    "content": text.value,
            }
        }
        const header = {
                headers : {
                    'Content-Type' : 'application/json',
                }
            };
            // console.log(data);
            axios.post('/api/items', data, header)
            .then(res => {
                console.log(res);
                text.value = '';
                this.getMainList();
            })
            .catch( err => {
                console.log(err);
        })
    },
    // updateChkBtn(){
    //     // let chkBtn = document.getElementsByClassName('list-chkBox');
    //     // console.log(chkBtn[0].value);
    //     // const data = {
    //     //     "item": {
    //     //             "completed": true,
    //     //     }
    //     // }
    //     // for(let i = 0 ; i<chkBtn.length ; i++){
    //     //     if(chkBtn[i].value === 1){

    //     //     }
    //     // }

    // },
    // deleteTodo(){

    // }
  },
  components: {
    Todo,
    List
  },
    
}
</script>
<style >
body{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
    .box{
        width:350px;
        margin:0 auto;
    }
</style>