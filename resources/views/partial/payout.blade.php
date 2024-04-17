
<div class="modal fade" id="payout" tabindex="-1" aria-labelledby="payoutModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">Payout</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
					@csrf
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="new-section p-4">
                                    @if (optional(Auth::user()->wallet)->balance < 5000)
                                        <span class=" p-2 m-2 justify-content-center">Insufficent Balance</span>
                                    
                                    @else
                                    <div class="form_group ">
                                        <label class="label25">Amount</label>
                                        <input class="form_input_1 form-control" type="number" name="amount" placeholder="5000" max="{{ Auth::user()->wallet->balance ?? 0 }}">
                                    </div>
                                    @endif
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                        @if (optional(Auth::user()->wallet)->balance < 5000)
                        @else
						<button type="submit" class="btn btn-primary">Request PayOut</button>
                        @endif
					</div>
				</form>
		</div>
	</div>
</div>
