<?php
if($_POST["Message"]) {
mail("ahan.cf.7@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>