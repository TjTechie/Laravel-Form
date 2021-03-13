@extends('layout')
@section('pageContents')
    <h1 class="heading has-text-weigh-bold is-size-3">New Article</h1>
<form method="POST" action="/articles">
    @csrf
    <div class="field" style="text-align: left">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input @error('title')is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}"/>
            @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
            @enderror
        </div>
    </div>
    <div class="field" style="text-align: left">
        <label class="label" for="excerpt">Excerpts</label>
        <div class="control">
            <textarea class="textarea @error('excerpt')is-danger @enderror" type="textarea" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
            @error('excerpt')
            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
            @enderror
        </div>
    </div>
    <div class="field" style="text-align: left">
        <label class="label" for="body">Body</label>
        <div class="control">
            <textarea class="textarea @error('body') is-danger @enderror" type="textarea" name="body" id="body">{{old('body')}}</textarea>
            @error('body')
            <p class="help is-danger">{{$errors->first('body')}}</p>
            @enderror
        </div>
    </div>
    <div class="field" style="text-align: left">
        <label class="label" for="body">Tags</label>
        <div class="control">
            <select name="tags[]" multiple class="is-multiple control">
                @foreach($allTags as $objTag)
                <option value="{{$objTag->id}}">{{$objTag->name}}</option>
                @endforeach
            </select>
            @error('tags')
            <p class="help is-danger">{{$errors->first('tags')}}</p>
            @enderror
        </div>
    </div>
    <div class="field is-grouped" style="text-align: center">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
