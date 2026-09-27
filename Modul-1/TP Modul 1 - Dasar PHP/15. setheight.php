<?php
// Mendefinisikan fungsi dengan default parameter value
function setheight($minheight = 50) {
  echo "<h2>The height is : $minheight</h2>";
}

// Memanggil fungsi tanpa argumen, sehingga nilai default 50 akan digunakan
setheight();
?>