const iSate ={
    
}
const userReducer =(state=iSate,action) =>{
    if(action.type==='GET_USER'){
        return{
            ...state.userReducer,
            userData:action.payload    
        }

    } 
   
    
    return state;
}
export default userReducer;