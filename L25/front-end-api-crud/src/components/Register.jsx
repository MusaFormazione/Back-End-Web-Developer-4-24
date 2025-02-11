import { useState } from "react";
import apiFetch from '../utils/AuthHelper'
import { useNavigate } from "react-router-dom";

const Register = () => {
    const navigate = useNavigate()
  
    const [form, setform] = useState({
      name:'',
      email:'',
      password:''
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
  
      apiFetch('register', 'POST', form, false)
      .then(()=>{
  
        navigate('/login');
        
      })
  
    }
     
    
    return (
      <>
        <h1>Registrati</h1>
      
        <form onSubmit={handleSubmit}>
  
          <input type="text" name="name" placeholder="Nome" onChange={handleChange} className="form-control"/>
          <input type="email" name="email" placeholder="Email" onChange={handleChange} className="form-control"/>
          <input type="password" name="password" placeholder="password" onChange={handleChange} className="form-control"/>
  
          <button className="btn btn-success">Registrati</button>
        </form>
      </>
    )
}

export default Register