<?php
echo " the cookie is set successfully";
// syntax:setcookie(name,value,expire,path,domain,secure,httponly)
setcookie("username", "mayank", time() + 86400 * 30, "/");

//set the expiry date of the cookie after 30 days from the current date
