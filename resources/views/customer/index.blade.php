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
            <h1>Customer</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/station">customer</a></li>
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
                @include('layouts.partials.session')
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-10">Customer</h3>

                          </button>
                          <a href="{{ route('customer.create') }}" class="btn btn-info btn-sm col-2">Add Customer</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="overflow-auto card-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($customers as $customer)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->company_name}}</td>
                                <td> {{$customer->phone}}</td>
                                <td> {{$customer->email}}</td>
                                <td> {{$customer->address}}</td>
                                <td>
                                    <a href="{{route('customer.edit', [$customer->id])}}" class="btn btn-success text-sm">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <p>There is no Customer yet</p>
                        @endforelse
                      </tbody>
                      {{-- <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Region</th>
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


            $('.select2').select2()
            });

          </script>


    @endpush
</x-app-layout>
