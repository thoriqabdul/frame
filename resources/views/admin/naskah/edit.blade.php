{!! Form::open(['route' => ["nas.update",$model->id], 'method' => 'put','autocomplete'=>"false"]) !!}
<div class="form-group mb-4">
    <label class="col-md-12 p-0">Message</label>
    <div class="col-md-12 border-bottom p-0">
        <textarea rows="5" class="form-control" name="comment"></textarea>
    </div>
</div>
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" required>
          <label class="form-check-label" for="gridRadios1">
            Terima
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="2" required>
          <label class="form-check-label" for="gridRadios2">
            Tolak
          </label>
        </div>
      </div>
    </div>
{!! Form::close() !!}