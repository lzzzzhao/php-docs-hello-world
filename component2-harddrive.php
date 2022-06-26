<!DOCTYPE html>
<html>
<head>

<title>Hard drive</title>

<style>

h1 {
  font-family: Monospace;
  font-size:30px;
  margin-top: 5px; margin-bottom: 0px;
  text-align: center;
  font-weight: normal;
  color: rgb(255, 255, 255);
}

h3 {
  font-family: Monospace;
  font-size:20px;
  margin-top: 5px; margin-bottom: 0px;
  text-align: center;
  font-weight: normal;
  color: rgb(0, 0, 0);
}

label {
  font-family: Monospace;
  font-size:15px;
  margin-top: 5px; margin-bottom: 0px;
  text-align: center;
  font-weight: normal;
  color: rgb(0, 0, 0);
}

h2.center {
  text-align: center;
}

h2.title {
  font-family: Monospace;
  font-size:30px;
  margin-top: 5px; margin-bottom: 0px;
  font-weight: normal;
  color: rgb(0, 0, 0);
}

input[type=text], select {
  width: 100%;
  padding: 12px 40px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #22577E;
  border-radius: 15px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 50%;
  padding: 12px 40px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #22577E;
  border-radius: 15px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #22577E;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #a33030;
}

div {
  border-radius: 20px;
  background-color: #1D3557;
  padding: 10px;
  width: 80%;
}

.button {
  background-color: #DEC20B;
  border: none;
  color: #DEC20B;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #A8DADC; 
  color: white; 
  border: 3px solid #457B9D;
}
.button1:hover {
  background-color: #457B9D;
  color: white;
}
.round{
  border-radius: 8px;
}

* {
  box-sizing: border-box;
}

.columnimage {
  float: left;
  width: 40%;
  padding: 10px;
  height: 1000px;
}

.columnspace {
  float: left;
  width: 2%;
  padding: 10px;
  height: 250px;
}

.columninfo {
  float: left;
  width: 58%;
  padding: 10px;
  height: 1000px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

p.left {
  text-align: left;
}

.qr-code {
  max-width: 200px;
  margin: 10px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0F0E0E;
  border-radius: 12px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  font-size: 22px;
  padding: 18px 20px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #222222;
}

.active {
  background-color: #0F0E0E;
}

.unstyled-button {
  border: none;
  padding: 0;
  background: none;
}

</style>

<script>
  function htmlEncode (value){
    return $('<div/>').text(value).html();
  }

  $(function() {
    $("#generate").click(function() {
      $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#content").val()) + "&chs=160x160&chld=L|0");
    });
  });
</script>

<script>
  function myFunction() {
    document.getElementById("step").style.fontSize = "x-large";
  }
</script>

</head>

<body style="background-color:#457B9D;">

  <!-- nav -->
  
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  
  <!-- nav -->

    <br><br><br>
    <h1 style="font-size: 35px; color:black;"><b>HARD DRIVE</b></h1>
    <br><br><br>
    
    <div style="margin:0 auto;">

        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Video</b></h3>
            <iframe width="430" height="330" src="https://www.youtube.com/embed/vXpAsf7SJ3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </div>

        <br>

        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Step &nbsp;</b><button type="button" class="unstyled-button" onclick="myFunction()"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/1200px-Magnifying_glass_icon.svg.png" height="15px"></button></h3>
            <p class="left" id="step">
            1. Unscrew and remove the sides of your computer’s case. Some have latches holding the sides in place, which must be pushed open. Make sure you have clear access to the motherboard’s SATA ports and hard disk bays. <br>
            2. Place the SSD into its mounting bracket or a removable bay, line it up with the holes underneath, then screw it in. Position the mounting bracket into a spare 3.5-inch hard disk bay and secure it using holes at the side. <br>
            3. Connect the L-shaped end of a SATA cable to the SSD, and the other end to a spare SATA port (SATA 6Gbps ports are blue). Connect a SATA power cable to the SSD. For a fresh Windows installation, disconnect any other hard disks inside your PC. <br>
            4. Insert a USB or DVD stick ready with Windows 10 (see how to make one here) and switch the PC on. Press F12 or whatever the key is to see the boot menu and select the USB or DVD (see more on how to boot from USB). Now follow the instructions to install Windows 10 on the SSD. Once the installation is complete you can put other hard drives back in. <br>
            </p>
            </center>
        </div>

        <br>

        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Buy hard drive for your PC</b></h3>
            <h3><b>Scan the qr code to redirect to shopee store:</b></h3>
            <div class="container-fluid">
              <div class="text-center">
                <img src="qrcode/qrcode2-harddrive.png" class="round">
              </div>
            </div>
            </center>
        </div>
    </div>
    
    <br><br><br>
</body>
</html>