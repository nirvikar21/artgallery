import React from 'react';
class Exhibition extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Press',
         title:'this is about us '
      }
   }

   componentDidMount(){
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getExhibitionData/")
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
            <div class="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)`}}> 
            <span class="ak-sub-banner-dark"></span>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h2>Exhibitions</h2>
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
                           <div className="overlay-box">
                              <div className="content">
                                 <h3>{item.title}</h3>
                                 <span>start_date- start_date</span>                        
                              </div>             
                           </div>
                           <div class="content text-center">
                            <h3>{item.title}</h3>
                            <span>{item.start_date} - {item.end_date}</span>
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
export default Exhibition ;