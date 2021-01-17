<div class="card">
    <div class="card-body">
        <form class="form-horizontal form-material">
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Nama</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::text('name',isset($model) ? $model->name: null ,$errors->has('name') ? ['class'=>'form-control is-invalid secondary p-0 border-0', 'placeholder' => 'Nama'] : ['class'=>'form-control p-0 border-0', 'placeholder' => 'Nama', 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block invalid-feedback">:message</p>') !!}
                    </div>
            </div>
            <div class="form-group mb-4">
                <label for="example-email" class="col-md-12 p-0">Email</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::email('email',isset($model) ? $model->email: null ,$errors->has('email') ? ['class'=>'form-control p-0 border-0 is-invalid mail', 'placeholder' => 'Email'] : ['class'=>'form-control p-0 border-0', 'placeholder' => 'Email']) !!}
                    {!! Form::email('email_old',isset($model) ? $model->email: null ,['class'=>'form-control d-none']) !!}
                    {!! $errors->first('email', '<p class="help-block invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Password</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::password('password',$errors->has('password') ? ['class'=>'form-control p-0 border-0 is-invalid'] : ['class'=>'form-control p-0 border-0']) !!}
                    {!! $errors->first('password', '<p class="help-block invalid-feedback">:message</p>') !!}
                </div>
            </div>

            <input type="hidden" name="role_id" value="2" id="">
            {{-- <div class="form-group mb-4">
                <label class="col-md-12 p-0">Phone No</label>
                <div class="col-md-12 border-bottom p-0">
                    <input type="text" placeholder="123 456 7890"
                        class="form-control p-0 border-0">
                </div>
            </div>
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Message</label>
                <div class="col-md-12 border-bottom p-0">
                    <textarea rows="5" class="form-control p-0 border-0"></textarea>
                </div>
            </div>--}}
            {{-- <div class="form-group mb-4">
                <label class="col-sm-12">Select Country</label>
                <div class="col-sm-12 border-bottom">
                    <select class="form-control p-0 border-0">
                        <option>London</option>
                        <option>India</option>
                        <option>Usa</option>
                        <option>Canada</option>
                        <option>Thailand</option>
                    </select>
                </div>
            </div>  --}}
            <div class="form-group mb-4">
                <div class="col-sm-12">
                    <button class="btn btn-success">Update Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>