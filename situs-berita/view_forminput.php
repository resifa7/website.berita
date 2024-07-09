<?php

$action = isset($_GET['action']) ? $_GET['action'] : '' ;


if ($action == 'edit') {
  $id = $_GET['id'];
  $sql = "SELECT id, judul, deskripsi, isi, tgl_publish, penulis from artikel where id= '".$id."'";
  $result = $conn->query($sql);
  
  $article = $result->fetch(PDO::FETCH_ASSOC);

}else{

  $article = [
    'id' => '',
    'judul' => '',
    'deskripsi' => '',
    'isi' => '',
    'tgl_publish' => '',
    'penulis' => ''
  ];

}


?> 

<form method="POST" action="/situs-berita/admin.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $article['id'] ?>" />
  <label for="judul">Judul:</label><br>
  <input type="text" id="judul" name="judul" value="<?php echo $article['judul'] ?>" ><br>
  <label for="deskripsi">Deskripsi:</label><br>
  <textarea name="deskripsi">
    <?php echo $article['deskripsi'] ?>
  </textarea><br>
  <label for="isi">isi:</label><br>
  <textarea name="isi">
    <?php echo $article['isi'] ?>
  </textarea><br>
  <label for="tglpublish">Tgl Publish:</label><br>
  <input type="text" id="tglpublish" name="tglpublish" value="<?php echo $article['tgl_publish'] ?>"><br>
  <label for="penulis">Penulis</label><br>
  <input type="text" id="penulis" name="penulis" value="<?php echo $article['penulis'] ?>"><br>
  <label for="file">Pilih gambar:</label>
  <input type="file" name="file" id="file"> <br />

  <input type="submit" value="simpan" name="submit" />
</form>