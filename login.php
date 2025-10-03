<?php
include ("login.html");
if (isset($_GET["error"])) {
    echo "Vous n'êtes pas connecté";
}
