<?php
if (ini_get('session.cookie_httponly') != 1) {
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_destroy();
        ini_set('session.cookie_httponly', 1);
        session_start();
    } else {
        ini_set("session.cookie_httponly", 1);
    }
}