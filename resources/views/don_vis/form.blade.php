
<div class="form-group {{ $errors->has('id_dv') ? 'has-error' : '' }}">
    <label for="id_dv" class="col-md-2 control-label">Id Dv</label>
    <div class="col-md-10">
        <input class="form-control" name="id_dv" type="text" id="id_dv" value="{{ old('id_dv', optional($donVi)->id_dv) }}" minlength="1" required="true" placeholder="Enter id dv here...">
        {!! $errors->first('id_dv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_dv') ? 'has-error' : '' }}">
    <label for="ten_dv" class="col-md-2 control-label">Ten Dv</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_dv" type="text" id="ten_dv" value="{{ old('ten_dv', optional($donVi)->ten_dv) }}" minlength="1" placeholder="Enter ten dv here...">
        {!! $errors->first('ten_dv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

