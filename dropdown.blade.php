<select id="{{$field}}" name="{{$field}}" class="form-control @error($field) is-invalid @enderror">
    <option value="">--- {{__('Pilih')}} ---</option>
    @foreach ($data as $key => $value)
        <option value="{{ $key }}" {{ old($field, $default??null) == $key ? "selected" : ""}}>{{ $value }}</option>
    @endforeach
</select>
@error($field)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror