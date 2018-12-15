<div class="container">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Api yang tersedia : </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan kata kunci">
    <button type="button" class="btn btn-success" style="margin-top:1%">Search</button>

    <?php print_r($dataFromModel) ?>
  </div>
</form>
</div>