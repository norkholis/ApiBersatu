<div class="container">
<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url(). 'index.php/ControllerAdmin/insert'; ?>">
  <div class="form-group">
    <label for="endPoint">EndPoint :</label>
    <input type="text" required name="endPoint" class="form-control" id="endPoint" placeholder="Masukkan Endpoint (https://upnews-api.000webhostapp.com/index.php/berita)">
  </div>
  <div class="form-group">
    <label for="request">Request :</label>
    <input type="text" required class="form-control" name="request" id="request" placeholder="Masukkan Request (Ambil Berita)">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>