// Récupération des éléments du DOM
const passwordInput = document.getElementById('password');
const repeatPasswordInput = document.getElementById('password_repeat');
const form = document.getElementById('formInscription');
const message = document.getElementById('message');

// Fonction de validation du formulaire
function validateForm(event) {
  // Annulation de l'envoi du formulaire par défaut
  event.preventDefault();

  // Vérification que les mots de passe sont identiques
  if (passwordInput.value !== repeatPasswordInput.value) {
    message.textContent = 'Les mots de passe ne sont pas identiques';
    message.className = 'bg-danger p-2';
    return;
  }

  // Vérification que le mot de passe respecte les critères de sécurité (au moins 8 caractères, 1 lettre majuscule, 1 lettre minuscule, 1 chiffre et 1 caractère spécial)
  const passwordRegex = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{6,}$/;
  if (!passwordRegex.test(passwordInput.value)) {
    message.textContent = 'Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial';
    message.className = 'bg-danger p-2';
    return;
  }

  // Soumission du formulaire si toutes les conditions sont remplies
  form.submit();
}

// Écouteur d'événement sur le formulaire pour déclencher la validation lors de la soumission
form.addEventListener('submit', validateForm);
