<?php

echo "Cloud Computing Lab";
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

     <style>

    h3{
        font-family: Monospace;
        font-size:20px;
        margin-top: 5px; margin-bottom: 0px;
        text-align: center;
        font-weight: normal;
        color: rgb(0, 0, 0);
    }
    label{
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
  width: 50%;
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
  background-color: #DEC20B;
  padding: 10px;
  width: 50%;
}
.button {
        background-color: #DEC20B; /* Green */
        border: none;
        color: #DEC20B;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: #22577E; 
        color: white; 
        border: 2px solid #DEC20B;
    }
    .button1:hover {
        background-color: #DEC20B;
        color: white;
    }
    .round{
        border-radius: 8px;
    }

    * {
    box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .columnimage {
    float: left;
    width: 40%;
    padding: 10px;
    height: 250px; /* Should be removed. Only for demonstration */
    }

    .columninfo {
    float: left;
    width: 60%;
    padding: 10px;
    height: 250px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
</style>
</head>
<body style="background-color:#1690A7;">
    <center>
    <h1>COMPONENTS</h1>
    <br>
    </center>
    <!-- Memory -->
    <div class="row" style="margin:0 auto;">
      <div class="columnimage" style="background-color:rgb(255, 255, 255);">
          <img src="https://www.technotification.com/wp-content/uploads/2021/02/technology-computer-chips-gigabyte-2048x1365.jpg" style="height: 230px; width: 200px;">
      </div>
      <div class="columninfo" style="background-color:rgb(255, 255, 255);">
        <h2 class="center">Memory</h2>
        <p>Computer memory, device that is used to store data or programs (sequences of instructions) on a temporary or permanent basis for use in an electronic digital computer.</p>
      </div>

      <center>
      <a href="component1-memory.php" class="button button1 round" style="font-family: Cursive;">View</a>
      </center>
    </div>

    <br>

    <!-- Hard drive-->
    <div class="row" style="margin:0 auto;">
      <div class="columnimage" style="background-color:rgb(255, 255, 255);">
          <img src="https://www.lenovo.com/medias/4XB0M60786-01-500x400.png?context=bWFzdGVyfHJvb3R8MTkwNDMzfGltYWdlL3BuZ3xoNGEvaDcwLzExMTA2MzkyNTM5MTY2LnBuZ3w4NGUzNDNjMWI1ZDBlNGJiMjY3ZGZlYThjZmZjMTBiNGI2Y2MzZTdjMmVmZWVmNjczMzFiMWJjMjJjNjdiZDg5" style="height: 230px; width: 200px;">
      </div>
      <div class="columninfo" style="background-color:rgb(255, 255, 255);">
        <h2 class="center">Hard Drive</h2>
        <p>A computer's hard drive is a device consisting of several hard disks, read/write heads, a drive motor to spin the disks, and a small amount of circuitry, all sealed in a metal case to protect the disks from dust.</p>
      </div>

      <center>
      <a href="component2-harddrive.php" class="button button1 round" style="font-family: Cursive;">View</a>
      </center>
    </div>

    <br>

    <!-- Motherboard-->
    <div class="row" style="margin:0 auto;">
      <div class="columnimage" style="background-color:rgb(255, 255, 255);">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9nUnm-ToTFex9vQkuNBgz7bzNajMr2JDkkz7Dufud5rYe5yzw02ZJ5GXkNY13T8itvhE&usqp=CAU" style="height: 230px; width: 200px;">
      </div>
      <div class="columninfo" style="background-color:rgb(255, 255, 255);">
        <h2 class="center">Motherboard</h2>
        <p>The motherboard is the backbone that ties the computer's components together at one spot and allows them to talk to each other. Without it, none of the computer pieces, such as the CPU, GPU, or hard drive, could interact.</p>
      </div>

      <center>
      <a href="component3-motherboard.php" class="button button1 round" style="font-family: Cursive;">View</a>
      </center>
    </div>

    <br>

    <!-- Processor-->
    <div class="row" style="margin:0 auto;">
      <div class="columnimage" style="background-color:rgb(255, 255, 255);">
          <img src="https://noteboox.de/media/image/product/23069/lg/intel-xeon-e5520.jpg" style="height: 230px; width: 200px;">
      </div>
      <div class="columninfo" style="background-color:rgb(255, 255, 255);">
        <h2 class="center">Processor</h2>
        <p>A processor is a piece of hardware that interprets the instructions that drive a computer. Processors are the brains of a computer with good reason. Without a processor, computers could not run programs. Processors are also called Central Processing Units (CPUs).</p>
      </div>

      <center>
      <a href="component4-processor.php" class="button button1 round" style="font-family: Cursive;">View</a>
      </center>
    </div>

    <br>

    <!-- Monitor-->
    <div class="row" style="margin:0 auto;">
      <div class="columnimage" style="background-color:rgb(255, 255, 255);">
          <img src="https://images.philips.com/is/image/PhilipsConsumer/241V8_69-IMS-en_MY?$jpglarge$&wid=960" style="height: 230px; width: 200px;">
      </div>
      <div class="columninfo" style="background-color:rgb(255, 255, 255);">
        <h2 class="center"> Monitor</h2>
        <p>A display screen that provides visual output from a computer, cable box, camera or other video-generating device. The two predominant screen technologies are LCD and OLED. See display standards, LCD, OLED, analog monitor, digital monitor and flat panel display.</p>
      </div>

      <center>
      <a href="component5-monitor.php" class="button button1 round" style="font-family: Cursive;">View</a>
      </center>
    </div>
    
    <br><br><br>
</body>
</html>