<?php
/**
 * This file is the entry point for the Jitsi Integration module.
 * It provides a link to join a Jitsi meeting for each patient appointment.
 */

// Include necessary OpenEMR files
require_once(dirname(__FILE__) . '/../globals.php');
require_once("$srcdir/api.inc");
require_once(dirname(__FILE__) . '/../interface/patient_file/summary/summary.inc.php');

// Include openemr.bootstrap.php to initialize OpenEMR environment
require_once("../../openemr.bootstrap.php");

// Generate Jitsi Room URL
function generateJitsiMeetingLink($patient_name) {
    $room_name = str_replace(" ", "_", $patient_name);  // Replace spaces with underscores
    return "https://172.20.7.231/{$room_name}";
}

// This function generates the Jitsi meeting link and displays it
function displayJitsiLink($patient_name) {
    $meeting_link = generateJitsiMeetingLink($patient_name);
    echo "<a href='{$meeting_link}' target='_blank'>Join Jitsi Meeting</a>";
}

// Example usage: display link for the patient "John Doe"
$patient_name = "John Doe"; // You can replace this with dynamic patient data
displayJitsiLink($patient_name);
?>
