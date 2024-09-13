<x-app-layout>
    <a href="{{ route('posts.index', $post) }}">All posts</a>
        <br><br>

        <h2>Title:{{ $post->title }}</h2>
        <p>Content:{{ $post->content }}</p>


        <h1> create comment <h1>
            <form action="{{ route('posts.addcomment', $post) }}" method="post">
                @csrf
                <label for="content">Content</label>
                <textarea name="contemt" id="content"></textarea>

                <input tyle="submit" value="Create">
</form>

</x-app-layout>