<x-app-layout>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/datatables/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/tempusdominus-bootstrap-4.min.css') }}">

    @endpush


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Delivered</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/shipmentupdate/dispatch">Update delivered status</a></li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-md-8 offset-2">
                    @include('layouts.partials.session')

                    <!-- general form elements -->
                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Update Delivered Status</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="POST" action="{{ route('shipment.bulkupdate') }}" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="status_id" value="6">

                        <div class="card-body">
                            <div class="form-group col-md-12">
                              <label for="consignmentno">Shipment Numbers</label>
                              <textarea class="form-control" name="consignmentno" id="consignmentno" cols="20" rows="10"></textarea>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="idtype">ID Type</label>
                                <select class="form-control" name="idtype" id="idtype">
                                    <option value="ghana card">Ghana Card</option>
                                    <option value="electoral card">Electoral Card</option>
                                    <option value="driver lincense">Driver License</option>
                                    <option value="passport">Passport</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="idnumber">ID Number</label>
                                <input type="text" name="idnumber" class="form-control" id="idnumber" placeholder="Enter id number">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="pod">Proof of Delivery</label>
                              <input type="file" name="pod" class="form-control" id="pod" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="date">Actual Delivery Date/Time</label>

                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    <input type="text" name="datetime" class="form-control datetimepicker-input" data-target="#reservationdatetime" required/>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Status</button>
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
        <script src="{{asset('js/datatables/jquery.dataTables.min.js')}}"></script>

        <script src="{{ asset('js/datatables/moment.min.js') }}"></script>
        <script src="{{ asset('js/datatables/jquery.inputmask.min.js') }}"></script>
        <script src="{{ asset('js/datatables/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/datatables/tempusdominus-bootstrap-4.min.js') }}"></script>

        <script>
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });

                $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
            })
        </script>
    @endpush
</x-app-layout>
