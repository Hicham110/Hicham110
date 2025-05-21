
const Div1 = document.createElement('div');
Div1.className = 'div1';


const P1 = document.createElement('p');
P1.textContent = "Ceci est un paragraphe";

Div1.appendChild(P1);

document.body.appendChild(Div1);

P1.textContent = "Le texte a été modifié";

P1.style.backgroundColor = "lightblue";
P1.style.textAlign = "center";


Div1.addEventListener("click", function () {
  P1.textContent = "Un clic a été détecté";
});
