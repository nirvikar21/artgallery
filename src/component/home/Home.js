import React from 'react';
import {connect} from 'react-redux'
import {fetchData} from './../../actions/myaction'
import Painting from './Painting'
import Sculptures from './Sculptures'
import Lithographs from './Lithographs'
import Works from './Works'


class Home extends React.Component {
   constructor(){
      super();
   }
   componentDidMount(){
      this.props.getData('home')
   }
   render(props) {
      let home
      let {homedata}= this.props
      if(homedata.payload!==undefined){
         home=homedata.payload.data;
         //console.log("homedata",home);
      }
      return (
         <div>
            <section id="home" className="desktop">  
               <div id="main-slide" className="owl-carousel1 owl-theme">
               {(typeof home !=='undefined')?home.map(item => (
                  <div className="item"> <img className="img-fluid" src={`http://localhost/artgallery/admin/${item.image}`} alt="slider"/>
                     <div className="container">
                        <div className="slider-content">
                           <h2>{item.title} </h2>
                           <h5>Description{item.description}</h5>
                           <div> <a href="#" className="action-button blue">EXPLORE GALLERY </a> </div>
                        </div>
                     </div>
                  </div>
                  )):''}
                 
               </div>
            </section> 
            <Painting/>
            <Sculptures/>
            <Lithographs/>
            <Works/>
            
         </div>
      );
   } 
}
const mapStateToProps =(state)=>{
   //console.log("mapStateToProps",state.home)
	return{
      homedata:state.home,
	}
}

const mapDispatchToProps =(dispatch)=>{
	return{
	  getData:(pageType)=>{
	  dispatch(fetchData(pageType))}
	}
}
 export default connect(mapStateToProps,mapDispatchToProps) (Home);
 