import React from 'react';
class Press extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Press',
         title:'this is about us '
      }
   }

   componentDidMount(){
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getPress/")
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
            <div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)`}}> <span class="ak-sub-banner-dark"></span>
               <div className="container">
                  <div className="row">
                     <div className="col-md-12">
                        <h2>Press</h2>
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
                           <a href="" data-fancybox="images"> 
                              <div className="image-box">
                              <img src={`http://localhost/artgallery/admin/${item.image}`} alt="ccc" className="img-responsive"/>
                              </div>
                  <h2>{item.newspaper}</h2>
                           </a>
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
export default Press;