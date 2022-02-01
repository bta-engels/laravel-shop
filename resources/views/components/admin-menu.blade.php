<div class="side_bar">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bxl-flickr-square'></i>
            <div class="logoname">AdminSqaureCode</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="navi_list">
        <li>
            <i class='bx bx-search'></i>
            <input type="text" name="search" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="{{ route('my-logout') }}">
                <i class='bx bx-user'></i>
                <span class="link_name">{{ __('Logout') }}</span>
            </a>
            <span class="tooltip">{{ __('Logout') }}</span>
        </li>
        <li>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <!-- /admin/products -->
            <a href="{{ route('admin.products.index') }}">
                <i class='bx bxl-product-hunt'></i>
                <span class="link_name">{{ __('Products') }}</span>
            </a>
            <span class="tooltip">{{ __('Products') }}</span>
        </li>
        <li>
            <a href="{{ route('admin.manufacturers.index') }}">
                <i class='bx bxs-factory'></i>
                <span class="link_name">{{ __('Manufacturers') }}</span>
            </a>
            <span class="tooltip">{{ __('Manufacturers') }}</span>
        </li>
        <li>
            <a href="{{ route('admin.categories.index') }}">
                <i class='bx bxs-category'></i>
                <span class="link_name">Category</span>
            </a>
            <span class="tooltip">Category</span>
        </li>
        <li>
            <a href="{{ route('admin.blogs.index') }}">
                <i class='bx bxl-blogger'></i>
                <span class="link_name">Blogs</span>
            </a>
            <span class="tooltip">Blogs</span>
        </li>
        <li>
            <a href="{{ route('admin.pages.index') }}">
                <i class='bx bx-spreadsheet'></i>
                <span class="link_name">Pages</span>
            </a>
            <span class="tooltip">Pages</span>
        </li>
        <li>
            <a href="{{ route('admin.features.index') }}">
                <i class='bx bxs-report'></i>
                <span class="link_name">Feature</span>
            </a>
            <span class="tooltip">Feature</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
    </ul>
</div>
<script>
	let btn = document.querySelector("#btn"),
		side_bar = document.querySelector(".side_bar")
	searchbtn = document.querySelector(".bx-search");

	btn.onclick = function(){
		side_bar.classList.toggle("active");
	}
	searchbtn.onclick = function(){
		searchbtn.classList.toggle("active");
	}
</script>
