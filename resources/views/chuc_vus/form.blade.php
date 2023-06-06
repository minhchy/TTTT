
<div class="form-group {{ $errors->has('id_chucvu') ? 'has-error' : '' }}">
    <label for="id_chucvu" class="col-md-2 control-label">Id Chucvu</label>
    <div class="col-md-10">
        <input class="form-control" name="id_chucvu" type="text" id="id_chucvu" value="{{ old('id_chucvu', optional($chucVu)->id_chucvu) }}" minlength="1" required="true" placeholder="Enter id chucvu here...">
        {!! $errors->first('id_chucvu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_chucvu') ? 'has-error' : '' }}">
    <label for="ten_chucvu" class="col-md-2 control-label">Ten Chucvu</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_chucvu" type="text" id="ten_chucvu" value="{{ old('ten_chucvu', optional($chucVu)->ten_chucvu) }}" minlength="1" placeholder="Enter ten chucvu here...">
        {!! $errors->first('ten_chucvu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

