import { Link } from "react-router-dom"
const PizzaItem = ({gusto, prezzo, available}) => {

  return (
    <div className={`card ${available ? 'alert alert-success' : 'alert alert-danger'}`}>
    <div className="card-body">
      <h5 className="card-title">{gusto}</h5>
      <p className="card-text">{prezzo}</p>
      {!!available && <Link to="#">Mostra Pizza</Link>}
    </div>
  </div>
  )
}

export default PizzaItem