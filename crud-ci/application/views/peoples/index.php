<div class="container">
	<h4 class="mt-2">List Of Peoples</h4>
	<div class="row">
		<div class="col-md">
			<form action="<?= base_url('peoples') ?>" method="POST">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" name="keyword" placeholder="Search keyword" autocomplete="off" autofocus>
				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="submit">
				  </div>
				</div>
			</form>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md">		
			<h5>Results : <?= $total_rows; ?></h5>
			<table class="table table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($peoples)) : ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
									Data not found!
								</div>
							</td>
						</tr>
					<?php endif; ?>
					<?php foreach($peoples as $people) : ?>
					<tr>
						<th><?= ++$start; ?></th>
						<td><?= $people["name"]; ?></td>
						<td><?= $people["email"]; ?></td>
						<td>
							<a href="" class="badge badge-warning">Detail</a>
							<a href="" class="badge badge-success">Edit</a>
							<a href="" class="badge badge-danger">Delete</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>

		</div>
	</div>
</div>