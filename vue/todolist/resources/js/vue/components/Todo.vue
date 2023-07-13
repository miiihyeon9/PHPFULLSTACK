<template >
    
        <div class="todo-box">
            <h2>Todo List</h2>
            <div class="input-box">
                <input type="text" class="todo-input" id="text" >
                <button class="todo-btn" type="button" @click = "$emit('insertTodo')" >등록</button>
            </div>
        </div>
</template>
<script>
export default {
    name : 'Todo',
}
</script>
<style >
    .todo-box{
        /* background-color: #000; */
        border-bottom: 2px solid #000;
        padding:20px;
    }
    h2 {
        color:#000;
        text-align: center;
        font-weight: 900;
    }
    .input-box{
        text-align: center;
        /* width:60%; */
        margin:0 auto;
    }
    .todo-input {
        border:1px solid #000;
        border-radius: 5px;
        outline:none;
        width:250px;
        height: 30px;
    }
    .todo-btn{
        margin-left:10px;
        border-radius: 5px;
        border:1px solid #000;
        background-color: #fff;
        font-weight: 900;
        height:30px;
    }
    .todo-btn:hover{
        border-radius: 5px;
        background-color: #000;
        color:#fff;
        font-weight: 900;

        transition: all 0.3s;
    }
</style>