
<div class="form-group {{ $errors->has('id_nv') ? 'has-error' : '' }}">
    <label for="id_nv" class="col-md-2 control-label">Id Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="id_nv" type="text" id="id_nv" value="{{ old('id_nv', optional($nhanVien)->id_nv) }}" minlength="1" required="true" placeholder="Enter id nv here...">
        {!! $errors->first('id_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_chucvu') ? 'has-error' : '' }}">
    <label for="id_chucvu" class="col-md-2 control-label">Id Chucvu</label>
    <div class="col-md-10">
        <input class="form-control" name="id_chucvu" type="text" id="id_chucvu" value="{{ old('id_chucvu', optional($nhanVien)->id_chucvu) }}" minlength="1" placeholder="Enter id chucvu here...">
        {!! $errors->first('id_chucvu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_nv') ? 'has-error' : '' }}">
    <label for="phone_nv" class="col-md-2 control-label">Phone Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="phone_nv" type="text" id="phone_nv" value="{{ old('phone_nv', optional($nhanVien)->phone_nv) }}" minlength="1" placeholder="Enter phone nv here...">
        {!! $errors->first('phone_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email_nv') ? 'has-error' : '' }}">
    <label for="email_nv" class="col-md-2 control-label">Email Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="email_nv" type="email" id="email_nv" value="{{ old('email_nv', optional($nhanVien)->email_nv) }}" placeholder="Enter email nv here...">
        {!! $errors->first('email_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_nv') ? 'has-error' : '' }}">
    <label for="address_nv" class="col-md-2 control-label">Address Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="address_nv" type="text" id="address_nv" value="{{ old('address_nv', optional($nhanVien)->address_nv) }}" minlength="1" placeholder="Enter address nv here...">
        {!! $errors->first('address_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('username_nv') ? 'has-error' : '' }}">
    <label for="username_nv" class="col-md-2 control-label">Username Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="username_nv" type="text" id="username_nv" value="{{ old('username_nv', optional($nhanVien)->username_nv) }}" minlength="1" placeholder="Enter username nv here...">
        {!! $errors->first('username_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password_nv') ? 'has-error' : '' }}">
    <label for="password_nv" class="col-md-2 control-label">Password Nv</label>
    <div class="col-md-10">
        <input class="form-control" name="password_nv" type="password" id="password_nv" value="{{ old('password_nv', optional($nhanVien)->password_nv) }}" placeholder="Enter password nv here...">
        {!! $errors->first('password_nv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

