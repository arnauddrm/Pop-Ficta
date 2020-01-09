let co = document.getElementById('pop_co');
let insc = document.getElementById('pop_insc')
let head = document.getElementById('blurHead');
let body = document.getElementById('blurBody');
let close_pop = document.getElementById('close_pop');
co.style.position = "absolute";
co.style.transform = "translateX(100%)";
co.style.width = "auto";
co.style.height = "70vh";
co.style.top = "15vh";
insc.style.position = "absolute";
insc.style.transform = "translateX(50%)";
insc.style.width = "auto";
insc.style.height = "70vh";
insc.style.top = "15vh";
co.style.zIndex = "1000000";
insc.style.zIndex = "1000000";
function popInsc() {
    insc.classList.remove('hide');
    close_pop.classList.remove('hide');
    head.style.filter = "blur(5px)";
    body.style.filter = "blur(5px)";
    co.classList.add('hide');
}

function popCo() {
    co.classList.remove('hide');
    close_pop.classList.remove('hide');
    head.style.filter = "blur(5px)";
    body.style.filter = "blur(5px)";
    insc.classList.add('hide');

}

function close_popAuth(){
    insc.classList.add('hide');
    co.classList.add('hide');
    close_pop.classList.add('hide');
    head.style.filter = "blur(0px)";
    body.style.filter = "blur(0px)";
}