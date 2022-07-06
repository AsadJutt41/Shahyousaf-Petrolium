@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
         <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <div class="card-title">List Of Fuel Stock</div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stockModel">Add New Petrol Volume/Stock</button>
                </div>
            </div>
         </div>
    </div>
    <div class="card-body">
        <div class="">
            <div class="div mt-3 mb-3">
                <form action="{{ route('stockFilter') }}" method="post">
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
                            <th class="border-bottom-0">Litter Of Fuel</th>
                            <th class="border-bottom-0">Per Litter Price</th>
                            <th class="border-bottom-0">Total Price</th>
                            <th class="border-bottom-0">Created At</th>
                            <th class="border-bottom-0">Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($stock as $item)
                            <tr>
                                <td>@php echo $i++ @endphp</td>
                                <td>{{ $item->fuel->name }}</td>
                                <td>{{ $item->fuel_litter }}</td>
                                <td>{{ $item->per_litter_price }}</td>
                                <td>{{ $item->total_price }}</td>
                                <td>
                                    @if ($item->created_at == $item->updated_at)
                                        {{ $item->created_at }}
                                    @else
                                        {{ $item->updated_at }}                                        
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('stockEdit', ['id'=>$item->id]) }}"><i class="fa fa-edit" style="font-size: 22px; color: blue;"></i></a>
                                    <a href="{{ route('stockDelete', ['id'=>$item->id]) }}"><i class="fa fa-trash" style="font-size: 22px; color: red; margin-left: 10px;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="stockModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Petrol Volume/Stock Model</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="stockForm">
                    @csrf

                    <div class="col-md-12">
                        <label for="" class="label-control">Select Petrol Types</label>
                        <select name="petrol_type" id="petrol_type" class="form-control" required>
                            <option selected disabled>Petrol Types</option>
                            @foreach ($petrolType as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger" id="petrolErrorMsg"></span>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="" class="label-control">Litters of Fuel</label>
                        <input type="number" class="form-control" name="fuel_litter" id="fuel_litter" required />
                        <span class="text-danger" id="fuel_litterErrorMsg"></span>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="" class="label-control">Per Litter Price</label>
                        <input type="number" class="form-control" name="per_litter_price" id="per_litter_price" required />
                        <span class="text-danger" id="per_litter_priceErrorMsg"></span>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">

    $('#stockForm').on('submit',function(e){
        e.preventDefault();

        let petrol_type = $('#petrol_type').val();
        let fuel_litter = $('#fuel_litter').val();
        let per_litter_price = $('#per_litter_price').val();

        $.ajax({
          url: "/stock/store",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            petrol_type:petrol_type,
            fuel_litter:fuel_litter,
            per_litter_price:per_litter_price,
          },
          success:function(response){
            $('#stockModel').modal('toggle');
            Swal.fire({
                title: 'Success!',
                text: 'Stock Type has been added successfully!',
                icon: 'success',
                confirmButtonText: 'Done'
            });
            setTimeout(function() {   //calls click event after a certain time
                location.reload()
            }, 2000);

          },
          error: function(response) {
            $('#petrolErrorMsg').text(response.responseJSON.errors.petrol_type);
            $('#fuel_litterErrorMsg').text(response.responseJSON.errors.fuel_litter);
            $('#per_litter_priceErrorMsg').text(response.responseJSON.errors.per_litter_price);
          },
          });
        });
</script>
@endpush
