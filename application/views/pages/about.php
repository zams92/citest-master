<h2><?= $title ?></h2>
<?php if((!$this->session->userdata('logged_in')) || ($this->session->userdata('user_id') != 1)) : ?>

	<div class="about">
	<?php echo $about['name']; ?><br />
	<?php echo $about['email']; ?><br />
	<?php echo $about['info']; ?><br />
	</div>

<?php endif; ?>
<?php if($this->session->userdata('user_id') == 1) : ?>

<?php echo form_open('pages/update2'); ?>
	<input type="hidden" name="id" value="<?php echo $about['id']; ?>">
	<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name" value="<?php echo $about['name']; ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Add Email" value="<?php echo $about['email']; ?>">
  </div>
  <div class="form-group">
    <label>Info</label>
    <textarea id="editor1" class="form-control" name="info" placeholder="Add Info"><?php echo $about['info']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php endif; ?>