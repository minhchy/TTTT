
<!-- <div class="form-group {{ $errors->has('id_xh') ? 'has-error' : '' }}">
    <label for="id_xh" class="col-md-2 control-label">Id Xh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_xh" type="text" id="id_xh" value="{{ old('id_xh', optional($xuatHang)->id_xh) }}" minlength="1" required="true" placeholder="Enter id xh here...">
        {!! $errors->first('id_xh', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('id_kh') ? 'has-error' : '' }}">
    <label for="id_kh" class="col-md-2 control-label">Id Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_kh" type="text" id="id_kh" value="{{ old('id_kh', optional($xuatHang)->id_kh) }}" minlength="1" placeholder="Enter id kh here...">
        {!! $errors->first('id_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_ncc') ? 'has-error' : '' }}">
    <label for="id_ncc" class="col-md-2 control-label">Id Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="id_ncc" type="text" id="id_ncc" value="{{ old('id_ncc', optional($xuatHang)->id_ncc) }}" minlength="1" placeholder="Enter id ncc here...">
        {!! $errors->first('id_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_nv') ? 'has-error' : '' }}">
    <label for="id_nv" class="col-md-2 control-label">Id Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="id_nv" type="text" id="id_nv" value="{{ old('id_nv', optional($xuatHang)->id_nv) }}" minlength="1" placeholder="Enter id nv here...">
        {!! $errors->first('id_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('time_xh') ? 'has-error' : '' }}">
    <label for="time_xh" class="col-md-2 control-label">Time Xh</label>
    <div class="col-md-10">
        <input class="form-control" name="time_xh" type="text" id="time_xh" value="{{ old('time_xh', optional($xuatHang)->time_xh) }}" minlength="1" placeholder="Enter time xh here...">
        {!! $errors->first('time_xh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tongtien_xh') ? 'has-error' : '' }}">
    <label for="tongtien_xh" class="col-md-2 control-label">Tongtien Xh</label>
    <div class="col-md-10">
        <input class="form-control" name="tongtien_xh" type="text" id="tongtien_xh" value="{{ old('tongtien_xh', optional($xuatHang)->tongtien_xh) }}" minlength="1" placeholder="Enter tongtien xh here...">
        {!! $errors->first('tongtien_xh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

