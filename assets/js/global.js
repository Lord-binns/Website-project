 $(document).ready(function () {
    to_Navigation();
    to_dashboard();
    to_addashboard();
 });

 function to_dashboard() {
    $.post("pages/home/home_main.php", {},
        function (data ) {
          $("#contents").html(data); 
        });
 }
 function to_addashboard() {
  $.post("admin_pages/home.php", {},
      function (data ) {
        $("#adcontents").html(data); 
      });
}
 function to_Navigation() {
    $.post("navigation/nav.php", {},
        function (data ) {
          $("#nav_content").html(data); 
        });
 } 

 