import { useEffect, useState } from 'react';
import PizzaItem from './PizzaItem';
const Home = () => {

  const apiUrl = 'http://api-crud.test/api/pizza';
  const [pizze, setPizze] = useState([]);

  async function getPizze(){
    try{

      const response = await fetch(apiUrl);

      if(!response.ok) throw new Error(response.status);
        
      const pizzeResult = await response.json();
      setPizze(pizzeResult);

    }catch(error){
      console.log(error);
    }
  }

  useEffect(() => {

      getPizze()

  },[]);

  return (
    <>

      <h1>Pizzeria tal dei tali</h1>

      <h2>Scopri le nostre pizze</h2>

      {pizze.map(pizza =>{
        return <PizzaItem key={'pizza-' + pizza.id} {...pizza} />
      })}

    
    </>
  )
}

export default Home