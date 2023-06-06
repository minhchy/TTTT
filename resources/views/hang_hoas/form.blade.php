
<div class="form-group {{ $errors->has('id_hh') ? 'has-error' : '' }}">
    <label for="id_hh" class="col-md-2 control-label">Id Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_hh" type="text" id="id_hh" value="{{ old('id_hh', optional($hangHoa)->id_hh) }}" minlength="1" required="true" placeholder="Enter id hh here...">
        {!! $errors->first('id_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_lhh') ? 'has-error' : '' }}">
    <label for="id_lhh" class="col-md-2 control-label">Id Lhh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_lhh" type="text" id="id_lhh" value="{{ old('id_lhh', optional($hangHoa)->id_lhh) }}" minlength="1" placeholder="Enter id lhh here...">
        {!! $errors->first('id_lhh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_dv') ? 'has-error' : '' }}">
    <label for="id_dv" class="col-md-2 control-label">Id Dv</label>
    <div class="col-md-10">
        <input class="form-control" name="id_dv" type="text" id="id_dv" value="{{ old('id_dv', optional($hangHoa)->id_dv) }}" minlength="1" placeholder="Enter id dv here...">
        {!! $errors->first('id_dv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_hh') ? 'has-error' : '' }}">
    <label for="ten_hh" class="col-md-2 control-label">Ten Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_hh" type="text" id="ten_hh" value="{{ old('ten_hh', optional($hangHoa)->ten_hh) }}" minlength="1" placeholder="Enter ten hh here...">
        {!! $errors->first('ten_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gia_mua_hh') ? 'has-error' : '' }}">
    <label for="gia_mua_hh" class="col-md-2 control-label">Gia Mua Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="gia_mua_hh" type="text" id="gia_mua_hh" value="{{ old('gia_mua_hh', optional($hangHoa)->gia_mua_hh) }}" minlength="1" placeholder="Enter gia mua hh here...">
        {!! $errors->first('gia_mua_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gia_ban_hh') ? 'has-error' : '' }}">
    <label for="gia_ban_hh" class="col-md-2 control-label">Gia Ban Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="gia_ban_hh" type="text" id="gia_ban_hh" value="{{ old('gia_ban_hh', optional($hangHoa)->gia_ban_hh) }}" minlength="1" placeholder="Enter gia ban hh here...">
        {!! $errors->first('gia_ban_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('soluong_hh') ? 'has-error' : '' }}">
    <label for="soluong_hh" class="col-md-2 control-label">Soluong Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="soluong_hh" type="text" id="soluong_hh" value="{{ old('soluong_hh', optional($hangHoa)->soluong_hh) }}" minlength="1" placeholder="Enter soluong hh here...">
        {!! $errors->first('soluong_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

