const iSate ={}
const lithographsReducer =(state=iSate,action) =>{
    
    if(action.type==='GET_LITHOGRAPHS'){
        return {
            ...state.lithographsReducer,
            payload:action.payload,
        }
    }
    
    return state;    
}
export default lithographsReducer;