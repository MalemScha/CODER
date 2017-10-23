<reply :attributes="{{ $comment }}" navigation="comments" inline-template v-cloak>
    <div class="panel-heading">
        <div id="comment-{{ $comment->id }}" class="panel-body">
            <a href="{{url('/@' . $comment->owner->name)}}">{{$comment->owner->name}}</a>
            <div>
                <h6 class="mr-1">{{$comment->updated_at->diffForHumans()}}</h6>
                @if (auth()->check())
                <div>
                    <favorite :reply="{{ $comment }}"></favorite>
                </div>
                @else
                    <div>
                       <a href="{{route('login')}}">
                            <button class="btn btn-xs btn-default">
                                <span class="glyphicon glyphicon-heart"></span>
                                <span>{{ $comment->favorites_count }}</span>
                            </button>
                        </a>
                    </div>
                @endif
                <div class="panel-body">
                    <div v-if="editing">
                        <div class="form-group">
                            <textarea class="form-control" v-model="body"></textarea>
                        </div>
                        <button class="btn btn-xs btn-toolbar" @click="editing = false">Cancel</button>
                        <button class="btn btn-xs btn-info" @click="update">Update</button>
                    </div>

                    <div v-else v-text="body"></div>
                </div>
                @can ('update', $comment)
                    <button class="btn btn-xs mr-1" @click="editing = true">Edit</button>
                    <button class="btn btn-xs btn-danger" @click="destroy">Delete</button>
                @endcan
            </div>

        </div>
        <hr>
    </div>
</reply>
