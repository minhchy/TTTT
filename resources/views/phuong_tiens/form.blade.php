
<div class="form-group {{ $errors->has('id_pt') ? 'has-error' : '' }}">
    <label for="id_pt" class="col-md-2 control-label">Id Pt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_pt" type="text" id="id_pt" value="{{ old('id_pt', optional($phuongTien)->id_pt) }}" minlength="1" required="true" placeholder="Enter id pt here...">
        {!! $errors->first('id_pt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_ttpt') ? 'has-error' : '' }}">
    <label for="id_ttpt" class="col-md-2 control-label">Id Ttpt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_ttpt" type="text" id="id_ttpt" value="{{ old('id_ttpt', optional($phuongTien)->id_ttpt) }}" minlength="1" placeholder="Enter id ttpt here...">
        {!! $errors->first('id_ttpt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_lpt') ? 'has-error' : '' }}">
    <label for="id_lpt" class="col-md-2 control-label">Id Lpt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_lpt" type="text" id="id_lpt" value="{{ old('id_lpt', optional($phuongTien)->id_lpt) }}" minlength="1" placeholder="Enter id lpt here...">
        {!! $errors->first('id_lpt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_pt') ? 'has-error' : '' }}">
    <label for="ten_pt" class="col-md-2 control-label">Ten Pt</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_pt" type="text" id="ten_pt" value="{{ old('ten_pt', optional($phuongTien)->ten_pt) }}" minlength="1" placeholder="Enter ten pt here...">
        {!! $errors->first('ten_pt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

