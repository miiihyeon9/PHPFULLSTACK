import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    
    state(){
        // let text = document.querySelector('write-box');
        return{
            boardData:[],    //게시글 데이터 저장
            lastId:'',  // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg : true,   // 더보기 버튼 표시용 flg
            tabFlg : 0 , // tab UI flg(0:메인, 1:필터, 2:작성)
            imgUrl : '', // 이미지 url
            filterName : '',
            postImg: null,
            content : ''
            // data : { name : ''
            //         ,filter: ''
            //         ,img : ''
            //         ,content : ''
            //     },
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
        // 작성 데이터 셋팅용
        addWriteData(state,data){
            state.boardData.unshift(data);
            // this.commit('changeLastId',data.id);
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
        // 초기화
        clearState(state){
            state.filterName = '';
            state.imgUrl = '';
            state.postImg = null;
        },
        // 이미지 변경(?)
        changePostImg(state,postImg){
            state.postImg = postImg;
        }
        // addData(state,data){

        //     // console.log(state.data);
        //     // console.log(data);
        //     // console.log(state.filterName);
        //     let text = document.querySelector('.write-box');
        //     // this.commit('convertImageUrlToFile',state.imgUrl);
        //     // const fileName = "image.jpg";


        //     // console.log(text.value);
        //     data.name = '김미현';
        //     data.filter = state.filterName;
        //     // data.img = await fetch(state.imgUrl).then(r => r.blob());
        //     data.img = state.imgUrl;
        //     data.content = text.value;
        //     // console.log(data.name, data.filter, data.img, data.content);
        // },
        // convertImageUrlToFile(imgUrl, fileName) {
        //     fetch(imgUrl)
        //       .then(response => response.blob())
        //       .then(blob => {
        //         const file = new File([blob], fileName, { type: blob.type });
        //         // 여기에서 파일을 사용하거나 저장하는 등의 작업을 수행할 수 있습니다.
        //         console.log("변환된 파일:", file);
        //       })
        //       .catch(error => {
        //         console.error("이미지를 파일로 변환하는 동안 오류가 발생했습니다:", error);
        //       });
        // }

        
    },
    // 비동기처리(ajax)
    actions:{

        // 메인 게시글 습득
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
        // 게시글 추가 습득
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
            },
        // 게시글 작성
        writeContent(context){
            let contents = document.getElementById('content');
            context.state.content = contents.value;
            const data = {
                name : '김미현',
                filter : context.state.filterName,
                img : context.state.postImg,
                content : context.state.content,
            }
            const header = {
                headers : {
                    'Content-Type' : 'multipart/form-data',
                }
            };
            // console.log(data);
            // RESTful API 규칙으로 
            // 작성을 하기 위해서 post
            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                // console.log(data);
                // console.log('성공'+res);
                // unshift() : 현재 배열의 가장 첫 번째 방에 넣어줌.
                context.commit('addWriteData',res.data);
                context.commit('changeTabFlg',0);
                context.commit('clearState');

            },data, header)
            .catch(err => {
                // console.log(context.state.postImg);
                
                // console.log(data);
                console.log(err);
            })
        },
    }
})

export default store