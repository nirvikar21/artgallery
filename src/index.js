import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import { BrowserRouter } from "react-router-dom";
import {createStore, applyMiddleware,compose,combineReducers} from 'redux'
import * as serviceWorker from './serviceWorker';
import thunk from 'redux-thunk'
import {Provider} from 'react-redux';


import aboutReducer from './reducers/aboutReducer'
import homeReducer from './reducers/homeReducer'
import contactReducer from './reducers/contactReducer'
import pressReducer from './reducers/pressReducer'
import artistReducer from './reducers/artistReducer'
import paintingReducer from './reducers/paintingReducer'
import sculpturesReducer from './reducers/sculpturesReducer'
import lithographsReducer from './reducers/lithographsReducer'
import worksReducer from './reducers/worksReducer'

const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;
const rootReducer = combineReducers({
  home:homeReducer,
  painting:paintingReducer,
  about:aboutReducer,
  press:pressReducer,
  contact:contactReducer,
  artist:artistReducer,
  sculptures:sculpturesReducer,
  lithographs:lithographsReducer,
  works:worksReducer
  })
  const store = createStore(rootReducer,composeEnhancers(applyMiddleware(thunk)));
  ReactDOM.render(<Provider store={store}><BrowserRouter> <App /></BrowserRouter></Provider>,
  document.getElementById('root')
);
serviceWorker.unregister();
