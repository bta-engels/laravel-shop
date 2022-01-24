<div class="side_bar">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bxl-flickr-square'></i>
            <div class="logoname">SqaureCode</div>
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
            <a href="{{ route('login') }}">
                <i class='bx bx-user'></i>
                <span class="link_name">{{ __('Login') }}</span>
            </a>
            <span class="tooltip">{{ __('Login') }}</span>
        </li>
        <li>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('products') }}">
                <i class='bx bxl-product-hunt'></i>
                <span class="link_name">{{ __('Products') }}</span>
            </a>
            <span class="tooltip">{{ __('Products') }}</span>
        </li>
        <li>
            <a href="{{ route('manufacturers') }}">
                <i class='bx bxs-factory'></i>
                <span class="link_name">Manufacturers</span>
            </a>
            <span class="tooltip">Manufacturers</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt'></i>
                <span class="link_name">Analytics</span>
            </a>
            <span class="tooltip">Analytics</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-folder-minus'></i>
                <span class="link_name">File Manager</span>
            </a>
            <span class="tooltip">File Manager</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cart-alt'></i>
                <span class="link_name">Order</span>
            </a>
            <span class="tooltip">Order</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="link_name">Saved</span>
            </a>
            <span class="tooltip">Saved</span>
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
