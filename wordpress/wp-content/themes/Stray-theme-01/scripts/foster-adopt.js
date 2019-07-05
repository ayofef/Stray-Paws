var fostButton = document.querySelector("#fostered");
var fostBox = document.querySelector("#fostered-light");
var removeFeed = document.querySelector("#removal-feed");


fostButton.addEventListener("click", function(){
  fostBox.style.display = "block";
});

removeFeed.addEventListener("click", function(){
  fostBox.style.display = "none";
  location.replace("http://localhost/wordpress/stray-paws/dogs/")
});

window.onclick = function(event) {
  if (event.target === fostBox) {
      fostBox.style.display = "none";
      location.replace("http://localhost/wordpress/stray-paws/dogs/")
  }
}
