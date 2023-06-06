
<div class="form-group {{ $errors->has('id_huyen') ? 'has-error' : '' }}">
    <label for="id_huyen" class="col-md-2 control-label">Id Huyen</label>
    <div class="col-md-10">
        <input class="form-control" name="id_huyen" type="text" id="id_huyen" value="{{ old('id_huyen', optional($huyen)->id_huyen) }}" minlength="1" required="true" placeholder="Enter id huyen here...">
        {!! $errors->first('id_huyen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_tinh') ? 'has-error' : '' }}">
    <label for="id_tinh" class="col-md-2 control-label">Id Tinh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_tinh" type="text" id="id_tinh" value="{{ old('id_tinh', optional($huyen)->id_tinh) }}" minlength="1" placeholder="Enter id tinh here...">
        {!! $errors->first('id_tinh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_huyen') ? 'has-error' : '' }}">
    <label for="ten_huyen" class="col-md-2 control-label">Ten Huyen</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_huyen" type="text" id="ten_huyen" value="{{ old('ten_huyen', optional($huyen)->ten_huyen) }}" minlength="1" placeholder="Enter ten huyen here...">
        {!! $errors->first('ten_huyen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

