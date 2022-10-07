<x-app-layout>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Return</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/shipmentupdate/dispatch">Update return status</a></li>
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
                        <h3 class="card-title">Update return Status</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="POST" action="{{ route('shipment.bulkupdate') }}">

                        @csrf

                        <input type="hidden" name="status_id" value="7">

                        <div class="card-body">

                            <div class="form-group col-md-12">
                              <label for="consignmentno">Shipment Numbers</label>
                              <textarea class="form-control" name="consignmentno" id="consignmentno" cols="20" rows="10"></textarea>
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
</x-app-layout>
