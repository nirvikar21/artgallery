import React from 'react';
import './App.css';
import { Route, Switch }  from "react-router-dom";
import Home from './component/home/Home';
import About from './component/about/About';
import Contact from './component/contact/Contact';
import Newsletter from './component/newsletter/Newsletter';
import NewsDetail from './component/newsletter/NewsDetail';
import Press from './component/press/Press';
import Artist from './component/artist/Artist';
import Artfair from './component/artfair/Artfair';
import Exhibition from './component/exhibition/Exhibition';
import ArtistDetails from './component/artistdetails/ArtistDetails';
import ArtDetails from './component/artdetails/ArtDetails';
import Error from './component/error/Error';
import Header from './component/Header';
import Footer from './component/Footer';


function App(props) {
  //console.log(props); 
  return (
    <>
    <Header/>
      <Switch>
          <Route exact path='/' component={Home}/> 
          <Route path="/home" component={Home}/>
          <Route path="/about" component={About}/>
          <Route path="/contact" component={Contact}/>
          <Route path="/artist" component={Artist}/>
          <Route path="/artistdetails/:id" component={ArtistDetails}/>
          <Route path="/artdetails/:id" component={ArtDetails}/>
          <Route path="/newsdetail/:id" component={NewsDetail}/>
          <Route path="/newsletter" component={Newsletter}/>
          <Route path="/press" component={Press}/>
          <Route path="/artfair" component={Artfair}/>
          <Route path="/exhibition" component={Exhibition}/>
          <Route component={Error}/> 
      </Switch>
      <Footer/>
    </>
  );
}

export default App;