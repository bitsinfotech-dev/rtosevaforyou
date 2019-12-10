<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
        }

        
    </style>
</head>
<body>


<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="header-wrap">
                <form class="form-header" action="index.php" method="gte">
                    <input class="au-input au-input--xl" type="date" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <!--                        <div class="noti__item js-item-menu">
                                                    <i class="zmdi zmdi-comment-more"></i>
                                                    <span class="quantity">1</span>
                                                    <div class="mess-dropdown js-dropdown">
                                                        <div class="mess__title">
                                                            <p>You have 2 news message</p>
                                                        </div>
                                                        <div class="mess__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                            </div>
                                                            <div class="content">
                                                                <h6>Michelle Moreno</h6>
                                                                <p>Have sent a photo</p>
                                                                <span class="time">3 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="mess__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                            </div>
                                                            <div class="content">
                                                                <h6>Diane Myers</h6>
                                                                <p>You are now connected on message</p>
                                                                <span class="time">Yesterday</span>
                                                            </div>
                                                        </div>
                                                        <div class="mess__footer">
                                                            <a href="#">View all messages</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="noti__item js-item-menu">
                                                    <i class="zmdi zmdi-email"></i>
                                                    <span class="quantity">1</span>
                                                    <div class="email-dropdown js-dropdown">
                                                        <div class="email__title">
                                                            <p>You have 3 New Emails</p>
                                                        </div>
                                                        <div class="email__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                            </div>
                                                            <div class="content">
                                                                <p>Meeting about new dashboard...</p>
                                                                <span>Cynthia Harvey, 3 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="email__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                            </div>
                                                            <div class="content">
                                                                <p>Meeting about new dashboard...</p>
                                                                <span>Cynthia Harvey, Yesterday</span>
                                                            </div>
                                                        </div>
                                                        <div class="email__item">
                                                            <div class="image img-cir img-40">
                                                                <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                            </div>
                                                            <div class="content">
                                                                <p>Meeting about new dashboard...</p>
                                                                <span>Cynthia Harvey, April 12,,2018</span>
                                                            </div>
                                                        </div>
                                                        <div class="email__footer">
                                                            <a href="#">See all emails</a>
                                                        </div>
                                                    </div>
                                                </div>-->

                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <!--<div class="image">-->
                                <!--<img src="../img/user/<?php echo $user["image"] != "" || $user["image"] != null ? $user["image"] : "avtar.png"; ?>" alt="profile picture" />-->
                            <!--</div>-->
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $user["name"]; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <!--<img src="../img/user/<?php echo $user["image"] != "" || $user["image"] != null ? $user["image"] : "avtar.png"; ?>" alt="profile picture" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $user["name"]; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $user["email"]; ?></span>
                                    </div>
                                </div>
                                <!--                                <div class="account-dropdown__body">
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                                    </div>
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                                    </div>
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                                    </div>
                                                                </div>-->
                                <div class="account-dropdown__footer">
                                    <a href="../controller/logout.php">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>