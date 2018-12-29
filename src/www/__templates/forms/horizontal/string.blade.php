<div class="form-group{{ $errors->has("$id") ? ' has-error' : '' }}">
    <label for="{{ $id  }}" class="col-sm-2 control-label">{{ $name }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{ old($id) }}"  name="{{ $id }}"  id="{{ $id }}" placeholder="{{ $placeholder }}">
        @if ($errors->has("$id"))
            <span class="help-block">
                <strong>{{ $errors->first("$id") }}</strong>
            </span>
        @endif
    </div>
</div>