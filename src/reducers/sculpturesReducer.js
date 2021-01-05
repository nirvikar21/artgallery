const iSate ={}
const sculpturesReducer =(state=iSate,action) =>{
    
    if(action.type==='GET_SCULPTURES'){
        //console.log("==action==",action.payload);
        return {
            ...state.sculpturesReducer,
            payload:action.payload,
        }
    }
    
    return state;    
}
export default sculpturesReducer;