<?php
session_start();
//if we set session in same domian so we can access them in any page
// and if we close the browser the session will be destroyed


if (isset($_SESSION['username'])) {
    echo " welcome " . $_SESSION['username'];
} else {
    echo "session has been destroyed successfully";
}
