@component('profile.activities.activity')
    @slot('title')
        <time class="cbp_tmtime"><span>{{ $activity->created_at->toDateString()}}</span> <span>{{ $activity->created_at->toTimeString()}}</span></time>
        <div class="cbp_tmicon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
    @endslot
    @slot('heading')
        {{ $profileUser->name }} posted a challenge
        <a href="{{ $activity->subject->path() }}">{{ $activity->subject->title }}</a>
    @endslot
    @slot('body')
        {{ $activity->subject->body }}
    @endslot
@endcomponent