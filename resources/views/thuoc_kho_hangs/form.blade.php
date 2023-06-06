
<div class="form-group {{ $errors->has('id_khohang') ? 'has-error' : '' }}">
    <label for="id_khohang" class="col-md-2 control-label">Id Khohang</label>
    <div class="col-md-10">
        <input class="form-control" name="id_khohang" type="text" id="id_khohang" value="{{ old('id_khohang', optional($thuocKhoHang)->id_khohang) }}" minlength="1" required="true" placeholder="Enter id khohang here...">
        {!! $errors->first('id_khohang', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_hh') ? 'has-error' : '' }}">
    <label for="id_hh" class="col-md-2 control-label">Id Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_hh" type="text" id="id_hh" value="{{ old('id_hh', optional($thuocKhoHang)->id_hh) }}" minlength="1" placeholder="Enter id hh here...">
        {!! $errors->first('id_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

