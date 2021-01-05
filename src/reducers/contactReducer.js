const iSate ={}
const contactReducer =(state=iSate,action) =>{
    if(action.type==='GET_CONTACT'){
        return {
            ...state.contactReducer,
            payload:action.payload,
        }
    }
   
    return state;
    
}
export default contactReducer;