@extends('layouts.admin.addNewAdministrator')

@section('title', 'Add New Administrator')

@section('content')

    <div class="card title"> 
        <div class="mx-auto" style="width: 500px;">
            <h1 id="titleAddNewAdministrator">Add new Administrator</h1>
        </div>
    </div>

    <div class="card addNewAdministrator">
        <div class="card-body addNewAdministrator">
            <form class="addNewAdministrator" novalidate method="POST" action="{{ route('admin.createAdministrator') }}">
                @csrf
                <div class="form-row">
                    {{-- Name --}}
                    <div class="col-md-4 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please choose a name!
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-4 mb-3">
                        <label for="email">Email</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a email!
                            </div>
                        </div>

                        
                    </div>

                    {{-- Password --}}
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Password</label>
                            <input type="password" class="form-control" id="validationCustomUsername" placeholder="Password"
                                aria-describedby="inputGroupPrepend" name="password" required>
                            <div class="invalid-feedback">
                                Please choose a password.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                    </div>
                </div>
                <div class="form-row">
                    {{-- <div class="col-md-6 mb-3">
                        <label for="validationCustom03">City</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div> --}}
                    {{--  <div class="col-md-3 mb-3">
                        <label for="validationCustom04">State</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> --}}
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Add new Administrator</button>
            </form>
        </div>
    </div>
    
@endsection
