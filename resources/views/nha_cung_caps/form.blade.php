
<div class="form-group {{ $errors->has('id_ncc') ? 'has-error' : '' }}">
    <label for="id_ncc" class="col-md-2 control-label">Id Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="id_ncc" type="text" id="id_ncc" value="{{ old('id_ncc', optional($nhaCungCap)->id_ncc) }}" minlength="1" required="true" placeholder="Enter id ncc here...">
        {!! $errors->first('id_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ten_ncc') ? 'has-error' : '' }}">
    <label for="ten_ncc" class="col-md-2 control-label">Ten Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_ncc" type="text" id="ten_ncc" value="{{ old('ten_ncc', optional($nhaCungCap)->ten_ncc) }}" minlength="1" placeholder="Enter ten ncc here...">
        {!! $errors->first('ten_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_ncc') ? 'has-error' : '' }}">
    <label for="phone_ncc" class="col-md-2 control-label">Phone Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="phone_ncc" type="text" id="phone_ncc" value="{{ old('phone_ncc', optional($nhaCungCap)->phone_ncc) }}" minlength="1" placeholder="Enter phone ncc here...">
        {!! $errors->first('phone_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email_ncc') ? 'has-error' : '' }}">
    <label for="email_ncc" class="col-md-2 control-label">Email Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="email_ncc" type="email" id="email_ncc" value="{{ old('email_ncc', optional($nhaCungCap)->email_ncc) }}" placeholder="Enter email ncc here...">
        {!! $errors->first('email_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_ncc') ? 'has-error' : '' }}">
    <label for="address_ncc" class="col-md-2 control-label">Address Ncc</label>
    <div class="col-md-10">
        <input class="form-control" name="address_ncc" type="text" id="address_ncc" value="{{ old('address_ncc', optional($nhaCungCap)->address_ncc) }}" minlength="1" placeholder="Enter address ncc here...">
        {!! $errors->first('address_ncc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

