
<div class="form-group {{ $errors->has('id_kh') ? 'has-error' : '' }}">
    <label for="id_kh" class="col-md-2 control-label">Id Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="id_kh" type="text" id="id_kh" value="{{ old('id_kh', optional($khachHang)->id_kh) }}" minlength="1" required="true" placeholder="Enter id kh here...">
        {!! $errors->first('id_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_kh') ? 'has-error' : '' }}">
    <label for="ten_kh" class="col-md-2 control-label">Ten Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_kh" type="text" id="ten_kh" value="{{ old('ten_kh', optional($khachHang)->ten_kh) }}" minlength="1" placeholder="Enter ten kh here...">
        {!! $errors->first('ten_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_kh') ? 'has-error' : '' }}">
    <label for="phone_kh" class="col-md-2 control-label">Phone Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="phone_kh" type="text" id="phone_kh" value="{{ old('phone_kh', optional($khachHang)->phone_kh) }}" minlength="1" placeholder="Enter phone kh here...">
        {!! $errors->first('phone_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email_kh') ? 'has-error' : '' }}">
    <label for="email_kh" class="col-md-2 control-label">Email Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="email_kh" type="email" id="email_kh" value="{{ old('email_kh', optional($khachHang)->email_kh) }}" placeholder="Enter email kh here...">
        {!! $errors->first('email_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_kh') ? 'has-error' : '' }}">
    <label for="address_kh" class="col-md-2 control-label">Address Kh</label>
    <div class="col-md-10">
        <input class="form-control" name="address_kh" type="text" id="address_kh" value="{{ old('address_kh', optional($khachHang)->address_kh) }}" minlength="1" placeholder="Enter address kh here...">
        {!! $errors->first('address_kh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

