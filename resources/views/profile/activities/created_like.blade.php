@component('profile.activities.activity')
    @slot('heading')
        @slot('title')
            <time class="cbp_tmtime"><span>{{ $activity->created_at->toDateString()}}</span> <span>{{ $activity->created_at->toTimeString()}}</span></time>
            <div class="cbp_tmicon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
        @endslot
        <a href="{{ $activity->subject->liked->path() }}">
            {{ $profileUser->name }} liked a comment in a discussion about a challenge.
        </a>
    @endslot
    @slot('body')
        {{ $activity->subject->liked->body }}
    @endslot
@endcomponent