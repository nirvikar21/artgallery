const iSate ={}
const paintingReducer =(state=iSate,action) =>{
   
    if(action.type==='GET_PAINTING'){
        return {
            ...state.paintingReducer,
            payload:action.payload,
        }
    }
    return state;    
}
export default paintingReducer;