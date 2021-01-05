import React from 'react';
import { Link } from 'react-router-dom';


class Artist extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Artist',
         title:'this is about us '
      }
   }
   componentDidMount(){
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtist/")
	.then(res => res.json())
      .then(
        (result) => {
			console.log("======11",result.data.artists2Data);
          this.setState({
            isLoaded: true,
            items: result.data.artists1Data,
            items2: result.data.artists2Data,
            items3: result.data.artists3Data,
            items4: result.data.artists4Data,
          });
        })
   }
   render() {
      console.log("======",this.state.items);
      return (
         <div>
           <div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)`}} > 
           <span className="ak-sub-banner-dark"></span>
                  <div className="container">
                     <div className="row">
                        <div className="col-md-12">
                        <h2>Artists</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <section className="Artist">
                  <div className="container">
                     <div className="search">
                        <div className="fom-body">
                           <div className="row">
                              <div className="col-md-6 col-xs-6 pad-right">
                                 <div className="form-group">
                                    <label>Find Artist</label>
                                    <div className="searchArea">
                                       <input type="text" name="artist" className="form-control" id="artist" placeholder="Search.."/>
                                       <input type="hidden" name="artist_id" id="artist_ids"/>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section className="artist-listing">
                  <div className="container">
                     <div className="row">
                        <div id="content-1" className="content mCustomScrollbar">
                           <div id="responsive">
                              <div className="col-sm-3 col-xs-6 artist_name">
                             
                                   <h4> A</h4>
                                   {(typeof this.state.items !=='undefined')?this.state.items.map(item => (
                                   <Link to={`/artistdetails/${item.id}`} className="artist">{item.name}(2)</Link>
                                   )):''}    
                              </div> 
                              <div className="col-sm-3 col-xs-6 artist_name">
                                   <h4> A</h4>
                                   {(typeof this.state.items2 !=='undefined')?this.state.items2.map(item2 => (
                                   <Link to={`/artistdetails/${item2.id}`} className="artist">{item2.name}(2)</Link>
                                   )):''}    
                              
                              </div> 
                              <div className="col-sm-3 col-xs-6 artist_name">
                                   <h4> A</h4>
                                   {(typeof this.state.items3 !=='undefined')?this.state.items3.map(item3 => (
                                   <Link to={`/artistdetails/${item3.id}`} className="artist">{item3.name}(2)</Link>
                                   )):''}    
                              
                              </div>
                              <div className="col-sm-3 col-xs-6 artist_name">
                                   <h4> A</h4>
                                   {(typeof this.state.items4 !=='undefined')?this.state.items4.map(item4 => (
                                   <Link to={`/artistdetails/${item4.id}`} className="artist">{item4.name}(2)</Link>
                                   )):''}    
                              
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
         </div>
      );
   }
}


export default Artist;