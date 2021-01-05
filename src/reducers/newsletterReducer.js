const iSate ={}
const newsletterReducer =(state=iSate,action) =>{
        return {
            ...state.newsletterReducer,
            payload:action.payload,
        }
}
export default newsletterReducer;