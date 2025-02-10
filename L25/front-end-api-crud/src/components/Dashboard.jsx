import { useState } from "react"
import apiFetch , { getUser } from "../utils/AuthHelper"
const Dashboard = () => {

  const [form, setForm] =  useState({
    gusto:'',
    prezzo:0
  });

  const handleChange = (e) =>{
    const {name, value} = e.target;

    setForm(form =>{
      return  { 
        ...form,
        [name]: value
      }
    });

  }

  function handleSubmit(e){
    e.preventDefault();

    apiFetch('pizza','POST', form);
    
  }


  return (<>
    <div className="container">
      <h1>Dashboard</h1>
      <h2>Benvenuto {getUser().name}</h2>
    </div>
    <div className="container mt-3">

      <h3 className="alert alert-danger">
        Aggiungi una pizza
      </h3>

      <form onSubmit={handleSubmit}>
           <input type="text" name="gusto" onChange={handleChange} placeholder="Gusto" className="form-control" />
           <input type="number" name="prezzo" onChange={handleChange} placeholder="Prezzo" className="form-control" />
           <button className="btn btn-primary">Crea</button>
      </form>

    </div>


  </>)
}

export default Dashboard