import React from 'react';
import {Link} from "react-router-dom";

class Newsletter extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Newsletter',
         title:'this is about us '
      }
   }

   componentDidMount(){
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtNews/")
	   .then(res => res.json())
      .then(
        (result) => {
			console.log(result.data)
          this.setState({
            isLoaded: true,
            items:result.data
          });
        })
   }
  
   render() {
      console.log("aaaa",this.state.items);
      const regex = /(<([^>]+)>)/ig;
      return (
         <div>
            <div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)`}}> 
            <span class="ak-sub-banner-dark"></span>
               <div className="container">
                  <div className="row">
                     <div className="col-md-12">
                        <h2>ART NEWS</h2>
                     </div>
                  </div>
               </div>
            </div>
            
            <section className="blog-listing">
               <div className="container">
               <div className="row">
               {(typeof this.state.items !=='undefined')?this.state.items.map(item => (
                     <div className="col-sm-6 col-md-4">
                     <div className="blog_block">
                        <figure className="blog_media">
                           <img src={item.image} className="img-responsive center-block" alt=" "/>
                           <p className="blog_category">{item.category} </p>
                        </figure>
               <div className="blog_title">{item.title.replace(regex, '')}</div>
                        
                        <div className="blog_desc">
                           <p>{item.description.replace(regex, '')}</p>
                        </div>
                        <hr/>
                        <div class="blog_datetime pull-left"><i className="fa fa-clock-o"></i> April 21, 2020</div>
                        <Link to={`/newsdetail/${item.id}`} className="blog_detail-btn pull-right">Read Details</Link>
                        <div class="clearfix"></div>
                     </div>
                     </div>
                     )):''}
                  </div>
                  
                  <div class="text-center">
                     <ul class="pagination">
                     <li><a href="#">«</a></li>
                     <li class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                  </div>
               </div>
  </section>
         </div>
      );
   }
}
export default Newsletter;