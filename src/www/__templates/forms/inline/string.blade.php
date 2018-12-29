<div class="form-group{{ $errors->has("$id") ? ' has-error' : '' }}">
    <label class="sr-only" for="{{$id}}">{{ $name }}</label>
    <input type="text" class="form-control"  value="{{ old($id) }}"  name="{{ $id }}"  id="{{$id}}" placeholder="{{ $placeholder }}">
    @if ($errors->has("$id"))
        <span class="help-block">
                <strong>{{ $errors->first("$id") }}</strong>
        </span>
    @endif
</div>