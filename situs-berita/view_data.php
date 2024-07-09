<?php

require_once "header.php";

echo "<br />";

$sql = "SELECT id, judul, deskripsi, isi, tgl_publish, penulis from artikel";
$result = $conn->query($sql);

$articles = $result->fetchAll(PDO::FETCH_ASSOC);

if ($articles) {
?>
<table>
  <theader>
     <tr>
        <th> id </th>
        <th> judul </th>
        <th> deskripsi </th>
        <th> isi </th>
        <th> tgl publish </th>
        <th> penulis </th>
        <th> gambar </th>
    </tr>
  </theader>
  <tbody>
  <?php
    foreach ($articles as $article) {
      ?>
      <tr>
          <td><?php echo $article['id'] ?></td>
          <td><?php echo $article['judul'] ?></td>
          <td><?php echo $article['deskripsi'] ?></td>
          <td><?php echo $article['isi'] ?></td>
          <td><?php echo $article['tgl_publish'] ?></td>
          <td><?php echo $article['penulis'] ?></td>
          <td>
          <a href="?action=edit&id=<?php echo  $article['id'] ?>"> Edit </a> | <a href="?action=hapus&id=<?php echo  $article['id'] ?>"> Hapus</a> 
          </td>
      </tr>
      <?php
    }
  }
  ?>
  </tbody>
</table>

<br />

<?php
require_once "view_forminput.php";
require_once "footer.php";