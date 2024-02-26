@extends('master')
@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="mx-auto" style="width: 200px;">Stoarge Deed</h3>
                    <form action="" method="" enctype="multipart/form-data" class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="deedNumber" class="form-label">Deed Number</label>
                                <input type="text" class="form-control" id="deedNumber" >
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label">Total Sack</label>
                                <input type="text" class="form-control" id="date" >
                            </div>
                            <div class="col-md-4">
                                <label for="expireDate" class="form-label">Stored</label>
                                <input type="email" class="form-control" id="expireDate" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Remainig</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Chamber</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Floor</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Pocket</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Location</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Sack</label>
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