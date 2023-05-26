
<div class="form-group {{ $errors->has('id_tt') ? 'has-error' : '' }}">
    <label for="id_tt" class="col-md-2 control-label">Id Tt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_tt" type="text" id="id_tt" value="{{ old('id_tt', optional($trangThai)->id_tt) }}" minlength="1" required="true" placeholder="Enter id tt here...">
        {!! $errors->first('id_tt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_xh') ? 'has-error' : '' }}">
    <label for="id_xh" class="col-md-2 control-label">Id Xh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_xh" type="text" id="id_xh" value="{{ old('id_xh', optional($trangThai)->id_xh) }}" minlength="1" placeholder="Enter id xh here...">
        {!! $errors->first('id_xh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_tt') ? 'has-error' : '' }}">
    <label for="ten_tt" class="col-md-2 control-label">Ten Tt</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_tt" type="text" id="ten_tt" value="{{ old('ten_tt', optional($trangThai)->ten_tt) }}" minlength="1" placeholder="Enter ten tt here...">
        {!! $errors->first('ten_tt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

