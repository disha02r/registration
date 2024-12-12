<?php
// Initialize a session to store multiple entries
session_start();

// Check if entries exist in the session, initialize if not
if (!isset($_SESSION['entries'])) {
    $_SESSION['entries'] = [];
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $entry = [
        'name' => htmlspecialchars($_POST['name']),
        'email' => htmlspecialchars($_POST['email']),
        'phone' => htmlspecialchars($_POST['phone']),
        'message' => htmlspecialchars($_POST['message']),
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    // Append the new entry to the session's entries
    $_SESSION['entries'][] = $entry;

    // Display the submitted entry
    echo "<div style='text-align:left;'>";
    echo "<h2>Registration Submitted</h2>";
    echo "<p><strong>Name:</strong> {$entry['name']}</p>";
    echo "<p><strong>Email:</strong> {$entry['email']}</p>";
    echo "<p><strong>Phone:</strong> {$entry['phone']}</p>";
    echo "<p><strong>Message:</strong> {$entry['message']}</p>";
    echo "<p><strong>Submitted At:</strong> {$entry['submitted_at']}</p>";
    echo "</div>";

    // Display all previous entries
    echo "<hr><h2>All Entries</h2>";
    foreach ($_SESSION['entries'] as $i => $e) {
        echo "<div style='text-align:left; margin-bottom: 20px;'>";
        echo "<h3>Entry #" . ($i + 1) . "</h3>";
        echo "<p><strong>Name:</strong> {$e['name']}</p>";
        echo "<p><strong>Email:</strong> {$e['email']}</p>";
        echo "<p><strong>Phone:</strong> {$e['phone']}</p>";
        echo "<p><strong>Message:</strong> {$e['message']}</p>";
        echo "<p><strong>Submitted At:</strong> {$e['submitted_at']}</p>";
        echo "</div>";
    }
} else {
    echo "Invalid request.";
}
?>
<?php
// Initialize a session to store multiple entries
session_start();

// Check if entries exist in the session, initialize if not
if (!isset($_SESSION['entries'])) {
    $_SESSION['entries'] = [];
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $entry = [
        'name' => htmlspecialchars($_POST['name']),
        'email' => htmlspecialchars($_POST['email']),
        'phone' => htmlspecialchars($_POST['phone']),
        'message' => htmlspecialchars($_POST['message']),
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    // Append the new entry to the session's entries
    $_SESSION['entries'][] = $entry;

    // Display the submitted entry
    echo "<div style='text-align:left;'>";
    echo "<h2>Registration Submitted</h2>";
    echo "<p><strong>Name:</strong> {$entry['name']}</p>";
    echo "<p><strong>Email:</strong> {$entry['email']}</p>";
    echo "<p><strong>Phone:</strong> {$entry['phone']}</p>";
    echo "<p><strong>Message:</strong> {$entry['message']}</p>";
    echo "<p><strong>Submitted At:</strong> {$entry['submitted_at']}</p>";
    echo "</div>";

    // Display all previous entries
    echo "<hr><h2>All Entries</h2>";
    foreach ($_SESSION['entries'] as $i => $e) {
        echo "<div style='text-align:left; margin-bottom: 20px;'>";
        echo "<h3>Entry #" . ($i + 1) . "</h3>";
        echo "<p><strong>Name:</strong> {$e['name']}</p>";
        echo "<p><strong>Email:</strong> {$e['email']}</p>";
        echo "<p><strong>Phone:</strong> {$e['phone']}</p>";
        echo "<p><strong>Message:</strong> {$e['message']}</p>";
        echo "<p><strong>Submitted At:</strong> {$e['submitted_at']}</p>";
        echo "</div>";
    }
} else {
    echo "Invalid request.";
}
?>
