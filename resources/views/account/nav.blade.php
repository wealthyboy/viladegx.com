

<div class="sidebar-overlay"></div>
<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
   <div class="pin-wrapper" style="">
      <div class="sidebar-wrapper" style="">
         <h2 class="">Dashboard</h2>
         <div class="list-group">
            <a href="/account" class="list-group-item list-group-item-action text-uppercase bold p-4">Account   <span class="float-right">&#62;</span> </a>
            <a href="/change/password" class="list-group-item list-group-item-action text-uppercase  bold p-4">Change Password   <span>&#62;</span> </a>
            <a href="/orders"          class="list-group-item list-group-item-action text-uppercase bold p-4"> Orders</a>
            <a href="/address"         class="list-group-item list-group-item-action  text-uppercase bold p-4"> Addresses</a>
            <a href="/profile"         class="list-group-item list-group-item-action  text-uppercase bold p-4"> Profile</a>
            <a href="/products"        class="list-group-item list-group-item-action  text-uppercase bold p-4"> Products</a>
            <a href="/sales"         class="list-group-item list-group-item-action  text-uppercase bold p-4">Sales</a>

            <a href="/payment"        class="list-group-item list-group-item-action  text-uppercase bold p-4"> Settings</a>
            <a href="#" 
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"
               class="list-group-item list-group-item-action bold text-uppercase p-4">
               <i class="fas fa-sign-out-alt left"></i> Logout
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            </a>
         </div>
      </div>
   </div>
</aside>
<!-- End .col-lg-3 -->

