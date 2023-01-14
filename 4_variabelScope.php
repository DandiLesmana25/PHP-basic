<?php

/* Variabel yang dideklarasikan di luar fungsi memiliki global SCOPE  dan hanya dapat diakses di luar fungsi
contoh GLOBAL SCOPE*/

$x = 5; // global scope

function globalScope() {
  // menggunakan x di dalam fungsi ini akan menghasilkan error
  echo "<p>Variabel x di dalam fungsi: $x</p>";
}
globalScope();

echo "<p>Variabel x di luar fungsi: $x</p>";


/*
Variabel yang dideklarasikan dalam suatu fungsi memiliki LINGKUP LOKAL/LOCAL SCOPE  dan hanya dapat diakses
di dalam fungsi tersebut:

CONTOH Variabel dengan cakupan lokal:
*/

function localScope() {
    $L = 5; // local scope
    echo "<p>Variabel L di dalam fungsi adalah: $L</p>";
  }
  localScope();
  
  // menggunakan x di luar fungsi akan menghasilkan ERROR
  echo "<p>Variabel L di luar fungsi adalah: $L</p>";



?>
