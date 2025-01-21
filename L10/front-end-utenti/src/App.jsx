
import { useEffect, useState } from 'react'
import './App.css'

function App() {

  const [utenti, setUtenti] = useState([]);

  useEffect(()=>{

    fetch('http://musa4-24.test/L10/esercizio-select/endpoint-utenti.php?nome=Mario')
    .then(res => res.json())
    .then(dati => {
      setUtenti(dati);
      console.log(dati);
      
    })

  },[]);

  return (
    <>

      {utenti.map(u => { 
        return (<div key={'utente-' + u.id}>{u.nome}</div>);
      })}

    </>
  )
}

export default App
