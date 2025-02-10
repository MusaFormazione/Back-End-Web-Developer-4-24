import apiConfig from '../config/apiConfig';
export default async function apiFetch(route, method = 'GET', body = undefined, hasToken = true) {
//Questa funzione serve a facilitare le operazioni legate alle chiamate autenticate o meno 
//Ci permetterà di ridurre la scrittura di codice e riutilizzare gli headers e le impostazioni legate alle chiamate fetch. 

//Imposto gli headers di default 
    let headers = {
        'Content-Type': 'application/json',
    }

//Se la chiamata è autenticata, aggiungo anche il token Bearer
    if(hasToken && isUserLoggedIn())
        headers = {...headers, 'Authorization': `Bearer ${getAccessToken()}`}

    //Predispongo le options per la chiamata fetch (metodo e headers)
    const options = {
        method,
        headers
    }
//Se la chiamata deve inviare dati al back end, mi servirà un body, quindi qualora fosse fornito vado ad aggiungere una proprietà body alle opzioni 
    if(body) options.body = JSON.stringify(body)

    try{
        const url = `${apiConfig.baseUrl}/${route}`;
        const response = await fetch(url, options);

        if(!response.ok){
            throw new Error(`Errore ${response.status}: ${response.statusText}`);
        }

        return await response.json();
    }catch(err){
        console.error(err);
    }

}

export function getAccessToken(){
    const accessDataString = localStorage.getItem('access_data');
    if(!accessDataString) return null;

    const accessData = JSON.parse(accessDataString);

    return accessData.access_token
}

export function getUser(){
    const accessDataString = localStorage.getItem('access_data');
    if(!accessDataString) return null;

    const accessData = JSON.parse(accessDataString);

    return accessData.user
}

export function isUserLoggedIn(){
    return !!getUser()
}

export function logout(){
    apiFetch('/logout','POST');
    localStorage.removeItem('access_data');
}