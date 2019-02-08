<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="sidenav">
  <a href="mail/listMail">Mail</a>
  <a href="contacts/listContacts">Contacts</a>
  <!-- <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a> -->
  <button class="dropdown-btn">Calendar 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="calendar/getCalendarItems">Get Calendar</a>
      <a href="calendar/createCalendarItem.php">Create Calendar</a>
  </div>
  <!-- <a href="#contact">Search</a> -->
</div>

<h2>Exchange Server Demo</h2>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="js/script.js"></script>

</body>
</html> 
