<x-app-layout>

    @push('styles')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('css/datatables/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/buttons.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{ asset('css/datatables/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datatables/tempusdominus-bootstrap-4.min.css') }}">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Datewise</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">report</li>
                <li class="breadcrumb-item"><a href="/report/datewise">datewise</a></li>
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

                        <h3 class="card-title col-sm-6">Shipments</h3>
                        <div class="col-sm-6 pull-right">
                            <form action="{{ route('shipment.withdate') }}" method="POST">
                                @include('layouts.partials.date')
                            </form>
                          </div>
                    </div>

                  </div>
                  <!-- /.card-header -->
                  <div class="overflow-auto card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Date</th>
                        <th>Consignmentno</th>
                        <th>Referenceno</th>
                        <th>Consignor name</th>
                        <th>Consignee name</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Weight</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Amount</th>
                        <th>Payment mode</th>
                        <th>Shipment Value</th>
                        <th>Shipment Type</th>
                        <th>Shipment Description</th>
                        <th>Rider</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($shipments as $shipment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $shipment->date }}</td>
                                <td>{{ $shipment->consignmentno }}</td>
                                <td>{{ $shipment->reference_no }}</td>
                                <td>{{ $shipment->sender_name }}</td>
                                <td>{{ $shipment->receiver_name }}</td>
                                <td>{{ $shipment->origin->name }}</td>
                                <td>{{ $shipment->destination->name }}</td>
                                <td>{{ $shipment->weight }}</td>
                                <td>{{ $shipment->status->name }}</td>
                                @if($shipment->status_id == 5)
                                <td scope="col">{{$shipment->shipmentstatuses->where('status_id', 5)->first()->name }}</td>
                                @else
                                <td scope="col">{{' '}}</td>
                                @endif
                                <td>{{ $shipment->amount }}</td>
                                <td>{{ $shipment->payment_mode }}</td>
                                <td>{{ $shipment->value }}</td>
                                <td>{{ $shipment->item_type }}</td>
                                <td>{{ $shipment->description }}</td>
                                <td>{{ $shipment->rider_id }}</td>

                            </tr>
                        @endforeach

                      </tbody>
                      {{-- <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </tfoot> --}}
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
              $("#example2").DataTable({
                "responsive": false, "lengthChange": false, "autoWidth": false,
                "searching": false,
                "buttons": ["excel", "pdf", "colvis"]
              }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
            //   $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
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
