<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


?>




<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Social Media</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script src="../js/comments.js"></script>
</head>

<body>
    <nav>
        <div class="nav-left">
            </a>
            <ul>
                <li><img src="https://i.postimg.cc/Fs3m1Djy/notification.png"></li>
                
                <li><img src="https://i.postimg.cc/YqGKZ8nc/inbox.png"></li>
                <li><img src="https://i.postimg.cc/xCzpgFjg/video.png"></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="https://i.postimg.cc/SKtHgM6Q/search.png">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                <img src="../images/4.jpg">
            </div>
        </div>
        <!----------------Settings Menu"----------------------->
        <div class="settings-menu">

            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="../images/4.jpg">
                    <div>
                        <p><?php $_SESSION['username'];    ?></p>
                        <a href="profile.php">See your profile</a>
                    </div>
                </div>
                <hr>
                <div class="user-profile">

                </div>

                <div class="settings-links">
                    <img src="https://i.postimg.cc/QCcPNYRV/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy <img src="https://i.postimg.cc/RF1dBMWr/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="https://i.postimg.cc/C5tydfK6/help.png" class="settings-icon">
                    <a href="#">Help & Support<img src="https://i.postimg.cc/RF1dBMWr/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="https://i.postimg.cc/5yt1XVSj/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility <img src="https://i.postimg.cc/RF1dBMWr/arrow.png"
                            width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="https://i.postimg.cc/PJC9GrMb/logout.png" class="settings-icon">
                    <a href="logout.php">logout<img src="https://i.postimg.cc/RF1dBMWr/arrow.png" width="10px"></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <!----------------Left Sidebar----------------------->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><img src="https://i.postimg.cc/RCj4MjnC/news.png">Latest News</a>
                <a href="#"><img src="https://i.postimg.cc/MpBwMtV0/friends.png">Friendss</a>
                <a href="#"><img src="https://i.postimg.cc/44FRWj1b/group.png">Group</a>
                <a href="#"><img src="https://i.postimg.cc/0jh39RtT/marketplace.png">Marketplace</a>
                <a href="#"><img src="https://i.postimg.cc/VsXHCTVk/watch.png">Watch</a>
                <a href="#">See More</a>
            </div>

        </div>
        <!----------------Main Sidebar----------------------->
        <div class="main-content">

            <div class="write-post-container">
                <div class="user-profile">
                    <img src="../images/4.jpg">
                    <div>
                        <p><?php $_SESSION['username']; ?></p>
                        <small>Public <i class="fas fa-caret-down"></i></small>
                    </div>
                </div>
                <div class="post-input-container">
                    <textarea rows="3" placeholder="What's on your mind, John?"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="https://i.postimg.cc/QMD2BDXs/live-video.png">Live Video</a>
                        <a href="#"><img src="https://i.postimg.cc/6pKKZn0D/photo.png">Photo/Video</a>
                        <a href="#"><img src="https://i.postimg.cc/Pf6TBCdD/feeling.png">Feling/Activity</a>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <dic class="post-row">
                    <div class="user-profile">
                        <img src="../images/4.jpg">
                        <div>
                            <p>sara taweel</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </dic>
                <p class="post-text">follow-me <span>noor aljubeh</span> hie everyone Lorem ipsum odit totamesse
                    deserunt. <a href="#">#sara</a> <a href="#">#freetime</a></p>
                <img src="https://i.postimg.cc/ZRwztQzm/feed-image-5.png" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="https://i.postimg.cc/pLKNXrMq/like-blue.png">120</div>
                        <div><img src="https://i.postimg.cc/rmjMymWv/comments.png">45</div>
                        <div><img src="https://i.postimg.cc/T2bBchpG/share.png">20</div>
                    </div>
                    <div class="post-porfile-icon">
                        <img src="../images/4.jpg">
                    </div>
                </div>
                <div class="container1">
                <h2 style="color:black">comment</h2>
                    <form method="POST" id="commentForm">
                        <div class="form-group1">
                            <input type="text" name="name" id="name"style="width:600px; margin-bottom:3px" class="form-control" placeholder="Enter Name"
                                required />
                        </div>
                        <div class="form-group1">
                            <textarea name="comment" id="comment" style="width:600px; margin-bottom:3px" class="form-control" placeholder="Enter Comment"
                                rows="5" required></textarea>
                        </div>
                        <span id="message"></span>
                        <div class="form-group1">
                            <input type="hidden" name="commentId" id="commentId" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                value="Post Comment" />
                        </div>
                    </form>
                    <div id="showComments"></div>
                </div>
                <div class="insert-post-ads1" style="margin-top:20px;">

                </div>
            </div>
            <div class="post-container">
                <dic class="post-row">
                    <div class="user-profile">
                        <img src="../images/4.jpg">
                        <div>
                            <p>sara taweel</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </dic>
                <p class="post-text">follow-me <span>noor aljubeh</span> hie everyone Lorem ipsum odit totamesse
                    deserunt. <a href="#">#sara</a> <a href="#">#freetime</a></p>
                <img src="https://i.postimg.cc/Xvc0xJ2p/feed-image-2.png" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="https://i.postimg.cc/pLKNXrMq/like-blue.png">120</div>
                        <div><img src="https://i.postimg.cc/rmjMymWv/comments.png">45</div>
                        <div><img src="https://i.postimg.cc/T2bBchpG/share.png">20</div>
                    </div>
                    <div class="post-porfile-icon">
                        <img src="../images/4.jpg">
                    </div>
                </div>
                <div class="container1">
                <h2 style="color:black">comment</h2>
                    <form method="POST" id="commentForm">
                        <div class="form-group1">
                            <input type="text" name="name" id="name" style="width:600px; margin-bottom:3px"class="form-control" placeholder="Enter Name"
                                required />
                        </div>
                        <div class="form-group1">
                            <textarea name="comment" id="comment"style="width:600px; margin-bottom:3px" class="form-control" placeholder="Enter Comment"
                                rows="5" required></textarea>
                        </div>
                        <span id="message"></span>
                        <div class="form-group1">
                            <input type="hidden" name="commentId" id="commentId" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                value="Post Comment" />
                        </div>
                    </form>
                    <div id="showComments"></div>
                </div>
                <div class="insert-post-ads1" style="margin-top:20px;">

                </div>
            </div>
            <div class="post-container">
                <dic class="post-row">
                    <div class="user-profile">
                        <img src="../images/4.jpg">
                        <div>
                            <p>sara taweel</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </dic>
                <p class="post-text">follow-me <span>noor aljubeh</span> hie everyone Lorem ipsum odit totamesse
                    deserunt. <a href="#">#sara</a> <a href="#">#freetime</a></p>
                <img src="https://i.postimg.cc/tJ7QXz9x/feed-image-3.png" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="https://i.postimg.cc/pLKNXrMq/like-blue.png">120</div>
                        <div><img src="https://i.postimg.cc/rmjMymWv/comments.png">45</div>
                        <div><img src="https://i.postimg.cc/T2bBchpG/share.png">20</div>
                    </div>
                    <div class="post-porfile-icon">
                        <img src="../images/4.jpg">
                    </div>
                </div>
                <div class="container1">
                <h2 style="color:black">comment</h2>
                    <form method="POST" id="commentForm">
                        <div class="form-group1">
                            <input type="text" name="name" id="name" style="width:600px; margin-bottom:3px"class="form-control" placeholder="Enter Name"
                                required />
                        </div>
                        <div class="form-group1">
                            <textarea name="comment" id="comment"style="width:600px; margin-bottom:3px" class="form-control" placeholder="Enter Comment"
                                rows="5" required></textarea>
                        </div>
                        <span id="message"></span>
                        <div class="form-group1">
                            <input type="hidden" name="commentId" id="commentId" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                value="Post Comment" />
                        </div>
                    </form>
                    <div id="showComments"></div>
                </div>
                <div class="insert-post-ads1" style="margin-top:20px;">

                </div>



            </div>
            <div class="post-container">
                <dic class="post-row">
                    <div class="user-profile">
                        <img src="../images/4.jpg">
                        <div>
                            <p>sara taweel</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </dic>
                <p class="post-text">follow-me <span>noor aljubeh</span> hie everyone Lorem ipsum odit totamesse
                    deserunt. <a href="#">#sara</a> <a href="#">#freetime</a></p>
                <img src="https://i.postimg.cc/hjDRYBwM/feed-image-4.png" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="https://i.postimg.cc/pLKNXrMq/like-blue.png">120</div>
                        <div><img src="https://i.postimg.cc/rmjMymWv/comments.png">45</div>
                        <div><img src="https://i.postimg.cc/T2bBchpG/share.png">20</div>
                    </div>
                    <div class="post-porfile-icon">
                        <img src="../images/4.jpg">
                    </div>
                </div>
                <div class="container1">
                <h2 style="color:black">comment</h2>
                    <form method="POST" id="commentForm">
                        <div class="form-group1">
                            <input type="text" name="name" style="width:600px; margin-bottom:3px"id="name" class="form-control" placeholder="Enter Name"
                                required />
                        </div>
                        <div class="form-group1">
                            <textarea name="comment" id="comment" style="width:600px; margin-bottom:3px"class="form-control" placeholder="Enter Comment"
                                rows="5" required></textarea>
                        </div>
                        <span id="message"></span>
                        <div class="form-group1">
                            <input type="hidden" name="commentId" id="commentId" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                value="Post Comment" />
                        </div>
                    </form>
                    <div id="showComments"></div>
                </div>
                <div class="insert-post-ads1" style="margin-top:20px;">

                </div>
            </div>
            <div class="post-container">
                <dic class="post-row">
                    <div class="user-profile">
                        <img src="../images/4.jpg">
                        <div>
                            <p>sara taweel</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </dic>
                <p class="post-text">follow-me <span>noor aljubeh</span> hie everyone Lorem ipsum odit totamesse
                    deserunt. <a href="#">#sara</a> <a href="#">#freetime</a></p>
                <img src="https://i.postimg.cc/ZRwztQzm/feed-image-5.png" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="https://i.postimg.cc/pLKNXrMq/like-blue.png">120</div>
                        <div><img src="https://i.postimg.cc/rmjMymWv/comments.png">45</div>
                        <div><img src="https://i.postimg.cc/T2bBchpG/share.png">20</div>
                    </div>
                    <div class="post-porfile-icon">
                        <img src="../images/4.jpg">
                    </div>
                </div>
                <div class="container1">
                    <h2 style="color:black">comment</h2>
                    <form method="POST" id="commentForm">
                        <div class="form-group1">
                            <input type="text" name="name" id="name" style="width:600px; margin-bottom:3px"class="form-control" placeholder="Enter Name"
                                required />
                        </div>
                        <div class="form-group1">
                            <textarea name="comment" id="comment"style="width:600px; margin-bottom:3px" class="form-control" placeholder="Enter Comment"
                                rows="5" required></textarea>
                        </div>
                        <span id="message"></span>
                        <div class="form-group1">
                            <input type="hidden" name="commentId" id="commentId" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                value="Post Comment" />
                        </div>
                    </form>
                    <div id="showComments"></div>
                </div>
                <div class="insert-post-ads1" style="margin-top:20px;">

                </div>
            </div>
            <button type="button" class="load-more-btn">Load More</button>
        </div>
        <!----------------Right Sidebar----------------------->
        <div class="right-sidebar">
            <div class="sidebar-title">
                <h4>friends</h4>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="https://i.postimg.cc/XNPtfdVs/member-1.png">
                </div>
                <p>hidaya</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="https://i.postimg.cc/4NhqByys/member-2.png">
                </div>
                <p>ahmad</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="https://i.postimg.cc/FH5qqvkc/member-3.png">
                </div>
                <p>bella</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="https://i.postimg.cc/Sx65bPcP/member-4.png">
                </div>
                <p>Mike </p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright 2022 </p>
    </div>
    <script src="../js/home.js"></script>
</body>

</html>