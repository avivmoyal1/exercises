

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
    let maxSize = 4;
    

    function plusClick() {
        var arry = ["W","E","B","*"];
        var palettea = ["#f9d5e5", "#eeac99", "#e06377", "#c83349"];
        var opac = ["0.25","0.5","0.75","1"];
        var asaidBox = document.getElementsByClassName("box-layout-3")[0];
        var mainBox = document.getElementsByClassName("box-layout-3")[1];

        if (cont == 0) {
            for(var i =0; i< 4; i++){
                asaidBox.children[0].children[i].innerHTML = "";
                asaidBox.children[0].children[i].style.opacity =opac[i];
                asaidBox.children[0].children[i].style.backgroundColor = "";
            }
            
            for (var i = 0; i < 33; i++) {
                for (var j = 0; j < 4; j++) {
                    mainBox.children[i].children[j].innerHTML = "";
                    mainBox.children[i].children[j].style.opacity = opac[j];
                    mainBox.children[i].children[j].style.backgroundColor = "";
                }
            }
            document.getElementById("plus").src = "images/plus.png";
            
            cont = 4;
            return;
        }

        asaidBox.children[0].children[maxSize-cont].innerHTML = arry[maxSize-cont];
        asaidBox.children[0].children[maxSize-cont].style.backgroundColor = palettea[maxSize-cont];
        asaidBox.children[0].children[maxSize-cont].style.opacity = 1;
        
        for (var i = 0; i < 33; i++) {
            mainBox.children[i].children[maxSize-cont].innerHTML = arry[maxSize-cont];
            mainBox.children[i].children[maxSize-cont].style.opacity = 1;
            mainBox.children[i].children[maxSize-cont].style.backgroundColor = palettea[maxSize-cont];
        }

        if (cont == 1) {
            document.getElementById("plus").src = "images/startover.png";
        }
        
        cont--;
    }
}
