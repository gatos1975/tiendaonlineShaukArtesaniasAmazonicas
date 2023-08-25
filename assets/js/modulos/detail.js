const btnAddCart = document.querySelector("#btnAddCart");
const cantidad = document.querySelector("#product-quanity");
const idproducto = document.querySelector("#idProducto");
document.addEventListener("DOMContentLoaded", function () {
  btnAddCart.addEventListener("click", function () {
    agregarCarrito(idproducto.value, cantidad.value);
  });
});
