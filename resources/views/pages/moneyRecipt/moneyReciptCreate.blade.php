@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 200px;">Money Recipt</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="deedNumber" class="form-label">MR Number</label>
                                <input type="text" class="form-control" id="deedNumber" >
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label">MR Date</label>
                                <input type="text" class="form-control" id="date" >
                            </div>
                            <div class="col-md-4">
                                <label for="expireDate" class="form-label">Shade Pass</label>
                                <input type="email" class="form-control" id="expireDate" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Client Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="custCode" class="form-label">Cust Code</label>
                                <input type="text" class="form-control" id="custCode" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Payment Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
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
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Number Of Sacks</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Payment</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Rate</label>
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