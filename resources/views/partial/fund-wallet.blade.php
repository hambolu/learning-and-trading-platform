<div class="modal fade" id="add_fund" tabindex="-1" aria-labelledby="addFundModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lectureModalLabel">Fund Wallet</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="new-section-block">
                        <div class="row">
                            <div class="col p-4">
                                <div class="card pt-2 pb-2">
                                    <div class="card-body text-center">
                                        <img width="48" height="48" src="https://img.icons8.com/color/48/back-sorting.png" alt="back-sorting"/>
                                        <p>Bank Trasfer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-4">
                                <div class="card pt-2 pb-2">
                                    <div class="card-body text-center">
                                        <img width="130" src="https://assets.paystack.com/assets/img/hero/paystack-opengraph.png" alt="">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col p-4">
                                <div class="card pt-2 pb-2">
                                    <div class="card-body text-center">
                                        
                                        <img width="115" src="https://www.pymnts.com/wp-content/uploads/2023/08/flutterwave-big.jpg" alt="">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
