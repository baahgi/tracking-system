<x-app-layout>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Arrived</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/shipmentupdate/dispatch">Update arrived status</a></li>
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
                        <h3 class="card-title">Update Arrived Status</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="POST" action="{{ route('shipment.bulkupdate') }}">

                        @csrf

                        <input type="hidden" name="status_id" value="3">

                        <div class="card-body">
                            <div class="form-group col-md-12">
                              <label for="consignmentno">Shipment Numbers</label>
                              <textarea class="form-control" name="consignmentno" id="consignmentno" cols="20" rows="10"></textarea>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" id="name">
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
                                <input type="text" class="form-control" id="idnumber" name="idnumber">
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
</x-app-layout>
