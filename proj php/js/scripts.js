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

function addWarningMobile() {
  var timestamp = Date.now() + 10800000;
  var dateNtime = new Date(timestamp);

  var date = dateNtime.toISOString().substring(0, 10);
  var time = dateNtime.toISOString().substring(11, 16);
  document.get;
  // location.href = "form.html";
  document.getElementById("toDayTimeMobile").value = time;
  document.getElementById("toDayDateMobile").value = date;
  location.href = "form.html";
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropMenu(e) {
  document.getElementById(e).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
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

// $(document).ready(function () {
//     $('#dropbtn').click('click touchstart', function myFunction() {
//         document.getElementById("myDropdown").classList.toggle("show");

//     });
// });

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


{
  

function set_message(){

  // alert("im in");
  var day = new Date();
 
  var hr = day.getHours();
  // alert(hr);
  
  var mesg = document.getElementById('hello');
  
  if( hr >= 1 || hr <= 5){
    mesg.innerHTML += "Good night";
  }
  else if( hr >= 6 || hr <=11){
    mesg.innerHTML += "Good morning";
  }
  else if( hr >= 12 || hr <=16){
    mesg.innerHTML += "Good afternoon";
  }
  else if( hr >= 17 || hr <= 00){
    
    mesg.innerHTML += "Good evening";
  }
}
}
  // function save_data(){

  //       var form_element = document.getElementsByClassName('form_data');

  //       var form_data = new FormData();

  //       for(var count = 0; count < form_element.length; count++){

  //           form_data.append(form_element[count].name, form_element[count].value);
  //       }

  //       document.getElementById('button').disabled = true;

  //       var ajax_request;

  //       if(window.XMLHttpRequest){
  //           ajax_request = new XMLHttpRequest();
  //       }
  //       else if(window.ActiveXObject){
  //           ajax_request = new ActiveXObject("Microsoft.XMLJTTP");
  //       }

  //       ajax_request.open('GET', 'saveWarning.php');

  //       ajax_request.send(form_data);
        
  //       ajax_request.onreadystatechange = function()
  //       {
  //         if(ajax_request.readyState == 4 && ajax_request.status == 200 )
  //         {
  //           document.getElementByid('button').disabled = false;

  //           document.getElementById('sample_form').reset();

  //           document.getElementByid('message').inneHTML = ajax_request.responseText;

  //           setTimeout(function(){
              
  //             document.getElementById('message').innerHTML = '';

  //           }, 2000)
  //         }
  //       }

  // }

// function showData(data){
  
//   document.getElementByid("test").src = '${data.Games[0].team_one_img}';
//   // document.getElementByTagName("img")[1].src='${data.Games[0].team_two_img}';
  
// }



// fetch("data.json")
//   .then(response =>response.json())
//   .then(data => showData(data));



