<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            @guest
                <a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="/index">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title active">Home</span>
                </a>
            @endguest
            @auth
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title active">Dashboard</span>
                </a>
            @endauth
        </li>
        @auth
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                    <i class=" menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        </svg></i>
                    <span class="menu-title">Shop</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                    <ul class="nav flex-column sub-menu ">
                        <li class="nav-item"> <a class="nav-link" href="/itemmall"> Item-Mall </a></li>
                    </ul>
                </div>
            </li>
        @endauth
        @guest
            <li class="nav-item">
                <a class="nav-link" href="/register">
                    <i class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            <path fill-rule="evenodd"
                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                        </svg></i>
                    <span class="menu-title">Register</span>
                </a>
            </li>
        @endguest
        <li class="nav-item">
            <a class="nav-link" href="/topup">
                <i class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                    </svg></i>
                <span class="menu-title">Top Up</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guide" aria-expanded="false" aria-controls="guide">
                <i class=" menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                        <path
                            d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg></i>
                <span class="menu-title">Guide</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guide">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" type="button" data-bs-toggle="modal"
                            data-bs-target="#auto-summon-boss">[SYSTEM]
                            Boss Drop</a></li>
                    <li class="nav-item"> <a class="nav-link" type="button" data-bs-toggle="modal"
                            data-bs-target="#major-boss">[MAJOR]
                            Boss Drop</a></li>
                    <li class="nav-item"> <a class="nav-link" type="button" data-bs-toggle="modal"
                            data-bs-target="#minor-boss">[MINOR]
                            Boss Drop</a></li>
                </ul>
            </div>
        </li>
        @auth
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                    <i class=" menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg></i>
                    <span class="menu-title">Character</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Change
                                Nickname</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Change
                                Gender</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Guild
                                Logo</a></li>
                    </ul>
                </div>
            </li>
        @endauth
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class=" menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z" />
                    </svg></i>
                <span class="menu-title">Download</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link"
                            href="https://drive.google.com/file/d/15jKN3qxREAhCZ-4oqLUHS49TbPtZEBi3/view?usp=sharing">FC
                            - GDrive</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://mega.nz/file/OmxhjZCY#odi7KCxzsrxREzW6ylTSG439obNJkQZfYND9YYe4y8U">FC -
                            Mega.nz</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://1drv.ms/u/s!Ajw_e-ePfMbba6km98VJkMI5P-E?e=oNN8Vy">FC - One Drive</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://www.mediafire.com/file/10bfgvlx1zel4lj/Azura_Rohan_FC_v1.0.rar/file">FC -
                            Media Share</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
