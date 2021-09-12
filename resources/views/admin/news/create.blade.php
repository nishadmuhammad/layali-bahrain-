@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-3"> </div>
    <h1 id="headline"> Company Registration</h1>
    <div class="modal-body m-3 ">
        <form action="{{route('add.news')}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">News</label>
                    <textarea rows="3" name="news" class="form-control" id="multiLineInput"></textarea>
                </div><br>

                <div class="col-4">
                    <div class="mb-3 col-12">
                        <label for="type" class="form-label">Proirity</label>
                        <select id="type" name="proirity" required class="form-control">
                            <option value="Emergency">Emergency</option>
                            <option value="Weakend">Weakend</option>
                            <option value="Monthend">Monthend</option>
                        </select>
                    </div>
                </div>
           
                <!-- mobile -->
                <div class="mb-3 col-4">
                    <label name="mobile" class="form-label">Starting Date</label>
                    <input type="date" name="starting_date" id="mobile" class="form-control" required>
                </div>

                <!-- reg date -->
                <div class="mb-3 col-4">
                    <label name="mobile" class="form-label">End Date</label>
                    <input type="date" name="end_date" id="mobile" class="form-control" required>
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
    #headline {
        color: green;
        text-align: center;
    }
</style>