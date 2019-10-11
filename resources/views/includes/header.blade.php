<header class="header">
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('static/logo.svg') }}" alt="logo" height="48">
                            </a>
                        </div>
                        <nav class="main_nav">
                            <ul>
                                @foreach ($categories as $category)
                                <li class="{{ count($category->subcategories) > 0 ? 'hassubs' : '' }}">
                                    <a href="#">{{ $category->name }}</a>
                                    <ul>
                                        @foreach ($category->subcategories as $subcategory)
                                        <li><a href="{{ route('product.show.category', ['subcategory' => $subcategory]) }}">{{ $subcategory->name }}</a></li>
                                        <hr>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="header_extra ml-auto">
                            <div class="shopping_cart">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489 489">
                                        <path
                                            d="M440.1 422.7l-28-315.3c-.6-7-6.5-12.3-13.4-12.3h-57.6C340.3 42.5 297.3 0 244.5 0s-95.8 42.5-96.6 95.1H90.3c-7 0-12.8 5.3-13.4 12.3l-28 315.3c0 .4-.1.8-.1 1.2 0 35.9 32.9 65.1 73.4 65.1h244.6c40.5 0 73.4-29.2 73.4-65.1 0-.4 0-.8-.1-1.2zM244.5 27c37.9 0 68.8 30.4 69.6 68.1H174.9c.8-37.7 31.7-68.1 69.6-68.1zm122.3 435H122.2c-25.4 0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0 7.5 6 13.5 13.5 13.5s13.5-6 13.5-13.5v-41h139.3v41c0 7.5 6 13.5 13.5 13.5s13.5-6 13.5-13.5v-41h45.2l26.9 302.3c-.4 20.7-21.1 37.5-46.4 37.5z" />
                                    </svg>
                                    <div>Cart <span>(0)</span></div>
                                </a>
                            </div>
                            <div class="search">
                                <div class="search_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.084 475.084">
                                        <path
                                            d="M464.524 412.846l-97.929-97.925c23.6-34.068 35.406-72.047 35.406-113.917 0-27.218-5.284-53.249-15.852-78.087-10.561-24.842-24.838-46.254-42.825-64.241-17.987-17.987-39.396-32.264-64.233-42.826C254.246 5.285 228.217.003 200.999.003c-27.216 0-53.247 5.282-78.085 15.847C98.072 26.412 76.66 40.689 58.673 58.676c-17.989 17.987-32.264 39.403-42.827 64.241C5.282 147.758 0 173.786 0 201.004c0 27.216 5.282 53.238 15.846 78.083 10.562 24.838 24.838 46.247 42.827 64.234 17.987 17.993 39.403 32.264 64.241 42.832 24.841 10.563 50.869 15.844 78.085 15.844 41.879 0 79.852-11.807 113.922-35.405l97.929 97.641c6.852 7.231 15.406 10.849 25.693 10.849 9.897 0 18.467-3.617 25.694-10.849 7.23-7.23 10.848-15.796 10.848-25.693.003-10.082-3.518-18.651-10.561-25.694zM291.363 291.358c-25.029 25.033-55.148 37.549-90.364 37.549-35.21 0-65.329-12.519-90.36-37.549-25.031-25.029-37.546-55.144-37.546-90.36 0-35.21 12.518-65.334 37.546-90.36 25.026-25.032 55.15-37.546 90.36-37.546 35.212 0 65.331 12.519 90.364 37.546 25.033 25.026 37.548 55.15 37.548 90.36 0 35.216-12.519 65.331-37.548 90.36z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Panel -->
    <div class="search_panel trans_300">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#">
                            <input type="text" class="search_input" placeholder="Search" required="required">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Menu -->
<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">

            <div class="page_menu_search menu_mm">
                <form action="#">
                    <input type="search" required="required" class="page_menu_search_input menu_mm"
                        placeholder="Search for products...">
                </form>
            </div>
            <ul class="page_menu_nav menu_mm">
                @foreach ($categories as $category)
                    <li class="page_menu_item has-children menu_mm">
                    <a href="#">{{ $category->name }}<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        @foreach ($category->subcategories as $subcategory)
                            <li class="page_menu_item menu_mm"><a href="{{ route('product.show.category', ['subcategory' => $subcategory]) }}">{{ $subcategory->name }}<i class="fa fa-angle-down"></i></a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
</div>
