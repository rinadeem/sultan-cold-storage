@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 250px;">Ownership Change</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>

                        </div>

                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th scope="col">Deed</th>
                                      <th scope="col">Current Owner</th>
                                      <th scope="col">Item</th>
                                      <th scope="col">Stored Sack</th>
                                      <th scope="col">Payment Type</th>
                                      <th scope="col">Sack In Hand</th>
                                      <th scope="col">New Owner</th>
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