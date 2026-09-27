<?php
function familyName($fname, $year) {
    echo "<h2>" . $fname . " - " . $year . "</h2>";
}

// Memanggil fungsi sebanyak 3 kali dengan contoh data
familyName("Jani", "1975");
familyName("Hege", "1978");
familyName("Stale", "1983");
?>