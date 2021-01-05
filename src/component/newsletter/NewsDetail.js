import React from 'react';
class NewsDetail extends React.Component {
    constructor(){
        super();
        this.state = {
           header:'',
           title:'',
           items: []
        }
       
     }
     componentDidMount(){
      console.log("=====Stateprops1",this.props,this.props.match.params.id);
      let id=this.props.match.params.id;
      
      fetch("http://localhost/artgallery/admin/api/HomeApi_Controller/getNewDetail/"+id)
      .then(res => res.json())
        .then(
          (result) => {
              console.log("aaaaaaa==",result.data.newDetailsData)
            this.setState({
              isLoaded: true,
              items: result.data.newDetailsData,
            });
          })
      }
      
     render() {
        return (
          <div>
            {(typeof this.state.items !=='undefined')?this.state.items.map(item => (
              <section className="blog-listing">
                  <div className="container">
                    <div className="container">
                      <div className="row">
                        <div className="col-md-8 col-md-offset-2">
                          <div className="blog_detail-wrap">
                            
                            <img src={`http://localhost:3000/${item.image}`} className="img-responsive center-block" alt=" "/>
                            <p className="blog_category">{item.category}</p>
                            
            <h2 className="blog_secttl"><time className="blog_post-date"><p className="date">21</p>April, 2020</time>{item.title}</h2>
                            <div className="blog_detail-desc"><p>{item.description}</p></div>
                          </div>
                        <hr/>
                          <div className="text-center"></div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </section>
               )):''}
           </div>
        );
     }
  }
  export default NewsDetail;