<?php
if (!isset($_SESSION["user"])) {
    header('Location: ?module=user&action=login');
    exit;
}