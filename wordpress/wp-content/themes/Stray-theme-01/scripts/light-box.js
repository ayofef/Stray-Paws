
var fundButton = document.querySelector("#funding");
var fundBox = document.querySelector("#donate-light");

var itemButton = document.querySelector("#items-fund");
var item = document.querySelector("#donate-item");

var voluntButton = document.querySelector("#volunts");
var volunt = document.querySelector("#voluntary");


var removi = document.querySelector("#remova");
var removind = document.querySelector("#removald");
var removing = document.querySelector("#removals");
var removThank = document.querySelector("#remova-thank");

var thankButtoned = document.querySelector("#checked-outed");
var thankButton = document.querySelector("#checked-out");
var thankBox = document.querySelector("#thank-donate-modal");

thankButtoned.addEventListener("click", function(){
  thankBox.style.display = "block";
  fundBox.style.display = "none";
  item.style.display = "none";
});
thankButton.addEventListener("click", function(){
  thankBox.style.display = "block";
  fundBox.style.display = "none";
  item.style.display = "none";
});

fundButton.addEventListener("click", function(){
  fundBox.style.display = "block";
});

itemButton.addEventListener("click", function(){
  item.style.display = "block";
});

voluntButton.addEventListener("click", function(){
volunt.style.display = "block";
});

removThank.addEventListener("click", function(){
  thankBox.style.display = "none";
});

removi.addEventListener("click", function(){
  fundBox.style.display = "none";
});
removind.addEventListener("click", function(){
  item.style.display = "none";
});
removing.addEventListener("click", function(){
  volunt.style.display = "none";
});


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  console.log("hey");
  if (event.target === fundBox) {
    fundBox.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target === item) {
      item.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target === volunt) {
      volunt.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target === volunt) {
      thankBox.style.display = "none";
  }
}
