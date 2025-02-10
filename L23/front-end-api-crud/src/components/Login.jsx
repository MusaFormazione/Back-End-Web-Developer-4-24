import { useState } from "react";
const Login = () => {
  
  const [form, setform] = useState({
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
    loginRequest(); 
  }
  
  async function loginRequest(){
    
    try{
      
      const apiUrl = 'http://api-crud.test/api/login';
      const response = await fetch(apiUrl, {
        method: 'POST',
        headers:{
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
      });

      if(!response.ok) throw new Error(response.status);
        
      const accessData = await response.json();

      console.log(accessData);
      
    }catch(error){
      console.log(error);
    }

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