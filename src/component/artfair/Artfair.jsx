import React from 'react';
class Artfair extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Press',
         title:'this is about us '
      }
   }
   componentDidMount(){
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtFairData/")
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
      return (
         <div>
            <div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)` }}> 
               <span className="ak-sub-banner-dark"></span>
               <div className="container">
                  <div className="row">
                     <div className="col-md-12">
                        <h2>Art Fairs</h2>
                     </div>
                  </div>
               </div>
            </div>
            <section className="press-listing">
            <div className="container">
               <div className="row">
               {(typeof this.state.items !=='undefined')?this.state.items.map(item => (
                  <div className="project-block col-md-4 col-xs-12">
                     <div className="inner-box photolightgallery">
                        <div className="image-box">
                           <figure><img src={`http://localhost/artgallery/admin/${item.image}`} alt=""/></figure>
                           <div class="content text-center">
                            <h3>{item.title}</h3>
                            <span>{item.st_date} - {item.ed_date}</span>
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
export default Artfair;