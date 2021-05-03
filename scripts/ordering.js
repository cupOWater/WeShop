function qs(selector){
  return document.querySelector(selector);
}

var add_button = qs("#add_cart");

// code snippet by Elias Zamaria
// https://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript/2901298#2901298
function numberWithCommas(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

var products = [
  {
    "name": "Oak Wood Table",
    "quantity": 2,
    "price": 500000
  },
  {
    "name": "Bookshelf",
    "quantity": 1,
    "price": 850000
  }
]

var cart_table = qs(".cart_table");
var total_field = qs("#total");
var coupon_field = qs("#coupon");

function get_total(){
  let total = 0;
  for (let items of products){
    total += items.price * items.quantity;
  }
  total_field.innerHTML = numberWithCommas(total) + " VND";
}

function fill_table(){
  for(let i = 0; i <= products.length - 1; i++){
    if (products[i].quantity > 0){
      let name = products[i].name;
      let quant = products[i].quantity;
      let price = numberWithCommas(products[i].price * quant) + " VND";
      let row = cart_table.insertRow(-1);
      
      row.innerHTML = `<tr>
      <td>${name}</td>
      <td><input type="number" value="${quant}"</td>
      <td>${price}</td>
      </tr>`

      get_total()
    }
  }
}

cart_table.addEventListener("DOMContentLoaded", fill_table())