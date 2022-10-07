<x-app-layout>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Station</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Station</li>
                <li class="breadcrumb-item"><a href="{{route('station.edit', [$station->id])}}">edit</a></li>
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
                    <!-- general form elements -->
                    @include('layouts.partials.session')
                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Update Station</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="{{route('station.update')}}" method="post">

                        @csrf
                        @method('put')

                        <input type="hidden" name="shipment_id" class="form-control" value="{{$station->id}}">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{$station->name}}" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="name">Description</label>
                              <input type="text" name="description" class="form-control" value="{{$station->description}}" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="idtype">Group</label>
                                <select class="form-control select2" name="group_id" style="width: 100%;">
                                    @foreach ($groups as $group)
                                        <option value="{{$group->id}}" {{ $group->id == $station->group->id ? 'selected' : '' }} >{{$group->name}}</option>
                                    @endforeach

                                  </select>
                                @error('group_id')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="region_id">Region</label>
                                <select class="form-control select2" name="region_id" style="width: 100%;">
                                  @foreach ($regions as $region)
                                    <option value="{{$region->id}}" {{$region->id == $station->region->id ? 'selected' : ''}}>{{$region->name}}</option>
                                  @endforeach

                                </select>


                            @error('region_id')
                                <span class="text-sm text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Station</button>
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
