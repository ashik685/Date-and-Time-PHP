<!DOCTYPE html>
<html>
<body>

<?php

//https://stackoverflow.com/questions/11820718/convert-utc-offset-to-timezone-or-date

$$offset = '-7:00';

// Calculate seconds from offset
list($hours, $minutes) = explode(':', $offset);
$seconds = $hours * 60 * 60 + $minutes * 60;
// Get timezone name from seconds
$tz = timezone_name_from_abbr('', $seconds, 1);
// Workaround for bug #44780
if($tz === false) $tz = timezone_name_from_abbr('', $seconds, 0);
// Set timezone
date_default_timezone_set($tz);

echo $tz . ': ' . date('r');

?>

</body>
</html>
