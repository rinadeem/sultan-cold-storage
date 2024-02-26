@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 250px;">Shade Pass</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Shade Pass</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Precooling</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">PC Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
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
                                <label for="exampleFormControlInput1" class="form-label">Current Owner</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label"> Customer Contact</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th scope="col">Deed</th>
                                      <th scope="col">Item</th>
                                      <th scope="col">Precooled Sack</th>
                                      <th scope="col">Shade Released</th>
                                      <th scope="col">SIP</th>
                                      <th scope="col">Release To Shade</th>
                                      <th scope="col">Rate</th>
                                      <th scope="col">Total</th>
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