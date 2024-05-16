// contact_form.js

document.getElementById('contact-form').addEventListener('submit', function(event) {
    var name = event.target.elements.name.value;
    var email = event.target.elements.email.value;
    /**
     * The message entered by the user in the contact form.
     * @type {string}
     */
    var message = event.target.elements.message.value;

    // Envoyer une requête POST à l'API
    fetch('http://127.0.0.1:8000/api/contacts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            name: name,
            email: email,
            message: message,
        }),
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch((error) => {
        console.error('Error:', error);
    });
});
