@extends('layout')
@section('pageTitle', 'Page Title Example Form')
@section('title', 'Title Example Form')
@section('content')
<div>
    <h1>Test Form</h1>
    <form action="<?= route('form.save') ?>" method="POST">
        <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
        <div>
            <label>prop1:</label>
            <input name="prop1">
        </div>
        <hr>
        <div>
            <button type="submit">save</button>
            <button type="reset">reset</button>
        </div>
    </form>
</div>
@endsection