// script in java_script/ script.js


"use strict";

const becky = document.getElementById("becky");
let becky_count = 0;

becky.addEventListener('click', () => {
    if ( becky_count %2 == 0){
        becky.classList.add("becky_click");
        // becky.innerHTML = "Yeah right, another social platform. Good luck with that...<br>We know you think we don't know, but we do.<br> <span class='highlight'>Click here to know exactly what we are upto, and you would love it. Mostly</span>";

        if(becky_count > 1)
        becky.classList.remove("becky_unclick");
        becky_count++;
    } else {
        becky.classList.remove("becky_click");
        becky.classList.add("becky_unclick");
        // becky.innerHTML = "BECKY HAS<br> SOMETHING TO SAY";        
        becky_count++;
    }
})

const journal = document.getElementById("journal");
let journal_count = 0;

journal.addEventListener('click', () => {
    if ( journal_count %2 == 0){
        journal.classList.add("journal_click");

        if(journal_count > 1)
        journal.classList.remove("journal_unclick");
        journal_count++;
    } else {
        journal.classList.remove("journal_click");
        journal.classList.add("journal_unclick");
        // becky.innerHTML = "BECKY HAS<br> SOMETHING TO SAY";        
        journal_count++;
    }
})

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