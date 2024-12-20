    <div class="col-lg-4 col-md-6">
        <div class="blog-box">
            <div class="image img100 image-anime">
                <img src="{{image($blog->image)}}" alt="">
            </div>
            <div class="tags">
                <a href="{{route('blog.detail', $blog->getSlug())}}">
                    <img src="/frontend/assets/img/icons/author.png" alt=""> Admin</a>
                <a href="{{route('blog.detail', $blog->getSlug())}}">
                    <img src="/frontend/assets/img/icons/date.png" alt=""> {{$blog->created_at->format('d.m.Y')}}</a>
            </div>
            <div class="heading1">
                <h5>
                    <a href="{{route('blog.detail', $blog->getSlug())}}">
                        {{$blog->getName()}}
                    </a>
                </h5>
                <div class="space16"></div>
                <p> {!! \Illuminate\Support\Str::limit(strip_tags($blog->getContent()), 80) !!}</p>
                <div class="space16"></div>
                <a href="{{route('blog.detail', $blog->getSlug())}}" class="learn">{{__('Daha Fazla')}} <span>
                        <i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>

