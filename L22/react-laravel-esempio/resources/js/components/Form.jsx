import React, { useEffect, useState } from 'react'

const Form = () => {

    const [csrf, setCsrf] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();

        try{

            const response = await fetch('/form-submit', {
                method: 'POST',
                headers:{
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf
                }
            })

        }catch(error){
            //gestisci errore
        }


    }

    useEffect(()=>{
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        setCsrf(csrfToken);
    },[])

  return (
        <form ></form>
  )
}

export default Form
