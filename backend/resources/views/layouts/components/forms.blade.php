<div class="form-group form-floating mb-3">
@switch($fld['type'])
    @case('dropdown')
        @php
        $selected = old($fld['accessor']) ?? $employee[$fld['accessor']] ?? '';
        @endphp
        <select class="form-control" name="{{$fld['accessor']}}">
            @if(count($fld['options']) > 1)
            <option value="">{{$fld['place_holder']}}</option>
            @endif
            @foreach($fld['options'] as $val => $opt)
            <option value="{{$val}}" {{$selected === $val ? "selected":''}}>{{$opt}}</option>
            @endforeach
        </select>
        <label for="floating{{$fld['type']}}">{{$fld['label']}}</label>
        @if ($errors->has($fld['accessor']))
        <span class="text-danger text-left">{{ $errors->first($fld['accessor']) }}</span>
        @endif
        @break
    @default
        <input type="{{$fld['type']}}" class="form-control" name="{{$fld['accessor']}}" 
            value="{{ old($fld['accessor']) ?? $employee[$fld['accessor']] ?? '' }}" placeholder="{{$fld['place_holder']}}" required="{{$fld['required']}}">
        <label for="floating{{$fld['type']}}">{{$fld['label']}}</label>
        @if ($errors->has($fld['accessor']))
        <span class="text-danger text-left">{{ $errors->first($fld['accessor']) }}</span>
        @endif
@endswitch
</div>