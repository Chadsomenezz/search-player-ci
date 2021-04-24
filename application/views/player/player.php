<div class="row">

	<?php forEach ($this->session->flashdata('result') as $row): ?>

	<div class="col-xl-6 my-2">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="<?= ($row->picture) ?$row->picture : 'https://www.cccd.edu/_assets/images/Departments/NoProfile.png'; ?>" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><?= $row->name; ?></p>
			</div>
		</div>
	</div>

	<?php endforeach; ?>


</div>
