
@csrf
<div class="row">
    <div class="form-group col-sm-5">
        <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                <div class="input-group-text">From</i></div>
            </div>
            <input type="text" name="from" class="form-control datetimepicker-input" value="{{date('m/d/Y')}}" data-target="#datetimepicker5"/>
        </div>
    </div>
    <div class="form-group col-sm-5">
        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                <div class="input-group-text">To</i></div>
            </div>
            <input type="text" name="to" class="form-control datetimepicker-input" value="{{date('m/d/Y')}}" data-target="#datetimepicker4"/>
        </div>
    </div>
    <div class="form-group col-sm-2">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</div>
