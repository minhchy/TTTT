
<!-- <div class="form-group {{ $errors->has('id_tinh_tp') ? 'has-error' : '' }}">
    <label for="id_tinh_tp" class="col-md-2 control-label">Id Tinh Tp</label>
    <div class="col-md-10">
        <input class="form-control" name="id_tinh_tp" type="text" id="id_tinh_tp" value="{{ old('id_tinh_tp', optional($tinhTp)->id_tinh_tp) }}" minlength="1" required="true" placeholder="Enter id tinh tp here...">
        {!! $errors->first('id_tinh_tp', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('ten_tinh_tp') ? 'has-error' : '' }}">
    <label for="ten_tinh_tp" class="col-md-2 control-label">Ten Tinh Tp</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_tinh_tp" type="text" id="ten_tinh_tp" value="{{ old('ten_tinh_tp', optional($tinhTp)->ten_tinh_tp) }}" minlength="1" placeholder="Enter ten tinh tp here...">
        {!! $errors->first('ten_tinh_tp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

