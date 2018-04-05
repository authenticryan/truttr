
// to change to x for the hamburger icon and its background color
let ham_count = 0;
function ham__active() {
    ham_count++;
    document.body.classList.toggle("change");
    if(ham_count %2 == 1){
        document.getElementsByTagName("nav")[0].style.backgroundColor = "transparent";
    } else {
        document.getElementsByTagName("nav")[0].style.backgroundColor = "#fff";        
    }
}