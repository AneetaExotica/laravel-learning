<div class="row">
    <div class="col-lg-8">
        <div class="items">
            <div class="row">
                @foreach($listposts as $posts)
                    <div class="col-lg-12">
                        <div class="item last-item">
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $posts->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-7">
                                    <div class="right-content">
                                        <h4>{{ $posts->name }}</h4>
                                        <span>{{ $posts->categoery }}</span>
                                        <div class="main-button">
                                            <a href="about.html">Explore More</a>
                                        </div>
                                        {!! implode(' ', array_slice(explode(' ', strip_tags($posts->description)), 0, 5)) . (str_word_count($posts->description) > 10 ? '...' : '') !!}
                                        <ul class="info">
                                            <li><i class="fa fa-user"></i>{{ $posts->mil_people }}</li>
                                            <li><i class="fa fa-globe"></i>{{ $posts->kilometers }}</li>
                                            <li><i class="fa fa-home"></i>${{ $posts->price }}</li>
                                        </ul>
                                        <div class="text-button">
                                            <a href="about.html">Need Directions? <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="col-lg-12">
                <ul class="page-numbers">
                    <!-- Previous Page Link -->
                    <li>
                        @if ($listposts->onFirstPage())
                            <!-- Disable the previous link on the first page -->
                            <span><i class="fa fa-arrow-left"></i></span>
                        @else
                            <a href="{{ $listposts->previousPageUrl() }}"><i class="fa fa-arrow-left"></i></a>
                        @endif
                    </li>

                    <!-- Page Numbers -->
                    @foreach(range(1, $listposts->lastPage()) as $page)
                        <li class="{{ $page == $listposts->currentPage() ? 'active' : '' }}">
                            <a href="{{ $listposts->url($page) }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Next Page Link -->
                    <li>
                        @if ($listposts->hasMorePages())
                            <a href="{{ $listposts->nextPageUrl() }}"><i class="fa fa-arrow-right"></i></a>
                        @else
                            <!-- Disable the next link on the last page -->
                            <span><i class="fa fa-arrow-right"></i></span>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
