<?php
// Get username
$user = $_GET["u"];
?>
<html>
<head>
</title>EBKC</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" type="text/css" rel="stylesheet">
<script scr="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<div>
<h1>Eastbrook Chat</h1>
</div>
<div class="chatContainer">
<div class="chatHeader">
<h3>Welcome, <?php echo ucwords{$user}; ?>!</h3>
</div>
<div class="chatMessages">
</div>
<div class="chatBottom">
<form action="#" onSubmit="return false;" id="chatForm">
<input type="hidden" id="name" value="<?php echo $user; ?>">
<input type="text" name="text" id="text" value="" placeholder="Type your message">
<input type="submit" name="submit" value="Post">
</form>
</div>
</div>
</body>
</html>