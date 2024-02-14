<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
       Invoice App
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{Request::is('home') ? 'active':''}}  ">
            <a class="nav-link" href="{{url('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{Request::is('customers') ? 'active':''}}">
            <a class="nav-link" href="{{url('customers')}}">
              <i class="material-icons">person</i>
              <p>Customers</p>
            </a>
          </li>
          <!-- <li class="nav-item {{Request::is('add-customer') ? 'active':''}}">
            <a class="nav-link" href="{{url('add-customer')}}">
              <i class="material-icons">person</i>
              <p>Add Customer</p>
            </a>
          </li> -->
          <li class="nav-item {{Request::is('invoices') ? 'active':''}}">
            <a class="nav-link" href="{{url('invoices')}}">
              <i class="material-icons">person</i>
              <p>Invoice </p>
            </a>
          </li>
          <!-- <li class="nav-item {{Request::is('add-invoice') ? 'active':''}}">
            <a class="nav-link" href="{{url('add-invoice')}}">
              <i class="material-icons">person</i>
              <p>Add Invoice</p>
            </a>
          </li> -->
       

        
        </ul>
      </div>
    </div>