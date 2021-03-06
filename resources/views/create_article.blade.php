@extends('layout')
@section('pageContents')
    <h1 class="heading has-text-weigh-bold is-size-3">New Article</h1>
<form method="POST" action="/articles">
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input" type="text" name="title" id="title"/>
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpts">Excerpts</label>
        <div class="control">
            <textarea class="textarea" type="textarea" name="excerpts" id="excerpts"></textarea>
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpts">Body</label>
        <div class="control">
            <textarea class="textarea" type="textarea" name="body" id="body"></textarea>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
