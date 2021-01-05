const iSate ={}
const worksReducer =(state=iSate,action) =>{
    
    if(action.type==='GET_WORKS'){
        return {
            ...state.worksReducer,
            payload:action.payload,
        }
    }
    
    return state;    
}
export default worksReducer;