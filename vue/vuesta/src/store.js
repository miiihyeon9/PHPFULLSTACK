import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state(){
        return{
            boardData:[],    //게시글 데이터 저장
            lastId:'',  // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg : true,   // 더보기 버튼 표시용 flg
            tabFlg : 0 , // tab UI flg(0:메인, 1:필터, 2:작성)
            imgUrl : '', // 이미지 url
            filterName : '',
            // filterFlg : true,
        }
    },
    // 일반적인 함수 
    mutations:{
        // 초기 데이터 셋팅용
        createBoardData(state,data){
            // state는 store의 state()를 말함.
            state.boardData = data;
            this.commit('changeLastId',data[data.length - 1].id);
        }, 
        // 더보기 데이터 셋팅용
        addBoardData(state,data){
            state.boardData.push(data);
            // 데이터가 하나이고 data가 객체 타입이기 때문에 data.id로만 작성해도됨.
            this.commit('changeLastId',data.id);
        },
        //  lastId 변경
        changeLastId(state,id){
            state.lastId = id;
        },
        // tab UI flg 변경
        changeTabFlg(state, num){
            state.tabFlg = num;
        },
        // 이미지 url 변경
        changeImgUrl(state, imgUrl){
            state.imgUrl = imgUrl;
        },
        // 필터명 변경
        filterName(state,filter){
            state.filterName = filter;
            // state.filterFlg = false;
        },
        clearState(state){
            state.filterName = '';
            state.imgUrl = '';
        }
        
    },
    // 비동기처리(ajax)
    actions:{
        getMainList(context){
            // constext => store를 말함
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                console.log(res.data);
                // context.boardData = res.data;
                // 함수명, 보내줄 데이터
                // 나한테 있는 함수를 사용할 때 this 사용
                // commit()=> mutations의 함수에 접근할 때 사용
                context.commit('createBoardData',res.data);
            }).catch(err => {console.log(err);
            })
        },
        // 더보기 버튼 눌렀을 때 함수 호출
        getMoreList(context){
            
            axios.get('http://192.168.0.66/api/boards/'+ context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData',res.data)
                }else{
                    // flg = false;
                    // alert('없어용');
                    // store의 값을 변경할 경우 mutation을 거쳐서 값을 변경하지만 
                    // 여기서는 다른데에서 사용할 이유가 없기 때문에 여기서 사용
                    context.state.addBtnFlg = false;
                }
            })
            .catch(err => {console.log(err);
            })
            }
    }
})

export default store