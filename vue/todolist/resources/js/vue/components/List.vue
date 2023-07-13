<template >
    <div class="list-box">
        <div class="list-item" v-for="(item,i) in todo" :key="item">
            <input type="checkbox" class="list-chkBox " @change="updateChkBtn(item) ; $emit('list')" v-if="item.completed == true " checked>
            <input type="checkbox" class="list-chkBox" @change="updateChkBtn(item) ; $emit('list')" v-else>
            <span class="list-content completed-line" v-if="item.completed == true ">{{ item.content}}</span>
            <span class="list-content" v-else>{{ item.content}}</span>
            <button class="list-delBtn" type="button" @click="deleteTodo(item.id); $emit('list')">삭제</button>

            <!-- <button @click="chk()">dlkfjsdkl</button> -->
            <!-- <div>{{ item.id }}</div> -->
        </div>
    </div>
</template>



<script>
export default {
    name: 'List',
    props :{
        todo:Array,
    }
    ,methods : {
        
        // chkBox
        updateChkBtn(item){
            // let chkBox = document.querySelector('.list-chkBox');
            const header = {
                headers : {
                    'Content-Type' : 'application/json',
                }
            }
            
            let data = {
                "item": {
                    "completed": !item.completed,
                }
            }
        
            // console.log(data);
            axios.put('/api/items/'+ item.id, data, header)
            .then(res => {
                console.log(res);
                // text.value = '';
                // $emit('delete');
            })
            .catch( err => {
                console.log(err);
            })

        },

        
        // 삭제
    deleteTodo(item){
        const header = {
                headers : {
                    'Content-Type' : 'application/json',
                }
        };
            // console.log(data);
        axios.delete('/api/items/'+ item,header)
            .then(res => {
                console.log(res);
                // text.value = '';
                // $emit('delete');
            })
            .catch( err => {
                console.log(err);
            })
        }
    }
}

</script>
<style >
    .list-box{
        margin: 20px auto;
        border: 2px solid #000;
        border-radius: 10px;
        height:700px;
    }
    .list-item{
        margin:10px;
        border: 1px solid #e2e2e2;
        padding: 5px 10px;
        border-radius:10px;
        /* display:flex;
        
        flex-direction: row; */
        display:grid;
        grid-template-columns: repeat(3, auto);
    }
    .list-content{
        width:200px;
        padding:5px 10px;
    }
    .list-delBtn{
        padding: 5px;
        background-color: #000;
        border:1px solid #000;
        border-radius:10px;
        color:#fff;
        /* justify-self: flex-end; */
    }
    .list-delBtn:hover{
        padding: 5px;
        background-color: #fff;
        border:1px solid #000;
        border-radius:10px;
        color:#000;
        transition: all 0.3s;
        /* justify-self: flex-end; */
    }
    .completed-line{
        text-decoration: line-through;
        color:#e2e2e2;
    }
</style>