<html>
<head>
    <title>Mail System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #D3D3D3;
        }
        input[type=text]{
          width: 60%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 2px solid #ccc;
          border-radius: 4px;
        }
        .compose{
            padding-top: 0px;
            padding-right: 5px;
            padding-bottom: 30px;
            position: relative;
        }
        .sidebar{
            padding-top: 20px;
            margin-top: 20px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            height: 85%;
            border-right: 1px solid black;
            
        }
        .inbox{
            padding-top: 20px;
            margin-top: 20px;
            padding-left: 15px;
            margin-left: 15px;
            width: 70%;
            height: 80%;
        
        }
        .nav-email-subtitle {
          font-size: 15px;
          text-transform: uppercase;
          color: #333;
          margin-bottom: 15px;
          margin-top: 30px;
        }
        .media-meta {
            top: 0px;
            font-size: 11px;
            color: #999;
            position: relative;
            right: 10px;
        }
        a:hover{
            text-decoration: none;
        }
        @media(hover: hover) {
            .testField{
                white-space: nowrap;
                overflow: hidden;
                overflow: ellipsis;
                margin-top: 1px;
                margin-bottom: 1px;

            }
            .testField:hover {
                position: static;
                border: 1px solid black;
                border-radius: 4px;
                background-color: #edf1f9;
            }
        }


    </style>
</head>
<body>
        
    <div align="center">

        <input type="text"  placeholder="Search Mail"/>
        <input type="button" class="btn btn-default btn-lg" value="Search">
    </div>

    <div class="row">
        <div class="sidebar col col-md-4" align="left">
            <div  align="center" class="compose">
                <button type="button" class="glyphicon glyphicon-plus btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal"> Compose </button>
            </div>
         <hr>

             <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-inbox"> Inbox</i> <span class="label label-danger pull-right">0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"> Started</i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-send"> Sent</i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-file"> Drafts</i> <span class="label label-danger pull-right">0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-envelope"> All-Mail</i>
                    </a>
                </li>

            </ul><hr>
            <!--/////////////////////////////////////////////////-->
            <h5 class="nav-email-subtitle">More</h5>
        <ul class="nav nav-pills nav-stacked  ">
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-heart"> Promotions</i> <span class="label label-danger pull-right">3</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="  glyphicon glyphicon-list-alt"> Job list</i> 
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-hdd"> Backup</i>
                </a>
            </li>
        </ul>
        </div>
<!-- Main  Modal-->   
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header row">
                    <button type="button" class="close col col-sm-2 pul-right" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title col col-sm-4 pul-right">New Message</h4>
                </div>
                <div class="modal-body">
                  
                    <form role="form" class="form-horizontal" action="compose.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-2" for="inputTo">To</label>
                            <div class="col-sm-10"><input type="email" class="form-control" id="inputTo" name="email" placeholder="Recipients"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2" for="inputSubject">Subject</label>
                            <div class="col-sm-10"><input type="email" class="form-control" id="inputSubject" name="subject" placeholder="Your Subject"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 pul-left" for="inputBody">Message</label>
                            <div class="col-sm-12"><textarea class="form-control" id="inputBody" name="msg" rows="14" ></textarea></div>
                        </div>
                    
                  
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> 
                            <button type="button" class="btn btn-warning <span></span><span></span><span></span>g pull-left">Save Draft</button>
                            <input type="submit" class="btn btn-primary " value="Send Mail">
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
      </div>
 <!-- End Main Modal -->

    <!--    Main div   -->

    <div class="col inbox col-md-8 pul-right">    
       <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                         <a href="#" class="list-group-item  testField">
                            <input type="checkbox">
                            <span class="glyphicon glyphicon-star-empty"></span><strong><span class="name" style="min-width: 120px;
                                display: inline-block;">Muhammad Ahsan</span></strong> <i><span class=""> Nice work on the lastest version</span></i>
                            <span class="text-muted" style="font-size: 11px;">-  More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"></span>
                        </a>
                        <a href="#" class="list-group-item  testField">
                            <input type="checkbox">
                            <span class="glyphicon glyphicon-star-empty"></span><strong><span class="name" style="min-width: 120px;
                                display: inline-block;">Muhammad Ahsan</span></strong> <i><span class=""> Nice work on the lastest version</span></i>
                            <span class="text-muted" style="font-size: 11px;">-  More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"></span>
                        </a>
                        <a href="#" class="list-group-item  testField">
                            <input type="checkbox">
                            <span class="glyphicon glyphicon-star-empty"></span><strong><span class="name" style="min-width: 120px;
                                display: inline-block;">Muhammad Ahsan</span></strong> <i><span class=""> Nice work on the lastest version</span></i>
                            <span class="text-muted" style="font-size: 11px;">-  More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"></span>
                        </a>
                        <a href="#" class="list-group-item  testField">
                            <input type="checkbox">
                            <span class="glyphicon glyphicon-star-empty"></span><strong><span class="name" style="min-width: 120px;
                                display: inline-block;">Muhammad Ahsan</span></strong> <i><span class=""> Nice work on the lastest version</span></i>
                            <span class="text-muted" style="font-size: 11px;">-  More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"></span>
                        </a>
                        <a href="#" class="list-group-item  testField">
                            <input type="checkbox">
                            <span class="glyphicon glyphicon-star-empty"></span><strong><span class="name" style="min-width: 120px;
                                display: inline-block;">Muhammad Ahsan</span></strong> <i><span class=""> Nice work on the lastest version</span></i>
                            <span class="text-muted" style="font-size: 11px;">-  More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"></span>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>

    