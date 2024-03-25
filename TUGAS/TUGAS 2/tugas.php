<html>
    <title>TUGAS 2</title>
    <head>
        Penggunaan Method POST dan GET
    </head>

   <body>
    <h3>gaji karyawan Pt Yanto</h3>
    <form method="POST" action="tugas.php">
        
             <p>Jumlah upah per-jam : <input type="text" name="upah" value=''></p>
             <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=''></p>
             <input type="submit"name="submit" value="submit">
    </form>
    <?php
            if(isset($_POST['submit'])) {
            echo "jumlah upah per jam = Rp.", $_POST['upah'], '<br>';
            echo "jumlah jam kerja = ", $_POST['jamkerja'], '<br>';

            if ($_POST['jamkerja']>48){
                $upah = $_POST['upah'] * $_POST['jamkerja'];
                $waktu_lembur = $_POST['jamkerja'] - 48;
                $uang_lembur = $waktu_lembur * 0.15 * $_POST['upah'];
                $total_upah = $upah + $uang_lembur;
                echo "Jumlah upah total + bonus lebur =", $total_upah,"<br>";
            } else {
                $upah = $_POST['upah'] * $_POST['jamkerja'];
                echo "jam upaj total =", $gaji, "<br>";
                }
            }
    ?>
    <br><br>
    <hr>

    <h3>gaji karyawan Pt Yanto</h3>
    <form method="GET" action="tugas.php">
        
             <p>Jumlah upah per-jam : <input type="text" name="upah" value=''></p>
             <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=''></p>
             <input type="submit"name="submit" value="submit">
    </form>
    <?php
            if(isset($_GET['submit'])) {
            echo "jumlah upah per jam = Rp.", $_GET['upah'], '<br>';
            echo "jumlah jam kerja = ", $_GET['jamkerja'], '<br>';

            if ($_GET['jamkerja']>48){
                $upah = $_GET['upah'] * $_GET['jamkerja'];
                $waktu_lembur = $_GET['jamkerja'] - 48;
                $uang_lembur = $waktu_lembur * 0.15 * $_GET['upah'];
                $total_upah = $upah + $uang_lembur;
                echo "Jumlah upah total + bonus lebur =", $total_upah,"<br>";
            } else {
                $upah = $_GET['upah'] * $_GET['jamkerja'];
                echo "jam upaj total =", $gaji, "<br>";
                }
            }
    ?>
    <br><br>
    <hr>


   </body>
</html>

