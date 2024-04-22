<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ (\Request::route()->getName() =='admin.dashboard') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.dashboard')}}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li>
                <li class="child-menu">
                    <a href="javascript:void(0);"><i class="fas fa-user"></i> <span>User Management</span><span class="toggle-down" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"></span></a>
                    <div class="submenu-dropdown collapse" id="collapseExample2">
                        <ul class="submenu-dropdown">
                            <li class="{{ (\Request::route()->getName() =='seller.sellers') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.sellers')}}" class=""></i> <span>Sellers</span></a>
                            </li>
                            <li class="{{ (\Request::route()->getName() =='seller.customers') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.customers')}}" class=""> <span>Customers </span></a>
                            </li>
                            <li class="{{ (\Request::route()->getName() =='admin.adminusers') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.adminusers')}}" class=""> <span>Admin Users</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="child-menu">
                    <a href="javascript:void(0);"><i class="fas fa-user"></i> <span>Service Management</span><span class="toggle-down" data-toggle="collapse" href="#collapseExample23" role="button" aria-expanded="false" aria-controls="collapseExample23"></span></a>
                    <div class="submenu-dropdown collapse" id="collapseExample23">
                        <ul class="submenu-dropdown">
                            <li class="{{ (\Request::route()->getName() =='admin.services') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.services')}}" class=""> <span>Services </span></a>
                            </li>
                            <li class="{{ (\Request::route()->getName() =='admin.addservice') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.subservices')}}" class=""></i> <span>Sub Services</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.vehicles') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.vehicles')}}"><i class="fas fa-car"></i> <span>Manage Vehicle</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.product') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.product')}}"><i class="fas fa-shopping-bag"></i> <span>Products</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.orders') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.orders')}}"><i class="fas fa-shopping-cart"></i> <span>Manage Orders</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.requests') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.requests')}}"><i class="fas fa-calculator"></i> <span>Manage Requests</span></a>
                </li>
                <!--<li class="{{ (\Request::route()->getName() =='admin.chat') ?  'menu-item-active ' : '' }}">-->
                <!--    <a href="{{route('admin.chat')}}"><i class="fas fa-message"></i> <span>Chat</span></a>-->
                <!--</li>-->
                <li class="{{ (\Request::route()->getName() =='admin.chat') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.chat')}}"><i class="fas fa-comments"></i> <span>Manage Chat</span></a>
                </li>
                <li class="child-menu">
                    <a href="javascript:void(0);"><i class="fas fa-wallet"></i> <span>Manage Payment</span></a><span class="toggle-down" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"></span>
                    <div class="submenu-dropdown collapse" id="collapseExample3">
                        <ul class="submenu-dropdown">
                            <li class="{{ (\Request::route()->getName() =='admin.payments') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.payments')}}" class=""></i> <span>Payment</span></a>
                            </li>
                            <li class="{{ (\Request::route()->getName() =='seller.customers') ?  'menu-item-active ' : '' }}">
                                <a href="{{route('admin.customers')}}" class=""> <span>Billing Details </span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.quotes') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.quotes')}}"><i class="fas fa-quote-right"></i> <span>Manage Quote</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.global_settings') ?  'menu-item-active ' : '' }}">
                    <a href="{{route('admin.global_settings')}}"><i class="fas fa-cog"></i> <span>Setting</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() =='admin.global_settings') ?  'menu-item-active ' : '' }}">

                </li>
            </ul>
        </div>
    </div>
</div>