@extends('layouts.app')
@section('title')
    {{$profileUser->name}}
@endsection
@section('stylesheet')
    <style>
        .cntner{position:relative;width:100%;max-width:960px;margin:0 auto;padding:0 20px;box-sizing:border-box}.column,.columns{width:100%;float:left;box-sizing:border-box}@media (min-width:400px){.cntner{width:85%;padding:0}}@media (min-width:550px){.cntner{width:80%}.column,.columns{margin-left:4%}.column:first-child,.columns:first-child{margin-left:0}.one.column,.one.columns{width:4.66666666667%}.two.columns{width:13.3333333333%}.three.columns{width:22%}.four.columns{width:30.6666666667%}.five.columns{width:39.3333333333%}.six.columns{width:48%}.seven.columns{width:56.6666666667%}.eight.columns{width:65.3333333333%}.nine.columns{width:74%}.ten.columns{width:82.6666666667%}.eleven.columns{width:91.3333333333%}.twelve.columns{width:100%;margin-left:0}.one-third.column{width:30.6666666667%}.two-thirds.column{width:65.3333333333%}.one-half.column{width:48%}.offset-by-one.column,.offset-by-one.columns{margin-left:8.66666666667%}.offset-by-two.column,.offset-by-two.columns{margin-left:17.3333333333%}.offset-by-three.column,.offset-by-three.columns{margin-left:26%}.offset-by-four.column,.offset-by-four.columns{margin-left:34.6666666667%}.offset-by-five.column,.offset-by-five.columns{margin-left:43.3333333333%}.offset-by-six.column,.offset-by-six.columns{margin-left:52%}.offset-by-seven.column,.offset-by-seven.columns{margin-left:60.6666666667%}.offset-by-eight.column,.offset-by-eight.columns{margin-left:69.3333333333%}.offset-by-nine.column,.offset-by-nine.columns{margin-left:78%}.offset-by-ten.column,.offset-by-ten.columns{margin-left:86.6666666667%}.offset-by-eleven.column,.offset-by-eleven.columns{margin-left:95.3333333333%}.offset-by-one-third.column,.offset-by-one-third.columns{margin-left:34.6666666667%}.offset-by-two-thirds.column,.offset-by-two-thirds.columns{margin-left:69.3333333333%}.offset-by-one-half.column,.offset-by-one-half.columns{margin-left:52%}}html{font-size:62.5%}body{font-size:1.5em;line-height:1.6;font-weight:400;font-family:Raleway,HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;color:#222}p{margin-top:0}a{color:#1EAEDB}a:hover{color:#0FA0CE}.button,button,input[type=button],input[type=reset],input[type=submit]{display:inline-block;height:38px;padding:0 30px;color:#555;text-align:center;font-size:11px;font-weight:600;line-height:38px;letter-spacing:.1rem;text-transform:uppercase;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:4px;border:1px solid #bbb;cursor:pointer;box-sizing:border-box}.button:focus,.button:hover,button:focus,button:hover,input[type=button]:focus,input[type=button]:hover,input[type=reset]:focus,input[type=reset]:hover,input[type=submit]:focus,input[type=submit]:hover{color:#333;border-color:#888;outline:0}.button.button-primary,button.button-primary,input[type=button].button-primary,input[type=reset].button-primary,input[type=submit].button-primary{color:#FFF;background-color:#33C3F0;border-color:#33C3F0}.button.button-primary:focus,.button.button-primary:hover,button.button-primary:focus,button.button-primary:hover,input[type=button].button-primary:focus,input[type=button].button-primary:hover,input[type=reset].button-primary:focus,input[type=reset].button-primary:hover,input[type=submit].button-primary:focus,input[type=submit].button-primary:hover{color:#FFF;background-color:#1EAEDB;border-color:#1EAEDB}input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],select,textarea{height:38px;padding:6px 10px;background-color:#fff;border:1px solid #D1D1D1;border-radius:4px;box-shadow:none;box-sizing:border-box}input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none}textarea{min-height:65px;padding-top:6px;padding-bottom:6px}input[type=email]:focus,input[type=number]:focus,input[type=password]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=url]:focus,select:focus,textarea:focus{border:1px solid #33C3F0;outline:0}label,legend{display:block;margin-bottom:.5rem;font-weight:600}fieldset{padding:0;border-width:0}input[type=checkbox],input[type=radio]{display:inline}label>.label-body{display:inline-block;margin-left:.5rem;font-weight:400}ul{list-style:circle inside}ol{list-style:decimal inside}ol,ul{padding-left:0;margin-top:0}ol ol,ol ul,ul ol,ul ul{margin:1.5rem 0 1.5rem 3rem;font-size:90%}li{margin-bottom:1rem}code{padding:.2rem .5rem;margin:0 .2rem;font-size:90%;white-space:nowrap;background:#F1F1F1;border:1px solid #E1E1E1;border-radius:4px}pre>code{display:block;padding:1rem 1.5rem;white-space:pre}td,th{padding:12px 15px;text-align:left;border-bottom:1px solid #E1E1E1}td:first-child,th:first-child{padding-left:0}td:last-child,th:last-child{padding-right:0}.button,button{margin-bottom:1rem}fieldset,input,select,textarea{margin-bottom:1.5rem}blockquote,dl,figure,form,ol,p,pre,table,ul{margin-bottom:2.5rem}.u-full-width{width:100%;box-sizing:border-box}.u-max-full-width{max-width:100%;box-sizing:border-box}.u-pull-right{float:right}.u-pull-left{float:left}hr{margin-top:3rem;margin-bottom:3.5rem;border-width:0;border-top:1px solid #E1E1E1}.cntner:after,.roww:after,.u-cf{content:"";display:table;clear:both}



        /*cx*/
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
        body {
            background: #2c3437;
            color: white;
            margin: 0 auto;
            font-weight: 300;
            font-family: 'Open sans', sans-serif;
        }

        .r-align {
            text-align: right;
        }

        .button-edit, .button-connect {
            font-size: 1.2rem;
            font-weight: 400;
            border: 2px solid #3BD3B4;
            padding: 0.4rem 5rem;
            border-radius: 3rem;
        }
        .button-edit:hover, .button-connect:hover {
            background: #3BD3B4;
            color: #2c3437;
        }

        .button-connect {
            border: 2px solid white;
            padding: 0.4rem 1.5rem;
        }
        .button-connect:hover {
            background: white;
            color: #2c3437;
            font-weight: 600;
        }

        .button-upgrade {
            border-color: #3BD3B4;
            background: #3BD3B4;
            text-transform: inherit;
            color: #2c3437;
            padding: 0.4rem 5rem;
            letter-spacing: 0;
            height: auto;
            margin: 0 0 0 2rem;
            line-height: 1.6rem;
            font-size: 1.2rem;
            border-radius: 3rem;
        }
        .button-upgrade:hover {
            background: #2c3437;
            border-color: #2c3437;
            color: #3BD3B4;
        }

        a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        strong {
            font-weight: 600;
        }

        .user_profile {
            max-width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .user_profile .header {
            background-image: linear-gradient(to right, rgba(121, 146, 128, 0.9) 0%, rgba(150, 207, 195, 0.8) 50%, rgba(121, 146, 128, 0.9) 100%), url("assets/pexels-photo-58420.jpeg");
            background-size: cover;
            background-position: 0px 100%;
            background-repeat: no-repeat;
            padding: 2rem 0 0;
        }
        .user_profile .header p {
            margin-bottom: 3rem;
        }
        .user_profile .header .roww {
            padding: 0 4rem;
        }
        .user_profile .header .avatar {
            background: #3BD3B4;
            border-radius: 50%;
            position: relative;
            width: 200px;
            height: 200px;
        }
        .user_profile .header .avatar span {
            position: absolute;
            width: 100%;
            line-height: 100px;
            text-align: center;
            color: #2c3437;
            font-weight: bold;
            font-size: 5rem;
        }
        .user_profile .header .upgrade {
            text-align: right;
            font-size: 1.4rem;
            line-height: 2.6rem;
        }
        .user_profile .tabs-area {
            background: #1d2528;
            padding: 1rem 4rem 4rem;
        }
        .user_profile .tabs-area ul.tabs {
            border-bottom: 0.3rem solid #2c3437;
            list-style: none;
            padding: 0.5rem 2rem;
        }
        .user_profile .tabs-area ul.tabs > li {
            padding: 0 1rem;
            text-transform: uppercase;
            display: inline-block;
            font-weight: 400;
            font-size: 1.3rem;
        }
        .user_profile .tabs-area ul.tabs > li a {
            color: #868e91;
        }
        .user_profile .tabs-area ul.tabs > li a.active {
            color: white;
            padding-bottom: 0.2rem;
            border-bottom: 2px solid #3BD3B4;
        }
        .user_profile .tabs-area .tab .title {
            padding-bottom: 2rem;
        }

        .user_profile .tabs-area .tab label {
            color: #868e91;
            font-weight: 600;
            font-size: 1.3rem;
            text-transform: uppercase;
        }
        .user_profile .tabs-area .tab form input, .user_profile .tabs-area .tab form select {
            background-color: transparent;
            border: 0;
            border-radius: 0;
            padding: 0;
            height: auto;
            margin-bottom: 3rem;
            font-size: 1.2rem;
            color: white;
        }
        .user_profile .tabs-area .tab form input.empty, .user_profile .tabs-area .tab form select.empty {
            border-bottom: 2px solid #868e91;
        }
        .user_profile .tabs-area .tab form .roww .one-half {
            padding: 0 2rem;
        }
        .user_profile .tabs-area .tab form .roww .one-half:first-child {
            padding: 0 4rem 0 0;
        }

        .user_profile .tabs-area .complete .pie .number sup {
            font-weight: 300;
            font-size: 2rem;
        }
        .user_profile .tabs-area .complete .pie .number span {
            text-transform: uppercase;
            font-size: 1rem;
        }

        .cntner {
            position: relative;
            width: 100%;
            max-width: 90%;
        }


        button.avtr{
            margin-bottom: 0;
            display: inline-block;
            height: 0;
            padding: 0;
            color: #555;
            text-align: center;
            font-size: 11px;
            font-weight: 600;
            line-height: 38px;
            letter-spacing: .1rem;
            text-transform: uppercase;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 4px;
            cursor: pointer;
            box-sizing: border-box;
            position: absolute;
            border: 1px solid transparent;
            left: 215px;
        }
        @media (max-width: 770px){
            .cntner {
                width: 100%;
                padding: 0;
                max-width: 100%;
            }
            .user_profile .tabs-area {
                padding: 0;
            }
            .user_profile .header .avatar {
                width:100px;
            }
            button.avtr{
                left: 137px;
            }
        }
        .wrap {
            padding: 1em;
            text-align: center;
        }


        /*upload*/



        .uploader {
            display: block;
            clear: both;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
        }
        .uploader label {
            float: left;
            clear: both;
            width: 100%;
            padding: 2rem 1.5rem;
            text-align: center;
            background: #fff;
            border-radius: 7px;
            border: 3px solid #eee;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .uploader label:hover {
            border-color: #454cad;
        }
        .uploader label.hover {
            border: 3px solid #454cad;
            box-shadow: inset 0 0 0 6px #eee;
        }
        .uploader label.hover #start i.fa {
            -webkit-transform: scale(0.8);
            transform: scale(0.8);
            opacity: 0.3;
        }
        .uploader #start {
            float: left;
            clear: both;
            width: 100%;
        }
        .uploader #start.hidden {
            display: none;
        }
        .uploader #start i.fa {
            font-size: 50px;
            margin-bottom: 1rem;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }
        .uploader #response {
            float: left;
            clear: both;
            width: 100%;
        }
        .uploader #response.hidden {
            display: none;
        }
        .uploader #response #messages {
            margin-bottom: .5rem;
        }
        .uploader #file-image {
            display: inline;
            margin: 0 auto .5rem auto;
            width: auto;
            height: auto;
            max-width: 180px;
        }
        .uploader #file-image.hidden {
            display: none;
        }
        .uploader #notimage {
            display: block;
            float: left;
            clear: both;
            width: 100%;
        }
        .uploader #notimage.hidden {
            display: none;
        }
        .uploader progress,
        .uploader .progress {
            display: inline;
            clear: both;
            margin: 0 auto;
            width: 100%;
            max-width: 180px;
            height: 8px;
            border: 0;
            border-radius: 4px;
            background-color: #eee;
            overflow: hidden;
        }
        .uploader .progress[value]::-webkit-progress-bar {
            border-radius: 4px;
            background-color: #eee;
        }
        .uploader .progress[value]::-webkit-progress-value {
            background: -webkit-linear-gradient(left, #393f90 0%, #454cad 50%);
            background: linear-gradient(to right, #393f90 0%, #454cad 50%);
            border-radius: 4px;
        }
        .uploader .progress[value]::-moz-progress-bar {
            background: linear-gradient(to right, #393f90 0%, #454cad 50%);
            border-radius: 4px;
        }
        .uploader input[type="file"] {
            display: none;
        }
        .uploader div {
            margin: 0 0 .5rem 0;
            color: #5f6982;
        }
        .uploader .btn {
            display: inline-block;
            margin: .5rem .5rem 1rem .5rem;
            clear: both;
            font-family: inherit;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            text-transform: initial;
            border: none;
            border-radius: .2rem;
            outline: none;
            padding: 0 1rem;
            height: 36px;
            line-height: 36px;
            color: #fff;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            box-sizing: border-box;
            background: #454cad;
            cursor: pointer;
        }

    </style>
    <link rel="stylesheet" href="css/timeline.css">
@endsection
@section('content2')
    <main>
        <section class="user_profile">
            <div class="cntner header">
                <div class="roww">
                    <div class="twelve columns"><img class="avatar" src="{{ Storage::url( $profileUser->avatar ) }}" alt="jofpin"/>
                        {{--<button type="button" class="avtr" data-toggle="modal" data-target=".bs-example-modal-lg">--}}
                            {{--<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>--}}
                        {{--</button>--}}

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!-- Upload  -->
                                    <form id="file-upload-form" class="uploader" action="/profile" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                        <label for="file-upload" id="file-drag">
                                            <img id="file-image" src="#" alt="Preview" class="hidden">
                                            <div id="start">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                <div>Select a file or drag here</div>
                                                <div id="notimage" class="hidden">Please select an image</div>
                                                <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                            </div>
                                            <div id="response" class="hidden">
                                                <div id="messages"></div>
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>
                <div class="roww">
                    <div class="twelve columns">
                        @if ($profileUser->id == auth()->id())
                            <h1>Whatsup {{ $profileUser->name }}!</h1>
                            <p>Welcome to your profile. Feel free to make edits to your personal.</p>
                        @else
                            <h1 style="margin-bottom: 70px;"> {{ $profileUser->name }}</h1>
                        @endif
                    </div>
                </div>
                <div class="roww">
                    @if ($profileUser->id == auth()->id())
                    <div class="one-half column upgrade">
                        <a href="{{ url('/profile') }}" class="button button-upgrade">EDIT YOUR PROFILE</a></p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="cntner tabs-area">
                <div class="roww">
                    <ul class="tabs">
                        <li ><a href="#profile" class="active">TIMELINE</a></li>
                    </ul>
                </div>
                <div class="tab">
                    <div class="cntner">
                        <div class="main">
                            <ul class="cbp_tmtimeline">

                                @forelse($activities as $activity)
                                    <li>
                                        @if(view()->exists("profile.activities.{$activity->type}"))
                                            @include("profile.activities.{$activity->type}")
                                        @endif
                                    </li>
                                @empty
                                    No Activities Yet.....
                                @endforelse

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <script>
        // File Upload
        //
        function ekUpload(){
            function Init() {

                console.log("Upload Initialised");

                var fileSelect    = document.getElementById('file-upload'),
                    fileDrag      = document.getElementById('file-drag'),
                    submitButton  = document.getElementById('submit-button');

                fileSelect.addEventListener('change', fileSelectHandler, false);

                // Is XHR2 available?
                var xhr = new XMLHttpRequest();
                if (xhr.upload) {
                    // File Drop
                    fileDrag.addEventListener('dragover', fileDragHover, false);
                    fileDrag.addEventListener('dragleave', fileDragHover, false);
                    fileDrag.addEventListener('drop', fileSelectHandler, false);
                }
            }

            function fileDragHover(e) {
                var fileDrag = document.getElementById('file-drag');

                e.stopPropagation();
                e.preventDefault();

                fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
            }

            function fileSelectHandler(e) {
                // Fetch FileList object
                var files = e.target.files || e.dataTransfer.files;

                // Cancel event and hover styling
                fileDragHover(e);

                // Process all File objects
                for (var i = 0, f; f = files[i]; i++) {
                    parseFile(f);
                    uploadFile(f);
                }
            }

            // Output
            function output(msg) {
                // Response
                var m = document.getElementById('messages');
                m.innerHTML = msg;
            }

            function parseFile(file) {

                console.log(file.name);
                output(
                    '<strong>' + encodeURI(file.name) + '</strong>'
                );

                // var fileType = file.type;
                // console.log(fileType);
                var imageName = file.name;

                var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                if (isGood) {
                    document.getElementById('start').classList.add("hidden");
                    document.getElementById('response').classList.remove("hidden");
                    document.getElementById('notimage').classList.add("hidden");
                    // Thumbnail Preview
                    document.getElementById('file-image').classList.remove("hidden");
                    document.getElementById('file-image').src = URL.createObjectURL(file);
                }
                else {
                    document.getElementById('file-image').classList.add("hidden");
                    document.getElementById('notimage').classList.remove("hidden");
                    document.getElementById('start').classList.remove("hidden");
                    document.getElementById('response').classList.add("hidden");
                    document.getElementById("file-upload-form").reset();
                }
            }

            function setProgressMaxValue(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.max = e.total;
                }
            }

            function updateFileProgress(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.value = e.loaded;
                }
            }

            function uploadFile(file) {

                var xhr = new XMLHttpRequest(),
                    fileInput = document.getElementById('class-roster-file'),
                    pBar = document.getElementById('file-progress'),
                    fileSizeLimit = 1024; // In MB
                if (xhr.upload) {
                    // Check if file is less than x MB
                    if (file.size <= fileSizeLimit * 1024 * 1024) {
                        // Progress bar
                        pBar.style.display = 'inline';
                        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                        xhr.upload.addEventListener('progress', updateFileProgress, false);

                        // File received / failed
                        xhr.onreadystatechange = function(e) {
                            if (xhr.readyState == 4) {
                                // Everything is good!

                                // progress.className = (xhr.status == 200 ? "success" : "failure");
                                // document.location.reload(true);
                            }
                        };

                        // Start upload
                        xhr.open('POST', document.getElementById('file-upload-form').action, true);
                        xhr.setRequestHeader('X-File-Name', file.name);
                        xhr.setRequestHeader('X-File-Size', file.size);
                        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                        xhr.send(file);
                    } else {
                        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                    }
                }
            }

            // Check for the various File API support.
            if (window.File && window.FileList && window.FileReader) {
                Init();
            } else {
                document.getElementById('file-drag').style.display = 'none';
            }
        }
        ekUpload();
    </script>
@endsection
@section('content')


            {{-- $activities->links() --}}

@endsection
