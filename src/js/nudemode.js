 function nudeMode() {
    var x = document.getElementById("dressedSwiper");
    var y = document.getElementById("nakedSwiper");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    };
    if (y.style.display === "block") {
      y.style.display = "none";
    } else {
      y.style.display = "block";
    }
  }

