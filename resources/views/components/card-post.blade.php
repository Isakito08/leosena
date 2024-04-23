@props(['post'])

<article class="article_img">
    <img class="imagen_posts" src="{{ Storage::url($post->image->url) }}" alt="">

    <div class="div_texto_post">
        <h1 class="texto_post">
            <a class="text_post_a" href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
    </div>

    <div class="text_extract">
        {{ $post->extract }}
    </div>

    <div class="tag_container">
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}"class="tag_link ">{{ $tag->name }}</a>
        @endforeach

    </div>
</article>