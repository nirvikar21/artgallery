
export const fetchData = (pageType)=>{
    console.log("=====myaction", pageType)
    return (dispatch)=>{
        if(pageType==="home"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getBanner/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_HOME',payload:res2})
            })
        }
        if(pageType==="about"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getAbout/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_ABOUT',payload:res2})
            })
        }
        if(pageType==="contact"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getContact/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_CONTACT',payload:res2})
            })
        }

        if(pageType==="press"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getPress/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_PRESS',payload:res2})
            })
        }

        if(pageType==="artist"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getPress/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_ARTIST',payload:res2})
            })
        }

        if(pageType==="newsletter"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getPress/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_NEWSLETTER',payload:res2})
            })
        }
        if(pageType==="painting"){
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getPainting/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_PAINTING',payload:res2})
            })
        }

        if(pageType==="sculptures"){
            
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getSculptures/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_SCULPTURES',payload:res2})
            })
        }

        if(pageType==="lithographs"){
            console.log("==pagetype==",pageType);
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getLithographs/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_LITHOGRAPHS',payload:res2})
            })
        }

        if(pageType==="works"){
           
            fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/getWorks/')
            .then(response=>response.json())
            .then(res2=>{
                dispatch({type:'GET_WORKS',payload:res2})
            })
        }
    }   
}  