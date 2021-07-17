@extends('admin.layouts.app')
@section('content')


<main class="content">
    <div class="container-fluid p-0">

        <form method="GET" action="{{route('company.search')}}">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-md-6">
                    <input type="text" name="searchText" class="form-control" placeholder="Search Company name or CR number or Email" value="{{ old('search') }}">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success">Search</button>
                </div>
                <div class="col-2">
                    <label class="form-label"></label>
                    <a href="{{route('company')}}" class="btn btn-info" role="button">Company Registration</a>

                </div>
            </div>
        </form>
<br>

        <div class="col-12 col-xl-12 grid" id="indivitual-table">
            <div class="card">
                <div class="card-header">

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:10%">CR Number</th>
                            <th style="color: red;" style="width:20%">Company Name</th>
                            <th style="width:10%;">Registration Date</th>
                            <th style="width:10%">Email</th>
                            <th style="width:10%">Mobile</th>
                            <th style="width:15%">Address</th>
                            <th style="width:15%">Gosi Amount</th>
                            <th style="width:15%">Lmr_amount</th>
                            <th style="width:10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="ind-table-filter">
                        @foreach ($companies as $company)
                        <tr>
                            <td style="color: red;" value="123">{{$company->cr_no}}</td>
                            <td> <b>{{$company->name}} </b></td>
                            <td>{{$company->registration_date}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->mobile}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->gosi_amount}}</td>
                            <td>{{$company->lmr_amount}}</td>

                            <td></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

@endsection