<h2><?php echo $product['name']; ?></h2>
<small class="product-date">Category: <?php echo $product['category']; ?></small><br>
<img src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['pictures']; ?>" width="760" height="360">
<div class="product-body">
	<?php echo $product['info']; ?>
</div>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['text']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
<?php if(($this->session->userdata('logged_in')) && ($this->session->userdata('user_id') != 1)) : ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$product['id']); ?>
<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
	<div class="form-group">
		<label>Text</label>
		<textarea name="text" class="form-control"></textarea>
	</div>
	<input type="hidden" name="name" value="<?php echo $product['name']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
<?php endif; ?>


