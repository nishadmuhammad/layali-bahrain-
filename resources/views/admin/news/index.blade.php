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
                    <a href="{{route('news.create')}}" class="btn btn-info" role="button">Add News</a>

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
                            <th style="width:30%;">News</th>
                            <th style="width:10%">Status</th>
                            <th style="width:10%">Start Date</th>
                            <th style="width:10%">End Date</th>
                            <th style="width:10%">proirity</th>
                            <th style="width:10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="ind-table-filter">
                        @foreach ($newses as $news)
                        <tr>
                            <td> <b>{{$news->news}} </b></td>
                            <td>{{$news->status}}</td>
                            <td>{{$news->starting_date}}</td>
                            <td>{{$news->end_date}}</td>
                            <td>{{$news->proirity}}</td>
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