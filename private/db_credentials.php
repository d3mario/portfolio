<?php

define("DB_SERVER", ($_SERVER['REMOTE_ADDR'] === "::1" ) ? "localhost" : "remote");
define("DB_PORT", (DB_SERVER ==="localhost") ? 5432 : 0000);
define("DB_USER" , (DB_SERVER ==="localhost") ? "postgres" : "dwindom");
define("DB_PASS", (DB_SERVER ==="localhost") ? "test123" : "");
define("DB_NAME", "marketing");
?>
