<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          <span style="color:yellowgreen; font-size:2rem; letter-spacing:10px;">NwY</span>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{Request::is('dashboard')?'active':'';}} ">
            <a class="nav-link" href="./dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{Request::is('categories')?'active':'';}}">
            <a class="nav-link" href="./categories">
              <i class="material-icons">category</i>
              <p>Category</p>
            </a>
          </li>
            <li class="nav-item {{Request::is('add-categories')?'active':'';}}">
            <a class="nav-link" href="./add-categories">
              <i class="material-icons">add</i>
              <p>Add Category</p>
            </a>
          </li>

          <li class="nav-item {{Request::is('products')?'active':'';}}">
            <a class="nav-link" href="./products">
              <i class="material-icons">shop</i>
              <p>Product</p>
            </a>
          </li>
            <li class="nav-item {{Request::is('add-products')?'active':'';}}">
            <a class="nav-link" href="./add-products">
              <i class="material-icons">add</i>
              <p>Add Product</p>
            </a>
          </li>


          <li class="nav-item  ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
         
         
         
        </ul>
      </div>
</div>
