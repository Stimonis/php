<?php
function build_calendar($month,$year,$dateArray) {
   // Create array days of week.
   $daysOfWeek = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
   // What is the first day of the month in question?
   $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
   // How many days does this month contain?
   $numberDays = date('t',$firstDayOfMonth);
   // Retrieve some information about the first day of the
   // month in question.
   $dateComponents = getdate($firstDayOfMonth);
   // What is the name of the month in question?
   $monthName = $dateComponents['month'];
   // What is the index value (0-6) of the first day of the
   // month in question.
   $dayOfWeek = $dateComponents['wday'];
   // Create the table tag opener and day headers
   $calendar = "<table class='calendar'>";
   $calendar .= "<caption>$monthName $year</caption>";
   $calendar .= "<tr>";
   // Create the calendar headers
   foreach($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
   }
   // Create the rest of the calendar
   // Initiate the day counter, starting with the 1st.
   $currentDay = 1;
   $calendar .= "</tr><tr>";
   // The variable $dayOfWeek is used to
   // ensure that the calendar
   // display consists of exactly 7 columns.
   if ($dayOfWeek > 0) {
        $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
   }
   $month = str_pad($month, 2, "0", STR_PAD_LEFT);
   while ($currentDay <= $numberDays) {
        // Seventh column (Saturday) reached. Start a new row.
        if ($dayOfWeek == 7) {
             $dayOfWeek = 0;
             $calendar .= "</tr><tr>";
        }
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $calendar .= "<td class='day' rel='$date'>$currentDay</td>";
        // Increment counters
        $currentDay++;
        $dayOfWeek++;
   }
   // Complete the row of the last week in month, if necessary
   if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
   }
   $calendar .= "</tr>";
   $calendar .= "</table>";
   return $calendar;
}
$dateComponents = getdate();
// $month = $dateComponents['mon']; // today's calendar
// $year = $dateComponents['year']; // today's calendar
$month = $_POST['month'];
$year = $_POST['year'];
if (isset($_POST['month']) && isset($_POST['year'])) {
echo build_calendar($month,$year,$dateArray);
}





?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exercise TP</h1>
    <fieldset>
      <form action="test.php" method="POST">
        Mois : <br>
        <select name="mois">
          <option></option>
          <option>Janvier</option>
          <option>Février</option>
          <option>Mars</option>
          <option>Avril</option>
          <option>Mai</option>
          <option>Juin</option>
          <option>Juillet</option>
          <option>Août</option>
          <option>Septembre</option>
          <option>Octobre</option>
          <option>Novembre</option>
          <option>Décembre</option>
        </select> <br>
        Année : <br>
        <select name="annee">
          <option></option>
          <option>2000</option>
          <option>2001</option>
          <option>2002</option>
          <option>2003</option>
          <option>2004</option>
          <option>2005</option>
          <option>2006</option>
          <option>2007</option>
          <option>2008</option>
          <option>2009</option>
          <option>2010</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
          <option>2014</option>
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
        </select> <br> <br>
        <input type="submit" name="send" value="Envoyer">
        <br>
  </body>
</html>
