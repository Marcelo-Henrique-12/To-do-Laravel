

<div class="inputArea">
    <label for="{{$name}}">
       {{$label ?? ''}}
    </label>
    <input
    type="{{empty($type) ? 'text' : $type}}"
    id="{{$name}}"
    name="{{$name}}"
    placeholder=" {{$placeholder ?? ''}}"
    value = "{{$value ?? ''}}"
    {{empty($required) ? '' : 'required'}}
     />
</div>
