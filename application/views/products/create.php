<?php if($this->session->userdata('user_id') == 1 ):?>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('products/create'); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name">
  </div>
  <div class="form-group">
    <label>Info</label>
    <textarea id="editor1" class="form-control" name="info" placeholder="Add Info"></textarea>
  </div>
  <div class="form-group">
	  <label>Category</label>
	  <input type="text" class="form-control" name="category" placeholder="Add Category">
  </div>
  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php endif; ?>
<?php if($this->session->userdata('user_id') != 1 )
  {
  show_404();
  }
?>