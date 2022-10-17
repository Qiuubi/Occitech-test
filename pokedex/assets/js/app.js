import React from 'react';
import ReactDOM from 'react-dom';
import { Route, BrowserRouter as Router, Routes } from 'react-router-dom';
import '../styles/app.css';
import Home from './components/Home';
import Compare from './components/Compare';

ReactDOM.render(
    <React.StrictMode>
        <Router>
            <Routes>
                <Route index path="/" element={<Home />} />
                <Route path="/compare" element={<Compare />} />
            </Routes>
        </Router>
    </React.StrictMode>
    ,
    document.getElementById('root'));