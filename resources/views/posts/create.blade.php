<x-app-layout>
<h1>create posts</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="title">Title:<label>
    <input type="text" id="title" name="title">
    <br>
    <label for="content">Content:<label>
    <input type="text" id="content" name="content">
    <br>
    <input type="submit" value="Create">
</form>
</x-app-layout>