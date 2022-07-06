@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
         <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <div class="card-title">List Of Sale Transaction</div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('addSale') }}"><button class="btn btn-primary">Add New Sale Transaction</button></a>
                </div>
            </div>
         </div>
    </div>
    <div class="card-body">
        <div class="">
            <div class="table-responsive">
                <table id="example" class="table table-bordered text-nowrap key-buttons">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">No #</th>
                            <th class="border-bottom-0">Petrol Type</th>
                            <th class="border-bottom-0">Purchase Amount</th>
                            <th class="border-bottom-0">Sale Amount</th>
                            <th class="border-bottom-0">Profte Amount</th>
                            <th class="border-bottom-0">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>{{ $fuel->name }}</td>
                            <td>{{ $stock }}</td>
                            <td>{{ $sale }}</td>
                            <td>{{ $sale - $stock }}</td>
                            <td>
                                @if ($create->created_at == $create->updated_at)
                                    {{ $create->created_at }}
                                @else
                                    {{ $create->updated_at }}                                        
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
