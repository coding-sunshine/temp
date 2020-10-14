// Tab JS

$(document).ready(function () {
    // Smart Tab
    $('#tabs').smartTab({
        autoProgress: false,
        stopOnFocus: true,
        transitionEffect: 'vSlide'
    });

    

});


// User Profile Page JS



/* Leave Popup*/

$("#leave_assign").click(function () {
    $("#popover-content-leave").slideToggle();
});

$(".cancel_leave , .add_leave ").click(function () {
    $("#popover-content-leave").hide();
});


    
$("#supervisior_assign").click(function () {
    $("#popover-content-supervisior").slideToggle();
});

$(".cancel").click(function () {
    $("#popover-content-supervisior").hide();
});




$("#shift_assign").click(function () {
    $("#popover-content-shift").slideToggle();
});

$(".cancel_shift , .add_shift ").click(function () {
    $("#popover-content-shift").hide();
});


$("#program_assign").click(function () {
    $("#popover-content-program").slideToggle();
});

$(".cancel_program").click(function () {
    $("#popover-content-program").hide();
});

//$(document).on('click touch',function() {
//    $("#popover-content-program").hide();
//});

$("#nesting_assign").click(function () {
    $("#popover-content-nesting").slideToggle();
});

$(".cancel_nesting").click(function () {
    $("#popover-content-nesting").hide();
});


$("#Engagement_assign").click(function () {
    $("#popover-content-Engagement").slideToggle();
});

$(".cancel_Engagement").click(function () {
    $("#popover-content-Engagement").hide();
});


$("#pip_assign").click(function () {
    $("#popover-content-pip").slideToggle();
});

$(".cancel_pip").click(function () {
    $("#popover-content-pip").hide();
});

$("#CAP_assign").click(function () {
    $("#popover-content-CAP").slideToggle();
});

$(".cancel_CAP").click(function () {
    $("#popover-content-CAP").hide();
});

$("#Absconding_assign").click(function () {
    $("#popover-content-Absconding").slideToggle();
});

$(".cancel_Absconding").click(function () {
    $("#popover-content-Absconding").hide();
});

$("#Resignation_assign").click(function () {
    $("#popover-content-Resignation").slideToggle();
});

$(".cancel_Resignation").click(function () {
    $("#popover-content-Resignation").hide();
});

$("#COC_assign").click(function () {
    $("#popover-content-COC").slideToggle();
});

$(".cancel_COC").click(function () {
    $("#popover-content-COC").hide();
});

$("#Incident_assign").click(function () {
    $("#popover-content-Incident").slideToggle();
});

$(".cancel_Incident").click(function () {
    $("#popover-content-Incident").hide();
});

$("#IJP_assign").click(function () {
    $("#popover-content-IJP").slideToggle();
});

$(".cancel_IJP").click(function () {
    $("#popover-content-IJP").hide();
});



$("#EWS_Fields_assign").click(function () {
    $("#popover-content-EWS_Fields").slideToggle();
});

$(".cancel_EWS_Fields").click(function () {
    $("#popover-content-EWS_Fields").hide();
});



$("#EWS_assign").click(function () {
    $("#popover-content-EWS").slideToggle();
});

$(".cancel_EWS").click(function () {
    $("#popover-content-EWS").hide();
});


$("#EWS_Action_assign").click(function () {
    $("#popover-content-EWS_Action").slideToggle();
});

$(".cancel_EWS_Action").click(function () {
    $("#popover-content-EWS_Action").hide();
});




$("#recruitment_assign").click(function () {
    $("#popover-content-recruitment").slideToggle();
});

$(".recruitment_cancel").click(function () {
    $("#popover-content-recruitment").hide();
});




// Add Shift Time JS

//
//$('#shift_type').on('change', function () {
//    if (this.value == 'morning') {
//        $(".morning_shift").show();
//    } else {
//        $(".morning_shift").hide();
//    }
//});
//
//$('#shift_type').on('change', function () {
//    if (this.value == 'afternoon') {
//        $(".afternoon_shift").show();
//    } else {
//        $(".afternoon_shift").hide();
//    }
//});
//
//
//$('#shift_type').on('change', function () {
//    if (this.value == 'night') {
//        $(".night_shift").show();
//    } else {
//        $(".night_shift").hide();
//    }
//});
//
//
//
//$('.afternoon_custom').on('change', function () {
//    if (this.value == 'custom') {
//        $(".custom_time").show();
//    } else {
//        $(".custom_time").hide();
//    }
//});
//
//
//$('.morning_custom').on('change', function () {
//    if (this.value == 'custom') {
//        $(".custom_time").show();
//    } else {
//        $(".custom_time").hide();
//    }
//});
//
//$('.night_custom').on('change', function () {
//    if (this.value == 'custom') {
//        $(".custom_time").show();
//    } else {
//        $(".custom_time").hide();
//    }
//});

// Resignation 


$('#DOR').on('change', function () {
    if (this.value == 'enabled') {
        $(".DOR").show();
    } else {
        $(".DOR").hide();
    }
});



// Common Data 

 var data = [
    {
        "name": "bootstrap-table",
        "stargazers_count": "526",
        "forks_count": "122",
        "description": "An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) "
    },
    {
        "name": "multiple-select",
        "stargazers_count": "288",
        "forks_count": "150",
        "description": "A jQuery plugin to select multiple elements with checkboxes :)"
    },
    {
        "name": "bootstrap-show-password",
        "stargazers_count": "32",
        "forks_count": "11",
        "description": "Show/hide password plugin for twitter bootstrap."
    },
    {
        "name": "blog",
        "stargazers_count": "13",
        "forks_count": "4",
        "description": "my blog"
    },
    {
        "name": "scutech-redmine",
        "stargazers_count": "6",
        "forks_count": "3",
        "description": "Redmine notification tools for chrome extension."
    }
];

$(function () {
    $('#table').bootstrapTable({
        data: data
    });
    $('#table').on('check.bs.table', function (e, row, $el) {
    	alert('check index: ' + $el.closest('tr').data('index'));
    });
    $('#table').on('uncheck.bs.table', function (e, row, $el) {
    	alert('uncheck index: ' + $el.closest('tr').data('index'));
    });
}); 

// Shift Table 
  function stateFormatter(value, row, index) {
            if (index === 2) {
                return {
                    disabled: true
                };
            }
            if (index === 0) {
                return {
                    disabled: false,
                    checked: true
                }
            }
            return value;
        }


 //Timepicker
        //Timepicker
        // $('#timepicker1').timepicker({
        //     showInputs: true
        // })
        // $('#timepicker2').timepicker({
        //     showInputs: true
        // })



    
jQuery(document).ready(function(){
    // jQuery('nav li').hasClass('dropdown').append('<i class="fa fa-angle-down faicon"></i>');
    jQuery('nav li.dropdown').append('<i class="fa fa-caret-down m_dropFilter_ico"></i>');

});