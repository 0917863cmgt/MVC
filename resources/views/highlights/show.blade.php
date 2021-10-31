@extends('components.layout')
@section('content')
    <body id="highlights-selected transparent">
    <section id="highlights-section" class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row g-3 row-cols-3">
                    @foreach($highlights as $highlight)
                        <div class="col">
                            <a href="/highlights/s/{{$highlight->slug}}">
                                <img class="highlight-block" src="{{$highlight->media}}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-8 offset-2 highlight-selected">
                <div class="highlight-selected-close">
                    <a href="/highlights">
                        <button class="highlight-svg-button" type="button">
                            <div class="close-highlight-svg">
                                <svg aria-label="Close" class="_8-yf5 " color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd" d="M41.8 9.8L27.5 24l14.2 14.2c.6.6.6 1.5 0 2.1l-1.4 1.4c-.6.6-1.5.6-2.1 0L24 27.5 9.8 41.8c-.6.6-1.5.6-2.1 0l-1.4-1.4c-.6-.6-.6-1.5 0-2.1L20.5 24 6.2 9.8c-.6-.6-.6-1.5 0-2.1l1.4-1.4c.6-.6 1.5-.6 2.1 0L24 20.5 38.3 6.2c.6-.6 1.5-.6 2.1 0l1.4 1.4c.6.6.6 1.6 0 2.2z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </button>
                    </a>
                </div>
                <div class="row">
                    <div class="col p-0">
                        <img class="highlight-block-selected" src="{{$selected->media}}">
                    </div>
                    <div class="col highlight-comment-section">
                        {{--Header section--}}
                        <div class="row highlight-selected-header-row">
                            <div class="col-10 highlight-selected-header-container">
                                <img class="highlight-selected-profile-image" src="{{$selected->user->profile_image}}">
                                <a class="highlight-selected-profile-link">{{$selected->user->first_name}} {{Illuminate\Support\Str::limit($selected->user->middle_name,1,'.')}} {{$selected->user->prefix}} {{$selected->user->last_name}}</a>
                                <span class="highlight-selected-profile-span" style="">•</span>
                                <form method="post" action="/highlights/s/{{$selected->slug}}/follow" style="display: inline;">
                                    @csrf
                                    <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" id="follow_id" name="follow_id" value="{{$selected->id}}">
                                    <input type="hidden" id="follower_id" name="follower_id" value="{{auth()->user()->id}}">
                                    <button class="highlight-selected-profile-button" type="submit">Follow</button>
                                </form>
                            </div>
                            <div class="col-2 p-0 highlight-selected-header-options"></div>
                        </div>
                        {{--Comments section--}}
                        <div class="row highlight-selected-comment-section">
                            <div class="col highlight-selected-comment-column">
                                <ul class="highlight-selected-comment-ul">
                                    @foreach($selected->comments as $comment)
                                        @if($hasCommentLikes->where('comment_id', '=', $comment->id)->count() > 0)
                                        <x-highlight-selected-comment :selected="$selected" :comment="$comment"
                                                                      :hasCommentLike="$hasCommentLikes->where('comment_id', '=', $comment->id)->first()->exists()"
                                                                      :commentLike="$hasCommentLikes->where('comment_id', '=', $comment->id)->first()"/>
                                        @else
                                        <x-highlight-selected-comment :selected="$selected" :comment="$comment" :hasCommentLike="false"/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{--                    {{--Likes and other svg buttons--}}
                        <div class="row selected-highlight-buttons-row">
                            <div class="col selected-highlight-buttons-col">
                                <span>
                                     @if($hasLike == false)
                                    <form class="like-highlight-form" method="POST" action="/highlights/s/{{$selected->slug}}/store-like">
                                    @else
                                    <form class="like-highlight-form" method="POST" action="/highlights/s/{{$selected->slug}}/destroy-like/{{$like->id}}">
                                    @endif
                                        @csrf
                                        <input type="hidden" name="highlight_id" id="highlight_id" value="{{$selected->id}}">
                                        <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                                        <button class="highlight-svg-button" type="submit">
                                        <div class="like-highlight-hidden">
                                            <svg aria-label="Like" class="like-highlight-svg" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="like-highlight-real">
                                            @if($hasLike)
                                                <svg aria-label="Like" class="like-highlight-svg" color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                    <path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                                </svg>
                                            @else
                                                <svg aria-label="Like" class="like-highlight-svg" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                    <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                                </svg>
                                            @endif

                                        </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                    </button>
                                    </form>
                                </span>
                                <span>
                                    <button class="highlight-svg-button" type="button">
                                        <div class="comment-highlight-hidden">
                                            <svg aria-label="Comment" class="comment-highlight-svg" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="comment-highlight-real">
                                            <svg aria-label="Comment" class="comment-highlight-svg" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </span>
                                <span>
                                    <button class="highlight-svg-button" type="button">
                                        <div class="share-highlight-hidden">
                                            <svg aria-label="Share Post" class="share-highlight-svg" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                            </svg>
                                        </div>
                                        <div class="share-highlight-real">
                                            <svg aria-label="Share Post" class="share-highlight-svg" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </span>
                                <span class="highlight-selected-svg-between">
                                    <div>
                                        <div aria-disabled="false" role="button" tabindex="0">
                                            <button class="highlight-svg-button" type="button">
                                                <div class="save-highlight-hidden">
                                                    <svg aria-label="Save" class="save-highlight-svg" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                                    </svg>
                                                </div>
                                                <div class="save-highlight-real">
                                                    <svg aria-label="Save" class="save-highlight-svg" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        {{--Likes amount section--}}
                        <div class="row likes-amount-section">
                            <div class="col likes-amount-column">
                                <span class="likes-amount" role="button" tabindex="0"><span>{{$selected->likes->count()}}</span> likes</span>
                            </div>
                        </div>
                        {{--Date section--}}
                        <div class="row date-section" >
                            <div class="col date-section-column">
                                <a class="date-section-link" href="/u/{{$selected->user->id}}/" tabindex="0">
                                    <time class="date-section-time" datetime="{{\Carbon\Carbon::parse($selected->publish_date)->format('Y-m-d\TH:i:s.U\Z')}}" title="{{\Carbon\Carbon::parse($selected->publish_date)->format('M d, Y')}}">{{\Carbon\Carbon::parse($selected->publish_date)->format('F d')}}</time>
                                </a>
                            </div>
                        </div>
                        {{--Emoji and comment form section--}}
                        <div class="row comment-form-row">
                            <div class="col comment-form-column">
                                <form class="comment-form" method="POST" action="/highlights/s/{{$selected->slug}}/store-comments">
                                    @csrf
                                    <button class="emoji-button" type="button">
                                        <div>
                                            <svg aria-label="Emoji" class="emoji-logo" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z"></path>
                                                <path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="highlight_id" id="highlight_id" value="{{$selected->id}}">
                                    <textarea name="body" aria-label="Add a comment…" placeholder="Add a comment…" class="comment-inputfield" autocomplete="off" autocorrect="off"></textarea>
                                    <button class="comment-post-button" type="submit">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
