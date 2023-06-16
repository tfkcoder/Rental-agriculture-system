

/*
=========Developeb ny Eng Benny --======
=========Email: bennycive@gmail.com====
========Phone: 0747696834==============
*/
/*====--SCRIPT FOR LEVT NAV--======*/
$(document).ready(function() {
    $(".mainmenu").click(function(){ 
        if($(this).children("div.submenu").css("display") == "none") {
            $(this).css('background-image', 'url(minus.png)');
            $(this).children("div.submenu").slideDown('1s ,easing');
        } else {
            $(this).css('background-image', 'url(plus.png)');
            $(this).children("div.submenu").slideUp('slow');
        }
    });

    /*----Script for hide and show admin profile-----*/ 
        var col1 = $("#col1");
        var col2 = $("#col2");
     $('.profile-key').click(function(){
        $(".card-user1").slideToggle("slow");
          if(col1.is(':visible')){
             col2.removeClass('col-lg-12');
             col2.addClass('col-md-8');
          }
          else{
            col2.removeClass('col-md-8');
             col2.addClass('col-lg-12');
             col2.addClass('col-sm-12');
          }


     })
});

/*=====SCRIPT FOR  DATATABLE FOR PRODUCTS========*/
  $(document).ready(function() {
  $('#example').DataTable({
      responsive: true, // enable responsive mode
      paging: true, // enable pagination
      searching: true, // enable searching
      ordering: true, // enable sorting
      info: true, // enable "Showing x to y of z entries" message
      lengthMenu: [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]], // customize the number of rows per page
      language: {
          search: "_INPUT_", // customize search placeholder text
          searchPlaceholder: "Search....",
          lengthMenu: "Show _MENU_ entries", // customize length menu text
          info: "Showing _START_ to _END_ of _TOTAL_ entries", // customize info message text
          paginate: {
              //first: "First", // customize pagination button labels
              //last: "Last",
              next: "Next",
              previous: "Prev"
          }
      }
  });
});

/*==========================js for hide left nav and show only dashbard=======================*/
