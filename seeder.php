<?php
$con1 = mysqli_connect('localhost','root','');
$cuser = "CREATE USER 'compuser'@'localhost' IDENTIFIED BY 'comp606'";
$crun = mysqli_query($con1,$cuser);
if($crun)
{
  echo "User Created Successfully.<br>";
}

$cuserp = "GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, RELOAD, SHUTDOWN, PROCESS, FILE, REFERENCES, INDEX, ALTER, SHOW DATABASES, SUPER, CREATE TEMPORARY TABLES, LOCK TABLES, CREATE VIEW, EVENT, TRIGGER, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, CREATE USER, EXECUTE ON *.* TO 'compuser'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0";
$crunp = mysqli_query($con1,$cuserp);
if($crunp)
{
  echo "User Permissions Grant Successfully.<br>";
}



$con = mysqli_connect('localhost','compuser','comp606');


if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE bookingapp";
if(mysqli_query($con, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: . " . mysqli_error($link);
}
mysqli_close($con);
?>
<?php
include('dbcon.php');

//admin table create
$sql = "CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
)";

$run = mysqli_query($con,$sql);
if($run)
{
  echo "<br>Admin Table created Successfully";
}
else {
  echo "Error in creation of table";
}



// appointment table created
$sql1 = "CREATE TABLE IF NOT EXISTS `appointments` (
  `apid` int(11) NOT NULL AUTO_INCREMENT,
  `msgtype` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`apid`)
)";

$run1 = mysqli_query($con,$sql1);
if($run1)
{
  echo "<br>Appointment Table created Successfully";
}
else {
  echo "Error in creation of table";
}


// Massage table created
$sql2 = "CREATE TABLE IF NOT EXISTS `msgtype` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
)";

$run2 = mysqli_query($con,$sql2);
if($run2)
{
  echo "<br>Massage Table created Successfully";
}
else {
  echo "Error in creation of table";
}

// timeslot table created
$sql3 = "CREATE TABLE IF NOT EXISTS `timeslot` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
)";

$run3 = mysqli_query($con,$sql3);
if($run3)
{
  echo "<br>Timeslot Table created Successfully";
}
else {
  echo "Error in creation of table";
}

// User table created
$sql4 = "CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
)";

$run4 = mysqli_query($con,$sql4);
if($run4)
{
  echo "<br>User Table created Successfully";
}
else {
  echo "Error in creation of table";
}

// Insert first Admin
$sql5 = "INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3')";

$run5 = mysqli_query($con,$sql5);
if($run5)
{
  echo "<br>First Admin Created Successfully";
}
else {
  echo "Error in creation of table";
}


// Insert Massage types into table
$sql6 = "INSERT INTO `msgtype` (`name`) VALUES
('Sports'),
('Deep Tissue'),
('Therapeutic'),
('Relaxation')";

$run6 = mysqli_query($con,$sql6);
if($run6)
{
  echo "<br>Massagetypes inserted Successfully";
}
else {
  echo "Error in creation of table";
}

// Insert Time Slots into table
$sql7 = "INSERT INTO `timeslot` (`timeslot`) VALUES
('10:00 to 11:00'),
('11:00 to 12:00'),
('12:00 to 13:00'),
('13:00 to 14:00'),
('14:00 to 15:00'),
('15:00 to 16:00'),
('16:00 to 17:00')";

$run7 = mysqli_query($con,$sql7);
if($run7)
{
  echo "<br>Timslot inserted Successfully";
}
else {
  echo "Error in creation of table";
}


?>
<br><a href="index.php">Go to the Application</a>
