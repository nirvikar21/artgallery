import React from 'react';
import { Link }  from "react-router-dom";
class ArtistDetails extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'Artist',
		 title:'this is about us ',
		 artist:'',
	  }
	 
   }
   componentDidMount(){
	let id=this.props.match.params.id;
	fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtistDetail/"+id)
	.then(res => res.json())
      .then(
        (result) => {
			console.log("===",result.data.artistDetail);
          this.setState({
            isLoaded: true,
            artist:result.data.artistDetail[0],
            
          });
		})
	fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getArtistArtData/"+id)
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
	console.log("222",this.state.artist.born);
	const style1={color:"#ffffff"};
      return (
	<div>
		<div className="ak-sub-banner" style={{ backgroundImage:`url(http://localhost/artgallery/admin/assets/images/subheader-img.jpg)` }} > 
		<span className="ak-sub-banner-dark"></span>
		<div className="container">
			<div className="col-md-1 col-xs-4 text-center">
				<div className="post-media"> 
					<img className="img-responsive" src={`http://localhost:3000/${this.state.artist.image}`} alt=""/> 
				</div>
			</div>
			<div className="col-md-11 col-xs-8">
				<h3>{this.state.artist.name}</h3>
				<div>
					<ul className="list-inline" style={{...style1}}>
						<li>B: {this.state.artist.born}</li>
						<li><a href="" className="bio" data-toggle="modal" data-target="#bio-details"><i className="fa fa-link" aria-hidden="true"></i> View Bio</a> 
						</li>
					</ul>
				</div> 
			</div>
		</div>
		</div>
		<section class="Art artistworks-listing">
  <div class="container">
    <div class="row">
	{(typeof this.state.items !=='undefined')?this.state.items.map(item => (
		<div className="col-md-3 col-xs-6-md-3">
			<div className="item">
				<div className="panting-single">
					<a data-fancybox data-caption href="">
					<div className="panting-thumb"> <img src={`http://localhost/artgallery/admin/${item.profile_image}`} alt="" className="img-responsive"/></div>
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

export default ArtistDetails;