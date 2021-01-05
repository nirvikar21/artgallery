const iSate ={}
const homeReducer =(state=iSate,action) =>{
    if(action.type==='GET_HOME'){
        return {
            ...state.homeReducer,
            payload:action.payload,
        }
    }
    return state;    
    
}
export default homeReducer;