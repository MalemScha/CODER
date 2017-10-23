<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <h5 class="flex">
                <a href="{{url('/@' . $upload->owner->name )}}">
                    {{ $upload->owner->name }}</a>'s Submission

            </h5>
        </div>
        <div class="panel-body">

                <div class="form-group">
                    <a href="{{ Storage::url($upload->filename ) }}"> See code</a>
                    <a href="{{ Storage::url($upload->filename ) }}" download=""> download code</a>
                </div>
            </div>


    </div>
</div>