/*  Table of content
    1. Listeners
        1.1 Accordion 
        1.2 Burger Menu
        1.3 Submit Anchor
        1.4 Deselect
        
    2.Functions
        2.1 typewriter
        2.2 accordion
        2.3 Burger Menu
        2.4 Submit Anchor
*/

/*  =========
    Listeners
    =======*/

// 1.1 Accordion
// Event listener
if (document.querySelector(".btn-accordion") != null) {
  const btnAccordion = document
    .querySelector(".btn-accordion")
    .addEventListener("click", accordion);

  // set display to none
  document.querySelector(".accordion").style.display = "none";
}

// 1.2 Burger Menu
// Event listener
const btnBurger = document
  .querySelector(".burger-menu-btn")
  .addEventListener("click", burgerMenu);

// set display to none
if (screen.width <= "1200") {
  document.querySelector(".burger-menu").style.display = "none";
} else {
  document.querySelector(".burger-menu").style.display = "flex";
}

// 1.3 Submit Anchor
if (document.querySelector("#logInPage") != null) {
  const logIn = document
    .querySelector("#logInPage")
    .addEventListener("click", submit);
}

// 1.3.2 Submit anchor for new post
if (document.querySelector("#postNew") != null) {
  const logIn = document
    .querySelector("#postNew")
    .addEventListener("click", submit);
}

// 1.4 Deselect
const logIn = document
  .querySelector(".deselect")
  .addEventListener("click", deselect);

/*  =========
    Functions
    =======*/

// 2.1 typewriter
function typewriter(p) {
  var txt = [
    "Temporär text",
    "Lorem ipsum dolor sit amet consectetur",
    "ladidadidada",
    "änno mer temporär text",
    "hallååå varför sitter du o kollar på de här så länge",
  ];
  var i = 0;
  var speed = 100;
  var inner = document.getElementById("type");
  if (p[1] == txt.length) {
    p[1] = 0;
  }
  p[0] = 0;
  var type = setInterval(() => {
    if (i <= txt[p[1]].length && p[0] != 1) {
      inner.innerHTML += txt[p[1]].charAt(i);
      inner.style.margin = "0 auto";
      i++;
    } else {
      clearInterval(type);
      p[0] = 1;
    }
  }, speed);

  var erase = setInterval(() => {
    if (p[0] > 0) {
      inner.innerHTML = txt[p[1]].substring(0, i - 1);
      inner.style.margin = "0 auto";
      i--;
      if (i == 0) {
        clearInterval(erase);
        p[1]++;
        typewriter(p);
      }
    }
  }, speed);
}

// 2.2 Accordion
function accordion() {
  let show = document.querySelector(".accordion");
  let deselect = document.querySelector(".deselect");
  let btn = document.querySelector(".btn-accordion img");
  if (show.style.display == "none") {
    show.style.display = "block";
    deselect.style.zIndex = "100000";

    var i = -90;
    var rotateP = setInterval(function () {
      btn.style.transform = "rotate(" + i + "deg)";
      if (i == 0) {
        clearInterval(rotateP);
      }
      i = i + 10;
    }, 1);
  } else {
    show.style.display = "none";
    deselect.style.zIndex = "-100000";

    var i = 0;
    var rotateN = setInterval(function () {
      btn.style.transform = "rotate(" + i + "deg)";
      if (i == -90) {
        clearInterval(rotateN);
      }
      i = i - 10;
    }, 1);
  }
}

// 2.3 Burger Menu
function burgerMenu() {
  let show = document.querySelector(".burger-menu");
  if (show.style.display == "none") {
    show.style.display = "flex";
  } else {
    show.style.display = "none";
  }
}

// 2.4 Submit Anchor
function submit() {
  if (document.querySelector("#logInPage") != null) {
    document.getElementById("logDiv").submit();
  }
  if (document.querySelector("#postNew") != null) {
    document.getElementById("newPost").submit();
  }
}

//2.5 Deselect
function deselect() {
  if (document.querySelector(".btn-accordion") != null) {
    // set accordion display to none
    document.querySelector(".accordion").style.display = "none";
    let deselect = document.querySelector(".deselect");
    deselect.style.zIndex = "-100000";
    let btn = document.querySelector(".btn-accordion img");
    var i = 0;
    var rotateN = setInterval(function () {
      btn.style.transform = "rotate(" + i + "deg)";
      if (i == -90) {
        clearInterval(rotateN);
      }
      i = i - 10;
    }, 1);
  }

  // set burger display to none or flex
  if (screen.width <= "1200") {
    document.querySelector(".burger-menu").style.display = "none";
  } else {
    document.querySelector(".burger-menu").style.display = "flex";
  }
}
