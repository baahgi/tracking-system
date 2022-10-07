<x-app-layout>

    @push('styles')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('css/datatables/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/buttons.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{ asset('css/datatables/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datatables/tempusdominus-bootstrap-4.min.css') }}">

    @endpush
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Shipments</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/shipment">shipment</a></li>
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
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-sm-4">Shipments</h3>
                        <div class="col-sm-8 pull-right">
                            <form action="{{ route('shipment.withdate') }}" method="POST">
                                @include('layouts.partials.date')
                            </form>
                        </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="overflow-auto card-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Consignmentno</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @forelse ($shipments as $shipment)
                        <tr>
                            <td>{{$shipment->consignmentno}}</td>
                            <td>{{$shipment->sender_name}}</td>
                            <td>{{$shipment->receiver_name}}</td>
                            <td>{{$shipment->origin->name}}</td>
                            <td>{{$shipment->destination->name}}</td>
                            <td>{{$shipment->status_id}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">waybill</a></li>
                                      <li><a class="dropdown-item" href="#">receipt</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        @empty
                            No shipment found
                        @endforelse

                      </tbody>

                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>
              <!-- /.col -->
        </div>
        </div>
    </section>
    <!-- /.content -->

    @push('scripts')
        <script src="{{asset('js/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('js/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.colVis.min.js')}}"></script>


        <script src="{{ asset('js/datatables/moment.min.js') }}"></script>
        <script src="{{ asset('js/datatables/jquery.inputmask.min.js') }}"></script>
        <script src="{{ asset('js/datatables/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/datatables/tempusdominus-bootstrap-4.min.js') }}"></script>

        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": false, "lengthChange": false, "autoWidth": false,"ordering":false,
                // "buttons": ["excel", "pdf", "colvis"]
              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            //   $('#example1').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": true,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            //   });

            $('#datetimepicker5').datetimepicker({
                    format: 'L'
                });
            $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
          </script>

    @endpush
</x-app-layout>
