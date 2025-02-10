
const PizzaItem = ({gusto, prezzo}) => {

  return (
    <div className="card">
    <div className="card-body">
      <h5 className="card-title">{gusto}</h5>
      <p className="card-text">{prezzo}</p>
    </div>
  </div>
  )
}

export default PizzaItem