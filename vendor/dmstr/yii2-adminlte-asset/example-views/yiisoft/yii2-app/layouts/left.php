<?php

use yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::to(["/user/index"]) ?>"><i class="fa fa-circle-o"></i> Users </a></li>
                    <li><a href="<?= Url::to(["/user-profile/index"]) ?>"><i class="fa fa-circle-o"></i> Users Profile</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-ol"></i> <span>Transactions</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::to(["/transaction/index"]) ?>"><i class="fa fa-flag"></i>All Transactions</a></li>
                   <li><a href="<?= Url::to(["#", 'id' => $category->id]) ?>"><i class="fa fa-circle-o"></i> <?= $category->title ?> </a></li>
                    


                </ul>
            </li>
            <li><a href="<?= Url::to(["/orders/index"]) ?>"><i class="fa fa-flag"></i>Orders </a></li>
        </ul>

        <!-- /.search form -->

        

    </section>

</aside>