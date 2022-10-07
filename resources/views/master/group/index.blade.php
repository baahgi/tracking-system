<x-app-layout>

    @push('styles')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('css/datatables/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables/buttons.bootstrap4.min.css')}}">

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
                    <h3 class="card-title">Shipments</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="overflow-auto card-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        #
                      </tr>
                      <tr>
                        Name
                      </tr>
                      <tr>
                        Description
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($groups as $group)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->description }}</td>
                            </tr>
                        @endforeach


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

        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
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
            });
          </script>


    @endpush
</x-app-layout>
