const iSate ={}
const aboutReducer =(state=iSate,action) =>{
    if(action.type==='GET_ABOUT'){
        return {
            ...state.aboutReducer,
            payload:action.payload,
        }
    }
    return state;    
}
export default aboutReducer;