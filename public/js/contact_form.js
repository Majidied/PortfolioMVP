// contact_form.js

document.getElementById('contact-form').addEventListener('submit', function(event) {
    // Empêcher le comportement de soumission par défaut du formulaire
    // event.preventDefault();

    // Récupérer les données du formulaire
    var name = event.target.elements.name.value;
    var email = event.target.elements.email.value;
    var message = event.target.elements.message.value;

    // Envoyer une requête POST à l'API
    fetch('http://127.0.0.1:8000/api/contacts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // Si vous utilisez Laravel CSRF protection, ajoutez le token ici
            // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
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
