

<div class="inputArea">
    <label for="{{$name}}">
       {{$label ?? ''}}
    </label>
    <input
    type= "checkbox"
    id="{{$name}}"
    {{empty($required) ? '' : 'required'}}
    name="{{$name}}"
    value = "1"
    {{$checked ? 'checked' : ''}}
     />
</div>
