    const handleSubmit = async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target); 
        // Crea FormData direttamente dal form

        try {
            // Effettua la chiamata POST verso il tuo endpoint futuro
            const response = await fetch('url', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                const result = await response.json();
                e.target.reset(); // Resetta il form
            } else {
                //
            }
        } catch (error) {
            //
        }
    };