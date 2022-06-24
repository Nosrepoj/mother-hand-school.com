<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>

		<div class="form-group row">
			<label for="title" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-8">
				<input type="text" name="title" id="title" value="<?= $input->title ?>" required class="form-control">
				<?= form_error('title', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

		<div class="form-group row">
			<label for="title" class="col-sm-2 col-form-label">Text</label>
			<div class="col-sm-8">
				<textarea name="text" id="text" rows="5" class="form-control" value="<?= $input->text ?>"><?= $input->text ?></textarea>
				<?= form_error('text', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" id="label-photo">Photo</label>
			<div class="col-sm-8">
				<?php if(!empty($input->photo)) : ?>
					<img src="<?= base_url("img/banner/$input->photo") ?>" alt="" height="150">
				<?php else: ?>
					<p></p>
				<?php endif; ?>
				<br> 
				<small><span class="text-danger">*</span>	Maximum image size is 3 MB</small>
				<br> <br>
				<input name="photo" type="file" class="form-control-file">
				<?php if($this->session->flashdata('image_error')) :  ?>
                <small class="form-text text-danger">
                  <?= $this->session->flashdata('image_error') ?>
                </small>
				<?php endif ?>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-8 offset-2">
				<a href="<?= base_url('banner') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Return</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Save</button>
			</div>
		</div>
	<?= form_close() ?>
</div>
