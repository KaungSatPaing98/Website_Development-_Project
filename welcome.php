
<!doctype html>
<!-- This Webiste is floral webiste was crearted by : Kaung Sat Paing-->
<html lang="en">

    <head>
        <title>Busy Bee Florist </title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/Style.css">
    </head>

 
 <body>

    <div id = "container">
        <!-- Mobile Nav -->
        <nav class="mobile-nav">
            <div id="menu-links">
                <a href = "index.html">Home</a> 
                <a href = "Order.html">Order</a>
                <a href = "shopnow.html">Shop Now</a>
                <a href = "DIY.html">DIY</a> 
                <a href = "EventService.html">Event Services</a>
                <a href = "news.html">News</a>
                <a href = "Contactus.html">Contact Us</a> 
             </div>
             <a class="menu-icon" onclick="hamburger()">
                  <div>&#9776;</div>
             </a>
         </nav>
    
    
 
    <header>
        
        <img src = "Images/logo_3.jpg" alt = "Busy Bee Logo" width="200" >
    </header>
    
    <nav class="tablet-desktop">
		<ul>
             <li><a href = "index.html">Home</a> </li>
			       <li><a href = "Order.html">Order</a> </li>
             <li><a href = "shopnow.html">Shop Now</a></li>
			       <li><a href = "DIY.html">DIY</a> </li>
			       <li><a href = "EventService.html">Event Services</a></li>
             <li><a href = "news.html">News</a></li>
			       <li><a href = "Contactus.html">Contact Us</a> </li>
	    </ul>
    </nav>

<main>

Welcome <?php echo $_POST["fName"]; ?><?php echo $_POST["lName"]; ?><br>



Your email address is: <?php echo $_POST["email"]; ?><br>


Your Phone Number is: <?php echo $_POST["phone"]; ?><br>

Your Order Detail is: <?php echo $_POST["questions"]; ?><br>


    Your Form Has Been Submitted.
    Our Customer Service will be contact soon....  
      <a href = "index.html"> Back to Home Page</a>

    </main>

    <footer><br>
        <p>@copy; Copyright 2021. All Rights Reserved.</p>
        <p><a href="lailto:busybeeflorist@busybeemail.com.au">busybeeflorist@busybeemail.com.au</a></p>

    </footer>
    
    </div>
 
    <script src="scripts/script.js"></script>

</body>
</html>