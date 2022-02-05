$( "#click-me" ).click(function() {
    $( "#show" ).toggle( "slow", function() {
    });
  });
  
  $( ".x" ).click(function() {
    $( ".container" ).toggle( "slow", function() {
      // Animation complete.  
    });
  });

  let popup = document.querySelector(".popup");
let button = document.querySelector("span");

button.onclick = function(){;

  setInterval(function(){
       popup.remove()
  },5000)
}