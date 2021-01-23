<div class="card">
    <div class="card-body">
            <div class="form-group mb-4">
                @if (isset($model))
                    <img src="{{asset('storage/'.$model->img)}}" class="img-thumbnail" width="200" height="200">
                @endif
                <label class="col-md-12 p-0">Image</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::file('img',null ,$errors->has('img') ? ['class'=>'form-control is-invalid secondary p-0 border-0', 'placeholder' => 'Nama'] : ['class'=>'form-control', 'placeholder' => 'Image', 'required']) !!}
                    {!! $errors->first('img', '<p class="help-block invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Link</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::text('link',isset($model) ? $model->link: null ,$errors->has('link') ? ['class'=>'form-control is-invalid secondary p-0 border-0', 'placeholder' => 'Nama'] : ['class'=>'form-control p-0 border-0', 'placeholder' => 'Link', 'required']) !!}
                    {!! $errors->first('link', '<p class="help-block invalid-feedback">:message</p>') !!}
                    </div>
            </div>
            <div class="form-group mb-4">
                <div class="col-sm-12">
                    <button class="btn btn-success">Update Profile</button>
                </div>
            </div>
    </div>
</div>