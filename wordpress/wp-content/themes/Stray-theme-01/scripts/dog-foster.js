


var removFoster = document.querySelector("#remova-foster");

var fosterButtoned = document.querySelector("#buddypress .fostion");
var fosterBox = document.querySelector("#foster-modal");

fosterButtoned.addEventListener("click", function(){
  fosterBox.style.display = "block";
});

removFoster.addEventListener("click", function(){
  fosterBox.style.display = "none";
});


window.onclick = function(event) {
  if (event.target === item) {
      fosterBox.style.display = "none";
  }
}
