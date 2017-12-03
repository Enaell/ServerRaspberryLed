<!DOCTYPE html>

<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['val1']);
    exec("touch '".$val1."'");
    echo $val1;
}
?>


<?php
	if(isset($_GET['submit1']))
	{
		exec('sudo /usr/bin/python /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/clock_gif.py  > /dev/null 2>/dev/null &');
	}

	if(isset($_POST['submit2']))
	{
		exec('touch /home/pi/Documents/LEDMatrix/rpi-rgb-led-matrix-master/stopLedScript.txt');
	}
?>


<html lang="en">
<head>
<meta charset="UTF-8">
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


<form action="" method="get">
    Inserisci number1: 
    <input type="text" name="val1" id="val1"></input>

    <?php echo "ciaoooo"; ?>

    <input type="submit" name="submit" value="send"></input>
</form>




  <div class="container-fluid">


    <div class="row" id="mainContent">
      <div class="col-sm-12">
        <h1 id="mainTitle"> TITLE </h1>


        <div>

      <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
          </ul>

        <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOneTabOne">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOneTabOne" aria-expanded="false" aria-controls="collapseOneTabOne">
                      <h4 class="panel-title">
                        Time Color
                      </h4>
                    </a>
                  </div>
                  <div id="collapseOneTabOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneTabOne">
                    <div class="panel-body">

		<div class="colorpicker">
  			<div id="colorpicker2"></div>
  			<input type="text" id="color2" />
		</div>

                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwoTabOne">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwoTabOne" aria-expanded="false" aria-controls="collapseTwoTabOne">
                      <h4 class="panel-title">
                        Script 2
                      </h4>
                    </a>
                  </div>
                  <div id="collapseTwoTabOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoTabOne">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThreeTabOne">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThreeTabOne" aria-expanded="false" aria-controls="collapseThreeTabOne">
                      <h4 class="panel-title">
                        Script 3
                      </h4>
                    </a>
                  </div>
                  <div id="collapseThreeTabOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeTabOne">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>  


	    <form method="post">
	      <p>
                <button name="submit1" class="btn btn-primary validateBtn">Submit</button>
              </p>
            </form>


            <form method="post">
              <p>
                <button name="submit2" class="btn btn-primary stopBtn">Stop</button>
              </p>
            </form>



            </div>
            <div role="tabpanel" class="tab-pane fade in" id="profile">
              <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOneTabTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOneTabTwo" aria-expanded="false" aria-controls="collapseOneTabTwo">
                      <h4 class="panel-title">
                        Script 1
                      </h4>
                    </a>
                  </div>
                  <div id="collapseOneTabTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneTabTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwoTabTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwoTabTwo" aria-expanded="false" aria-controls="collapseTwoTabTwo">
                      <h4 class="panel-title">
                        Script 2
                      </h4>
                    </a>
                  </div>
                  <div id="collapseTwoTabTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoTabTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThreeTabTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeTabTwo" aria-expanded="false" aria-controls="collapseThreeTabTwo">
                      <h4 class="panel-title">
                        Script 3
                      </h4>
                    </a>
                  </div>
                  <div id="collapseThreeTabTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeTabTwo">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>   
              <button type="submit" class="btn btn-primary validateBtn">Submit</button>
              <button type="submit" class="btn btn-primary stopBtn">Stop</button>

            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
              <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOneTabThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOneTabThree" aria-expanded="false" aria-controls="collapseOneTabThree">
                      <h4 class="panel-title">
                        Script 1
                      </h4>
                    </a>
                  </div>
                  <div id="collapseOneTabThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneTabThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwoTabThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwoTabThree" aria-expanded="false" aria-controls="collapseTwoTabThree">
                      <h4 class="panel-title">
                        Script 2
                      </h4>
                    </a>
                  </div>
                  <div id="collapseTwoTabThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoTabThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThreeTabThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThreeTabThree" aria-expanded="false" aria-controls="collapseThreeTabThree">
                      <h4 class="panel-title">
                        Script 3
                      </h4>
                    </a>
                  </div>
                  <div id="collapseThreeTabThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeTabThree">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>   
              <button type="submit" class="btn btn-primary validateBtn">Submit</button>
              <button type="submit" class="btn btn-primary stopBtn">Stop</button>

            </div>
            <div role="tabpanel" class="tab-pane fade in" id="settings">
              <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOneTabFour">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseOneTabFour" aria-expanded="false" aria-controls="collapseOneTabFour">
                      <h4 class="panel-title">
                        Script 1
                      </h4>
                    </a>
                  </div>
                  <div id="collapseOneTabFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="  headingOneTabFour">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwoTabFour">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwoTabFour" aria-expanded="false" aria-controls="collapseTwoTabFour">
                      <h4 class="panel-title">
                        Script 2
                      </h4>
                    </a>
                  </div>
                  <div id="collapseTwoTabFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoTabFour">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThreeTabFour">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseThreeTabFour" aria-expanded="false" aria-controls="collapseThreeTabFour">
                      <h4 class="panel-title">
                        Script 3
                      </h4>
                    </a>
                  </div>
                  <div id="collapseThreeTabFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeTabFour">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary validateBtn">Submit</button>
              <button type="submit" class="btn btn-primary stopBtn">Stop</button>

            </div>
          </div>
              <button type="submit" class="btn btn-primary stopAllBtn">Stop All</button>

        </div>




      </div>
    </div>
  
  </div>

  <footer>
    <p style="font-size:19px;"> UTOOO </p>
  </footer>
</body>
</html>