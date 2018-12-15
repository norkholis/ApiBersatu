<div class="container">
<form method="POST" action="<?php echo base_url().'index.php/ApiController/hasilSearchUser'.$pilKategori?>">
  <div class="form-group">
    <label>Cari info tentang : <?php echo $pilKategori ?></label>

    <input type="text" class="form-control" id="katakunci" placeholder="Masukkan kata kunci" name="katakunci">
    <button type="submit" class="btn btn-success" style="margin-top:1%">Search</button>
  </div>
</form>
</div>