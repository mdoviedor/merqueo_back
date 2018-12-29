<div class="form-group{{ $errors->has("$id") ? ' has-error' : '' }}">
    <label for="{{ $id  }}" class="col-sm-2 control-label">{{ $name }}</label>
    <div class="col-sm-10">
        <textarea data-provide="markdown" style="height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                  class="textarea form-control " name="{{ $id }}" id="{{ $id }}" placeholder="{{ $placeholder }}" rows="6">
            {{ old($id) }}
        </textarea>

        @if ($errors->has("$id"))
            <span class="help-block">
                <strong>{{ $errors->first("$id") }}</strong>
            </span>
        @endif
    </div>
</div>