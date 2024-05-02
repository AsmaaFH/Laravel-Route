<h2>
{{-- @foreach ($posts as $post) --}}
    <p>{{ $posts->title }}</p>
    <p>{{ $posts->desc }}</p>
    <p>{{ $posts->email }}</p>
    {{-- @endforeach --}}
</h2>