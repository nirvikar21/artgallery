import React from 'react';
import {connect} from 'react-redux'
import {fetchData} from '../../actions/myaction'
import { Link }  from "react-router-dom";
class Works extends React.Component {
   constructor(){
      super();
   }

   componentDidMount(){
      this.props.getData('works');
      //console.log("=====Stateprops",this.props);
   } 
   render(props) {
      let {worksdata}= this.props;
      let works;
      if(worksdata.payload !==undefined){
         works=worksdata.payload.data;
      }     
      return (
         <div> 
            <section className="Art">
               <div className="container">
                  <h2 className="headings-all">Works on Paper</h2>   
                  <div className="border"></div>
                     <div className="row">
                     {(typeof works !=='undefined')?works.map(item => (
                        <div className="col-md-3">
                              <div className="item">
                              <div className="panting-single">
                                 <a data-fancybox data-caption href="">
                                    <div className="panting-thumb"> <img src={item.profile_image} alt="" className="img-responsive"/></div>
                                 </a>
                                 <a data-fancybox data-caption href=""><div className="zoom-icon"><i className="fa fa-search"></i></div></a>
                                    <div className="clearfix"></div>
                                 <div className="panting-info">
                                    <h5>{item.name}</h5>
                                 <small>{item.description}</small>
                                    <div className="box">
                                       <div className="row">
                                          <div className="col-md-5"></div>
                                          <div className="col-md-12 text-right">
                                          {(item.price)? <span className="price1">Rs.{item.price}</span>:
                                             <span class="red1">Price on request </span>}
                                          </div>
                                       </div>    
                                    </div>
                                    <div className="row desktop">
                                          <div className="col-md-6 col-xs-12 panting-meta pad0"><Link to={`/artdetails/${item.id}`} className="view_details"> VIEW DETAILS </Link>  </div>
                                          <div className="col-md-6 col-xs-12 panting-meta pad0 text-right"> <Link to={`/contact/`} className="view_details"> ENQUIRE </Link>  </div>
                                    </div>   
                                 </div> 
                              </div>
                           </div>
                        </div>
                      )):''}        
                     </div>
                  </div>
            </section>
         </div>
      );
   } 
}
const mapStateToProps =(state)=>{
   //alert("mapStateToProps");
	return{
      worksdata:  state.works?state.works:[]
	}
}

const mapDispatchToProps =(dispatch)=>{
	return{
	  getData:(pageType)=>{
         dispatch(fetchData(pageType))
      }
	}
}
 export default connect(mapStateToProps,mapDispatchToProps) (Works);