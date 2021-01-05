const iSate ={}
const artistReducer =(state=iSate,action) =>{
        return {
            ...state.artistReducer,
            payload:action.payload,
        }
}
export default artistReducer;