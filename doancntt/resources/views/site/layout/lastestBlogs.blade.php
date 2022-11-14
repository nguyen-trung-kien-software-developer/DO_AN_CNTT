<ul class="ul_hot_news_1 clearfix">

    @foreach ($lastestBlogs as $blog)
        <li> <a href="{{ route('site.blog.show', [$blog->slug]) }}" class="ing_news_hot"><img
                    data-src="{{ asset("template/site/images/$blog->featured_image") }}"
                    data-alt="{{ $blog->title }}" class="lazy"
                    style="object-fit:cover; object-postion:center; height: 100px;"></a> <a
                href="{{ route('site.blog.show', [$blog->slug]) }}" class="name_news_hot">{{ $blog->title }}</a>
        </li>
    @endforeach

</ul>
