function qs(selector){
  return document.querySelector(selector);
}

var add_button = qs("#add_cart");
var add_msg = qs("#add_msg");

// code snippet by Elias Zamaria
// https://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript/2901298#2901298
function numberWithCommas(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

var products = []

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
  update_products();

  for(let i = 0; i <= products.length - 1; i++){
    if (products[i].quantity > 0){
      let name = products[i].name;
      let quant = products[i].quantity;
      let price = numberWithCommas(products[i].price * quant) + " VND";
      let row = cart_table.insertRow(-1);
      
      row.innerHTML = `<tr>
      <td>${name}</td>
      <td><input type="number" value="${quant}" onchange="update_quant()"</td>
      <td>${price}</td>
      </tr>`

      get_total()
    }
  }
}

function update_products(){
  let temp_product = JSON.parse(localStorage.product);
  products = temp_product;
}

function update_quant(){
  let new_prod = [];
  for (let r = 1; r <= cart_table.rows.length - 1; r++){
    new_prod.push({
      "name": cart_table.rows[r].cells[0].innerHTML,
      "quantity": parseInt(cart_table.rows[r].cells[1].childNodes[0].value)
    })
  }
  let items = JSON.parse(localStorage.product);
  for (let i = 0; i <= new_prod.length - 1; i++){
    for (item of items){
      if (item.name == new_prod[i].name){
        item.quantity = new_prod[i].quantity;
      }
    }
  }
  localStorage.product = JSON.stringify(items);
  fill_table();
}

if(cart_table != null) {
  cart_table.addEventListener("DOMContentLoaded", fill_table())
}

if(add_button != null) {
  // This is the timer for the status msg after clicking add
  var blink;
  add_button.addEventListener("click", function add_cart(){
      let prod_name = qs("#product_name").innerHTML;
      let prod_price = qs("#product_price").innerHTML.replaceAll(".", "");
      if (localStorage.product) {
        let items = JSON.parse(localStorage.product);
        let contain = false;
        for (item of items){
          if (item.name == prod_name){
            item.quantity++;
            contain = true;
            break;
          }
        }
        if(!contain){
          items.push({
            "name": prod_name,
            "quantity": 1,
            "price": prod_price
          })
        }
        localStorage.product = JSON.stringify(items);
      }
      else {
        let items = [];
        items.push({
          "name": prod_name,
          "quantity": 1,
          "price": prod_price
        })
        localStorage.product = JSON.stringify(items);
        }
      add_msg.style.display = "inline-block";
      add_msg.innerText = `${prod_name} added to cart`
      clearInterval(blink);
      var timesRun = 0;
      blink = setInterval(function(){
          timesRun += 1;
          if(timesRun == 6){
            add_msg.style.display = "";
            clearInterval(blink);
          }
          add_msg.style.opacity = (add_msg.style.opacity == 0.5) ? 1 : 0.5;
        }, 400);
    }
  )
}