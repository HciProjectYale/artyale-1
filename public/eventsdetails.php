<?php
session_start();
$_SESSION['paintsession']="paintsession";
?>
<html>
    <head>
        <title>Events Details</title>
        <link rel="stylesheet" type="text/css" href="st.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">	
    </head>
    <body >
        <div class="wrapper">
            <div class="detailsheading">
                <div class="evehdng" id="evheading"><h1>Events Details</h1></div>
             <a  href="#yalemap" class="mapnav">Get Directions</a>
             <a href="covid.html" class="mapnav">Covid 19 Protocols</a>
              <div class="evebtn">
                 
                  <form action="events.php">
                    <button type="submit" class="btn btn-outline-primary">Go Back</button></div> 
                  </form> 
            </div>
            <hr>
            </div>
            <div id="events_details">
                <div class="left_evnts"  >
                    <h2>Paint Night</h3>
                        <div class="pnt">
                    <div><img src="images/paintnight.jpg" width="500px" height="400px"></div>
                  
                  <div style="width:600px;margin-left:250px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere odio in eros consectetur lacinia. Etiam eget dui sit amet ipsum tempus sagittis. Mauris elementum nisi nunc, quis sagittis risus pretium id. Sed enim ex, tristique ac tristique ac, facilisis at augue. Suspendisse viverra euismod dui et porta. Suspendisse potenti. In ut euismod velit. Ut a metus enim. Nam ut auctor lorem, nec auctor tortor. Quisque nisl tellus, lobortis at urna at, gravida bibendum turpis. Cras dignissim, tellus sed vehicula ornare, ipsum mauris iaculis tortor, a fringilla neque eros in turpis. Proin ut massa pellentesque, interdum tellus et, tincidunt ipsum. Curabitur id posuere lectus, id sodales velit. Integer vitae urna nis<br>
                    <br><br>
                    <form action="register.php">
                        <input type="hidden" name="paintnight">
                     
                    </form>
                </div>
                  
                    </div>
                </div>
                
                <div class="right_evnts">
                       
                         <div class="pnt">
                            <div style="width:500px;margin-left:300px;margin-top:70px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere odio in eros consectetur lacinia. Etiam eget dui sit amet ipsum tempus sagittis. Mauris elementum nisi nunc, quis sagittis risus pretium id. Sed enim ex, tristique ac tristique ac, facilisis at augue. Suspendisse viverra euismod dui et porta. Suspendisse potenti. In ut euismod velit. Ut a metus enim. Nam ut auctor lorem, nec auctor tortor. Quisque nisl tellus, lobortis at urna at, gravida bibendum turpis. Cras dignissim, tellus sed vehicula ornare, ipsum mauris iaculis tortor, a fringilla neque eros in turpis. Proin ut massa pellentesque, interdum tellus et, tincidunt ipsum. Curabitur id posuere lectus, id sodales velit. Integer vitae urna nis
                            <br><br>
                            <form action="register.php">
                                <button type="submit" class="btn btn-outline-info">Attend Event</button>
                            </form>
                            </div>
                            
                    <div style="margin-left:250px;margin-top:30px" >
                        <h2 >Color Festival</h2>   
                        <img src="images/colorfest.jpg" width="500px" height="400px"></div>
                       
                    </div>
                </div>
                
                <div class="left_evnts">
                    <h2>Craft Day</h3>
                        <div class="pnt">
                    <div><img src="images/craft.jpg" width="500px" height="400px"></div>
                  
                  <div style="width:600px;margin-left:250px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere odio in eros consectetur lacinia. Etiam eget dui sit amet ipsum tempus sagittis. Mauris elementum nisi nunc, quis sagittis risus pretium id. Sed enim ex, tristique ac tristique ac, facilisis at augue. Suspendisse viverra euismod dui et porta. Suspendisse potenti. In ut euismod velit. Ut a metus enim. Nam ut auctor lorem, nec auctor tortor. Quisque nisl tellus, lobortis at urna at, gravida bibendum turpis. Cras dignissim, tellus sed vehicula ornare, ipsum mauris iaculis tortor, a fringilla neque eros in turpis. Proin ut massa pellentesque, interdum tellus et, tincidunt ipsum. Curabitur id posuere lectus, id sodales velit. Integer vitae urna nis<br>
                    <br><br>
                    <form action="register.php">
                        <button type="submit" class="btn btn-outline-info">Attend Event</button>
                    </form>
                </div>
                  
                    </div>
                </div>
                
                <div class="right_evnts">
                       
                    <div class="pnt">
                       <div style="width:500px;margin-left:300px;margin-top:70px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere odio in eros consectetur lacinia. Etiam eget dui sit amet ipsum tempus sagittis. Mauris elementum nisi nunc, quis sagittis risus pretium id. Sed enim ex, tristique ac tristique ac, facilisis at augue. Suspendisse viverra euismod dui et porta. Suspendisse potenti. In ut euismod velit. Ut a metus enim. Nam ut auctor lorem, nec auctor tortor. Quisque nisl tellus, lobortis at urna at, gravida bibendum turpis. Cras dignissim, tellus sed vehicula ornare, ipsum mauris iaculis tortor, a fringilla neque eros in turpis. Proin ut massa pellentesque, interdum tellus et, tincidunt ipsum. Curabitur id posuere lectus, id sodales velit. Integer vitae urna nis
                       <br><br>
                       <form action="register.php">
                           <button type="submit" class="btn btn-outline-info">Attend Event</button>
                       </form>
                       </div>
                       
               <div style="margin-left:250px;margin-top:30px">
                   <h2 >Kite Flying Festival</h2>   
                   <img src="images/kitefly.jpg" width="500px" height="400px"></div>
               </div>
           </div>
           <br>
       
           <div class="directions" id="yalemap">
            
            <br><br>
            <div class="map">
            <h1 >Get Directions to the Events Location</h1>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.0217716864386!2d-72.93315204891874!3d41.30838997916973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7d9b31fff4103%3A0xf5dffb2781e299ac!2sYale%20University%20Art%20Gallery!5e0!3m2!1sen!2sus!4v1623574350408!5m2!1sen!2sus" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="toparrow">
          <a  href="#evheading"><img style="width:50px;height:50px;margin-left:40px"  src="images/top.png"></a>
          <p ><a href="#evheading">Go back to top</a></p>
          </div>
        </div>
            </div>
        </div>
        <hr>
    </body>
</html>