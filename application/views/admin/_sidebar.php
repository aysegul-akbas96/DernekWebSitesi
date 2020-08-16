 <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?=base_url()?>admin/home"><i class="menu-icon fa fa-laptop"></i>Anasayfa </a>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Ayarlar</a>
                        <ul class="sub-menu children dropdown-menu"> 

                                                   <li><i class="menu-icon fa fa-cogs"></i><a href="<?=base_url()?>admin/ayar">Site Ayarları</a></li>

                            <li><i class="menu-icon fa fa-cogs"></i><a href="<?=base_url()?>admin/aayar">Anasayfa Ayarları</a></li>

                            <li><i class="ti-user"></i><a href="<?=base_url()?>admin/kullanici">Yönetici Listesi</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Menü Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/menu">Menü Listele</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-book"></i>Y. Kurulu Yönetim</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class=" ti-list"></i><a href="<?=base_url()?>admin/yonetici">Yönetimi Listele</a></li>
                            <li><i class="ti-check-box"></i><a href="<?=base_url()?>admin/yonetici/ekle">Yönetimi Ekle</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-image"></i>Resim Ayarları</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-gallery"></i><a href="<?=base_url()?>admin/album">Albüm Ayarları</a></li>

                            <li><i class="menu-icon ti-layout-list-large-image"></i><a href="<?=base_url()?>admin/resim">Resim Ayarları</a></li>

                             

                        </ul>
                    </li>

                    <li class="menu-title"></li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-bookmark-alt"></i>Haber Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/haber">Haber Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/haber/ekle">Haber Ekle</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-write"></i>Etkinlik Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/etkinlik">Etkinlik Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/etkinlik/ekle">Etkinlik Ekle</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-layout-cta-left"></i>Ödül Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/odul">Ödül Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/odul/ekle">Ödül Ekle</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-receipt"></i>Dernek Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/dernek">Dernek Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/dernek/ekle">Dernek Ekle</a></li>
                        </ul>
                    </li>
                    
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Duyuru Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/duyuru">Duyuru Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/duyuru/ekle">Duyuru Ekle</a></li>
                        </ul>
                    </li>

                    <li class="menu-title"></li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-video-clapper"></i>Video Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/video">Video Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/video/ekle">Video Ekle</a></li>
                            
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-email"></i>Mesaj Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti-email"></i><a href="<?=base_url()?>admin/mesajlar">Mesajlar</a></li>
                            
                            
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->