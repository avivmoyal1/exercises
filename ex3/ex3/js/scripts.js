

function mulitiBox() {

    var multiElem = document.getElementById("multi");
    var list = "";
    for (var i = 0; i < 33; i++) {

        list += "<article>";

        for (var j = 0; j < 4; j++) {

            list += "<section onclick='colorChange(this)'></section>";
        }
        list += "</article>";
    }
    multiElem.innerHTML = list;
};


function colorChange(changeThis) {
    if (changeThis.style.backgroundColor == "lightblue")
        changeThis.style.backgroundColor = "";
    
    else
        changeThis.style.backgroundColor = "lightblue"

}
{
    let cont = 4;

    function plusClick() {
        var palettea = ["#f9d5e5", "#eeac99", "#e06377", "#c83349"];
        var asaidBox = document.getElementsByClassName("box-layout-3")[0];
        var mainBox = document.getElementsByClassName("box-layout-3")[1];

        if (cont == 4) {
            asaidBox.children[0].children[0].innerHTML = "W";
            asaidBox.children[0].children[0].style.opacity = 1;
            asaidBox.children[0].children[0].style.backgroundColor = palettea[0];

            for (var i = 0; i < 33; i++) {
                mainBox.children[i].children[0].innerHTML = "W";
                mainBox.children[i].children[0].style.opacity = 1;
                mainBox.children[i].children[0].style.backgroundColor = palettea[0];
            }
            cont--;
            return;
        }
        if (cont == 3) {
            asaidBox.children[0].children[1].innerHTML = "E";
            asaidBox.children[0].children[1].style.opacity = 1;
            asaidBox.children[0].children[1].style.backgroundColor = palettea[1];
            for (var i = 0; i < 33; i++) {
                mainBox.children[i].children[1].innerHTML = "E";
                mainBox.children[i].children[1].style.opacity = 1;
                mainBox.children[i].children[1].style.backgroundColor = palettea[1];
            }
            cont--;
            return;
        }
        if (cont == 2) {
            asaidBox.children[0].children[2].innerHTML = "B";
            asaidBox.children[0].children[2].style.opacity = 1;
            asaidBox.children[0].children[2].style.backgroundColor = palettea[2];
            for (var i = 0; i < 33; i++) {
                mainBox.children[i].children[2].innerHTML = "B";
                mainBox.children[i].children[2].style.opacity = 1;
                mainBox.children[i].children[2].style.backgroundColor = palettea[2];
            }
            cont--;
            return;

        }
        if (cont == 1) {
            asaidBox.children[0].children[3].innerHTML = "*";
            asaidBox.children[0].children[3].style.opacity = 1;
            asaidBox.children[0].children[3].style.backgroundColor = palettea[3];

            for (var i = 0; i < 33; i++) {
                mainBox.children[i].children[3].innerHTML = "*";
                mainBox.children[i].children[3].style.opacity = 1;
                mainBox.children[i].children[3].style.backgroundColor = palettea[3];
            }
            cont--;
            document.getElementById("plus").src = "images/startover.png";
            return;
        }
        if (cont == 0) {
            asaidBox.children[0].children[0].innerHTML = "";
            asaidBox.children[0].children[1].innerHTML = "";
            asaidBox.children[0].children[2].innerHTML = "";
            asaidBox.children[0].children[3].innerHTML = "";
            asaidBox.children[0].children[0].style.opacity = 0.25;
            asaidBox.children[0].children[0].style.backgroundColor = "";
            asaidBox.children[0].children[1].style.opacity = 0.5;
            asaidBox.children[0].children[1].style.backgroundColor = "";
            asaidBox.children[0].children[2].style.opacity = 0.75;
            asaidBox.children[0].children[2].style.backgroundColor = "";
            asaidBox.children[0].children[3].style.backgroundColor = "";

            for (var i = 0; i < 33; i++) {
                for (var j = 0; j < 4; j++) {
                    mainBox.children[i].children[j].innerHTML = "";
                    if (j == 0) {
                        mainBox.children[i].children[j].style.opacity = 0.25;
                        mainBox.children[i].children[j].style.backgroundColor = "";
                    }
                    if (j == 1) {
                        mainBox.children[i].children[j].style.opacity = 0.5;
                        mainBox.children[i].children[j].style.backgroundColor = "";
                    }
                    if (j == 2) {
                        mainBox.children[i].children[j].style.opacity = 0.75;
                        mainBox.children[i].children[j].style.backgroundColor = "";
                    }
                    if (j == 3)
                        mainBox.children[i].children[j].style.backgroundColor = "";

                }
            }
            document.getElementById("plus").src = "images/plus.png";

            cont = 4;
            return;
        }

    }
}