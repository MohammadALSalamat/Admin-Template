/**
 *  this line is very important because we want to set the local storge the save the color
 *
 */
// full responsive width



let localColorStorge = localStorage.getItem('colorOption')
if (localColorStorge !== null) {
    document.documentElement.style.setProperty('--font-colors-toChange', localColorStorge);

    // remove the active class from the items that are not selected
    document.querySelectorAll(".colors-list li").forEach(element => {
        element.classList.remove("active");
        if (element.dataset.color === localColorStorge) {
            //add class active to target color
            element.classList.add('active');
        };
    });

}

/**
 *  both variables must be global to be seen by other functions
 *
 */
// Random Background option .. this must be true to random the images otherwise stop all

let backgroundOption = true;

// declare valriable to stop the images. this will help us to clear the interval
let handelSetIntervalFunction;

// check if there is any local storge for the background images
let localBackgroundStorge = localStorage.getItem('background-option');
if (localBackgroundStorge !== null) {
    if (localBackgroundStorge === "true") {
        // return true and run the function
        backgroundOption = true;
    } else {
        // return true and run the function
        backgroundOption = false;
    }

    //remove active class from the items
    document.querySelectorAll('.random-backrgound button').forEach(element => {
        element.classList.remove('active-random');
    });

    //add class active to itme that we click
    if (localBackgroundStorge === "true") {
        document.querySelector(".random-backrgound .yes").classList.add("active-random");
    } else {
        document.querySelector(".random-backrgound .no").classList.add("active-random");

    }
}
//get defalut value
let ClearTheShowingLocal;
// local storage for  show and hide the bullet
let localshowBulletOprions = localStorage.getItem("show-option");
if (localshowBulletOprions !== null) {
    document.querySelectorAll(".bullet-option button").forEach(Element => {
        Element.classList.remove('active-random');
    });
    if (localshowBulletOprions == "block") {
        document.querySelector(".nav-bullet").style.display = "block";
    } else {
        document.querySelector(".nav-bullet").style.display = "none";
    }

    //add class active to itme that we click
    if (localshowBulletOprions === "block") {
        document.querySelector(".bullet-option .yes").classList.add("active-random");
    } else {
        document.querySelector(".bullet-option .no").classList.add("active-random");

    }

}
/**
 *  start the sitting box functions
 *  the other function will be in javascript
 */
document.querySelector('.fa-cog').onclick = function() {

    //add class to sitting box
    document.querySelector('.sitting-box').classList.toggle('open');
};

/*
 * get the color orions to switch them / Background Options
 *
 *  1-) we have to save all target list in one variable
 *  2-) do loop to featch all Elemnts that handel the what we want to change
 *  3-) set the event onclick to get the Values
 *  4-) change the root
 */

// change the color option
const colorOptions = document.querySelectorAll('.colors-list li');

// loop on all li to fetch the data of colors
colorOptions.forEach(li => {
    // use event click to get the colors of each element
    li.addEventListener("click", (event) => {
        //using this method we can get the color in li
        let getColor = event.target.dataset.color;
        // once we get the color then we have to change it with root
        document.documentElement.style.setProperty('--font-colors-toChange', getColor);

        // set the color to be storge and save in local storge
        localStorage.setItem("colorOption", getColor);

        // remove active class from colors
        event.target.parentElement.querySelectorAll(".active").forEach(element => {
            element.classList.remove('active');
        });
        event.target.classList.add('active');
    });

});

// Resite the localStorge.
document.querySelector(".sitting-box .reset-options ").onclick = function() {
    // if we dont have something important in localsotrge then we can use clear

    // use clear to delete eveery things in local storge
    localStorage.clear();

    // otherwise if you want to delete specifice item we use localStorage.removeItem(" class name")

    // reload window
    window.location.reload();
};


// use jquery to add class and deleted for the

$(function() {

    // add class to hide the left side bar
    let Hideclass = $(".left-side-bar div").first().hasClass("open");
    let Rezietherightpanel = $('#hold-js div').first().hasClass("width-full-left-bar");
    if (Hideclass == true) {
        $("#append-hand-icon .left").on("click", function() {
            $(".left-side-bar div").first().removeClass("open");
            $(".left-side-bar div").first().addClass("close");
            $('#append-hand-icon .right').addClass("fas fa-hand-point-right fa-2x");
            $('#append-hand-icon .left').removeClass("fas fa-hand-point-left fa-2x");
            $(".small-left-side-bar").show();
            $(".left-side-bar").addClass("hide");
            $("nav.nav-bar").addClass("full-width");
            $('#hold-js .right-admin-panel').removeClass('width-full-left-bar').addClass('width-right-bar');





        })
        $("#append-hand-icon .right").on("click", function() {
            $(".left-side-bar div").first().removeClass("close");
            $(".left-side-bar div").first().addClass("open");
            $('#append-hand-icon .left').addClass("fas fa-hand-point-left fa-2x");
            $('#append-hand-icon .right').removeClass("fas fa-hand-point-right fa-2x");
            $(".small-left-side-bar").hide();
            $("nav.nav-bar").removeClass("full-width");
            $(".left-side-bar").removeClass("hide");
            $('#hold-js .right-admin-panel').addClass("width-full-left-bar").removeClass('width-right-bar');



        })
    }
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    /* Loop through all dropdown buttons to toggle
    between hiding and showing its dropdown content
    - This allows the user to have multiple
    dropdowns without any conflict */

    var dropdown = document.querySelector(".left-side-bar .single-option .dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            var dropdownContent = document.querySelector(".left-side-bar .single-option .dropdown-container ")
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    // add new side bar in case the user want to hide it

    // let Hidesidebar = $(".left-side-bar").hasClass("hide");
    // if (Hidesidebar == true) {

    //     $("#append-hand-icon .left").on("click", function() {
    //         $(".left-side-bar").removeClass("hide");
    //         $(".left-side-bar").show(1000);
    //         $(".small-left-side-bar").addClass("hide");
    //         $(".small-left-side-bar").hide(1000);
    //     })
    // } else {
    //     $("#append-hand-icon .right").on("click", function() {
    //         $(".smal-left-side-bar").removeClass("hide");
    //         $(".left-side-bar").hide(1000);
    //         $(".left-side-bar").addClass("hide");
    //         $(".small-left-side-bar").show(1000);

    //     })
    // }


    // check if the class is exit then append the hand icon to html layout

    let CheckClasss = $(".left-side-bar div").first().hasClass("open");
    if (CheckClasss == true) {
        $('#append-hand-icon .left').addClass("fas fa-hand-point-left fa-2x");
    } else {
        $('#append-hand-icon .right').addClass("fas fa-hand-point-right fa-2x");
    }

});
// active link for links left side bar
$(document).ready(function() {
    $('ul').on('click', 'li', function() {
        $('ul .active-links').removeClass('active-links');
        $(this).addClass('active-links');
    });

});


// sticky header
window.onscroll = function() {
    myFunction()
};

let header = document.getElementById("myHeader");
let sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}