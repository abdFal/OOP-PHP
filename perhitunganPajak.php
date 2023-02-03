<?php
$penghasilan = 70000000; // penghasilan per tahun
$penghasilanAkhir = 0;

if ($penghasilan <= 50000000) {
  $pph21 = 0.05 * $penghasilan;
} elseif ($penghasilan <= 250000000) {
  $pph21 = 0.05 * 50000000 + 0.15 * ($penghasilan - 50000000);
} elseif ($penghasilan <= 500000000) {
  $pph21 = 0.05 * 50000000 + 0.15 * (250000000 - 50000000) + 0.25 * ($penghasilan - 250000000);
} else {
  $pph21 = 0.05 * 50000000 + 0.15 * (250000000 - 50000000) + 0.25 * (500000000 - 250000000) + 0.30 * ($penghasilan - 500000000);
}

$penghasilanAkhir = $penghasilan - $pph21;
echo "PPH21: Rp. " . number_format($pph21) . PHP_EOL;
echo "Penghasilan Akhir Rp. " . number_format($penghasilanAkhir) . PHP_EOL;

?>
