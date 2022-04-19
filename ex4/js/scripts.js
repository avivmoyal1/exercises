$(function () {

    $("form input").on('focus', function () {

        $(this).parents("lable").addCBlass('focused');
    });

    $("form input").on('blur', function () {

        $(this).parents("lable").removeClass('focused');
    });
});

window.onload = () => {

    var Form1 = document.getElementById("Form1");
    var Form2 = document.getElementById("Form2");
    var Form3 = document.getElementById("Form3");
    var Form4 = document.getElementById("Form4");

    var Next1 = document.getElementById("Next1");
    var Next2 = document.getElementById("Next2");
    var Next3 = document.getElementById("Next3");

    var Back1 = document.getElementById("Back1");
    var Back2 = document.getElementById("Back2");
    var Back3 = document.getElementById("Back3");

    // const name = document.getElementsByName('fullname');
    // const form = document.getElementById('sign-up');
    
    // form.addEventListener('submit',(e) => {
    //     let message ="";

    //     e.preventDefault();
    // })

    Next1.onclick = function () {
        Form1.style.left = "-450px";
        Form2.style.left = "40px";
        progress.style.width = "180px";
    }
    
    Back1.onclick = function () {
        Form1.style.left = "40px";
        Form2.style.left = "450px";
        progress.style.width = "90px";
    }
    
    Next2.onclick = function () {
        Form2.style.left = "-450px";
        Form3.style.left = "40px";
        progress.style.width = "260px";
    }
    
    Back2.onclick = function () {
        Form2.style.left = "40px";
        Form3.style.left = "450px";
        progress.style.width = "180px";
    }
    
    Next3.onclick = function () {
        Form3.style.left = "-450px";
        Form4.style.left = "40px";
        progress.style.width = "360px";
    }
    
    Back3.onclick = function () {
        Form3.style.left = "40px";
        Form4.style.left = "450px";
        progress.style.width = "260px";
    }
    
};


function allNum(){
    var list ="";
    list += '<option  value="" selected disabled hidden>Coffee cups</option>'
    for(var i=1 ; i<101 ;i++){
        list += "<option value="+i+">"+i+"</option>"
    }
    document.getElementById("coffee").innerHTML = list;
};

$(document).ready(function(){
    $("#sign-up").submit(function(){
		if ($('input:checkbox').filter(':checked').length < 2){
        alert("Check at least tow Interests!");
		return false;
		}
    });
});


function check(){
    var name = document.getElementById("name");
    name.oninvalid()
}   







