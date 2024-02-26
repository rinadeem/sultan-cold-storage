@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 250px;">Gate Pass</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Gate Pass Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">MR Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">GP Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">MR Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Current Owner</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Customer Contact</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Vehicle Details</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th scope="col">Shade Number</th>
                                      <th scope="col">Stock In Shade</th>
                                      <th scope="col">Released</th>
                                      <th scope="col">Left In Shade</th>
                                      <th scope="col">Fare</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                      <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" >
                                      </td>
                                    </tr>

                                  </tbody>
                            </table>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Total MR Amount</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Total Balance</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Gp Clearence</label>
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