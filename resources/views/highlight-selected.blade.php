@extends('layout')
@section('content')
    <body id="highlights transparent">
    <section id="highlights-section" class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row g-3 row-cols-3">
                    @foreach($highlights as $highlight)
                        <div class="col">
                            <a href="/highlights/h/{{$highlight->slug}}">
                                <img class="highlight-block" src="{{$highlight->media}}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-8 offset-2">
                <div class="row">
                    <div class="col p-0">
                        <img class="highlight-block-selected" src="{{$highlight->media}}">
                    </div>
                    <div class="col" style="background-color: #fafafa;">
                        {{--Header section--}}
                        <div class="row" style="max-height: 60px; line-height: 60px;border-bottom: 1px solid #efefef;">
                            <div class="col-10" style="max-height: 60px;">
                                <img class="highlight-selected-profile-image" src="{{$highlight->user->profile_image}}">
                                <a style="vertical-align: super;margin-left: 10px;">{{$highlight->user->first_name}} {{Illuminate\Support\Str::limit($highlight->user->middle_name,1,'.')}} {{$highlight->user->prefix}} {{$highlight->user->last_name}}</a>
                                <span style="vertical-align: super;margin: 0 5px 0 5px;">•</span>
                                <button style="color:#0095f6;border: 0;appearance: none;background: 0 0;cursor: pointer;text-decoration:none;font-size: 14px;line-height: 18px;vertical-align: super;" type="button">Follow</button>
                            </div>
                            <div class="col-2 p-0" style="max-height: 60px;"></div>
                        </div>
                        {{--Comments section--}}
                        <div class="row" style="max-height: 375px">
                            <div class="col" style="max-height: 375px"></div>
                        </div>
{{--                    {{--Likes and other svg buttons--}}
                        <div class="row" style="max-height: 55px;">
                            <div class="col" style="max-height: 55px;display: inline-flex;">
                                <span class="fr66n">
                                    <button class="wpO6b  " type="button">
                                        <div class="QBdPU B58H7">
                                            <svg aria-label="Like" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="QBdPU rrUvL">
                                            <span class="">
                                                <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                    <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                </span>
                                <span class="_15y0l">
                                    <button class="wpO6b  " type="button">
                                        <div class="QBdPU B58H7">
                                            <svg aria-label="Comment" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="QBdPU rrUvL">
                                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </span>
                                <span class="_5e4p">
                                    <button class="wpO6b  " type="button">
                                        <div class="QBdPU B58H7">
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                            </svg>
                                        </div>
                                        <div class="QBdPU rrUvL">
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </span>
                                <span class="wmtNn">
                                    <div>
                                        <div aria-disabled="false" role="button" tabindex="0">
                                            <button class="wpO6b  " type="button">
                                                <div class="QBdPU B58H7">
                                                    <svg aria-label="Save" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                                    </svg>
                                                </div>
                                                <div class="QBdPU rrUvL">
                                                    <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
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
                        <div class="row" style="max-height: 20px;margin-bottom: 8px;">
                            <div class="col" style="max-height: 20px">
                                <span style="padding-left:15px;vertical-align: baseline;color: #262626;font-size: 15px;font-weight: 600;" role="button" tabindex="0"><span>{{$highlight->likes_amount}}</span> likes</span>
                            </div>
                        </div>
                        {{--Date section--}}
                        <div class="row" style="max-height: 20px">
                            <div class="col" style="max-height: 20px">
                                <a style="padding-left:15px;text-transform: uppercase;color: #8e8e8e;text-decoration: none;vertical-align:baseline" href="/p/CTsF_QGDUOt/" tabindex="0"><time class="_1o9PC Nzb55" datetime="2021-09-11T17:01:55.000Z" title="Sep 11, 2021">{{\Carbon\Carbon::parse($highlight->publish_date)->format('F d')}}</time></a>
                            </div>
                        </div>
                        {{--Emoji and comment form section--}}
                        <div class="row" style="max-height: 70px">
                            <div class="col" style="max-height:70px;padding-left:16px;padding-right:16px;bottom: 0; position: relative">
                                <form style="min-height: 55px;max-height: 55px;display: inline-flex;" method="POST">
                                    <button style="padding-right: 15px;border: 0;background: 0 0;" type="button">
                                        <div class="QBdPU ">
                                            <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                                <path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z"></path>
                                                <path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <textarea aria-label="Add a comment…" placeholder="Add a comment…" style="width: 250px;margin-top: 16px;background: 0 0;border: 0;color: #262626;flex-grow: 1;font-size: inherit;height: 18px;max-height: 55px;outline: 0;padding: 0;resize: none;" autocomplete="off" autocorrect="off"></textarea>
                                    <button style="width:30px;background: 0 0;border: 0;color: #0095f6;display: inline;padding: 0;position: relative;" disabled="" type="submit">Post</button>
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
