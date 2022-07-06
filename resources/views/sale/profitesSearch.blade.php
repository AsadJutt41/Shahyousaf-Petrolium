
@extends('layouts.base')

@section('content')

	<!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sale Transaction</h3>
                </div>
                <div class="card-body pb-2">
                <form action="{{ route('profiteFilter') }}" method="post">
                    @csrf

                    <div class="col-md-12">
                        <label for="" class="label-control">Select Petrol Types</label>
                        <select name="petrol_type" id="petrol_type" class="form-control" required>
                            <option selected disabled>Petrol Types</option>
                            @foreach ($petrolType as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="" class="label-control">Pick Start Date</label>
                        <input type="date" class="form-control" name="start_date" required />
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="" class="label-control">Pick End Date</label>
                        <input type="date" class="form-control" name="end_date" required />
                    </div>

                    <div class="col-md-12 mt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
