function search() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("label")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

{
  let check = "";
  function addWarning(name, lname, id, fan, photo) {
    var switchWarning = document.getElementById("form");
    if (check == id || switchWarning.style.display != "block") {
      if (switchWarning.style.display == "block") {
        switchWarning.style.display = "none";
        return;
      } else {
        switchWarning.style.display = "block";
      }
    }

    var timestamp = Date.now() + 10800000;
    var dateNtime = new Date(timestamp);

    var date = dateNtime.toISOString().substring(0, 10);
    var time = dateNtime.toISOString().substring(11, 16);

    document.getElementById("toDayTime").value = time;
    document.getElementById("toDayDate").value = date;
    document.getElementById("fanFirstName").value = name;
    document.getElementById("fanLastName").value = lname;
    document.getElementById("fanId").value = id;
    document.getElementById("fanOf").value = fan;
    document.getElementById("warningFanPhoto").src = photo;

    check = id;
  }
}

function dropMenu(e) {
  document.getElementById(e).classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".fa-ellipsis-vertical")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

$(document).ready(function () {
  var display_width = $(window).width();
  var hamburger = $("#hambuger_menu");
  var menu = $("#menubody");
  $(hamburger).click(function (e) {
    menu.toggleClass("open");
    hamburger.toggleClass("open");
  });
  $(".menu_body__item_wrapper li.has_child").each(function (index) {
    $(this).click(function (event) {
      $(".sub-menu").eq(index).slideToggle();
      event.preventDefault();
      event.stopImmediatePropagation();
    });
    $(".sub-menu").click(function (e) {
      e.stopPropagation();
      e.stopImmediatePropagation();
    });
  });
});



function set_message() {
  var day = new Date();
  var hr = day.getHours();
  var mesg = document.getElementById('hello');
  var name = mesg.textContent;
  if (hr >= 1 && hr <= 5) {
    mesg.innerHTML = "Good night";
  }
  else if (hr >= 6 && hr <= 11) {
    mesg.innerHTML = "Good morning";
  }
  else if (hr >= 12 && hr <= 16) {
    mesg.innerHTML = "Good afternoon";
  }
  else if (hr >= 17 && hr <= 23 || hr == 0) {

    mesg.innerHTML = "Good evening";
  }
  mesg.innerHTML += name;
}
window.onload = set_message;


function showData(data) {
  var div_list = document.getElementById('future-games');
  for (const key in data) {
    var art = document.createElement('article');
    art.innerHTML = "<img src=" + data[key].team_one_img + "> <img src=" + data[key].team_two_img + "> <section><span>" + data[key].date[0].day + "/" + data[key].date[0].month + "/" + data[key].date[0].year + " - " + data[key].time[0].hour + ":" + data[key].time[0].minute + "</span><div><section>" + data[key].team_one + "</section><section>" + data[key].team_two + "</section></div><span>Stadium status:</span><section>Security level is<span class='red'> High</span></section></section>";
    div_list.appendChild(art);
  }
}
let fg = document.getElementById('future-games');
if (fg) {
  fetch("data.json")
    .then(response => response.json())
    .then(data => showData(data.Games));
}

class Lightbox {
  static activate() {
    document.body.insertAdjacentHTML("beforeend", `
          <div class="lightbox" id="lightbox" style="display: none;">
              <div class="lightbox__inner">
                  <button type="button" class="lightbox__close">
                      &times;
                  </button>
                  <div class="lightbox__content"></div>
              </div>
          </div>
      `);



    const lightBox = document.querySelector("#lightbox");
    const btnClose = lightBox.querySelector(".lightbox__close");
    const content = lightBox.querySelector(".lightbox__content");
    const closeLightbox = () => {
      lightBox.style.display = "none";
      content.innerHTML = "";
    };


    lightBox.addEventListener("mousedown", e => {
      if (e.target.matches("#lightbox")) {
        closeLightbox();
      }
    });

    btnClose.addEventListener("click", () => {
      closeLightbox();
    });

  }

  static show(htmlOrElement) {
    const content = document.querySelector("#lightbox .lightbox__content");

    document.querySelector("#lightbox").style.display = null;

    if (typeof htmlOrElement === "string") {
      content.innerHTML = htmlOrElement;
    } else {
      content.innerHTML = "";
      content.appendChild(htmlOrElement);
    }
  }
}

function closebox() {
  const lightBox = document.querySelector("#lightbox");
  lightBox.style.display = "none";
  const content = lightBox.querySelector(".lightbox__content");
  content.innerHTML = "";

};

setTimeout(() => {
  $('#message').hide();
}, 3000);

function load_functions() {
  Lightbox.activate();
  window.onload = set_message();
}
