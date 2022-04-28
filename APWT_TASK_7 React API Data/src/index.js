import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import Head from './Components/Head';
import Home from './Components/Home';
import Contact from './Components/Contact';
import Foot from './Components/Foot';
import UserList from './Components/UserList';
import UserDetails from './Components/UserDetails';

ReactDOM.render( 
    <React.StrictMode >
    <Router>
    <Head/>
    <Switch >
    <Route exact path = "/" >
    <Home/>
    </Route> 
    <Route exact path = "/userList" >
    <UserList/>
    </Route>
    <Route exact path = "/userDetails/:name/:user_id/:dob/:phone/:email">
    <UserDetails/>
    </Route> 
    <Route exact path = "/contact" >
    <Contact/>
    </Route> 
    </Switch > 
    <Foot/>
    </Router> 
    </React.StrictMode > ,
    document.getElementById('root')
);
reportWebVitals();