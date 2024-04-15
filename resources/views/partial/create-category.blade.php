
<div class="modal fade" id="create_category" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">New Section</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('create_category') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="new-section p-4">

										<div class="form_group ">
											<label class="label25">Category</label>
											<input class="form_input_1 form-control" type="text" name="name" placeholder="Category">
										</div>
										<div class="form-group ">
											<label for="image">Category Image</label>
											<input type="file" name="image" id="image" class="form-control" accept="image/*">
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Create Category</button>
					</div>
				</form>
		</div>
	</div>
</div>
