<x-app-layout>

    @push('styles')
    <link rel="stylesheet" href="{{asset('css/datatables/select2.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/datatables/select2-bootstrap4.min.css')}}"> --}}
    @endpush
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Add Shipment</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">add shipment</a></li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif --}}

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-md-8 offset-md-2">

                    @include('layouts.partials.session')
                    <!-- general form elements -->
                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Shipment Details</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="POST" action="{{ route('shipment.store') }}">

                        @csrf

                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="origin">Origin</label>
                              <select class="form-control">
                                    <option value="{{$origin->id}}">{{$origin->name}}</option>
                              </select>

                              <input type="hidden" class="form-control" value="{{$origin->id}}" name="origin_id">

                            </div>

                            <div class="form-group col-md-6">
                              <label for="destination_id">Destination</label>
                              <select name="destination_id" class="select2 form-control @error('destination_id') is-invalid @enderror" id="destination_id">
                                @foreach ($destinations as $destination)
                                    <option value="{{$destination->id}}">{{$destination->name}}</option>
                                @endforeach
                              </select>
                              @error('destination_id')
                                <span class="text-sm text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{old('weight')}}">
                                @error('weight')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="item_type">Item Type</label>
                                <select class="form-control" name="item_type" id="item_type">
                                    <option value="parcel">Parcel</option>
                                    <option value="document">Document</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-5">
                          <div class="card-header">
                            <h3 class="card-title">Item Details</h3>
                          </div>

                          <div class="row">
                            <div class="form-group col-md-4">
                                <label for="value">Shipment Value</label>
                                <input type="text" class="form-control @error('value') is-invalid @enderror" name="value" id="value" value="{{old('value')}}">
                                @error('value')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="description">Shipment Description</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}">
                                @error('description')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_mode">Payment Mode</label>
                                <select class="form-control" name="payment_mode" id="payment_mode">
                                    <option value="cash">Cash</option>
                                    <option value="credit">Credit</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-5">
                          <div class="card-header">
                            <h3 class="card-title">Sender Details</h3>
                          </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="sender_name">Sender Name</label>
                                    <input type="text" class="form-control @error('sender_name') is-invalid @enderror" id="sender_name"  name="sender_name" value="{{old('sender_name')}}">
                                    @error('sender_name')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sender_phone">Sender Phone</label>
                                    <input type="text" class="form-control @error('sender_phone') is-invalid @enderror" id="sender_phone" name="sender_phone" value="{{old('sender_phone')}}">
                                    @error('sender_phone')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sender_email">Sender Email</label>
                                    <input type="text" class="form-control" id="sender_email" name="sender_email" value="{{old('sender_email')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="sender_address">Sender Address</label>
                                    <input type="text" class="form-control @error('sender_address') is-invalid @enderror" id="sender_address" name="sender_address" value="{{old('sender_address')}}">
                                    @error('sender_address')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="mt-5">
                          <div class="card-header">
                            <h3 class="card-title">Receiver Details</h3>
                          </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="receiver_name">Receiver Name</label>
                                    <input type="text" class="form-control @error('receiver_name') is-invalid @enderror" id="receiver_name" name="receiver_name" value="{{old('receiver_name')}}"/>
                                    @error('receiver_name')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="receiver_phone">Receiver Phone</label>
                                    <input type="text" class="form-control @error('receiver_phone') is-invalid @enderror" id="receiver_phone" name="receiver_phone" value="{{old('receiver_phone')}}">
                                    @error('receiver_phone')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="receiver_email">Receiver Email</label>
                                    <input type="text" class="form-control" id="receiver_email" name="receiver_email" value="{{old('receiver_email')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="receiver_address">Receiver Address</label>
                                    <input type="text" class="form-control @error('receiver_address') is-invalid @enderror" id="receiver_email" name="receiver_address" value="{{old('receiver_address')}}">
                                    @error('receiver_address')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        @error('consignmentno')
                                        <span class="text-sm text-danger">{{$message}}</span>
                                    @enderror

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="reference_no">Reference Number</label>
                                    <input type="text" class="form-control" id="reference_no" name="reference_no" value="{{old('reference_no')}}">
                                </div>
                                <div class="col-md-4">
                                    <label for="consignmentno">Shipment Number</label>
                                    <input type="text" class="form-control" id="consignmentno" name="consignmentno" value="{{ date('ymd').rand(100000, 999999) }}" readonly>
                                </div>
                                <div class="col-md-4" style="margin-top: 2rem;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->



                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->

    @push('scripts')

        <script src="{{ asset('js/datatables/select2.full.min.js') }}"></script>
        <script>
              $(function () {

                $('.select2').select2()
              })
        </script>
    @endpush
</x-app-layout>
