
<div class="form-group {{ $errors->has('id_hh') ? 'has-error' : '' }}">
    <label for="id_hh" class="col-md-2 control-label">Id Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_hh" type="text" id="id_hh" value="{{ old('id_hh', optional($chiTietDonXuat)->id_hh) }}" minlength="1" required="true" placeholder="Enter id hh here...">
        {!! $errors->first('id_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_xh') ? 'has-error' : '' }}">
    <label for="id_xh" class="col-md-2 control-label">Id Xh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_xh" type="text" id="id_xh" value="{{ old('id_xh', optional($chiTietDonXuat)->id_xh) }}" minlength="1" placeholder="Enter id xh here...">
        {!! $errors->first('id_xh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('soluong_ctdx') ? 'has-error' : '' }}">
    <label for="soluong_ctdx" class="col-md-2 control-label">Soluong Ctdx</label>
    <div class="col-md-10">
        <input class="form-control" name="soluong_ctdx" type="text" id="soluong_ctdx" value="{{ old('soluong_ctdx', optional($chiTietDonXuat)->soluong_ctdx) }}" minlength="1" placeholder="Enter soluong ctdx here...">
        {!! $errors->first('soluong_ctdx', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('dongia_ctdx') ? 'has-error' : '' }}">
    <label for="dongia_ctdx" class="col-md-2 control-label">Dongia Ctdx</label>
    <div class="col-md-10">
        <input class="form-control" name="dongia_ctdx" type="text" id="dongia_ctdx" value="{{ old('dongia_ctdx', optional($chiTietDonXuat)->dongia_ctdx) }}" minlength="1" placeholder="Enter dongia ctdx here...">
        {!! $errors->first('dongia_ctdx', '<p class="help-block">:message</p>') !!}
    </div>
</div>

