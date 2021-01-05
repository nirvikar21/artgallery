import React from 'react';
import { Link }  from "react-router-dom";
class Footer extends React.Component {
  
   render() {
      return (
         <div>
            <section className="home-newsletter">
               <div className="container">
                  <div className="row">
                     <div className="col-md-7 col-xs-12">
                     <div className="ubnewsttl">
                        <div className="icon"><i className="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <h2>Subscribe to Newsletter</h2>
                        <p className="ubnewstext"><span>Stay Updated with latest news, promotions & offers</span></p>
                     </div>
                     </div>
                     <div className="col-md-5 col-xs-12">
                     <div className="form-search">
          <input type="email" value="" placeholder="Your Email Address" name="EMAIL" id="newsmail" className="newsletter-input form-control"/>
          <span id="message" className="text-white"></span>
          <button id="subscribe" className="button_mini btn" type="submit"> <span>SUBSCRIBE NOW</span> </button>
        </div>
                     </div>
                  </div>
               </div>
            </section>
            <footer className="footer">
               <div className="container">
                  <div className="row">
                     <div className="col-md-4 col-xs-12"><span className="logo-bt">
                     <h4>About Chawla Art Gallery</h4>
                     </span>
                     <p className="fo_text">Chawla Art Gallery envisioned as an arena for passionately presenting artworks of quality & lasting in value over the years.One of the pioneers in the art business, the gallery has a history of long association with leading artists.</p>
                     <div className="ubsocial">
                        <h3 className="footer-title"> FOLLOW US ON</h3>
                        <div className="social-links"></div>
                     </div>
                     </div>
                     <div className="col-md-2 col-xs-5 ">
                     <div className="footer-links  mlspace">
                        <h3 className="footer-title">QUICK LINKS</h3>
                        <ul className="list-unstyled">
                           <li><Link to="/about"> About</Link></li>
                           <li><Link to="/artist">Artists </Link></li>
                           <li><Link to="/about">Exhibitions</Link></li>
                           <li><Link to="/press">Press </Link></li>
                        </ul>
                     </div>
                     </div>
                     <div className="col-md-2 col-xs-7">
                     <div className="footer-links mlspace">
                        <h3 className="footer-title">&nbsp;</h3>
                        <ul className="list-unstyled">
                           <li><Link to="/newsletter">Newsletters </Link></li>
                           <li><Link to="/contact">Contact Us</Link></li>
                           <li><a href="#" data-toggle="modal" data-target="#sell-your-art">Sell Your Art</a></li>
                           <li><a href="<?=base_url('contactus')?>#map">Map</a></li>
                        </ul>
                     </div>
                     </div>
                     <div className="col-md-4 col-xs-12">
                     <div className="footer-links ubcontact">
                        <h3 className="footer-title">CONTACT DETAILS</h3>
                        <span> <i className="fa fa-map-marker" aria-hidden="true"></i><strong> Chawla Art Gallery</strong><br></br>
                        Square One Mall, Ground Floor<br></br>
                        C-2 Saket Place, New Delhi 110017 
                        India</span> <br></br>
                        <span> <i className="fa fa-paper-plane" aria-hidden="true"></i> <a href="mailto:sc@chawla-artgallery.com">sc@chawla-artgallery.com</a></span> <br></br>
                        <span className="ak_number"> <i className="fa fa-phone" aria-hidden="true"></i> <a href="tel:+911126532077">+91-1126532077</a>/ <a href="tel:+911129561819">+91-1129561819</a> </span> </div>
                     </div>
                  </div>
               </div>
            </footer>
</div>
      );
   }
}
export default Footer;