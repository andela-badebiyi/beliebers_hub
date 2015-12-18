<html>     
    <head>         
        <title>Beliebers:: @yield('title')</title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>     
        <style>             
            body {
                margin:0;
                padding:0;
                height:100%;
            }
            #wrapper {
                min-height:100%;
                position:relative;
                padding-left: 2em;
                padding-right: 2em;
            }             
            .container{
                width: 100%;
                padding-bottom:3em; /* Height of the footer element */
            }
            footer{ 
                height: 3em;
                border-top: solid thin #ccc;        
                background:#ffab62;
                width:100%;
                position:absolute;
                bottom:0;
                left:0;
            }      
            .bubble img {
                float:left;
                width:20%;
                max-width:8em;
                height:auto;
                border:3px solid #ffffff;
                border-radius:10px
                              }
            .bubble-content {
                text-align: justify;
               position:relative;
               float:left;
               margin-left:12px;
               width:70%;
               min-width: 50em;
               padding:0px 20px;
               border-radius:10px;
               background-color:#FFFFFF;
               box-shadow:1px 1px 5px rgba(0,0,0,.2);
               }
            .bubble {
                 margin-top:20px;
                 }
            .point {
               border-top:10px solid transparent;
               border-bottom:10px solid transparent;
               border-right: 12px solid #FFF;
               position:absolute;
               left:-10px;
               top:12px;
               }                
           .clearfix:after {
              visibility:hidden;
              display:block;
              font-size:0;
              content: ".";
              clear:both;
              height:0;
              line-height:
              }
            .clearfix {
              display: inline-block;
              }
            * html .clearfix {
                 height: 1%;
                }
            .forum-thumbnail {
                border: solid thin #ccc;
                border-radius:10px;
               background-color:#FFFFFF;
               box-shadow:1px 1px 5px rgba(0,0,0,.2);
               padding: 1em 2em 1em 2em;
               margin-bottom:1em;
            }
        </style>     
    </head> 
    <body> 
        <div id='wrapper'>        
            <div class="page-header">             
                <h1><img src ="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTrkObUeQuPwIAULMPRs_5jL4u6qCiGlLdeaQgD5IZZN4s0c1itnw" 
                width=70 height=auto /> 
                The Beliebers Hub <small>Beliebers unite!</small></h1>
            </div>         

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <a class="navbar-brand" href="{{ route('songs.index') }}">Home</a>
                      <a class="navbar-brand" href="{{ route('testimonials.index')}}">Testimonials</a>
                      <a class="navbar-brand" href="{{ route('forums.index')}}">Forum</a>
                    </div>
              </div><!-- /.container-fluid -->
            </nav>

            <div class='container'>             
                @yield('content') 
            </div>         
            <footer>
                (c) Niccolo Inc.         
            </footer> 
        </div>
    </body> 
</html>
