
<div class="form-group {{ $errors->has('id_pt') ? 'has-error' : '' }}">
    <label for="id_pt" class="col-md-2 control-label">Id Pt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_pt" type="text" id="id_pt" value="{{ old('id_pt', optional($ptHh)->id_pt) }}" minlength="1" required="true" placeholder="Enter id pt here...">
        {!! $errors->first('id_pt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_hh') ? 'has-error' : '' }}">
    <label for="id_hh" class="col-md-2 control-label">Id Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_hh" type="text" id="id_hh" value="{{ old('id_hh', optional($ptHh)->id_hh) }}" minlength="1" placeholder="Enter id hh here...">
        {!! $errors->first('id_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

