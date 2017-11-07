<?php if($this->session->userdata('user_id') == 1 ):?>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('products/update'); ?>
	<input type="hidden" name="id" value="<?php echo $product['id']; ?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name" value="<?php echo $product['name']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="info" placeholder="Add Info"><?php echo $product['info']; ?></textarea>
  </div>
  <div class="form-group">
  <label>Category</label>
    <input type="text" class="form-control" name="category" placeholder="Add Category" value="<?php echo $product['category']; ?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php endif; ?>
<?php if($this->session->userdata('user_id') != 1 )
  {
  show_404();
  }
?>