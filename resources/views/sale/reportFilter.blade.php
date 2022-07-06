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
            <div class="table-responsive">
                <table id="example" class="table table-bordered text-nowrap key-buttons">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">No #</th>
                            <th class="border-bottom-0">Petrol Type</th>
                            <th class="border-bottom-0">Petrolium Volume</th>
                            <th class="border-bottom-0">Credit / Debit Card Number</th>
                            <th class="border-bottom-0">Sale Amount</th>
                            <th class="border-bottom-0">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($reportFilter as $item)
                            <tr>
                                <td>@php echo $i++ @endphp</td>
                                <td>{{ $item->fuel->name }}</td>
                                <td>{{ $item->volume }}</td>
                                <td>{{ $item->card_number }}</td>
                                <td>{{ $item->amount }}</td>
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
