const iSate ={}
const pressReducer =(state=iSate,action) =>{
        return {
            ...state.pressReducer,
            payload:action.payload,
        }
}
export default pressReducer;