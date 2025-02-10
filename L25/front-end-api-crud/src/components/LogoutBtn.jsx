import  { logout } from '../utils/AuthHelper'
import { useNavigate } from "react-router-dom";

const LogoutBtn = ({stateCallback}) => {

  const navigate = useNavigate()

  const logoutHandler = () =>{
    logout()
    stateCallback(false)
    navigate('/login')
  }

  return (<>
    <button className="btn btn-danger" onClick={logoutHandler}>Logout</button>
  </>)
}

export default LogoutBtn