@component('profile.activities.activity')
    @slot('heading')
        @slot('title')
            <time class="cbp_tmtime"><span>{{ $activity->created_at->toDateString()}}</span> <span>{{ $activity->created_at->toTimeString()}}</span></time>
            <div class="cbp_tmicon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
        @endslot
        <a href="{{ $activity->subject->favorited->path() }}">
            {{ $profileUser->name }} liked a reply in a discussion.
        </a>
    @endslot
    @slot('body')
        {{ $activity->subject->favorited->body }}
    @endslot
@endcomponent