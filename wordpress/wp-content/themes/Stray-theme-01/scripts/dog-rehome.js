

var removRehome = document.querySelector("#remova-rehomed");

var rehomingButton = document.querySelector("#buddypress .adoption");
var rehomeBox = document.querySelector("#rehome-modal");

rehomingButton.addEventListener("click", function(){
  rehomeBox.style.display = "block";
  console.log("works")
});

removRehome.addEventListener("click", function(){
  rehomeBox.style.display = "none";
});


window.onclick = function(event) {
  if (event.target === item) {
      rehomeBox.style.display = "none";
  }
}
