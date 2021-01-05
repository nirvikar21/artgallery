import React from 'react';
import './about.css';
//import axios from 'axios';
//import Address from './Address'
import {connect} from 'react-redux'
import {fetchData} from './../../actions/myaction'

class About extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'AboutUs',
         title:'this is about us '
      }
   }

   componentDidMount(){
      this.props.getData('about')
   }
  
   render() {
      
      let aboutContent;
      let aboutImage;
      let aboutTitle;
      let {aboutdata}= this.props
      if(aboutdata.payload!==undefined){
         aboutContent=aboutdata.payload.data[0].description;
         aboutImage = aboutdata.payload.data[0].url; 
         aboutTitle= aboutdata.payload.data[0].title;  
      }

      return (
         <div>
            <div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)`}}> 
            <span className="ak-sub-banner-dark"></span>
               <div className="container">
                  <div className="row">
                     <div className="col-md-12">
                     <h2>About Us</h2>
                     </div>
                  </div>
               </div>
            </div>
            <section className="About_us">
               <div className="container">
                  <div className="row">
                     <div className="col-md-6">
                        <h1>About <span>{aboutTitle}</span></h1>
                        <p>{aboutContent}</p>
                     </div>
                     <div className="col-md-6"><img src={aboutImage} className="img-responsive"/></div>
                  </div>
               </div>
            </section>  
         </div>
      );
   }
}
const mapStateToProps =(state)=>{
	return{
      aboutdata:state.about,
      //state:state
	}
}

const mapDispatchToProps =(dispatch)=>{
	return{
	  getData:(pageType)=>{
            dispatch(fetchData(pageType))
      }
	}
}

export default connect(mapStateToProps,mapDispatchToProps) (About);