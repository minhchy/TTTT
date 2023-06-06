
<!-- <div class="form-group {{ $errors->has('id_xa') ? 'has-error' : '' }}">
    <label for="id_xa" class="col-md-2 control-label">Id Xa</label>
    <div class="col-md-10">
        <input class="form-control" name="id_xa" type="text" id="id_xa" value="{{ old('id_xa', optional($xa)->id_xa) }}" minlength="1" required="true" placeholder="Enter id xa here...">
        {!! $errors->first('id_xa', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('id_huyen') ? 'has-error' : '' }}">
    <label for="id_huyen" class="col-md-2 control-label">Id Huyen</label>
    <div class="col-md-10">
        <input class="form-control" name="id_huyen" type="text" id="id_huyen" value="{{ old('id_huyen', optional($xa)->id_huyen) }}" minlength="1" placeholder="Enter id huyen here...">
        {!! $errors->first('id_huyen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

