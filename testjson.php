



<script src="http://45.79.124.136/go2tourism/public/frontend/js/jquery-3.6.0.min.js"></script>
    <script> 





$.getJSON("https://api.openweathermap.org/data/2.5/weather?lat=19.129&lon=72.91&units=metric&appid=10ffdc82e6d2b423aeaf6be5ada8aadf",
function(data) {
   alert("HI");
alert(data);

//var obj = JSON.parse(data);

// alert("by");

//alert(obj);
// Printing a single value
document.write(data["main"]["temp"] + "<br>");  // Prints: J. K. Rowling
document.write(data["sys"]["country"] + "<br>");  // Prints: Harry Potter
document.write(data["name"] + "<br>");  // Prints: Harry Potter


}); 

</script>

