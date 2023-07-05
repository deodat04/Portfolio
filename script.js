
const container = document.querySelector('.container');
window.addEventListener('scroll', () => {
  const { scrollTop, clientHeight } = document.documentElement;
  const topContainer = container.getBoundingClientRect().top;
   if (scrollTop > (scrollTop + topContainer).toFixed() - 2 || topContainer < clientHeight - 200) {
    container.classList.add('active');
  }
});

/*
// Fonction pour ajouter les éléments au survol
console.log("Ok");
function addHoverElements(projectId) {
  const project = document.getElementById(projectId);
   // Créer un élément de texte
  const textElement = document.createElement("p");
  textElement.innerText = "Flamme";
  textElement.style.position = "absolute";
  textElement.style.top = "70%";
  textElement.style.left = "80%";
  textElement.style.transform = "translate(-50%, -50%)";
   // Créer un bouton
  const buttonElement = document.createElement("button");
  buttonElement.innerText = "Bouton";
  buttonElement.style.position = "absolute";
  buttonElement.style.bottom = "10px";
  buttonElement.style.left = "50%";
  buttonElement.style.transform = "translateX(-50%)";
   // Ajouter les éléments au projet
  project.appendChild(textElement);
  project.appendChild(buttonElement);
}
console.log("Ok");
 // Ajouter les éléments au survol de chaque projet
document.getElementById("project1").addEventListener("mouseenter", function() {
  addHoverElements("project1");
});
 document.getElementById("project2").addEventListener("mouseenter", function() {
  addHoverElements("project2");
});
document.getElementById("project3").addEventListener("mouseenter", function() {
  addHoverElements("project3");
});
document.getElementById("project4").addEventListener("mouseenter", function() {
  addHoverElements("project4");
});
document.getElementById("project5").addEventListener("mouseenter", function() {
  addHoverElements("project5");
});
document.getElementById("project6").addEventListener("mouseenter", function() {
  addHoverElements("project6");
});
console.log("Ok");
*/
