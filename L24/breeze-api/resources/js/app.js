import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/**
Puoi effettuare una chiamata fac che invii i cookie ricevuti in fase di autenticazione, se laravel utilizza le sessioni come sistema Preparando una chiamata di questo tipo con credentials include
credentials:include Fa sì che i cookie impostati lato client vengano inviati al backend, dato che questi cookie saranno stati impostati in fase di login. Effettivamente Avremo tutto quello che ci serve per effettuare richieste autenticate
fetch('/profile',{
    method: 'POST',
    headers: {
        'Content-Type':'application/json',
    },
    credentials: 'include'
})
*/
