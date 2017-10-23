@extends('layouts.app')
@section('title')
    Challenges
@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9 col-md-push-3 primary">
            

                @foreach($challenges as $challenge)
                    
                    <div class="panel-heading">
                      <a href="{{$challenge->path()}}">
                          <img class=" mr-1" style="width: 100px; height: 100px; float:left; border-radius: 50%; top: 7px; left: -30px;" src="{{ Storage::url( $challenge->maker->avatar ) }}" alt=""/>
                          <h3>{{$challenge->title}}</h3></a><h3 class="pull-right">{{$challenge->replies_count}}</h3>
                       <a href="" class=" btn btn-xs btn-primary">{{ $challenge->challengechannel->name}}</a>
                       <a href="" class=" btn btn-xs btn-primary">{{ $challenge->difficulty->name}}</a>
                      posted by:
                      <a href="{{url('/@' . $challenge->maker->name)}}">{{$challenge->maker->name}}</a><br>{{$challenge->created_at->diffForHumans()}}
                      
                    </div>
                    <hr>
                    <div style="margin-bottom: 50px;">
                        
                    </div>
                @endforeach
             
            
        </div>
        <div class="col-md-3 col-md-pull-9">

            <aside class="forum-sidebar menu column is-3">
                @if (auth()->check())
                    <a href="{{url('/challenges/create')}}"><button class="btnn mb-2">START A CHALLENGE</button></a>
                @else
                    <a href="{{route('register')}}"><button class="btnn mb-2">CREATE AN ACCOUNT</button></a>
                @endif


                <p class="menu-label">
                    Choose a Filter
                </p>

                <ul class="menu-list">
                    <li>
                        <a href="/challenges"
                           class="active has-icon"
                        >
                            <svg class='icon is-success' xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"><path d="M7 1C3.14 1 0 4.14 0 8s3.14 7 7 7c.48 0 .94-.05 1.38-.14-.17-.08-.2-.73-.02-1.09.19-.41.81-1.45.2-1.8-.61-.35-.44-.5-.81-.91-.37-.41-.22-.47-.25-.58-.08-.34.36-.89.39-.94.02-.06.02-.27 0-.33 0-.08-.27-.22-.34-.23-.06 0-.11.11-.2.13-.09.02-.5-.25-.59-.33-.09-.08-.14-.23-.27-.34-.13-.13-.14-.03-.33-.11s-.8-.31-1.28-.48c-.48-.19-.52-.47-.52-.66-.02-.2-.3-.47-.42-.67-.14-.2-.16-.47-.2-.41-.04.06.25.78.2.81-.05.02-.16-.2-.3-.38-.14-.19.14-.09-.3-.95s.14-1.3.17-1.75c.03-.45.38.17.19-.13-.19-.3 0-.89-.14-1.11-.13-.22-.88.25-.88.25.02-.22.69-.58 1.16-.92.47-.34.78-.06 1.16.05.39.13.41.09.28-.05-.13-.13.06-.17.36-.13.28.05.38.41.83.36.47-.03.05.09.11.22s-.06.11-.38.3c-.3.2.02.22.55.61s.38-.25.31-.55c-.07-.3.39-.06.39-.06.33.22.27.02.5.08.23.06.91.64.91.64-.83.44-.31.48-.17.59.14.11-.28.3-.28.3-.17-.17-.19.02-.3.08-.11.06-.02.22-.02.22-.56.09-.44.69-.42.83 0 .14-.38.36-.47.58-.09.2.25.64.06.66-.19.03-.34-.66-1.31-.41-.3.08-.94.41-.59 1.08.36.69.92-.19 1.11-.09.19.1-.06.53-.02.55.04.02.53.02.56.61.03.59.77.53.92.55.17 0 .7-.44.77-.45.06-.03.38-.28 1.03.09.66.36.98.31 1.2.47.22.16.08.47.28.58.2.11 1.06-.03 1.28.31.22.34-.88 2.09-1.22 2.28-.34.19-.48.64-.84.92s-.81.64-1.27.91c-.41.23-.47.66-.66.8 3.14-.7 5.48-3.5 5.48-6.84 0-3.86-3.14-7-7-7L7 1zm1.64 6.56c-.09.03-.28.22-.78-.08-.48-.3-.81-.23-.86-.28 0 0-.05-.11.17-.14.44-.05.98.41 1.11.41.13 0 .19-.13.41-.05.22.08.05.13-.05.14zM6.34 1.7c-.05-.03.03-.08.09-.14.03-.03.02-.11.05-.14.11-.11.61-.25.52.03-.11.27-.58.3-.66.25zm1.23.89c-.19-.02-.58-.05-.52-.14.3-.28-.09-.38-.34-.38-.25-.02-.34-.16-.22-.19.12-.03.61.02.7.08.08.06.52.25.55.38.02.13 0 .25-.17.25zm1.47-.05c-.14.09-.83-.41-.95-.52-.56-.48-.89-.31-1-.41-.11-.1-.08-.19.11-.34.19-.15.69.06 1 .09.3.03.66.27.66.55.02.25.33.5.19.63h-.01z"/></svg>

                            All Challenges
                        </a>
                    </li>

                    <li>
                        <a href="/challenges?by=Malemnganba%20Soubam"
                           class=" has-icon"
                        >
                            <svg class='icon is-success' xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path d="M6.5 0C3.48 0 1 2.19 1 5c0 .92.55 2.25 1 3 1.34 2.25 1.78 2.78 2 4v1h5v-1c.22-1.22.66-1.75 2-4 .45-.75 1-2.08 1-3 0-2.81-2.48-5-5.5-5zm3.64 7.48c-.25.44-.47.8-.67 1.11-.86 1.41-1.25 2.06-1.45 3.23-.02.05-.02.11-.02.17H5c0-.06 0-.13-.02-.17-.2-1.17-.59-1.83-1.45-3.23-.2-.31-.42-.67-.67-1.11C2.44 6.78 2 5.65 2 5c0-2.2 2.02-4 4.5-4 1.22 0 2.36.42 3.22 1.19C10.55 2.94 11 3.94 11 5c0 .66-.44 1.78-.86 2.48zM4 14h5c-.23 1.14-1.3 2-2.5 2s-2.27-.86-2.5-2z"/></svg>

                            My Questions
                        </a>
                    </li>
                </ul>
                <p class="menu-label mt-4">
                    Or Pick a Difficulty
                </p>

                <ul class="menu-list">
                    <li>
                        <a href="/forum" class=" has-icon">
                            <span class="is-circle icon" style="color: black"></span>
                            Easy
                        </a>
                    </li>
                </ul>




                {{--<li>--}}
                {{--<a href="/challenges?popular=1"--}}
                {{--class=" has-icon"--}}
                {{-->--}}
                {{--<svg class='icon is-success' xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path d="M5.05.31c.81 2.17.41 3.38-.52 4.31C3.55 5.67 1.98 6.45.9 7.98c-1.45 2.05-1.7 6.53 3.53 7.7-2.2-1.16-2.67-4.52-.3-6.61-.61 2.03.53 3.33 1.94 2.86 1.39-.47 2.3.53 2.27 1.67-.02.78-.31 1.44-1.13 1.81 3.42-.59 4.78-3.42 4.78-5.56 0-2.84-2.53-3.22-1.25-5.61-1.52.13-2.03 1.13-1.89 2.75.09 1.08-1.02 1.8-1.86 1.33-.67-.41-.66-1.19-.06-1.78C8.18 5.31 8.68 2.45 5.05.32L5.03.3l.02.01z"/></svg>--}}

                {{--Popular--}}
                {{--</a>--}}
                {{--</li>--}}



                {{--<li>--}}
                {{--<a href="/discuss?answered=1"--}}
                {{--class=" has-icon"--}}
                {{-->--}}
                {{--<svg class='icon is-success' xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M14 14c-.05.69-1.27 1-2 1H5.67L4 14V8c1.36 0 2.11-.75 3.13-1.88 1.23-1.36 1.14-2.56.88-4.13-.08-.5.5-1 1-1 .83 0 2 2.73 2 4l-.02 1.03c0 .69.33.97 1.02.97h2c.63 0 .98.36 1 1l-1 6L14 14zm0-8h-2.02l.02-.98C12 3.72 10.83 0 9 0c-.58 0-1.17.3-1.56.77-.36.41-.5.91-.42 1.41.25 1.48.28 2.28-.63 3.28-1 1.09-1.48 1.55-2.39 1.55H2C.94 7 0 7.94 0 9v4c0 1.06.94 2 2 2h1.72l1.44.86c.16.09.33.14.52.14h6.33c1.13 0 2.84-.5 3-1.88l.98-5.95c.02-.08.02-.14.02-.2-.03-1.17-.84-1.97-2-1.97H14z"/></svg>--}}

                {{--Solved--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="/discuss?answered=0"--}}
                {{--class=" has-icon"--}}
                {{-->--}}
                {{--<svg class='icon is-success' xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path d="M6.5 0C3.48 0 1 2.19 1 5c0 .92.55 2.25 1 3 1.34 2.25 1.78 2.78 2 4v1h5v-1c.22-1.22.66-1.75 2-4 .45-.75 1-2.08 1-3 0-2.81-2.48-5-5.5-5zm3.64 7.48c-.25.44-.47.8-.67 1.11-.86 1.41-1.25 2.06-1.45 3.23-.02.05-.02.11-.02.17H5c0-.06 0-.13-.02-.17-.2-1.17-.59-1.83-1.45-3.23-.2-.31-.42-.67-.67-1.11C2.44 6.78 2 5.65 2 5c0-2.2 2.02-4 4.5-4 1.22 0 2.36.42 3.22 1.19C10.55 2.94 11 3.94 11 5c0 .66-.44 1.78-.86 2.48zM4 14h5c-.23 1.14-1.3 2-2.5 2s-2.27-.86-2.5-2z"/></svg>--}}

                {{--Unsolved--}}
                {{--</a>--}}
                {{--</li>--}}

                <p class="menu-label mt-4">
                    Or Pick a Channel
                </p>

                <ul class="menu-list">
                    <li>
                        <a href="/forum" class=" has-icon">
                            <span class="is-circle icon" style="color: black"></span>
                            All
                        </a>
                    </li>

                    <li>
                        <a href="/forum/php" class=" has-icon">
                            <span class="is-circle icon" style="color: #8cd362"></span>
                            PHP
                        </a>
                    </li>
                    <li>
                    {{--<a href="/discuss/channels/elixir" class=" has-icon">--}}
                    {{--<span class="icon is-circle" style="color: #f7c953"></span>--}}
                    {{--Elixir--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/eloquent" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #09d7c1"></span>--}}
                    {{--Eloquent--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/envoyer" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #F56857"></span>--}}
                    {{--Envoyer--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/forge" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #5db3b7"></span>--}}
                    {{--Forge--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/general-discussion" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #4E89DA"></span>--}}
                    {{--General--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/guides" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #D51E22"></span>--}}
                    {{--Guides--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/javascript" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #9AD4E0"></span>--}}
                    {{--JavaScript--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/laravel" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #F56857"></span>--}}
                    {{--Laravel--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/lumen" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #F9A97A"></span>--}}
                    {{--Lumen--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/requests" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #BB824E"></span>--}}
                    {{--Requests--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/servers" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #F9A97A"></span>--}}
                    {{--Servers--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/site-improvements" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #88AD48"></span>--}}
                    {{--Site Feedback--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/spark" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #66add3"></span>--}}
                    {{--Spark--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/testing" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #da5757"></span>--}}
                    {{--Testing--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/tips" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #837eb6"></span>--}}
                    {{--Tips--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="/discuss/channels/vue" class=" has-icon">--}}
                    {{--<span class="is-circle icon" style="color: #3ab981"></span>--}}
                    {{--Vue--}}
                    {{--</a>--}}
                    {{--</li>--}}
                </ul></aside>
        </div>
    </div>
</div>
@endsection
