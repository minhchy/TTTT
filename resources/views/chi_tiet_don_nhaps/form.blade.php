
<div class="form-group {{ $errors->has('id_hh') ? 'has-error' : '' }}">
    <label for="id_hh" class="col-md-2 control-label">Id Hh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_hh" type="text" id="id_hh" value="{{ old('id_hh', optional($chiTietDonNhap)->id_hh) }}" minlength="1" required="true" placeholder="Enter id hh here...">
        {!! $errors->first('id_hh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_nh') ? 'has-error' : '' }}">
    <label for="id_nh" class="col-md-2 control-label">Id Nh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_nh" type="text" id="id_nh" value="{{ old('id_nh', optional($chiTietDonNhap)->id_nh) }}" minlength="1" placeholder="Enter id nh here...">
        {!! $errors->first('id_nh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('soluong_ctdn') ? 'has-error' : '' }}">
    <label for="soluong_ctdn" class="col-md-2 control-label">Soluong Ctdn</label>
    <div class="col-md-10">
        <input class="form-control" name="soluong_ctdn" type="text" id="soluong_ctdn" value="{{ old('soluong_ctdn', optional($chiTietDonNhap)->soluong_ctdn) }}" minlength="1" placeholder="Enter soluong ctdn here...">
        {!! $errors->first('soluong_ctdn', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('dongia_ctdn') ? 'has-error' : '' }}">
    <label for="dongia_ctdn" class="col-md-2 control-label">Dongia Ctdn</label>
    <div class="col-md-10">
        <input class="form-control" name="dongia_ctdn" type="text" id="dongia_ctdn" value="{{ old('dongia_ctdn', optional($chiTietDonNhap)->dongia_ctdn) }}" minlength="1" placeholder="Enter dongia ctdn here...">
        {!! $errors->first('dongia_ctdn', '<p class="help-block">:message</p>') !!}
    </div>
</div>

