// Fonction d'initialisation
function init() {
  // Ajout d'un gestionnaire d'événements "submit" au formulaire avec l'ID "formInscription"
  document.getElementById("formInscription").addEventListener("submit", validate);  
  document.getElementById("showPassword").onclick = togglePasswordVisibility;
  document.getElementById("connexionShowPassword").onclick = connexionTogglePasswordVisibility;
  }
  
  // Fonction de validation
  function validate(event) {    
  // Récupération de la valeur des champs "nom", "email" et "password"
  var name = document.getElementById("nom").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var passwordRepeat = document.getElementById("password_repeat").value;
  // Définition de l'expression régulière pour vérifier le nom
var namePattern = /^[a-zA-Z\s]+$/;

// Définition de l'expression régulière pour vérifier l'adresse e-mail
var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// Définition de l'expression régulière pour vérifier le mot de passe
var passwordPattern = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{6,}$/;



// Vérification de la validité du nom
if (name.length < 5 || !namePattern.test(name)) {
  // Empêche la soumission du formulaire si le nom est invalide
  event.preventDefault();
  // Affichage d'un message d'erreur
  document.getElementById("message").innerHTML = "Le nom doit contenir au moins 5 caractères et ne pas comporter de caractères spéciaux.";
} 
// Vérification de la validité de l'adresse e-mail
else if (!emailPattern.test(email)) {
  // Empêche la soumission du formulaire si l'adresse e-mail est invalide
  event.preventDefault();
  // Affichage d'un message d'erreur
  document.getElementById("message").innerHTML = "Adresse e-mail non valide.";
} 
// Vérification de la validité du mot de passe
else if (password.length < 6 || !passwordPattern.test(password)) {
  // Empêche la soumission du formulaire si le mot de passe est invalide
  event.preventDefault();
  // Affichage d'un message d'erreur
  document.getElementById("message").innerHTML = "Le mot de passe doit contenir au moins 6 caractères, une lettre et un caractère spécial !!";
}

}

//Création de la fonction mot de passe visible pour l inscription
function togglePasswordVisibility() {
  //Recuperation des elements
  let passwordInput = document.getElementById("password")
  let checkbox = document.getElementById("showPassword")
  let label = document.getElementById("labelShowPassword")
  //si checkbox activer
if (checkbox.checked) {
  //Bascule le type en visible
  passwordInput.type = "text"
  //changement de la phrase
  label.innerHTML = "Cacher le mot de passe"
  //sinon
} else {
  //Bascule le type en non visible
  passwordInput.type = "password"
  //changement de la phrase
  label.innerHTML = "Afficher le mot de passe"
  }

  // Le formulaire est valide

}

//Création de la fonction mot de passe visible pour l connexion
function connexionTogglePasswordVisibility() {
  //Recuperation des elements
  let passwordInput = document.getElementById("connexionPassword")
  let checkbox = document.getElementById("connexionShowPassword")
  let label = document.getElementById("connexionLabelShowPassword")
  //si checkbox activer
if (checkbox.checked) {
  //Bascule le type en visible
  passwordInput.type = "text"
  //changement de la phrase
  label.innerHTML = "Cacher le mot de passe"
  //sinon
} else {
  //Bascule le type en non visible
  passwordInput.type = "password"
  //changement de la phrase
  label.innerHTML = "Afficher le mot de passe"
  }
}



// Initialisation du code
init();
  