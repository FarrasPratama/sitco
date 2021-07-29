function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

  function on() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("dots2").style.display = "none";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("dots2").style.display = "inline";
  }

  function on1() {
    document.getElementById("overlay1").style.display = "block";
    document.getElementById("dots21").style.display = "none";
  }
  
  function off1() {
    document.getElementById("overlay1").style.display = "none";
    document.getElementById("dots21").style.display = "inline";
  }

  function on2() {
    document.getElementById("overlay2").style.display = "block";
    document.getElementById("dots22").style.display = "none";
  }
  
  function off2() {
    document.getElementById("overlay2").style.display = "none";
    document.getElementById("dots22").style.display = "inline";
  }

  function myFunction1() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots3.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }