@extends ('Admin-Side.layouts.admin-desgin')
@section('content')
    <!-- Tabs -->
    <div class="card mt-6">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs " role="tablist">
            <li class="nav-item "> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Profile</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Password</span></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="home" role="tabpanel">
                <div class="p-10 bg-gray-900">
                    <form class="shadow-md rounded  pb-8 mb-4 bg-gray-900">
                        <div class="mb-4">
                            <label class="block  text-sm font-bold mb-2" for="username">
                                Admin Name
                            </label>
                            <input
                                class="shadow appearance-none border text-gray-900 rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline"
                                id="video-name" name="video-name" type="text" placeholder="Video's Name">
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                Admin Email
                            </label>
                            <input
                                class="shadow appearance-none border text-gray-900  border-red-500 rounded w-full py-2 px-3  mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="decription" type="email" name="decription" placeholder="Enter Your Email" />
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                Uplode Avater
                            </label>
                            <input
                                class="shadow appearance-none border text-white  border-red-500 rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="uplode-video" type="file" name="uplode-video">
                        </div>
                        <div class="flex items-center justify-between mb-0">
                            <button
                                class="btn btn-info hvr-sweep-left  font-bold py-2 px-5 text-white rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Password tab -->
            <div class="tab-pane " id="profile" role="tabpanel">
                <div class="p-10 bg-gray-900">
                    <form class="shadow-md rounded  pb-8 mb-4 bg-gray-900">
                        <div class="mb-4">
                            <label class="block  text-sm font-bold mb-2" for="Password">
                                Current Password
                            </label>
                            <input
                                class="shadow appearance-none border text-gray-900 rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline"
                                id="video-name" name="video-name" type="text" placeholder="Video's Name">
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                New Password
                            </label>
                            <input
                                class="shadow appearance-none border text-gray-900  border-red-500 rounded w-full py-2 px-3  mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="decription" type="email" name="decription" placeholder="Enter Your Email" />
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                Comfirm Password
                            </label>
                            <input
                                class="shadow appearance-none border text-gray-900  border-red-500 rounded w-full py-2 px-3  mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="decription" type="email" name="decription" placeholder="Enter Your Email" />
                        </div>
                        <div class="flex items-center justify-between mb-0">
                            <button
                                class="btn btn-info hvr-sweep-top  font-bold py-2 px-5 text-white rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
