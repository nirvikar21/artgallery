const iSate ={
   
}
const reducer =(state=iSate,action) =>{
    if(action.type==='GET_USER'){
        return{
            ...state,
            userData:action.payload    
        }

    } 
    if(action.type==='GET_ABOUT'){
        return {
            ...state,
            pageData:action.payload
        }

    } 
    if(action.type==='GET_CONTACT'){
        return {
            ...state,
            pageData:action.payload
        }

    } 
    
    return state;
}
export default reducer;