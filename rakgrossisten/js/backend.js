const makeMainWider = document.getElementsByTagName("main")[0];
makeMainWider.style.width = "100%";

const skickad = document.querySelectorAll(".skickad");
const färdig = document.querySelectorAll(".färdig");
const misslyckad = document.querySelectorAll(".misslyckad");
const skuld = document.querySelectorAll(".skuld");
const påminnelse = document.querySelectorAll(".påminnelse");
const inkasso = document.querySelectorAll(".inkasso");

skickad.forEach((skickad) => {
  if (skickad.innerText !== "Skickad:") {
    skickad.style.backgroundColor = "rgb(210,187,36)";
  }
});

påminnelse.forEach((påminnelse) => {
  if (påminnelse.innerText !== "Påminnelse:") {
    påminnelse.style.backgroundColor = "rgb(0,51,102)";
  }
});

inkasso.forEach((inkasso) => {
  if (inkasso.innerText !== "Inkasso:") {
    inkasso.style.backgroundColor = "rgb(0,51,102)";
  }
});

färdig.forEach((färdig) => {
  if (färdig.innerText !== "Färdig:") {
    färdig.style.backgroundColor = "rgb(113,174,92)";
  }
});

misslyckad.forEach((misslyckad) => {
  if (misslyckad.innerText !== "Misslyckad:") {
    misslyckad.style.backgroundColor = "rgb(102,0,0)";
  }
});

skuld.forEach((skuld) => {
  if (skuld.innerText !== "Skuld:") {
    skuld.style.backgroundColor = "rgb(102,0,0)";
  }
});
