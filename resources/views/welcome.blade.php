        
        @extends('layouts.app')
        @section('stylesheet')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
          
        <style>
           
               #con.container{
                margin: 0;
                width:100%;
                height:100%;
                 background: -webkit-linear-gradient(bottom left, #00b1b3, #1d5086);
                background: -o-linear-gradient(bottom left, #00b1b3, #1d5086);
                background: linear-gradient(to top right, #00b1b3, #1d5086);
            }
            .logobig {
               
            }
            div.bg{
                background: -webkit-linear-gradient(bottom left, #00b1b3, #1d5086);
                background: -o-linear-gradient(bottom left, #00b1b3, #1d5086);
                background: linear-gradient(to top right, #00b1b3, #1d5086);
            }
            .navbar {
                margin-bottom: 0px;
               }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            
            p{
                color:white;
            }
            .content {
                text-align: center;
                color: white;
            }

            .title {
                font-size: 80px;
                color:white;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                 
            }


            .login-box {
                padding: 20px;
                text-align: center;
                letter-spacing: 1px;
                margin: 100px auto ;
                position: relative;
            }
             .login-box a{
                text-decoration: none;
             }
         

            

            .social-button {
                  background-position: 25px 0px;
                box-sizing: border-box;
                color: rgb(255, 255, 255);
                cursor: pointer;
                display: inline-block;
                height: 50px;
                  line-height: 50px;
                text-align: left;
                text-decoration: none;
                text-transform: uppercase;
                vertical-align: middle;
                width: 100%;
                  border-radius: 3px;
                margin: 10px auto;
                outline: rgb(255, 255, 255) none 0px;
                padding-left: 20%;
                transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #facebook-connect {
                background: rgb(255, 255, 255) url('https://eswarasai.com/projects/social-login/img/facebook.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
                border: 1px solid rgb(60, 90, 154);
            }

            #facebook-connect:hover {
                  border-color: rgb(60, 90, 154);
                  background: rgb(60, 90, 154) url('https://eswarasai.com/projects/social-login/img/facebook-white.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
                  -webkit-transition: all .8s ease-out;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease-out;
            }

            #facebook-connect span {
                  box-sizing: border-box;
                color: rgb(60, 90, 154);
                cursor: pointer;
                text-align: center;
                text-transform: uppercase;
                border: 0px none rgb(255, 255, 255);
                outline: rgb(255, 255, 255) none 0px;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #facebook-connect:hover span {
                  color: #FFF;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #github-connect {
                background: rgb(255, 255, 255) url('assets/github-logo.svg') no-repeat scroll 7.5px 8px / 30px 30px padding-box border-box;
                border: 1px solid black;
            }

            #github-connect:hover {
                  border-color: black;
                  background: black url('assets/github-logo-white.svg') no-repeat scroll 7.5px 8px / 30px 30px padding-box border-box;
                  -webkit-transition: all .8s ease-out;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease-out;
            }

            #github-connect span {
                  box-sizing: border-box;
                color: black;
                cursor: pointer;
                text-align: center;
                text-transform: uppercase;
                border: 0px none rgb(220, 74, 61);
                outline: rgb(255, 255, 255) none 0px;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #github-connect:hover span {
                  color: #FFF;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #twitter-connect {
                background: rgb(255, 255, 255) url('https://eswarasai.com/projects/social-login/img/twitter.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
                border: 1px solid rgb(85, 172, 238);
            }

            #twitter-connect:hover {
                  border-color: rgb(85, 172, 238);
                  background: rgb(85, 172, 238) url('https://eswarasai.com/projects/social-login/img/twitter-white.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
                  -webkit-transition: all .8s ease-out;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease-out;
            }

            #twitter-connect span {
                  box-sizing: border-box;
                color: rgb(85, 172, 238);
                cursor: pointer;
                text-align: center;
                text-transform: uppercase;
                border: 0px none rgb(220, 74, 61);
                outline: rgb(255, 255, 255) none 0px;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }

            #twitter-connect:hover span {
                  color: #FFF;
                  -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease;
            }
 </style>
        @endsection

        @section('content')

        @include('layouts.svg')
        <div>
           
        @endsection
     
