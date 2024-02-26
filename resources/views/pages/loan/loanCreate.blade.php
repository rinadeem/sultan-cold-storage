@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 250px;">Loan From</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">

                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Loan Account</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Deed Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Customer Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Cust Code</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="custCode" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="custCode" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Search By</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label"> Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">NID</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Charges</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Loan Amount</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Total Repayment</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3 px-5">Save</button>
                        </div>                             
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection