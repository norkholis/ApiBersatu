<div class="container">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Api yang tersedia : </label>
    <br>
    <?php foreach ($data->result() as $row): ?>
    <?php $kategorine = $row->kategori ?>
      <h3><a href="<?php echo base_url().'index.php/ApiController/pilihanUser/'.$kategorine ?>"><?php echo $row->kategori ?></a></h3>
      <br>
    <?php endforeach; ?>
  </div>
</form>
</div>