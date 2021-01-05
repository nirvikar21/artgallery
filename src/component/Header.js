import React from 'react';
import { Link }  from "react-router-dom";
class Header extends React.Component {
   constructor() {
      super();
   };
   render() {
      return (
         <div>
            <nav id="nav" className="navbar navbar-default ak_header desktop">
              <div className="container">
                
                <div className="navbar-header">
                  <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span className="sr-only">Toggle navigation</span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                  </button>
                  <a className="navbar-brand" href=""><img src="/assets/images/chawlaartgallery-logo.png" className="img-responsive" alt=""/></a>
                  <div className="clearfix"></div>
                </div>
                <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul className="nav navbar-nav">
                    <li><Link to="/">Home</Link></li>
                    <li><Link to="/about">About </Link></li>
                    <li><Link to="/artist"> Artists </Link></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exhibitions
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><Link to="/artfair">Art Fairs</Link></li>
                        <li><Link to="/exhibition">Exhibitions</Link></li>
                      </ul>
                    </li>
                    <li><Link to="/press"> Press</Link></li>
                    <li><Link to="/newsletter"> Art News</Link></li>
                    <li><Link to="/contact"> CONTACT US</Link></li>
                  </ul>
                    
                  <ul className="nav navbar-nav navbar-right right_menu">
                <li>
                  <form method="post" action="<?=base_url('artist-details/')?>" className="navbar-form" role="search">
                    <div className="input-group">
                      <div className="homeWrap"> 
                        <input type="text" className="form-control" name="keywordstitle" id="homeSearch" placeholder="Search an Artist..."/>
                        <input type="hidden" name="artistId" id="artistId"/>
                      </div>
                      <span className="input-group-btn">
                        <button type="button" className="btn ak-default">
                          <span className="glyphicon glyphicon-search">
                            <span className="sr-only">Search...</span>
                          </span>
                        </button>
                      </span>
                    </div>
                  </form>
                </li> 
                <li className="dropdown sell-art">
                  <a className="dropdown-toggle" data-toggle="dropdown" href="#">Sell Your Art <span className="caret"></span></a>
                  <ul className="dropdown-menu">
                  <li><a href="#" className="" data-toggle="modal" data-target="#sell-your-art">Artist</a></li>
                  <li> <a href="#" className="" data-toggle="modal" data-target="#Collector">Collector </a></li>
                  </ul>
                  
                  </li>
                  </ul>
                </div>
              </div>
            </nav>
         </div>
      );
   }
}
export default Header;