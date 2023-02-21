 <div class="vertical-menu bg-dark border-end border-1 border-secondary">

     <div class="h-100" data-simplebar>

         <!-- User details -->

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a class="waves-effect" href="{{ route('dashboard') }}">
                         {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                         <span>Dashboard</span>
                     </a>
                 </li>
                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-home-fill"></i>
                         <span>Product Section</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('product.add') }}">Add Product</a></li>
                         <li><a href="{{ route('product.view') }}">View Product</a></li>

                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-home-fill"></i>
                         <span>Home Section</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('home.slide') }}">Update Home Section</a></li>

                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-file-info-fill"></i>
                         <span>About Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('about.page') }}">Update About Info</a></li>
                         <li><a href="{{ route('about.skill') }}">Skills</a></li>
                         <li><a href="{{ route('about.traning') }}">Tranings</a></li>
                         <li><a href="{{ route('about.education') }}">Educations</a></li>
                         <li><a href="#">About Multi Image</a></li>
                         <li><a href="#">All Multi Image</a></li>
                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-user-fill"></i>
                         <span>Portfolio Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">All Portfolio</a></li>
                         <li><a href="#">Add Portfolio</a></li>

                     </ul>
                 </li>

                 <li class="menu-title">Pages</li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-newspaper-fill"></i>
                         <span>Blog Category</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">All Blog Category</a></li>
                         <li><a href="#">Add Blog Category</a></li>
                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-profile-line"></i>
                         <span>Blog Page</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">All Blog</a></li>
                         <li><a href="#">Add Blog</a></li>

                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-file-chart-fill"></i>
                         <span>Footer Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">Footer Setup</a></li>

                     </ul>
                 </li>

                 <li>
                     <a class="has-arrow waves-effect" href="javascript: void(0);">
                         <i class="ri-contacts-book-2-fill"></i>
                         <span>Contact Message </span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">Contact Message</a></li>

                     </ul>
                 </li>

             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
