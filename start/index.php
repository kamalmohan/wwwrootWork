<!DOCTYPE html>
<html>
<head>
	<title>PHP Info</title>
</head>
<body>
<a href="index.htm">HTML</a>
<?php
echo date(r);
switch(date("w")) {
	 
	case 1:
	   echo " Today, it's Monday";
	   break;
	case 2:
	   echo " Today, it's Tuesday";
	   break;
	case 3:
	   echo " Today, it's Wednesday";
	   break;
	case 4:
	   echo " Today, it's Thursday";
	   break;
	case 5:
	   echo " Today, it's Friday";
	   break;
	case 6:
	   echo " Today, it's Saturday";
	   break;
	default:
	   echo " Today, it's Sunday";
	   break;
	 
	}
	echo nl2br("\n");
	echo gethostname();
	echo nl2br("\n");
	phpinfo();
?>
<p>Time and date functions<br>

PHP provides a wide range of funtions in relation to time and date. In this lesson, we will look at the most important of these functions: documentationdate.<br>

With different parameters, the documentationdate function can return the current date / time in many different formats. Some of the most useful parameters are:<br>

date("y")<br>
Returns the current year from a date - with today's date, it returns: 16<br>
date("m")<br>
Returns the current month from a date - with today's date, it returns: 10<br>
date("n")<br>
Returns the current month from a date without leading zeroes ( eg. "1" instead of "01") - with today's date, it returns: 10<br>
date("F")<br>
Returns the current month name from a date - with today's date, it returns: October<br>
date("d")<br>
Returns the current day of the month from a date - with today's date, it returns: 27<br>
date("l")<br>
Returns the name of the current weekday from a date - with today's date, it returns: Thursday<br>
date("w")<br>
Returns the current day of the week from a date - with today's date, it returns: 4<br>
date("H")<br>
Returns the current hour from a time - with the current time, it returns: 12<br>
date("i")<br>
Returns the current minute from a time - with the current time, it returns: 29<br>
date("s")<br>
Returns the current second from a time - with the current time, it returns: 28<br>
This example illustrates the use of the documentationdate function:</p>
</body>
</html>