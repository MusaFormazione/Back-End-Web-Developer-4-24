import React from 'react';
import ReactDOM from 'react-dom/client';
import Form from './components/Form'
import Users from './components/Users'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import './bootstrap';


function App(){

    const basePath = '/dashboard/';
    return <>
        <h1>Dashboard</h1>

        <Router>

            <nav class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                    <li class="nav-item">
                        <Link to={basePath + 'users'}>Users </Link>
                    </li> |
                    <li class="nav-item">
                        <Link to={basePath + 'contact-us'}>Form</Link>
                    </li>
                </ul>
            </nav>

            <Routes>
                <Route path={basePath + 'users'} element={<Users/>}></Route>
                <Route path={basePath + 'contact-us'} element={<Form/>}></Route>
            </Routes>

        </Router>


    </>
}


ReactDOM.createRoot(document.getElementById('react-root'))
.render(
    <App/>
);
