<nav class="nav-bar border-b border-gray-800 ">
    <div id="append-hand-icon" class=" container flext justify-between item-center px-2 py-2">
        <i class="left"></i>
        <i class="right"></i>
        <ul class="flex flex-col md:flex-row mt-3 md:mt-0 items-center">
            <li class=" nav md:ml-16 mt-3 md:mt-0 active-links ">
                <div id="button_wrapper">
                    <div class="dropdown">
                        <button class="dropbtn  hover:text-gray-300">
                            <div class="cicle-around-incon">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </button>
                        <div class="dropdown-content">
                            <a href="#"></a>
                            <a href="#">Unread Messages</a>
                            <a href="#">Inbox</a>
                            <a href="#">Sent Messages</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class=" nav md:ml-6 mt-3 md:mt-0 ">
                <div id="button_wrapper">
                    <div class="dropdown">
                        <button class="dropbtn  hover:text-gray-300">
                            <div class="cicle-around-incon">
                                <i class="fas fa-cogs "></i>
                            </div>
                        </button>
                        <div class="dropdown-content">
                            <a href="#"></a>
                            <a href="#">Unread Messages</a>
                            <a href="#">Inbox</a>
                            <a href="#">Sent Messages</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class=" nav md:ml-6 mt-3 md:mt-0 ">
                <div id="button_wrapper">
                    <div class="dropdown">
                        <button class="dropbtn  hover:text-gray-300">
                            <div class="cicle-around-incon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                        </button>
                        <div class="dropdown-content">
                            <a href="#"></a>
                            <a href="#">Unread Messages</a>
                            <a href="#">Inbox</a>
                            <a href="#">Sent Messages</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <div class=" search float-right nav bg-gray-600">
            <input type="text" placeholder="Search.." name="search" class="nav bg-gray-600 items-center focus:bg-gray-600">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
        <div class="profile">
            <img src="{{ url('images/profile.jpg') }}" alt=" Profile">
        </div>


    </div>

</nav>
