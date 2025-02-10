import  { isUserLoggedIn } from '../utils/AuthHelper'
import { Navigate } from 'react-router-dom';

const AuthGuard = ({children}) => {
  return isUserLoggedIn() ? children : <Navigate to="/login" />;
}

export default AuthGuard