@extends('layout')
@section('pageContents')
    <h1 class="heading has-text-weigh-bold is-size-3">New Article</h1>
<form method="POST" action="/articles">
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input @error('title')is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}"/>
            @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
            @enderror
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpts">Excerpts</label>
        <div class="control">
            <textarea class="textarea @error('excerpts')is-danger @enderror" type="textarea" name="excerpts" id="excerpts">{{old('excerpts')}}</textarea>
            @error('excerpts')
            <p class="help is-danger">{{$errors->first('excerpts')}}</p>
            @enderror
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpts">Body</label>
        <div class="control">
            <textarea class="textarea @error('body') is-danger @enderror" type="textarea" name="body" id="body">{{old('body')}}</textarea>
            @error('body')
            <p class="help is-danger">{{$errors->first('body')}}</p>
            @enderror
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
