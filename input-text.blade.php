<input aria-describedby="help-{{$field}}" id='{{$field}}' type="text" class="form-control {{$class??''}} @error($field) is-invalid @enderror" name="{{$field}}" value="{{ old($field,$default??null) }}" {{$attr??'autocomplete=off autofocus'}}>
<small id="help-{{$field}}" class="form-text text-muted">{{$help??''}}</small>
@error($field)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror