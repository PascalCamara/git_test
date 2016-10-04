<?php
if (!isset($_SESSION["admin"])) {
    header('Location: ?module=admin&action=login');
    exit;
}