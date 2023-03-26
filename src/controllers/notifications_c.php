<?php
require_once("src/models/notifications_m.php");
$notifications = getNotifications();
$studentNotifications = getStudentNotifications();
require_once("view/notifications.php");