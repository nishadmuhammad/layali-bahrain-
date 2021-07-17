@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-3"> </div>
    <h1 id="headline"> Company Registration</h1>
    <div class="modal-body m-3 ">
            <form action="{{route('company.register')}}" method="post">
                @csrf
                <div class="row">
                    <div class="mb-3 col-4">
                        <label class="form-label">Company name</label>
                        <input type="text" name="name" id="family_name" class="form-control" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="contact_person" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="address" class="form-label">password</label>
                        <input type="password" name="password" id="address" class="form-control" required>
                    </div>
                    <!-- mobile -->
                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Mobile</label>
                        <input type="text" name="lan" id="mobile" class="form-control" required>
                    </div>
                    <div class="mb-3 col-4" hidden>
                    <!-- Role -->
                        <input type="text" name="role" value="admin" class="form-control">
                    </div>
                    <!-- reg date -->
                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Registration Date</label>
                        <input type="date" name="registration_date" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">CR Number</label>
                        <input type="text" name="cr_no" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Gosi Amount</label>
                        <input type="number" name="gosi_amount" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">LMR Amount</label>
                        <input type="number" name="lmr_amount" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Activity</label>
                        <input type="text" name="activity" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Admin Name</label>
                        <input type="text" name="owner_name" id="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Admin Mobile Number</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label name="mobile" class="form-label">Address</label>
                        <input type="text" name="address" id="mobile" class="form-control" required>
                    </div>

                    
                </div>
                <button type="submit" style="float: right;" class="btn btn-primary">Register</button>

            </form>
    </div>

    <div class="col-3">
    </div>
</div>
@endsection

<style>

#headline{
    color: green;
    text-align: center;
}
</style>