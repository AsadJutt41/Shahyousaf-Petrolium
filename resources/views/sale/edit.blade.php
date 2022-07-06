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
                    <form action="{{ route('saleUpdate' , ['id'=>$sale->id]) }}" method="POST">
                        @csrf

                        @csrf

                        <div class="col-md-12">
                            <label for="" class="label-control">Select Petrol Types</label>
                            <select name="petrol_type" id="petrol_type" class="form-control" required>
                                <option selected disabled >Petrol Types</option>
                                @foreach ($petrolType as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('petrol_type'))
                                <div style="color: red;">{{ $errors->first('petrol_type') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="" class="label-control">Litters of Fuel</label>
                            <input type="text" class="form-control" name="fuel_litter" id="fuel_litter" value="{{ $sale->fuel_litter }}" required />
                            @if($errors->has('fuel_litter'))
                                <div style="color: red;">{{ $errors->first('fuel_litter') }}</div>
                            @endif
                        </div>
    
                        <div class="col-md-12 mt-3">
                            <label for="" class="label-control">Per Litter Price</label>
                            <input type="text" class="form-control" name="per_litter_price" id="per_litter_price" value="{{ $sale->per_litter_price }}" required />
                            @if($errors->has('per_litter_price'))
                                <div style="color: red;">{{ $errors->first('per_litter_price') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mt-4">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
    </div>
@endsection
