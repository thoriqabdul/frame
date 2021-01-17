<div class="card">
    <div class="card-body">
        <form class="form-horizontal form-material">
            @if (Auth::user()->role_id == 1)
            <div class="form-group mb-4">
                <label class="col-sm-12 p-0">Pilih Publisher</label>
                {!! Form::select('publish_id',$data['publish'],isset($model) ? $model->publish_id : null ,$errors->has('publish_id') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control p-0 border-0', 'placeholder' => 'pilih satu', 'required']) !!}
                {!! $errors->first('publish_id', '<p class="help-block invalid-feedback">:message</p>') !!}
            </div> 
            @else
            <input type="hidden" name="publish_id" value="{{Auth::user()->id}}">
            @endif
            
            <div class="form-group mb-4">
                <label class="col-md-12 p-0">Nama</label>
                <div class="col-md-12 border-bottom p-0">
                    {!! Form::text('name',isset($model) ? $model->name: null ,$errors->has('name') ? ['class'=>'form-control is-invalid secondary p-0 border-0', 'placeholder' => 'Nama'] : ['class'=>'form-control p-0 border-0', 'placeholder' => 'Nama', 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block invalid-feedback">:message</p>') !!}
                    </div>
            </div>
            <div class="form-group mb-4">
                <div class="col-sm-12">
                    <button class="btn btn-success">Update Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>