function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
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
        console.log(check);
        var switchWarning = document.getElementById("form");
        if (check == id || switchWarning.style.display != "block") {
            if (switchWarning.style.display == "block") {
                switchWarning.style.display = "none";
                return;
            }
            else {
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
    if (!event.target.matches('.fa-ellipsis-vertical')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}


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
        $('.sub-menu').eq(index).slideToggle();
        event.preventDefault();
        event.stopImmediatePropagation();
      });
      $('.sub-menu').click(function (e){
        e.stopPropagation();
        e.stopImmediatePropagation();
      })
    })
  })