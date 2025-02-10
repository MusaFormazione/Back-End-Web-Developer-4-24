import { useState } from "react";
import apiFetch from '../utils/AuthHelper'
import { useNavigate } from "react-router-dom";
const Login = ({stateCallback}) => {

  const navigate = useNavigate()
  
  const [form, setform] = useState({
    email:'test@example.com',
    password:'password'
  });

  const handleChange = (e) =>{
    const {name, value} = e.target;

    setform(form =>{
      return  { 
        ...form,
        [name]: value
      }
    });

  }

  const handleSubmit = (e) => {
    e.preventDefault();

    apiFetch('login', 'POST', form, true)
    .then(accessData =>{

      localStorage.setItem('access_data', JSON.stringify(accessData))
      stateCallback(true);
      navigate('/dashboard');
      
    })

  }
   
  
  return (
    <>
      <h1>Accedi</h1>
    
      <form onSubmit={handleSubmit}>

        <input type="email" name="email" onChange={handleChange} className="form-control"/>
        <input type="password" name="password" onChange={handleChange} className="form-control"/>

        <button className="btn btn-success">Login</button>
      </form>
    </>
  )
}

export default Login