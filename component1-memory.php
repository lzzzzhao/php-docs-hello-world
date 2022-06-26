<!DOCTYPE html>
<html>
<head>

<title>Memory</title>

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
    <li><a href="index.php">Home</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
  </ul>
  
  <!-- nav -->

    <br><br><br>
    <h1 style="font-size: 35px; color:black;"><b>MEMORY</b></h1>
    <br><br><br>
    
    <div style="margin:0 auto;">
        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Video</b></h3>
            <iframe width="430" height="330" src="https://www.youtube.com/embed/C-osLuzsXOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </div>

        <br>

        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Step &nbsp;</b><button type="button" class="unstyled-button" onclick="myFunction()"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magnifying_glass_icon.svg/1200px-Magnifying_glass_icon.svg.png" height="15px"></button></h3>
            <p class="left" id="step">
            1.Shut down your computer and unplug all of the cables connected to it. <br>
            2.Remove the side of the computer case so you can access the motherboard.The RAM slots are adjacent to the CPU socket. 3.Look for the big heat sink at the top of the motherboard, and you’ll see either two or four memory slots next to it. <br>
            4.Before you can install the new memory you’ve purchased, you have to remove the old kit. <br>
            5.Start by toggling the plastic retention clips at either end of the memory slots so you can pull out the old RAM. <br>
            6.While you’re there, remove any dust from the memory slots, either by blasting the area with compressed air or by vacuuming gently. <br>
            7.Now it’s time to put in the new RAM kit. Make sure the memory module is correctly oriented: The notch in the bottom edge of the RAM must match up with the rise in the memory slot. If you’re not filling all the available RAM channels, read your motherboard’s manual to see which specific slots you should fill first. Placing RAM in the incorrect slots could result in some performance degradation. <br>
            8.Now that you’ve seated the RAM in the slot, toggle the plastic retention levers to lock your new memory modules in place. <br>
            9.Finally, close up your computer case, plug everything back in, and turn on your computer. <br>
            </p>
            </center>
        </div>

        <br>

        <div style="background-color:rgb(255, 255, 255); margin:0 auto;">
            <center>
            <h3><b>Buy memory for your PC</b></h3>
            <h3><b>Scan the qr code to redirect to shopee store:</b></h3>
            <div class="container-fluid">
              <div class="text-center">
                <img src="qrcode/qrcode1-memory.png" class="round">
              </div>
            </div>
            </center>
        </div>
    </div>
    
    <br><br><br>
</body>
</html>