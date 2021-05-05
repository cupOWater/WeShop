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

function clear_table(){
  for (let r = 0; r <= cart_table.rows.length - 1; r++){
    cart_table.deleteRow(1);
  }
}

function fill_table(){
  if(cart_table.rows.length > 1) {
    clear_table();
  }
  

  for(let i = 0; i <= products.length - 1; i++){
    if (products[i].quantity > 0){
      let name = products[i].name;
      let quant = products[i].quantity;
      let price = numberWithCommas(products[i].price * quant) + " VND";
      let row = cart_table.insertRow(-1);
      
      row.innerHTML = `<tr>
      <td>${name}</td>
      <td><input type="number" value="${quant}" onchange="get_quant()"</td>
      <td>${price}</td>
      </tr>`

      get_total()
    }
  }
}


function get_quant(){
  let new_prod = [];
  for (let r = 1; r <= cart_table.rows.length - 1; r++){
    new_prod.push({
      "name": cart_table.rows[r].cells[0].innerHTML,
      "quantity": parseInt(cart_table.rows[r].cells[1].childNodes[0].value)
    })
  }
  
  for (let i = 0; i <= new_prod.length - 1; i++){
    if(products[i].name == new_prod[i].name){
      products[i].quantity = new_prod[i].quantity;
    }
  }

  fill_table();
}

cart_table.addEventListener("DOMContentLoaded", fill_table())