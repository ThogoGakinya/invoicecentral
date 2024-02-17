@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">INVOICES / CREDIT NOTES / POS</h6>
              </div>
            </div>
          <div class="row">
          <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-body pt-2 p-3">
            <h6 class="mb-0">SEARCH DOCUMENT</h6>
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Enter Invoice Number</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">search</button>
                  </div>
                </form>
              </div>
              <h6 class="text-uppercase text-body text-xs font-weight-bolder">INVOICE DETAILS</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-2 mb-2 mt-1 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">IN576098</h6>
                    <span class="mb-2 text-xs">Client Name: <span class="text-dark font-weight-bold ms-sm-2">Naivas Super Center</span></span>
                    <span class="mb-2 text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">P09876WYY76Z</span></span>
                    <span class="mb-2 text-xs">Invoice Number: <span class="text-dark ms-sm-2 font-weight-bold">IN576098</span></span>
                    <span class="mb-2 text-xs">CU Number: <span class="text-dark ms-sm-2 font-weight-bold">0110256480000036987</span></span>
                    <span class="mb-2 text-xs">Process Date: <span class="text-dark ms-sm-2 font-weight-bold">17/02/2024</span></span>
                    <span class="mb-2 text-xs">Total Lines: <span class="text-dark ms-sm-2 font-weight-bold">Ksh 78,500</span></span>
                    <span class="mb-2 text-xs">VAT Total: <span class="text-dark ms-sm-2 font-weight-bold">Ksh 14,265</span></span>
                    <span class="mb-2 text-xs">CU Serial No.: <span class="text-dark ms-sm-2 font-weight-bold">KRA01102564800000</span></span>
                  
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">web</i>Query KRA</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7 mt-2">
        
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">DOCUMENT DETAIL</h6>
            </div>
            <div class="card-body">
              <embed src="{{asset('documents/IN600980-0110167480000058841.pdf')}}"	type="application/pdf" width="100%"	height="500%"/>
            </div>
        
        </div>

      </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
