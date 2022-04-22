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


$('a[data-toggle="dropdown"]').click(function() {
    dropDownFixPosition($(this), $('.dropdown-menu'));
  });
  
  function dropDownFixPosition(a, dropdown) {
    var dropDownTop = a.offset().top + a.outerHeight();
    dropdown.css('top', dropDownTop + "px");
    //Delete - dropdown.width() if you want menu to be bottom right of link
    dropdown.css('left', a.offset().left - dropdown.width() + "px");
  }
  