const cart = JSON.parse(localStorage.getItem("cart")) || [];

// Uppdatera siffran som visar hur många items i cart
let cartIconNumber = 0;

cart.forEach((item) => {
  // Den ändrar av någon anledning type till string... ändra tillbaka
  item.qty = +item.qty;
  cartIconNumber += item.qty;
});

document.getElementById("header-cart-qty-number").textContent = cartIconNumber;
document.getElementById("desktop-header-cart-qty-number").textContent =
  cartIconNumber;

// Mobilmeny
function openNav() {
  document.getElementById("menu").style.width = "100%";
}
function closeNav() {
  document.getElementById("menu").style.width = "0";
}

// Slider

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

// Köpknapp
if (document.getElementById("buy-button") !== null) {
  document.getElementById("buy-button").addEventListener("click", () => {
    let sku = document.getElementsByTagName("h1");
    sku = sku[0].innerHTML;
    const qty = document.getElementById("item-qty").value;
    let price = document.getElementById("product-page-price").innerHTML;
    price = price.replace("kr", "");
    price = +price;
    const img = document.querySelector(".slide > img").src;

    obj = {
      sku: sku,
      qty: qty,
      price: price,
      img: img,
    };

    cart.push(obj);
    localStorage.setItem("cart", JSON.stringify(cart));
    location.reload();
    document.getElementById("buy-button").innerHTML =
      "Tillagd! <br>Tryck igen för att lägga till fler.";
  });
}
