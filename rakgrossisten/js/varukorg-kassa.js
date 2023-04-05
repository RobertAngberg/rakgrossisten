let sum = 0;
let sumInclShipping = 0;

cart.forEach((item, index) => {
  // I forEach får varje item ett index, gör detta till buttons ID
  item.id = index;
  let total = item.price * item.qty;
  document.getElementById("varukorg").innerHTML +=
    "<div class='sku-pic'><img class='image' src='" +
    item.img +
    "' /></div>" +
    "<div class='sku-text'>" +
    item.sku +
    "</div><div class='qty-and-btns'>" +
    "<button id='" +
    item.id +
    "' onclick=btnIncreaseClicked(this.id)>+</button>" +
    "<div>" +
    item.qty +
    "</div>" +
    "<button id='" +
    item.id +
    "' onclick='btnDecreaseClicked(this.id)'>-</button>" +
    "</div>" +
    "<div class='sku-total-sum'>" +
    total +
    "kr</div>";

  sum += total;
  sumInclShipping = sum + 29;
  if (sum > 499) {
    sumInclShipping = sum;
  }
});

document.getElementById("varukorg").innerHTML +=
  sum > 499
    ? "<div id='totalt'>Totalt inkl. gratis frakt: " +
      sumInclShipping +
      "kr</div>"
    : "<div id='totalt'>Totalt inkl. 29kr frakt: " +
      sumInclShipping +
      "kr</div>";

// Visa denna knapp endast på varukorg.php
const check = document.getElementById("till-kassan-container");
if (check) {
  check.innerHTML +=
    "<a href='kassa.php'><button id='till-kassan-btn'>Till kassan</button></a>";
}

function btnIncreaseClicked(id) {
  // Knappen har id som är samma som obj.id, sök med detta och hämta klickat obj
  const result = cart.find((item) => item.id == id);
  result.qty++;
  localStorage.setItem("cart", JSON.stringify(cart));
  location.reload();
}

function btnDecreaseClicked(id) {
  const result = cart.find((item) => item.id == id);
  result.qty--;
  // Ta bort hela obj om qty når 0
  if (result.qty < 1) {
    var index = cart.indexOf(result);
    if (index !== -1) {
      cart.splice(index, 1);
    }
  }
  localStorage.setItem("cart", JSON.stringify(cart));
  location.reload();
}

//Två nedan är dolda för user men används för att lägga in db
let hidden = "";

cart.forEach((item) => {
  // document.getElementById("kassa-hidden-input-items").value +=
  // item.qty + " x " + item.sku + ", " + item.price + "kr<br /><br />";
  hidden +=
    item.qty + " " + item.sku + " " + item.price * item.qty + "kr <br /> ";
});

document.getElementById("kassa-hidden-input-totalsum").value = sum;
document.getElementById("kassa-hidden-input-items").value = hidden;
