// Retrieve patient name (or other identifier)
$patient_name = $patient_data['lname'] . " " . $patient_data['fname']; // Combine first and last names

// Display Jitsi meeting link
echo "<p><strong>Jitsi Meeting:</strong> <a href='https://172.20.7.231/{$patient_name}' target='_blank'>Join Meeting</a></p>";
