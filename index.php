
<html>
    <head>
        <title>Tugas 4 - Jefri Wahyudiana Putra</title>
    </head>
    <body>
        <form action="Tugas4_JefriWahyudianaPutra.php" method="post">
            <p>Jumlah Bintang = <input type="number" name="bintang"></p>
            <button name="submit">Kirim</button>
        </form>
        <?php

            if(isset($_POST['submit'])){
                $bintang = $_POST['bintang'];

                for($i=1; $i<= $bintang; $i++){
                    for($j=1; $j<=$i; $j++){
                        echo "*";
                    }
                    echo "<br />";
                }
            }

        ?>
    </body>
</html>