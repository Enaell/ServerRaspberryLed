<!DOCTYPE html>

<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['val1']);

    $files = glob('/home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/Color/*'); // get all file names
    foreach($files as $file)
    { // iterate files
      if(is_file($file))
        unlink($file); // delete file
    }
   
    exec("touch /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/Color/$val1" );

}
?>

<?php
   if( isset($_GET['submitGif']) )
   {
    //be sure to validate and clean your variables
     $gifVal = htmlentities($_GET['gifVal']);
     $gifDirectoryfiles = glob('/home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/Gifs/*'); // get all file names
     foreach($gifDirectoryfiles as $gifFile)
     { // iterate files
       if(is_file($gifFile))
         unlink($gifFile); // delete file
     }
   
     exec("touch /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/Gifs/$gifVal" );
}
?>

<?php
	if(isset($_POST['submit1']))
	{
		if (filr_exist('$/home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/stopLedScript.txt'))
			unlink('$/home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/stopLedScript.txt');
		//exec('sudo /usr/bin/python /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/clock_gif.py > /dev/null 2>/dev/null &');
	}

	if(isset($_POST['submit2']))
	{

		exec('touch /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/stopLedScript.txt');
	}
?>


<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>LedMatrixContoler</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="farbtastic.js"></script>
<script type="text/javascript" src="trickyEffect.js"> </script>

<link rel="stylesheet" href="style.css" />


</head> 

<body>
  <nav class="nav navbar-collapse" role="navigation">
    <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <div class="navbar-inner">
          <ul class="nav navbar-nav">
            <li> 
              <a href="#">
              <strong>LedMatrixController</strong>
              </a>
            </li>
          </ul>
          <ul  class="nav nav-center">
            <li class="active"><a href="#"><strong>Home</strong></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid">


    <div class="row" id="mainContent">
      <div class="col-sm-12">
        <h1 id="mainTitle"> Led Matrix Contoler </h1>


        <div>

      <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
          </ul>

        <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">

                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOneTabOne">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOneTabOne" aria-expanded="false" aria-controls="collapseOneTabOne">
                        <h4 class="panel-title">Time Color</h4>
                      </a>
                    </div>
                    <div id="collapseOneTabOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneTabOne">
                      <div class="panel-body">
                        <form action="" method="get">
			              <div class="col-sm-10">
  		                    <div class="colorpicker">
    		                  <div id="colorpicker2"></div>
      	                      <input type="text" name="val1" id="color2" />
		                    </div>
			              </div>
			              <div class="col-sm-2">
                            <input type="submit" name="submit" value="Select Color" class="btn btn-primary selectBtn"/>
			              </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
		
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwoTabOne">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwoTabOne" aria-expanded="false" aria-controls="collapseTwoTabOne">
                        <h4 class="panel-title">Gif</h4>
                      </a>
                    </div>
                    <div id="collapseTwoTabOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoTabOne">
                      <div class="panel-body">
                        <?php			     
                          $dir = glob('/home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/gifDirectory/*');
			              foreach($dir as $file)
                          {
			                $file = explode('gifDirectory/', $file)[1];
                            echo('<div class="gifList">');
			                echo('<div class="test">'.$file.'</div>');
                            echo('</div>');
                          }
                        ?>   
			            <form action="" method="get">
			              <div class="col-sm-8"></div>
			              <div class="col-sm-4">
			                <input type="text" name="gifVal" onfocus="blur()" id="gifVal"/>
			                <input name="submitGif" type="submit" class="btn btn-primary " value="Select Gif"/>
			              </div>
			            </form>
                      </div>
                    </div>
                  </div>
                </div>
              <form method="post">
                <p>
                  <button name="submit1" class="btn btn-primary validateBtn">Start Led Matrix</button>

                  <button name="submit2" class="btn btn-primary stopBtn">Stop</button>
                </p>
              </form>

            </div>


          </div>
        </div>
      </div>
    </div>

  </div>

  <footer>
    <p style="font-size:19px;"> LedMatrixContoler </p>
  </footer>
</body>
</html>
