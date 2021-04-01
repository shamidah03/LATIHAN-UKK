<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
   <label class="col-md-4 control-label">Username</label>

    <div class="col-md-6">
       <input type="text" class="form-control" name="username" value="{{ old('username') }}">

       @if ($errors->has('username'))
          <span class="help-block">
             <strong>{{ $errors->first('username') }}</strong>
          </span>
       @endif
    </div>
</div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{old('name'}}">
        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{$errors->has('username')?'has-error':''}}">
    <label class="email" class="form-control" name="username" value="{{old('username')}}">
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{$errors->first('username')}}</strong>
        </span>
    @endif
</div>
<div class="form-group{{$errors->has('jabatan)?'has-error' : ''}}">
    <label class="col=md-4 control-label">Jabatan</label>
    <div class="col-md-6">
        <select name="jabatan" class="form-control">
            <option value="ADMIN">ADMIN</option>
            <option value="MEMBER">MEMBER</option>
        </select>
    </div>
</div>
</div>


