<h2><?= $title ?></h2>
<?php if((!$this->session->userdata('logged_in')) || ($this->session->userdata('user_id') != 1)) : ?>
<?php foreach($products as $product) : ?>
	<h3><?php echo $product['name']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="product-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['pictures']; ?>">
		</div>
		<div class="col-md-9">
		<?php echo word_limiter($product['info'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/products/'.$product['name']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
<?php endif; ?>
<?php if($this->session->userdata('user_id') == 1) : 
	$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );


	$this->table->set_template($tmpl);
	$this->table->set_heading('Name', 'Category', 'Info', 'Button');
	foreach($products as $product) : 
	$links  = anchor('products/edit/'.$product['name'] ,'Edit');
  	$links .= anchor('products/delete/'.$product['id'] , 'Delete');
	$this->table->add_row($product['name'], $product['category'], $product['info'], $links);
	endforeach; 
	echo $this->table->generate();
 endif; ?>