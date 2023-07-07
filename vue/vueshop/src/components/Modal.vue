<template >
    <div class="bg_black" v-if="modalFlg === true">
      <div class="bg_white">
        <!-- 자식에서 부모의 값을 바꾸기 위해서는 $emit을 사용해서 메세지를 보내줘야함 
          여기서는 closeModal이라고 메세지를 보냄, 그러면 부모에서 closeModal을 받았을 때 어떠한 행동을 취할 것이다라는 것을 설정해줌 -->
        <button @click="$emit('closeModal');" >취소</button>
        <img :src="products[num].image">
        <h4>{{products[num].name}}</h4>
        <p>{{products[num].content}}</p>
        <p>{{products[num].price}}</p>
        <p >{{ products[num].price * products[num].count }}원</p>   
        <!-- <p>{{ productPrice }}원</p>  -->
        <!-- <button type="button" class="countBtn" @click="plus(num)" v-if="products.count < 10">수량 증가</button> -->
        <button type="button" class="countBtn" @click="$emit('plus')" v-if="products[num].count < 10">수량 증가</button>
        <button type="button" class="countBtn"  v-else>수량 증가</button> 
        <button type="button" class="countBtn" @click="$emit('minus')" v-if="products[num].count > 1" >수량 감소</button>
        <button type="button" class="countBtn" v-else >수량 감소</button>  
        <span>{{ products[num].count }}</span>
      </div>
    </div>
</template>
<script>



export default {
    name: 'Modal',
    props:{
      products: Array,
      modalFlg: Boolean,
      num: setInterval,
    } 
}

</script>
<style >
    
</style>