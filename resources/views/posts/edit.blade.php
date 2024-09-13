<x-app-layout>
<h1>Edit posts</h1>
<form action="{{ route('posts.update', $post) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title:<label>
    <input type="text" id="title" name="title" value="{{ $post->title }}">
    <br>
    <label for="content">Content:<label>
    <input type="text" id="content" name="content" value="{{ $post->content }}">
    <br>
    <input type="submit" value="Update">
    <br>
    <a href="{{ route('posts.index', $post) }}">Cancel</a>
</form>
</x-app-layout>