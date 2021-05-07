function qs(selector){
  return document.querySelector(selector);
}

auto_scroll = document.querySelectorAll(".scroll");
var scroll_time = [];
var scroll_again = [];
for (let s of auto_scroll){
  scroll_time.push(null);
  scroll_again.push(null);
}

function scroll_bar(){
  for (let i = 0; i < auto_scroll.length; i++){
    scroll_item(i);  
  }
}

function scroll_item(i){
  setTimeout(function(){
  clearInterval(scroll_time[i])
    scroll_time[i] = setInterval(function(){
      if(auto_scroll[i].offsetWidth + auto_scroll[i].scrollLeft >= auto_scroll[i].scrollWidth){
        clearInterval(scroll_time[i])
        setTimeout(function(){
          auto_scroll[i].scrollLeft = 0
          scroll_item(i)
        }, 1000);
      }
      auto_scroll[i].scrollLeft += 1;
      }, 15)}, 1000)
}

window.addEventListener("DOMContentLoaded", scroll_bar())
for (let i = 0; i < auto_scroll.length; i++){
  auto_scroll[i].addEventListener("mouseover", function(){
    clearInterval(scroll_time[i])
  })
  auto_scroll[i].addEventListener("mouseout", function(){
    clearTimeout(scroll_again[i])
    scroll_again[i] = setTimeout(function(){
      scroll_item(i);
    }, 1000);
  })
  auto_scroll[i].addEventListener("touchstart", function(){
    clearInterval(scroll_time[i])
  })
  auto_scroll[i].addEventListener("touchend", function(){
    clearTimeout(scroll_again[i])
    scroll_again[i] = setTimeout(function(){
      scroll_item(i);
    }, 1000);
  })
}