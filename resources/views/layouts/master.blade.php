<?php# require('calculateController.php'); ?>

<!DOCTYPE html>
<html>
	  <head>
		    <title>
            @yield('title', 'BMI Calculator')

        </title>
		    <meta charset='utf-8'>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
		    <link href='css/styles.css' rel='stylesheet'>

        @stack('head')
	  </head>

	  <body>
  	    <div class='container'>
			      <h1>BMI Calculator</h1>
			      <img src="bmi.jpg" alt="BMI Image"/>

			      <section>
                @yield('content')
            </section>
				</div>

        @stack('body')
		</body>
</html>
