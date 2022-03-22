@extends('statamic::layout')
@section('title', __('Gitamic'))
@section('wrapper_class', 'max-w-full')

@section('content')
    <header>
        <div class="flex items-center">
            <h1 class="flex-1 flex items-center">
{{--                @include('statamic-mailcoach::partials.mailcoachIcon', ['width' => '8'])--}}
                Appart Store Module
            </h1>
        </div>
    </header>
    <section>
        <appart-store-categories></appart-store-categories>
    </section>
@endsection
