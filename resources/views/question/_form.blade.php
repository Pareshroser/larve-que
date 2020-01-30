@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" value="{{old('title', $question->title)}}"
        class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" id="title" placeholder="">
    @if($errors->has('title'))
    <div class="invalid-feedback">
        <strong>{{$errors->first('title')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" name="body" id="body" rows="3">
    {{old('body', $question->body)}}</textarea>
    @if($errors->has('body'))
    <div class="invalid-feedback">
        <strong>{{$errors->first('body')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>