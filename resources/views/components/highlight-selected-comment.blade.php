@props(['comment', 'selected'])
<ul class="Mr508" style="margin-bottom: 16px; padding:0; border: 0;">
    <div role="button" class="ZyFrc" tabindex="0" style="
    display: flex;
    flex-direction: column;
    align-items: stretch;
    border: 0 solid #000;
    flex-shrink: 0;
    margin: 0;
    padding: 0;
    position: relative;
    font: inherit;
    vertical-align: baseline;
    ">
        <li class="gElp9 rUo9f " role="menuitem" style="
        list-style: none;
        overflow: visible;
        padding: 12px 0;
        width: auto;
        position: relative;
        word-wrap: break-word;
        ">
            <div class="P9YgZ" style="align-items: flex-start;display: flex;flex-direction: row;justify-content: space-between;border: 0 solid #000;flex-shrink: 0;margin: 0;padding: 0;position: relative;font: inherit;vertical-align: baseline;">
                <div class="C7I1f" style="display:flex;flex-direction: row;width: calc(100% - 28px);">
                    <div class="Jv7Aj mArmR   pZp3x">
                        <div class="RR-M-  TKzGu  " aria-disabled="true" role="button" tabindex="-1" style="margin: 0 18px 0 0;">
                            <canvas class="CfWVH" height="84" width="84" style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                            <a class="comment-profile-link" href="/u/{{$comment->user->id}}/" tabindex="0" style="width: 32px; height: 32px; display: block;">
                                <img alt="tydaunebava's profile picture" class="comment-profile-picture" draggable="false" src="{{$comment->user->profile_image}}" style="width: 32px; height: 32px;border-radius: 50%;">
                            </a>
                        </div>
                    </div>
                    <div class="comment-profile-name" style="display: inline-block;">
                        <h3 style="display: inline-flex;margin: 0;">
                            <a class="sqdOP yWX7d     _8A5w5   ZIAjV " href="/u/{{$comment->user->id}}/" tabindex="0" style="color: #262626;text-decoration: none;font-size: 14px;font-weight: 600;">{{$comment->user->first_name}} {{Illuminate\Support\Str::limit($comment->user->middle_name,1,'.')}} {{$comment->user->prefix}} {{$comment->user->last_name}}</a>
                            <div class="qF0y9          Igw0E     IwRSH      eGOV_ _4EzTm ItkAi" style="margin-right: 4px;justify-content: flex-start;align-items: stretch;">
                                <span class="Jv7Aj mArmR MqpiF  " style="display: inline;position: relative">
                                </span>
                            </div>
                        </h3>
                        <span class="">{{$comment->body}}</span>
                        <div class="qF0y9 Igw0E IwRSH eGOV_ _4EzTm pjcA_ aGBdT" style="margin-top: 10px;">
                            <div class="_7UhW9  PIoXz MMzan   _0PwGv uL8Hv " style="display: block;font-weight: 400;font-size: 12px;
    line-height: 16px;
    margin: -2px 0 -3px;
    font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;">
                                <a class="gU-I7" style="text-decoration: none" href="/highlights/h/{{$selected->slug}}/c/{{$comment->id}}/" tabindex="0">
                                    <time class="FH9sR Nzb55" style="margin-right: 12px;color: #8e8e8e;" datetime="{{\Carbon\Carbon::parse($comment->created_at)->format('Y-m-d\TH:i:s.U\Z')}}" title="{{\Carbon\Carbon::parse($comment->created_at)->format('M d, Y')}}">
                                        {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans(\Carbon\Carbon::now(),\Carbon\CarbonInterface::DIFF_ABSOLUTE)}}
                                    </time>
                                </a>
                                <button class="highlight-svg-button" style="padding:0;margin-right: 12px;font-weight: 600;color: #8e8e8e;">{{$comment->commentlikes->count()}} likes</button>
                                <button class="highlight-svg-button comment-svg-options" type="button">
                                    <div class="QBdPU ">
                                        <div
                                            class="            qF0y9          Igw0E   rBNOH          YBx95       _4EzTm                                                                                                              "
                                            style="height: 24px; width: 24px;">
                                            <svg aria-label="Comment Options" class="_8-yf5 " color="#8e8e8e"
                                                 fill="#8e8e8e" height="24" role="img" viewBox="0 0 24 24"
                                                 width="24">
                                                <circle cx="12" cy="12" r="1.5"></circle>
                                                <circle cx="6.5" cy="12" r="1.5"></circle>
                                                <circle cx="17.5" cy="12" r="1.5"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="jdtwu">
                    <div class="_2ic5v">
                        <button class="highlight-svg-button" type="button">
                            <div class="QBdPU B58H7">
                                <svg aria-label="Like" class="like-comment-hidden" color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12">
                                    <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                </svg>
                            </div>
                            <div class="QBdPU rrUvL">
                                <span class="">
                                    <svg aria-label="Like" class="like-comment-real" color="#262626" fill="#262626" height="12" role="img" viewBox="0 0 48 48" width="12">
                                        <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                    </div>
                </span>
            </div>
        </li>
    </div>
</ul>
