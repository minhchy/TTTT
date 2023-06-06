
<!-- <div class="form-group {{ $errors->has('id_lpt') ? 'has-error' : '' }}">
    <label for="id_lpt" class="col-md-2 control-label">Id Lpt</label>
    <div class="col-md-10">
        <input class="form-control" name="id_lpt" type="text" id="id_lpt" value="{{ old('id_lpt', optional($loaiPhuongTien)->id_lpt) }}" minlength="1" required="true" placeholder="Enter id lpt here...">
        {!! $errors->first('id_lpt', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->


<div class="form-group {{ $errors->has('ten_lpt') ? 'has-error' : '' }}">
    <label for="ten_lpt" class="col-md-2 control-label">Tên Loại Phương Tiện</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_lpt" type="text" id="ten_lpt" value="{{ old('ten_lpt', optional($loaiPhuongTien)->ten_lpt) }}" minlength="1" placeholder="Enter ten lpt here...">
        {!! $errors->first('ten_lpt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

