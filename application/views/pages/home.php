<h2><?= $title ?></h2>
<?php if((!$this->session->userdata('logged_in')) || ($this->session->userdata('user_id') != 1)) : ?>

	<div class="homer">
	<?php echo $home['textutama']; ?><br />
	</div>

	<div class="client-logos">
		<a href="http://www.baf.co.id" title="Client" class="clients" target="_self"> <img src="http://itprovent.com/site/wp-content/uploads/2014/03/baf.jpg" alt="Client"></a>
		<a href="http://www.valdoinc.com" title="Client" class="clients" target="_self"><img src="http://itprovent.com/site/wp-content/uploads/2014/03/val.jpg" alt="Client"></a>
		<a href="http://www.isignmedia.com" title="Client" class="clients" target="_self"><img src="http://itprovent.com/site/wp-content/uploads/2014/03/isg.jpg" alt="Client"></a>
		<a href="http://www.insidevault.com" title="Client" class="clients" target="_self"><img src="http://itprovent.com/site/wp-content/uploads/2014/03/iv.jpg" alt="Client"></a>
		<img src="http://site.itprovent.com/wp-content/uploads/2013/08/radio.png" alt="Client"/>
		<img src="http://site.itprovent.com/wp-content/uploads/2013/08/tvberlangganan.png" alt="Client"/>
		<img src="http://site.itprovent.com/wp-content/uploads/2013/08/telekomunikasi.png" alt="Client"/>
		<img src="http://site.itprovent.com/wp-content/uploads/2013/08/konsultasi.png" alt="Client"/>
		<a href="http://www.harlan-corp.com" title="Client" class="clients" target="_self">
		<img src="http://site.itprovent.com/wp-content/uploads/2013/08/manufaktur.jpg" alt="Client"></a>
	</div>
<?php endif; ?>
<?php if($this->session->userdata('user_id') == 1) : ?>

<?php echo form_open('pages/update1'); ?>
	<input type="hidden" name="id" value="<?php echo $home['id']; ?>">
  <div class="form-group">
    <label>Text Utama</label>
    <textarea id="editor1" class="form-control" name="textutama" placeholder="Add Text Utama"><?php echo $home['textutama']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php endif; ?>