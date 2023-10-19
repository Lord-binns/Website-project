 $(document).ready(function () {
    to_Navigation();
    to_dashboard();
 });

 function to_dashboard() {
    $.post("pages/home/home_main.php", {},
        function (data ) {
          $("#contents").html(data); 
        });
 }
 function to_Navigation() {
    $.post("navigation/nav.php", {},
        function (data ) {
          $("#nav_content").html(data); 
        });
 } 

 