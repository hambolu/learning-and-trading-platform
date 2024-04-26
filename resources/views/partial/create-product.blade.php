
<div class="modal fade" id="create_product" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">Create Product</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('create_product') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="new-section p-4">

										<div class="form_group ">
											<label class="label25">Product Name</label>
											<input class="form_input_1 form-control" type="text" name="name" placeholder="Products Name">
										</div>

                                        <div class="form_group mt-4">
											<label class="label25">Product Description</label>
											<textarea class="form_input_1 form-control" name="description" id="" cols="30" rows="10"></textarea>
										</div>
                                        <div class="form_group mt-4">
											<label class="label25">Product Type</label>
											<select class="form_input_1 form-control" name="type" id="">
                                                <option value="eBook">Ebook</option>
                                                <option value="video">Traning Video</option>
                                                <option value="course">Course</option>
                                            </select>
										</div>
                                        <div class="form_group mt-4">
											<label class="label25">Product Price</label>
											<input class="form_input_1 form-control" type="numeric" name="price" placeholder="5000">
										</div>
										<div class="form-group mt-4">
											<label for="image">Product Image</label>
											<input type="file" name="image" id="image" class="form-control" accept="image/*">
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Create Product</button>
					</div>
				</form>
		</div>
	</div>
</div>
