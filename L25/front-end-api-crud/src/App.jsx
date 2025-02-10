import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';
import Home from './components/Home';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import LogoutBtn from './components/LogoutBtn';
import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import { useEffect, useState } from 'react';
import { isUserLoggedIn } from './utils/AuthHelper';
import AuthGuard from './components/AuthGuard';

function App() {
//Preparo uno Stato che mi aiuterà a nascondere o mostrare elementi in base al fatto che l'utente sia loggato o meno 
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  useEffect(() => {
  //In fase di montaggio del componente, modifico lo Stato Ricevendo i dati dalla funzione isUserLoggedIn che mi restituisce true c'è un access_token oppure false, se questo non c'è
  //La presenza o meno dell'accesso è sinonimo di presenza o meno dell'utente
    setIsLoggedIn(isUserLoggedIn());

  },[])
  
  return (
    <>
      <BrowserRouter>

      <nav className="navbar navbar-expand bg-body-tertiary">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">Navbar</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
              <li className="nav-item">
                <Link className="nav-link active" aria-current="page" to="/">Home</Link>
              </li>
               {!isLoggedIn && <li className="nav-item">
                  <Link className="nav-link" to="/login">Login</Link>
                </li>}
              {isLoggedIn && <li className="nav-item">
                  <Link className="nav-link" to="/dashboard">Dashboard</Link>
                </li>
              }
            </ul>
          </div>
              {isLoggedIn && <LogoutBtn stateCallback={setIsLoggedIn}/>}
        </div>
      </nav>
      
        <Routes>
          <Route path="/" element={<Home/>}>Home</Route>
          <Route path="/login" element={<Login stateCallback={setIsLoggedIn}/>}>Login</Route>
          <Route path="/dashboard" element={<Dashboard/>}>Dashboard</Route>
        </Routes>

      </BrowserRouter>
    </>
  )
}

export default App
