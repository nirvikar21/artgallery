import React from 'react';
import axios from "axios";
class Contact extends React.Component {
   constructor(){
      super();
      this.state = {
         header:'ContactUS',
         title:'this is about us '
      }
   }

  handleChangeAll=(event)=>{
    this.setState({[event.target.name]:event.target.value});
  } 
  handleSubmit=(event)=>{
    fetch('http://localhost/artgallery/admin/api/HomeApi_Controller/submitContact', {
      method: "POST",
      body: JSON.stringify(this.state),
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
    }).then(
    (response) => (response.json())
      ).then((response)=> {
        
    if (response.msg === 'success') {
      alert("Message Sent."); 
      
    } else if(response.msg === 'fail') {
      alert("Message failed to send.")
      event.preventDefault();
    }
  })
  event.preventDefault();
}

    

   render() {
    let contactContent;
    let {contactdata}= this.props;
    return (
  <div>
    <section className="contact_us">
      <div className="container">
        <div className="row">
          <div class="col-md-5 pad-right col-md-offset-1 col-xs-12">
            <div className="blue-box">
              <h6>Get in touch for any kind of help and information</h6>
                <div className="green-box-text mar">
                  <div className="icon"><i className="fa fa-map-marker" aria-hidden="true">&nbsp;</i></div>
                    <div className="text">
                      <h3>GALLERY LOCATION</h3>
                      <p>Chawla Art Gallery Square One Mall, Ground Floor C-2 Saket Place, New Delhi 110017, India</p>
                    </div>
                    <div className="clearfix">&nbsp;</div>
                </div>

      <div className="green-box-text mar">
      <div className="icon"><i className="fa fa-paper-plane" aria-hidden="true">&nbsp;</i></div>

      <div className="text">
      <h3>WRITE TO US</h3>

      <p><a href="mailto:sc@chawla-artgallery.com">sc@chawla-artgallery.com</a></p>
      </div>

      <div class="clearfix">&nbsp;</div>
      </div>

      <div className="green-box-text mar">
      <div className="icon"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i></div>

      <div className="text">
      <h3>CALL US NOW</h3>

      <p><a href="tel:911129561819">+91-1129561819</a>/ <a href="tel:+911141777088">+91-1141777088</a></p>
      </div>

      <div className="clearfix">&nbsp;</div>
      </div>
      </div>
  </div>
          <div className="col-md-5 pad-left col-xs-12">
            <div className="box">
              <h6>Make An Enquiry</h6>
              <div className="row">

            <form onSubmit={this.handleSubmit}>
                <div className="col-md-12">
                  <div className="form-group">
                    <input type="text" className="form-control"  placeholder="Enter Your Name" name="name" value={this.state.name} onChange={this.handleChangeAll}/>
                  </div>
                </div>

                <div className="col-md-12">
                  <div className="form-group">
                    <input type="email" className="form-control"  placeholder="Enter Your Email" name="email" required value={this.state.email} onChange={this.handleChangeAll}/>
                  </div>
                </div>

                <div className="col-md-12">
                  <div className="form-group">
                    <input type="number" className="form-control"  placeholder="Enter Your Mobile" name="mobile" value={this.state.mobile} onChange={this.handleChangeAll}/>
                  </div>
                </div>

                <div className="col-md-12">
                  <div className="form-group">
                    <textarea name="message" rows="4" cols="50" placeholder="Enter Your Message" required onChange={this.handleChangeAll}>{this.state.message}</textarea>
                  </div>

                  <div className="requ_callbk">
                    <button type="submit" id="submit" className="btn btn-info submit-details">SUBMIT</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div className="clearfix"></div>
    </section>
  </div>
      );
   }
}


export default Contact;