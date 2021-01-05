import React from 'react';
class ArtDetails extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Artist',
		 title:'this is about us ',
		 items: []
	  }
	 
   }
   componentDidMount(){
	//console.log("=====Stateprops1",this.props,this.props.match.params.id);
	let id=this.props.match.params.id;
	fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtDetail/"+id)
	.then(res => res.json())
      .then(
        (result) => {
			console.log(result.data.artDetailsData)
          this.setState({
            isLoaded: true,
            items: result.data.artDetailsData[0],
          });
        })
		
	}
	
   render() {
	console.log("===state",this.state.items.artist);
	const regex = /(<([^>]+)>)/ig;
      return (
        <div>
			<div className="artwork-details">
				<div className="container">
					<div className="row">
						<div className="col-md-6">
							<div className="gallerwrap">
							<img src={`http://localhost:3000/${this.state.items.profile_image}`} alt="" className="img-responsive"/>
								<a data-fancybox="images" href=""> 
									<div className="zoom-icon-1"><i className="fa fa-search"></i></div>
								</a>
							</div>
						</div>
						<div className=" col-md-6">
							<div className="ubproduct_detail">
	  							<h3 className="ubpro_title hdn">{this.state.items.name}</h3>
								<p className="ubprodetrow"><strong className="wit-right">Title  </strong> :&nbsp;&nbsp; {this.state.items.description}</p>
								<p className="ubprodetrow"><strong className="wit-right">Size  </strong> :&nbsp;&nbsp;<span>{this.state.items.size}</span></p>			
								<p className="ubprodetrow"><strong className="wit-right">Medium </strong> :&nbsp;&nbsp;{this.state.items.subcat_name}</p>	
								<p className="ubprodetrow"><strong className="wit-right">Year </strong> :&nbsp;&nbsp;<span>{this.state.items.year}</span></p>
								<p className="ubprodetrow"><strong className="wit-right">Code </strong> :&nbsp;&nbsp;<span>{this.state.items.art_id}</span></p>
								<div class="ubproquantity">
								<div class="ubquanwrap">
									<a class="action-button view_details1" href="javascript:void(0);" data-toggle="modal" data-target="#make-an-enquiry" data-id="102" data-artist="Abhinav Chowbey" data-image="assets/images/art_images/ABC-1712.jpg">Enquire now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
         </div>
      );
   }
}

export default ArtDetails;