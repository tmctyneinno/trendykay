<div class="col-md-4">
    <div class="dashboard-menu">
        <ul class="nav flex-column" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="dashboard-tab"  href="{{route('users.account')}}"  
                aria-controls="dashboard" aria-selected="false">Account details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="orders-tab"  href="{{route('users.orders')}}"  
                aria-controls="orders" aria-selected="false"><i class="fi-rs-shoppingg-bag mr-10"></i>Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="track-orders-tab"  href="{{route('users.address')}}"  
                aria-controls="track-orders" aria-selected="false"><i class="fi-rs-markerr mr-10"></i>My Address Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="address-tab"  href="{{route('users.recentViews')}}"  aria-controls="address" 
                aria-selected="true"><i class="fi-rs-eyes mr-10"></i>Recently Viewed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="account-detail-tab"  href="{{route('user.account.details')}}"  
                aria-controls="update-detail" aria-selected="true"><i class="fi-rs-atm mr-10"></i>Update Account</a>
            </li>
            
        </ul>
    </div>
</div>