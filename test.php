<?php
include("config.php");

$articlesql = "SELECT * FROM artikel
INNER JOIN author ON artikel.id_artikel = author.id_author
INNER JOIN kategori ON kategori.id_kategori = artikel.id_kategori;";
$articlequery = mysqli_query($db, $articlesql);

while($row = mysqli_fetch_array($articlequery)) {
        echo "id: " . $row["id_artikel"]. " - Judul: " . $row["judul"]. " - Thumbnail: " . $row["thumbnail"]. "<br>";
    }

mysqli_close($db);
// while($art = mysqli_fetch_array($articlequery)) {
//     echo "<div><h1>".$art['judul']."</h1><p>".$art['konten']."</p><i>".$art['date']."</i><p>".$art['kategori']."</p><p>".$art['author']."</p></div>";
// }
?>