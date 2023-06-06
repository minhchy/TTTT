
<!-- <div class="form-group {{ $errors->has('id_nh') ? 'has-error' : '' }}">
    <label for="id_nh" class="col-md-2 control-label">Id Nh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_nh" type="text" id="id_nh" value="{{ old('id_nh', optional($nhapHang)->id_nh) }}" minlength="1" required="true" placeholder="Enter id nh here...">
        {!! $errors->first('id_nh', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('id_tt') ? 'has-error' : '' }}">
    <label for="id_tt" class="col-md-2 control-label">Id Tt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_tt" type="text" id="id_tt" value="{{ old('id_tt', optional($nhapHang)->id_tt) }}" minlength="1" placeholder="Enter id tt here...">
        {!! $errors->first('id_tt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_ncc') ? 'has-error' : '' }}">
    <label for="id_ncc" class="col-md-2 control-label">Id Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="id_ncc" type="text" id="id_ncc" value="{{ old('id_ncc', optional($nhapHang)->id_ncc) }}" minlength="1" placeholder="Enter id ncc here...">
        {!! $errors->first('id_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_nv') ? 'has-error' : '' }}">
    <label for="id_nv" class="col-md-2 control-label">Id Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="id_nv" type="text" id="id_nv" value="{{ old('id_nv', optional($nhapHang)->id_nv) }}" minlength="1" placeholder="Enter id nv here...">
        {!! $errors->first('id_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('time_nh') ? 'has-error' : '' }}">
    <label for="time_nh" class="col-md-2 control-label">Time Nh</label>
    <div class="col-md-10">
        <input class="form-control" name="time_nh" type="text" id="time_nh" value="{{ old('time_nh', optional($nhapHang)->time_nh) }}" minlength="1" placeholder="Enter time nh here...">
        {!! $errors->first('time_nh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tongtien_nh') ? 'has-error' : '' }}">
    <label for="tongtien_nh" class="col-md-2 control-label">Tongtien Nh</label>
    <div class="col-md-10">
        <input class="form-control" name="tongtien_nh" type="text" id="tongtien_nh" value="{{ old('tongtien_nh', optional($nhapHang)->tongtien_nh) }}" minlength="1" placeholder="Enter tongtien nh here...">
        {!! $errors->first('tongtien_nh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

