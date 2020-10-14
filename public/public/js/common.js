

(function ($) {
    "use strict";


    function init(){
        $('form').attr('autocomplete','off');
    }

    $(document).ready(function() {
        init();
    });
}(jQuery));

// document.onreadystatechange = function() { 
//     if (document.readyState !== "complete") { 
//         document.querySelector(".az-iconbar-logo").style.visibility = "hidden";
//         document.querySelector("body").style.overflowY = "hidden"; 
//         document.querySelector("#loader").style.visibility = "visible"; 
//     } else { 
//         document.querySelector("#loader").style.display = "none"; 
//         document.querySelector(".az-content").style.visibility = "visible"; 
//         document.querySelector("body").style.overflowY = "visible";
//     }
// } 


document.onreadystatechange = function() { 
    if (document.readyState !== "complete") { 
        // $("#main-content").load(location.href + " #main-content>*","");
        $(document).find('.az-iconbar-logo img').addClass('rotate');
        document.querySelector(".az-content").style.visibility = "hidden"; 
        document.querySelector("body").style.overflowY = "hidden"; 
        // document.querySelector("#loader").style.visibility = "visible"; 
    } else { 
        $(document).find('.az-iconbar-logo img').removeClass('rotate');
        document.querySelector(".az-content").style.visibility = "visible"; 
        document.querySelector("body").style.overflowY = "visible";
    }
} 