
<!-- <div class="form-group {{ $errors->has('id_ttpt') ? 'has-error' : '' }}">
    <label for="id_ttpt" class="col-md-2 control-label">Id Ttpt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_ttpt" type="text" id="id_ttpt" value="{{ old('id_ttpt', optional($trangThaiPhuongTien)->id_ttpt) }}" minlength="1" required="true" placeholder="Enter id ttpt here...">
        {!! $errors->first('id_ttpt', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('ten_ttpt') ? 'has-error' : '' }}">
    <label for="ten_ttpt" class="col-md-2 control-label">Tên trạng thái</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_ttpt" type="text" id="ten_ttpt" value="{{ old('ten_ttpt', optional($trangThaiPhuongTien)->ten_ttpt) }}" minlength="1" placeholder="Enter ten ttpt here...">
        {!! $errors->first('ten_ttpt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

