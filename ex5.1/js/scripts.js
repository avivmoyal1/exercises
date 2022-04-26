
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


// $('a[data-toggle="dropdown"]').click(function () {
//     dropDownFixPosition($(this), $('.dropdown-menu'));
// });

// function dropDownFixPosition(a, dropdown) {
//     var dropDownTop = a.offset().top + a.outerHeight();
//     dropdown.css('top', dropDownTop + "px");
//     //Delete - dropdown.width() if you want menu to be bottom right of link
//     dropdown.css('left', a.offset().left - dropdown.width() + "px");
// }

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

        var timestamp = Date.now()
        var dateNtime = new Date(timestamp);

        var date = dateNtime.toISOString().substring(0, 10);
        var time = dateNtime.toISOString().substring(11, 16);

        document.getElementById("toDayTime").value = time;
        document.getElementById("toDayDate").value = date;
        document.getElementById("fanFirstName").innerHTML = name;
        document.getElementById("fanLastName").innerHTML = lname;
        document.getElementById("fanId").innerHTML = id;
        document.getElementById("fanOf").innerHTML = fan;
        document.getElementById("warningFanPhoto").src = photo;

        check = id;

    }
}


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('#dropbtn')) {
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



// $(document).ready(function () {
//     $('#dropbtn').click('click touchstart', function myFunction() {
//         document.getElementById("myDropdown").classList.toggle("show");

//     });
// });