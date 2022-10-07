
  <div class="modal fade" id="modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Station</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('station.store') }}">
            <div class="modal-body">

                    @csrf

                    <div class="row">
                        <div class="form-group col-12">
                        <label for="origin">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                                <span class="text-sm text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                            @error('description')
                                <span class="text-sm text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="group_id">Group</label>
                            <select class="form-control select2" name="group_id" style="width: 100%;">
                                <option>select a group</option>
                                @foreach ($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach

                              </select>
                            @error('group_id')
                                <span class="text-sm text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="region_id">Region</label>
                                <select class="form-control select2" name="region_id" style="width: 100%;">
                                  <option>select a region</option>
                                  @foreach ($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                  @endforeach

                                </select>


                            @error('region_id')
                                <span class="text-sm text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


