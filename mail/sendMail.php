<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2 >Email</h2>
<div class="sidenav">
  <a href="../contacts/listContacts">Contacts</a>
  <button class="dropdown-btn">Calendar 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="../calendar/getCalendarItems">Get Calendar</a>
      <a href="../calendar/createCalendarItem.php">Create Calendar</a>
  </div>
  <button class="dropdown-btn">Mail 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="../mail/listMail">List Mails</a>
      <a href="../mail/sendMail">Send Mail</a>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="../js/script.js"></script>
<div>
  <form method="POST" action="../submitHandler.php">
    <table class='demo_table'>
  <tr>
    <td>TO: </td>
    <td><input type="text" id="toemail" name="toemail" valeue="admin@mail.gasf.com" placeholder="To"></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><input type="text" id="subject" name="subject" placeholder="Subject"></td>
  </tr>
  <tr>
    <td>Body</td>
    <td><textarea rows="4" cols="50" id="body" name="body"></textarea></td>
  </tr>
  </table>
    <input type="submit" name="submitBtnEmail" value="Submit">
  </form>
</div>

</body>
</html>
