<!DOCTYPE html>
<html lang='en'>
  <body>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Assignment 3</title>

     <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css"/>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='wireframe.js'></script>
 
    <?php
        // This PHP code inserts CSS to style the "current page" link in the nav area
        $here = $_SERVER['SCRIPT_NAME']; 
        $bits = explode('/',$here); 
        $filename = $bits[count($bits)-1]; 
        echo "nav a[href$='$filename'] {
        box-shadow: 1px 1px 1px 2px navy;
      	}";
     ?>
  </head>
  <!-- The navigation menu -->
   <header> 
  </p> <hr>  </p> <hr>  

    <!-- Image sourced from www.rmit.edu.au for educational purposes only -->
    <div> <img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/LunardoLogo.png' alt='Lunardo logo' height=125

 <nav>
    <div class ="navbar">
      <a class="active" 
      href="#about">ABOUT US</a> 
      <a href="#seats">SEATS AND PRICES</a> 
      <a href="#showing">NOW SHOWING</a> 
      <a href="#booking">BOOKING</a> 
 </nav>  
 </div>
   
  <img src= 'https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/cinema.jpg' alt='Cinema' height=200 width=1200>
  <main>

   
<!--   Display ABOUT US  -->
   <div id= "about" class="section">
   <p>  </p> <hr> <p> </p> <hr> <p>  </p> <hr> 

   <h1> <span id="about" style="color:#00308f;"> ABOUT US </span>  </h1>
   <h3> 
    <p>            
  <span class="tab"></span>  Lunardo has extensive improvements and renovations for you to enjoy your favourite movies.
    </p>    
  <span class="tab"></span>  Lunardo offers reclinable first class seats and standard seats providing relaxing and much enjoyable watching of movies.
    <p>    
   <span class="tab"></span> Lunardo is equipped with the latest Dolby projection and sound systems - upgraded with 3D Dolby Vision projection and Dolby's Atmos sound.
    </a>
    </p>
    <span class="tab"></span> Lunardo cinema is where the show starts with you around...
    <p>
    <span class="tab"></span> See you soon!
    </p>
    </h3>

 
<!-- Display SEATS AND PRICES ---->
   <div  id= "seats" class="section">
   <p>  </p> <hr> <p> </p> <hr> <p>  </p> <hr> 
   <h2> <span id="seats" style="color:#00308f;"> SEATS AND PRICES </span>  </h2>
   <img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/LunardoSeats1C.jpg' alt='First Class Seats' height=500 width=1200 First Class Seats
   <p> 
   <img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/LunardoSeatsStd.jpg' alt='Standard Seats'  height=500 width=1200 Standard Class Seats 
 
 <!--   <div class="section"> -->
 <h3> <span style="color:#00308f;"> SEAT PRICES (A$)</span>  </h3>  
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
<table>
  <tr>
    <th>Seat Type</th>
    <th>Seat Code</th>
    <th>Mon, Wed & 12pm weekdays</th>
    <th>All other times</th>  
  </tr>
  <tr>
    <td>Standard Adult</td>
    <td>STA</td>
    <td>14.00</td>
    <td>19.80</td>  
  </tr>
  <tr>
    <td>Standard Concession</td>
    <td>STP</td>
    <td>12.50</td>
    <td>17.50</td>  
  </tr>
  <tr>
    <td>Standard Child</td>
    <td>STC</td>  
    <td>11.00</td>
    <td>15.30</td>  
  </tr>
  <tr>
    <td>First Class Adult</td>
    <td>FCA</td>  
    <td>24.00</td>
    <td>30.00</td> 
  </tr>
  <tr>
    <td>First Class Concession</td>
    <td>FCP</td>  
    <td>22.50</td>
    <td>27.00</td>
  </tr>
  <tr>
    <td>First Class Child</td>
    <td>FCC</td>  
    <td>21.00</td>
    <td>24.00</td>
</tr>
</table>
  <br style="margin-bottom:240px;"/> 
  </div>
<!--- Display movie in panels and modal synopsis when clicked -->

 <div id="showing" class="section">
     <p>  </p> <hr> <p> </p> <hr> <p>  </p> <hr> 
    <h2> <span id="showing" style="color:#00308f;"> NOW SHOWING </span>  </h2> 

<button id="myBtn">             
   <div class="row">
   <div class= "column">
   <img src= 'https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/theGirlInTheSpidersWeb.jpg' alt= 'The Girl in the Spider Web' style="width:100%" height 100%  onclick="getMovie()">
   </div>
   <div class="column">
   <img src= 'https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/aStarIsBorn.jpg' alt='A Star is Born' style="width:100%" height 90% onclick="getMovie(this);">
   </div>
   <div class="column">
   <img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/ralphBreaksTheInternet.jpg' alt='Ralph Breaks the Internet' style="width:100%" onclick="getMovie(this);">
   </div>
   <div class="column">
   <img src= 'https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/boyErased.jpg' alt='Boy Erased' style="width:100%" onclick="getMovie(this);">
   </div>
  </div>
 </button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
 <img src= 'https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/theGirlInTheSpidersWebTrailer.jpg' alt= 'The Girl in the Spider Web' style="width:70%" height 70%">  
<p> </p>
<b>Make a Booking:</b> 
<button onclick="bookMovie('ACT', 'Wed', '21')">Thu - 9pm</button>
<button onclick="bookMovie('ACT', 'Thu', '21')">Fri - 9pm</button>
<button onclick="bookMovie('ACT', 'Fri', '21')">Thu - 9pm</button>
<button onclick="bookMovie('ACT', 'Sat', '18')">Sat - 6pm</button>
<button onclick="BookMovie('ACT', 'Sun', '18')">Sun - 6pm</button>
</div>

<script>
function bookMovie(movieid, day, hour) {
  bookmovie[$booking] = movieid
  bookday[$booking] = day
  bookHour[$booking] = hour
  echo "Book day " + bookday[$booking];

}
</script>

<script>
// Get modal
var modal = document.getElementById('myModal');

// Get button to open modal
var btn = document.getElementById("myBtn");

// Get span to close modal
var span = document.getElementsByClassName("close")[0];

// Click button
  btn.onclick = function() {
  modal.style.display = "block";
}

// Close modal
span.onclick = function() {
  modal.style.display = "none";
}

// Close When user clicks anywhere outside modal 
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


  <!--  The Girl in the Spiders Web 
   
    <a href='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/theGirlInTheSpidersWeb.mp4' The Girl in the Spiders Web </a>
    <img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/theGirlInTheSpidersWebTrailer.jpg' alt='The Girl in the Spiders Web' height=400 width=1000 A Star is Born
     class="container">
 
     <p>
    <b>Make a Booking:</b> 
    <button class="Girlbtn1">Wed-Fri 9pm</button>
    <button class="Girlbtn2">Sat-Sun 6pm</button>
         </div> <br 
        </p>
 --->   
              
  <!-- A Star is Born  
    <a href='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/aStarIsBorn.mp4' A Star is Born </a>   
    <div><img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/AStarIsBornTrailer.jpg' alt='A Star is Born' height=400 width=1000 A Star is Born
     class="container">
     <p>
     <b>Make a Booking:</b>
    <button class="starBtn1">Mon-Tue 6pm</button>
    <button class="starBtn2">Sat-Sun 3pm</button>
    </div> <br     
     </p>      
  --> 

  <!-- Ralph Breaks the Internet 
    <a href='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/ralphBreaksTheInternet.mp4' Ralph Breaks the Internet </a> 
    <div><img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/RalphBreaksTheInternetTrailer.jpg' alt='Ralph Breaks the Internet' height=400 width=1000 Ralph Breaks the Internet
    class="container">
    <p>
    <b>Make a Booking:<b>
    <button class="ralphBtn1">Mon-Tue 12pm</button>
    <button class="ralphBtn2">Wed-Fri 6pm</button>
    <button class="ralphBtn3">Sat-Sun 12pm</button>
     <br </p>          
   -->   
  
  <!-- Boy Erased 
    <a href='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/boyErased.mp4' Boy Erased </a> 
      <div><img src='https://titan.csit.rmit.edu.au/~s3731790/wp/a2/media/BoyErasedTrailer.jpg' alt='Boy Erased' height=400 width=1000 Boy Erased  class="container">
        <p>
    <b>Make a Booking:</b>
    <button class="boyBtn1">Wed-Fri 12pm</button>
    <button class="boyBtn2">Sat-Sun 9pm</button>
    </div> <br </p> <a  </a>   
--->

 </div> <br </p> <a  </a>     

<!--- BOOKING -->
<div id="booking"  class="section"> 
<p>  </p> <hr> <p> </p> <hr> <p>  </p> <hr> 

<h2> <span id="booking" style="color:#00308f;"> BOOKING </span>  </h2>
<p id="demo"></p>
<script>
document.getElementById("demo").innerHTML =
 Movie:     Date/Time:;
 document.write(bookDay);
</script>
   <form action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">
    <div align="left"> 

    <h3>Movie:  &nbsp;&nbsp  Date/Time:  </h3>
    <fieldset>
        <legend>Standard</legend>
          <p>

	      <span class="tab1"></span> <label for="Adult">Adult</label>
              <input type="number" min = "0" max="10" step="1" id="seatsSTA" Adult="seatsSTA" />
      
	      <span class="tab2"></span> <label for="name">Name</label>
              <input type="text" id="custName" Name="custName" required >
               <p>
                <label for="Concession">Concession</label>
              <input type="number" min = "0" max="10" id="seatsSTP" Adult="seatsSTP" />
            
              <span class="tab3"></span> <label for="custEmail">E-mail</label>
             <input type="text" id="cusrEmail" name="custEmail" />
              <p>
             
  	      <span class="tab4"></span> <label for="Children">Children</label>
              <input type="number" max="10" id="seatsSTC" Adult="seatsSTC" />
	    
             <span class="tab5"></span>  <label for="mobile">Mobile</label>
             <input type="tel" id="custMobile" name="cusMobile" />
             <p>
	    
	     <span class="tab6"></span> <label for="custCard">Credit Card</label>
             <input type="text" id="custCard" name="custCard" />
             <p>
  	    <span class="tab6"></span> <label for="custExpiry">Expiry Date</label>
            <input type="month" id="custExpiry" name="custExpiry" />  
 	     <p>

          </fieldset>
      
          <fieldset>
          <legend>First Class</legend>
              <p>
	      <span class="tab1"></span> <label for="Adult">Adult</label>
              <input type="number" min = "0" max="10" id="seatsFCP" Adult="seatsFCP" />
               <p>
              <label for="Concession">Concession</label>
              <input type="number" min = "0" max="10"  id="seatsFCP" Adult="seatsFCP" />
               <p>
 	      <span class="tab4"></span> <label for="seatsFCC">Children</label>
              <input type="number" min = "0" max="10" id="seatsFCC" Adult="seatsFCC" />
               <p>
                <p>
             <span class="tab2"> Total $
             <span class="tab6"> <button type="order" form="form" value="order">Order</button> 
       </fieldset>
       </form>     
      </div>
 
   </div> <br </p> <a  </a>     
  </main> 
     
<!--- Display footer  -->
        
    <footer> 
      <p>  </p> <hr>
      &copy; Lunardo Cinema
      <script>
     document.write(new Date().getFullYear());  
      </script>
      <br>
      757 New Avenue Castle Hill NSW Sydney  
      &nbsp;&nbsp;Email: lunardoCinema@gmail.com 
      &nbsp;&nbsp;&nbsp;&nbsp; Phone 1300 777 888 <br>
      <p>   </p> 
      Kathryn Tolentino s3731790  &nbsp;&nbsp;  https://github.com/s3731790/wp-1/edit/master/a3/index.php
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    </body>
</html>
