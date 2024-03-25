AOS.init();

//Header styling
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 250) {
      $("header").addClass("scrolled");
    } else {
      $("header").removeClass("scrolled");
    }
  });
  if ($(window).width() < 900) {
    $("header").addClass("scrolled");
  }
  $(window).on("resize", function () {
    if ($(window).width() < 900) {
      $("header").addClass("scrolled");
    }
  });
});

//Mark text effect
(function (document) {
  const markers = [...document.querySelectorAll("mark")];

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.intersectionRatio > 0) {
          entry.target.style.animationPlayState = "running";
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.8,
    }
  );

  markers.forEach((mark) => {
    observer.observe(mark);
  });
})(document);

//roling text effect
let elements = document.querySelectorAll(".title-anim");

elements.forEach((element) => {
  let innerText = element.innerText;
  element.innerHTML = "";

  let textContainer = document.createElement("div");
  textContainer.classList.add("block");

  for (let letter of innerText) {
    let span = document.createElement("span");
    span.innerText = letter.trim() === "" ? "\xa0" : letter;
    span.classList.add("letter");
    textContainer.appendChild(span);
  }

  element.appendChild(textContainer);
  element.appendChild(textContainer.cloneNode(true));
});

// highlight current day on opeining hours
$(document).ready(function () {
  $(".opening-hours li").eq(new Date().getDay()).addClass("today");
});

var vid = document.querySelector("video");
vid.volume = 0;
