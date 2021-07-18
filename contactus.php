<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
      h5 {
        text-align:center;
        padding:10px;
      }
    </style>
  </head>
  <body>
    <?php
      include 'navbar.php';
    ?>
    <div id="home"style="height:650px;" >
      <div class="mid">
        <div class="box1">
          <h5>GET IN TOUCH</h5>
          <p style="padding:20px;">Please fill out form and we will get in touch shortly.</p> 
          <div class="mid">  
            <div>
              <img src="Images\location.png" style="height:50px ; width:50px ;margin:0;"alt="location image">
            </div>
            <div>
              <br>
              <p style="padding:10px 5px;">Udaipur,Rajasthan</p>
            </div>
          </div>
          <div class="mid">  
            <div>
              <img src="Images\phone.png" style="height:50px ; width:50px; margin:0 ;"alt="location image">
            </div>
            <div>
              <br> 
              <p style="padding:10px 25px;">1234567895</p>
            </div>
          </div>
          <div class="mid">  
            <div>
              <img src="Images\email.png" style="height:70px ; width:70px ;margin:0;"alt="location image">
            </div>
            <div>
              <br> 
              <p style="padding:10px 5px;">udrbank@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="box2">
          <h5>LEAVE A COMMENT</h5>
          <form action="">
            <div >
	            <input type="text" name="name" id="name" placeholder="Name - ">
            </div>
            <br>
	          <div >
              <input type="email" name="name" id="email" placeholder="Email - ">
            </div>
            <br>
	          <div >
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Message - "></textarea>
        	  </div>
            <br>
            <div style="display:flex; align-items:center ; justify-content:center;" >
              <button onclick="return foo();">Send </button>
            </div>
          </form>	
        </div>
      </div>
    </div>
  </body>
  <script>
    function foo() {
      alert("Message Sent Successfully !");
      return true;
    }
  </script>
</html>
