<?php
require_once "config.php";
require_once "koneksi.php";

$action = isset($_GET['action']) ? $_GET['action'] : '' ;

switch($action) {
    case "hapus":
        require_once "proseshapus.php";
        break;
}

require_once "prosesinput.php";
require_once "view_data.php";





