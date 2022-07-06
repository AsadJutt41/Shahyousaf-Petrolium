@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
         <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <div class="card-title">List Of Sale Transaction</div>
                </div>
            </div>
         </div>
    </div>
    <div class="card-body">
        <div class="">
            
            <div class="table-responsive">
                <div class="div mt-3 mb-3">
                    <form action="{{ route('reportFilter') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary">Filter Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table id="example" class="table table-bordered text-nowrap key-buttons">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">No #</th>
                            <th class="border-bottom-0">Petrol Type</th>
                            <th class="border-bottom-0">Remaning fuel litters</th>
                            <th class="border-bottom-0">Total fuel litters</th>
                            <th class="border-bottom-0">Fuel Rate Per Litter</th>
                            <th class="border-bottom-0">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($sales as $item)
                            <tr>
                                <td>@php echo $i++ @endphp</td>
                                <td>{{ $item->fuel->name }}</td>
                                <td>{{ $item->fuel_litter }}</td>
                                <td>{{ $item->total_fuel }}</td>
                                <td>{{ $item->per_litter_price }}</td>
                                <td>
                                    @if ($item->created_at == $item->updated_at)
                                        {{ $item->created_at }}
                                    @else
                                        {{ $item->updated_at }}                                        
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
