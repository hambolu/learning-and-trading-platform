@extends('include.app')
@section('content')
@if(session('user_type') === 'vendor')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <p>Wallet Balance: ₦{{ number_format($staff->wallet ?? 0) }} </p>
                    @if($staff->wallet > 0)
                    <a href="/request-withdraw" class="btn btn-primary text-center">Withdraw ₦{{ number_format($staff->wallet) }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container card">
    <div class="card-body">
        <p>Staff Withdrawal History</p>
        <ul class="nav nav-pills border-b mb-3 ml-0">
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer active" href="#Section1" aria-controls="home" role="tab" data-toggle="tab">{{ __('Pending') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#Section2" role="tab" data-toggle="tab">{{ __('Completed') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#Section3" role="tab" data-toggle="tab">{{ __('Rejected') }}<span class="badge badge-transparent"></span></a>
            </li>
        </ul>
        <div class="tab-content tabs" id="home">
            {{-- Section 1 --}}
            <div role="tabpanel" class="row tab-pane active" id="Section1">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="pendingTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Placed On') }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_pending as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}} </td>
                                <td>{{$item->amount}} | 
                                @if($item->status == 'completed')
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 'rejected')
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                                <td>
                <!-- "Complete" button -->
                <a href="#" class="mr-2 btn btn-success text-white complete" data-id="{{ $item->id }}">{{ __("Complete") }}</a>
                
                <!-- "Reject" button -->
                <a href="#" class="mr-2 btn btn-danger text-white reject" data-id="{{ $item->id }}">{{ __("Reject") }}</a>
            </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 2 --}}
            <div role="tabpanel" class="row tab-pane" id="Section2">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="completedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Placed On') }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_completed as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}} </td>
                                <td>{{$item->amount}} | 
                                @if($item->status == 'completed')
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 'rejected')
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 3 --}}
            <div role="tabpanel" class="row tab-pane" id="Section3">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="rejectedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Placed On') }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_rejected as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}} </td>
                                <td>{{$item->amount}} | 
                                @if($item->status == 'completed')
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 'rejected')
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container card">
    <div class="card-body">
        <p>My Withdrawal History</p>
        <ul class="nav nav-pills border-b mb-3 ml-0">
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer active" href="#VendorSection1" aria-controls="home" role="tab" data-toggle="tab">{{ __('Pending') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#VendorSection2" role="tab" data-toggle="tab">{{ __('Completed') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#VendorSection3" role="tab" data-toggle="tab">{{ __('Rejected') }}<span class="badge badge-transparent"></span></a>
            </li>
        </ul>
        <div class="tab-content tabs" id="home">
            {{-- Section 1 --}}
            <div role="tabpanel" class="row tab-pane active" id="VendorSection1">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="vendorPendingTable">
                        <thead>
                            <tr>
                                <th>Request Number</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Placed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendor_withdraw_pending as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>NGN {{$item->amount}}</td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->created_at->format('D, M Y')}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 2 --}}
            <div role="tabpanel" class="row tab-pane" id="VendorSection2">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="vendorCompletedTable">
                        <thead>
                            <tr>
                                <th>Request Number</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Placed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendor_withdraw_completed as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>NGN {{$item->amount}}</td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->created_at->format('D, M Y')}}</td>
                                <td>completed</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 3 --}}
            <div role="tabpanel" class="row tab-pane" id="VendorSection3">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="vendorRejectedTable">
                        <thead>
                            <tr>
                                <th>Request Number</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Placed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendor_withdraw_rejected as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>NGN {{$item->amount}}</td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-success">Success</span>
                                    @elseif($item->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($item->status == 2)
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{{$item->created_at->format('D, M Y')}}</td>
                                <td>rejected</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(session('user_type') === 'staff')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <p>Wallet Balance: ₦{{ number_format($staff->wallet ?? 0) }}</p>
                    @if($staff->wallet > 0)
                    <a href="/request-withdraw" class="btn btn-primary text-center">Withdraw ₦{{ number_format($staff->wallet) }}</a>
                    
                    <a href="/request-withdraw" class="btn btn-primary text-center mt-2">Withdraw ₦{{ number_format($staff->wallet ?? 0) }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(session('user_type') !== 'vendor')
<div class="container card">
    <div class="card-body">
        <p>Withdrawal History</p>
        <ul class="nav nav-pills border-b mb-3 ml-0">
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer active" href="#Section1" aria-controls="home" role="tab" data-toggle="tab">{{ __('Pending') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#Section2" role="tab" data-toggle="tab">{{ __('Completed') }}<span class="badge badge-transparent"></span></a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link pointer" href="#Section3" role="tab" data-toggle="tab">{{ __('Rejected') }}<span class="badge badge-transparent"></span></a>
            </li>
        </ul>
        @if(session('user_type') === 'staff')
        <div class="tab-content tabs" id="home">
            {{-- Section 1 --}}
            <div role="tabpanel" class="row tab-pane active" id="Section1">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="pendingTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount') }}</th>
                                <th>{{ __('Placed On') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_pending as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 2 --}}
            <div role="tabpanel" class="row tab-pane" id="Section2">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="completedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount') }}</th>
                                
                                <th>{{ __('Summary') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_completed as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 3 --}}
            <div role="tabpanel" class="row tab-pane" id="Section3">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="rejectedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount') }}</th>
                                
                                <th>{{ __('Summary') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_rejected as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(session('user_type') === 1)
        <div class="tab-content tabs" id="home">
            {{-- Section 1 --}}
            <div role="tabpanel" class="row tab-pane active" id="Section1">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="pendingTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Placed On') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_pending as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 2 --}}
            <div role="tabpanel" class="row tab-pane" id="Section2">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="completedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>Placed On</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_completed as $item)
                            <tr>
                                <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Section 3 --}}
            <div role="tabpanel" class="row tab-pane" id="Section3">
                <div class="table-responsive col-12">
                    <table class="table table-striped w-100" id="rejectedTable">
                        <thead>
                            <tr>
                                <th>{{ __('Request Number') }}</th>
                                <th>{{ __('Bank Details') }}</th>
                                <th>{{ __('Amount & Status') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>Placed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_withdraw_rejected as $item)
                            <tr>
                               <td>{{$item->request_number}}</td>
                                <td>{{$item->bank_details}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->staff->name}}</td>
                                <td>{{$item->created_at->format('D,M,Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endif
{{-- Reject Modal --}}
    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>{{ __('Reject Withdrawal') }}</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post" enctype="multipart/form-data" id="rejectForm" autocomplete="off">
                        @csrf
                        <input type="hidden" id="rejectId" name="id">
                        <div class="form-group">
                            <label> {{ __('Summary') }}</label>
                            <textarea rows="10" style="height:200px !important;" type="text" name="summary" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary mr-1" type="submit" value=" {{ __('Submit') }}">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- Complete Modal --}}
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>{{ __('Complete Withdrawal') }}</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post" enctype="multipart/form-data" id="completeForm" autocomplete="off">
                        @csrf
                        <input type="hidden" id="completeId" name="id">
                        <div class="form-group">
                            <label> {{ __('Summary') }}</label>
                            <textarea rows="10" style="height:200px !important;" type="text" name="summary" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary mr-1" type="submit" value=" {{ __('Submit') }}">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
