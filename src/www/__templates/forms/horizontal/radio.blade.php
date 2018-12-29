<div class="form-group{{ $errors->has("$id") ? ' has-error' : '' }}">
    <label for="{{ $id  }}" class="col-sm-2 control-label">{{ $name }}</label>
    <div class="col-sm-10">
        @foreach($values as $value)
            <div class="radio">
                <label>
                    <input type="radio" name="{{ $id }}" id="{{ $id }}[]" value="{{ $value }}"
                           @if(old($id)) checked @endif >
                    {{ $value }}
                </label>
            </div>
        @endforeach

        @if ($errors->has("$id"))
            <span class="help-block">
                <strong>{{ $errors->first("$id") }}</strong>
            </span>
        @endif
    </div>
</div>


