<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="" class="logo">
             <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefit-clients-logo.png" alt="Benefit Client Template" />
            <img class="logo-inverse" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/build/assets/common/img/logo-inverse.png" alt="Clean UI Admin Template" />
            
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            
            <li>
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/dashboard">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/manageadminuser">
                    <i class="left-menu-link-icon fa fa-group"><!-- --></i>
                    Manage Admin Users
                </a>
            </li>
             <li>
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/clients/addclient">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Clients
                </a>
            </li>
              <li>
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/clientusers/addclientuser">
                    <i class="left-menu-link-icon icmn-stack3"><!-- --></i>
                    Client Users
                </a>
            </li>
            <li class="left-menu-list-separator "><!-- --></li>
          
            <li class="left-menu-list-submenu">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2"><!-- --></i>
                    MasterData
                </a>
                <ul class="left-menu-list list-unstyled">
                    <li>
                        <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/systembilling">
                            System Billing	
                        </a>
                    </li>
                    <li>
                        <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/systempricing">
                            System Pricing
                        </a>
                    </li>
                </ul>
            </li>
           

        </ul>
    </div>
</nav>