<?php

session_start();

if (isset($_POST["submit"])) {
	
$title = $_POST['title'];

$_SESSION['title'] = $title;

$title = $_SESSION['title'];


$selection = $_POST['selection'];

$_SESSION['selection'] = $selection;

$selection = $_SESSION['selection'];


$_SESSION['name'] = $_POST['name'];

$name = $_SESSION['name'];

$_SESSION['selection1'] = $_POST['selection1'];

$selection1 = $_SESSION['selection1'];


$_SESSION['proportion1'] =  $_POST['proportion1'];

$proportion1 = $_SESSION['proportion1'];

$selection2 = $_POST['selection2'];

$_SESSION['selection2'] = $selection2;

$selection2 = $_SESSION['selection2'];

$proportion2 = $_POST['proportion2'];

$_SESSION['proportion2'] = $proportion2;

$proportion2 = $_SESSION['proportion2'];


$selection3 = $_POST['selection3'];

$_SESSION['selection3'] = $selection3;

$selection3 = $_SESSION['selection3'];

$proportion3 = $_POST['proportion3'];

$_SESSION['proportion3'] = $proportion3;

$proportion3 = $_SESSION['proportion3'];


$selection4 = $_POST['selection4'];

$_SESSION['selection4'] = $selection4;

$selection4 = $_SESSION['selection4'];

$proportion4= $_POST['proportion4'];

$_SESSION['proportion4'] = $proportion4;

$proportion4 = $_SESSION['proportion4'];


$selection5 = $_POST['selection5'];

$_SESSION['selection5'] = $selection5;

$selection5 = $_SESSION['selection5'];

$proportion5 = $_POST['proportion5'];

$_SESSION['proportion5'] = $proportion5;

$proportion5 = $_SESSION['proportion5'];

}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org">
 
  <head>
	
    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
<style>

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}	
nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 25px 40px;
		color: #757575; text-decoration: none;
	}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 <script type="text/javascript">

//vertical chart begin

<?php if ( !empty($_REQUEST["vertical"]) ) { ?> 

   google.charts.load('current', {packages:['corechart']});
      google.charts.setOnLoadCallback(drawStuff);
        function drawStuff() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', '<?php echo $selection; ?>');
          data.addColumn('number', '<?php echo $name; ?>');
          data.addRows([
			<?php if(!empty($selection1)) { ?>
            ['<?php echo $selection1; ?>', <?php echo $proportion1; ?>],
			<?php } ?>
			<?php if(!empty($selection2)) { ?>
            ['<?php echo $selection2; ?>', <?php echo $proportion2; ?>],
			<?php } ?>
			<?php if(!empty($selection3)) { ?>
            ['<?php echo $selection3; ?>', <?php echo $proportion3; ?>],
			<?php } ?>
			<?php if(!empty($selection4)) { ?>
            ['<?php echo $selection4; ?>', <?php echo $proportion4; ?>],
			<?php } ?>
			<?php if(!empty($selection2)) { ?>
            ['<?php echo $selection5; ?>', <?php echo $proportion5; ?>]
			<?php } ?>
          ]);

         var options = {
           title: '<?php echo $title; ?>',
           width: 900,
           height: 300,
           legend: 'none',
           bar: {groupWidth: '95%'},
           vAxis: { gridlines: { count: 4 } }
         };

         var chart = new google.visualization.ColumnChart(document.getElementById('number_format_chart'));
         chart.draw(data, options);

         document.getElementById('format-select').onchange = function() {
           options['vAxis']['format'] = this.value;
           chart.draw(data, options);
         };
      };
	  
	  //vertical chart end


       // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

<?php } 


elseif ( !empty($_REQUEST["horizontal"]) && isset($_POST["submit"]) ) { ?> 	
 
 //horizontal chart begin

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', '<?php echo $name; ?>');
		<?php if(!empty($selection)) { ?>
        data.addColumn('number', '<?php echo $selection; ?>');
		<?php } ?>
        data.addRows([
		<?php if(!empty($selection1)) { ?>
          ['<?php echo $selection1; ?>', <?php echo $proportion1; ?>],  
		<?php } ?>
		<?php if(!empty($selection2)) { ?>
          ['<?php echo $selection2; ?>', <?php echo $proportion2; ?>],  
		<?php } ?>          
		<?php if(!empty($selection3)) { ?>
          ['<?php echo $selection3; ?>', <?php echo $proportion3; ?>],  
		<?php } ?>
		<?php if(!empty($selection4)) { ?>
          ['<?php echo $selection4; ?>', <?php echo $proportion4; ?>],  
		<?php } ?> 
		<?php if(!empty($selection5)) { ?>
          ['<?php echo $selection5; ?>', <?php echo $proportion5; ?>],  
		<?php } ?>
        ]);

        // Set chart options
		
<?php if(isset($title)) { ?>
        var options = {'title':'<?php echo $title; ?>',
                       'width':400,
                       'height':300};
<?php } ?>
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

 //horizontal chart end

<?php }  elseif ( !empty($_REQUEST["pie"])  ) { ?> 	
       // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', '<?php echo $selection; ?>');
        data.addColumn('number', '<?php echo $name; ?>');
        data.addRows([
		<?php if(!empty($selection1)) { ?>
          ['<?php echo $selection1; ?>', <?php echo $proportion1; ?>],
		<?php } ?>
		<?php if(!empty($selection2)) { ?>
          ['<?php echo $selection2; ?>', <?php echo $proportion2; ?>],
		<?php } ?>
		<?php if(!empty($selection3)) { ?>
          ['<?php echo $selection3; ?>', <?php echo $proportion3; ?>],
		<?php } ?>
		<?php if(!empty($selection4)) { ?>
          ['<?php echo $selection4; ?>', <?php echo $proportion4; ?>],
		<?php } ?>
		<?php if(!empty($selection5)) { ?>
          ['<?php echo $selection5; ?>', <?php echo $proportion5; ?>]
		<?php } ?>
        ]);

        // Set chart options
        var options = {'title':'<?php echo $title ?>',
                       'width':800,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }


<?php }  ?>	 
      </script>   
  </head>
  <body>
 <header>
 <form>
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 logo"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><button type="button" class="sign-up header-buttons">Account</button></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><button type="button" id="header-button" class="sign-up header-buttons">Sign Out</button></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  </div>
  </form>
  </header>
<div class="container" style="margin: 20px auto; text-align: center;">

 <nav>
	<ul>
		<li><a href="#popup1">Horizontal Bar Chart</a></li>
		<li><a href="#popup2">Vertical Bar Chart</a></li>
		<li><a href="#popup3">Pie Chart</a></li>
	</ul>
</nav>
 </div>
 <div class="container" style="margin: 20px auto;">
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
    <div id="number_format_chart"></div>
    </div>
    
 <div id="popup1" class="modalBox">
 <a href="#" class="modalCloseOuter"></a>
 <div class="charts">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   <p>Title of chart (required)<br /><input type="text" name="title"></p>
   </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Components (required)<br /><input type="text" name="name"></p>
 </div>
 </div>
 <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Column names (required)<br /><input type="text" name="selection"></p>
 </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   
   </div>
   </div>
   <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Chart Element Value 1&nbsp;&nbsp;<br /><input type="text" name="selection1"></p>
      
      </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 1&nbsp;&nbsp;<br /><input type="text" name="proportion1"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 2&nbsp;&nbsp;<br /><input type="text" name="selection2"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 2&nbsp;&nbsp;<br /><input type="text" name="proportion2"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 3&nbsp;&nbsp;<br /><input type="text" name="selection3"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 3&nbsp;&nbsp;<br /><input type="text" name="proportion3"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 4&nbsp;&nbsp;<br /><input type="text" name="selection4"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 4&nbsp;&nbsp;<br /><input type="text" name="proportion4"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 5&nbsp;&nbsp;<br /><input type="text" name="selection5"></p>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 5&nbsp;&nbsp;<br /><input type="text" name="proportion5"></p>
<input type="hidden" name="horizontal" value="horizontal">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
   <input type="submit" name="submit" value="Submit Form"><br>
   </div>
   </div>
</form>
  </div>
  </div>

 <div id="popup3" class="modalBox">
 <a href="#" class="modalCloseOuter"></a>
 <div class="charts">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   <p>Title of chart (required)<br /><input type="text" name="title"></p>
   </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Components (required)<br /><input type="text" name="name"></p>
 </div>
 </div>
 <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Column names (required)<br /><input type="text" name="selection"></p>
 </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   
   </div>
   </div>
   <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Chart Element Value 1&nbsp;&nbsp;<br /><input type="text" name="selection1"></p>
      
      </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 1&nbsp;&nbsp;<br /><input type="text" name="proportion1"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 2&nbsp;&nbsp;<br /><input type="text" name="selection2"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 2&nbsp;&nbsp;<br /><input type="text" name="proportion2"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 3&nbsp;&nbsp;<br /><input type="text" name="selection3"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 3&nbsp;&nbsp;<br /><input type="text" name="proportion3"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 4&nbsp;&nbsp;<br /><input type="text" name="selection4"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 4&nbsp;&nbsp;<br /><input type="text" name="proportion4"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 5&nbsp;&nbsp;<br /><input type="text" name="selection5"></p>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 5&nbsp;&nbsp;<br /><input type="text" name="proportion5"></p>
<input type="hidden" name="pie" value="pie">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
   <input type="submit" name="submit" value="Submit Form"><br>
   </div>
   </div>
</form>
  </div>
  </div>
  
 <div id="popup2" class="modalBox">
 <a href="#" class="modalCloseOuter"></a>
 <div class="charts">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   <p>Title of chart (required)<br /><input type="text" name="title"></p>
   </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Components (required)<br /><input type="text" name="name"></p>
 </div>
 </div>
 <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Column names (required)<br /><input type="text" name="selection"></p>
 </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   
   </div>
   </div>
   <div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Chart Element Value 1&nbsp;&nbsp;<br /><input type="text" name="selection1"></p>
      
      </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 1&nbsp;&nbsp;<br /><input type="text" name="proportion1"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 2&nbsp;&nbsp;<br /><input type="text" name="selection2"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 2&nbsp;&nbsp;<br /><input type="text" name="proportion2"></p>
   
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 <p>Chart Element Value 3&nbsp;&nbsp;<br /><input type="text" name="selection3"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 3&nbsp;&nbsp;<br /><input type="text" name="proportion3"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 4&nbsp;&nbsp;<br /><input type="text" name="selection4"></p>
      
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 4&nbsp;&nbsp;<br /><input type="text" name="proportion4"></p>
    
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Chart Element Value 5&nbsp;&nbsp;<br /><input type="text" name="selection5"></p>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p>Proportion 5&nbsp;&nbsp;<br /><input type="text" name="proportion5"></p>
<input type="hidden" name="vertical" value="vertical">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
   <input type="submit" name="submit" value="Submit Form"><br>
   </div>
   </div>
</form>
  </div>
  </div>
  


<div class="row bottom-6">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-4">
<img src="assets/Social-Icons-01.png" class="social-icons" />
<img src="assets/Social-Icons-02.png" class="social-icons" />
<img src="assets/Social-Icons-03.png" class="social-icons" />
<br /><br />
<p class="copyright">&copy; 2016 QPALX. All rights reserved</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-5">
<p>Contact Us<br />
hello@qpalx.com<br />
Studio M, 4th Floor 8 Lower<br />
Manchester Street, M1 SQF<br />
+34 393 323 32 22</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-right">
<p>Subscribe Now<br />
Sign up to stay up to date with our<br />
latest news</p>

<input type="text" name="email" class="textbox" value="&nbsp;&nbsp;&nbsp;Enter Email Address">
<button type="submit" class="sign-up">Sign Up</button>
</div>
</div>
<footer>
</footer>

    <!--Load the AJAX API-->


 </body>
</html>

