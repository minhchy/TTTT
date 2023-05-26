
<div class="form-group {{ $errors->has('id_lhh') ? 'has-error' : '' }}">
    <label for="id_lhh" class="col-md-2 control-label">Id Lhh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_lhh" type="text" id="id_lhh" value="{{ old('id_lhh', optional($loaiHangHoa)->id_lhh) }}" minlength="1" required="true" placeholder="Enter id lhh here...">
        {!! $errors->first('id_lhh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_lhh') ? 'has-error' : '' }}">
    <label for="ten_lhh" class="col-md-2 control-label">Ten Lhh</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_lhh" type="text" id="ten_lhh" value="{{ old('ten_lhh', optional($loaiHangHoa)->ten_lhh) }}" minlength="1" placeholder="Enter ten lhh here...">
        {!! $errors->first('ten_lhh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

