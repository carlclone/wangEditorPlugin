<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <textarea class="form-control" id="{{$id}}" name="{{$name}}" style="height:400px;" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>

        @include('admin::form.help-block')

    </div>
</div>
