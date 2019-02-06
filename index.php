<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
  <a href="calendar/createCalendarItem">Calendar</a>
  <a href="mail/listMail">Mail</a>
  <a href="contacts/listContacts">Contacts</a>
</div>

<h2>Exchange Server Demo</h2>
<!-- <p>Click on the element below to open the side navigation menu.</p> -->
<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html> 
