<?php	
// multi-aray
$dataNilai = array(
			"Wayan" => array(	"Tugas" => 90,"UTS" => 60,"UAS" => 100),
			"Made" => array(	"Tugas" => 70,"UTS" => 50,"UAS" => 50),
			"Nyoman" => array(	"Tugas" => 60,"UTS" => 80,"UAS" => 70)
                );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel data nilai</title>

    <style>
        table,th,td {
            border: 1px black;
        }
    </style>
</head>

<body>
    <h2>Data Nilai Mahasiswa</h2>
    
    <table border="1">
        <?php
            $table_rows = array_map(function ($nama, $nilai) {
                return "<tr>"
                    . "<td>" . $nama . "</td>"
                    . "<td>" . $nilai["Tugas"] . "</td>"
                    . "<td>" . $nilai["UTS"] . "</td>"
                    . "<td>" . $nilai["UAS"] . "</td>"
                    . "</tr>";
            }, array_keys($dataNilai), $dataNilai);

            echo "<table>"
                . "<tr><th>Nama</th><th>Tugas</th><th>UTS</th><th>UAS</th></tr>"
                . implode("\n", $table_rows)
                . "</table>";
      ?>

    </table>
</body>
</html>