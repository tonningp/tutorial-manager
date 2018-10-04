@extends('layout')
@section('content')
    @foreach($posts as $post)
        @component('panels.large-card')
            <p class="w3-xlarge">{{ $post['title'] }}</p>
            <div class="w3-code notranslate">
              <pre>
                <code class="{{ $post['type'] }}">
                   {{ $post['body'] }}
                </code>
              </pre>
              <div style="display:none;" id="{{ $post['id'] }}"> 
                {{ $post['body'] }}
              </div>
            </div>
            <button onclick="copy_to_clipboard('{{ $post['id'] }}')">Copy text</button>
        @endcomponent
    @endforeach
@endsection