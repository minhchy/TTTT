
<div class="form-group {{ $errors->has('id_khohang') ? 'has-error' : '' }}">
    <label for="id_khohang" class="col-md-2 control-label">Id Khohang</label>
    <div class="col-md-10">
        <input class="form-control" name="id_khohang" type="text" id="id_khohang" value="{{ old('id_khohang', optional($khoHang)->id_khohang) }}" minlength="1" required="true" placeholder="Enter id khohang here...">
        {!! $errors->first('id_khohang', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_khohang') ? 'has-error' : '' }}">
    <label for="ten_khohang" class="col-md-2 control-label">Ten Khohang</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_khohang" type="text" id="ten_khohang" value="{{ old('ten_khohang', optional($khoHang)->ten_khohang) }}" minlength="1" placeholder="Enter ten khohang here...">
        {!! $errors->first('ten_khohang', '<p class="help-block">:message</p>') !!}
    </div>
</div>

