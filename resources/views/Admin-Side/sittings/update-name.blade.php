@extends ('Admin-Side.layouts.admin-desgin')
@section('content')
    <!-- Tabs -->
    <div class="card mt-6">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Profile</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Password</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="home" role="tabpanel">
                <div class="p-20 bg-gray-800">
                    <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-gray-800">
                        <div class="mb-4">
                            <label class="block  text-sm font-bold mb-2" for="username">
                                Admin Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline"
                                id="video-name" name="video-name" type="text" placeholder="Video's Name">
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                Admin Email
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3  mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="decription" type="email" name="decription" placeholder="Enter Your Email" />
                        </div>
                        <div class="mb-6">
                            <label class="block  text-sm font-bold mb-2" for="password">
                                Uplode Avater
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-white mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="uplode-video" type="file" name="uplode-video">
                        </div>
                        <div class="flex items-center justify-between mb-0">
                            <button
                                class="btn btn-info hvr-sweep-left  font-bold py-2 px-5 text-white rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane  p-20" id="profile" role="tabpanel">
                <div class="p-20">
                    <p class="m-t-10">And is full of waffle to It has multiple paragraphs and is full of waffle to pad
                        out the comment. Usually, you just wish these sorts of comments would come to an end.multiple
                        paragraphs and is full of waffle to pad out the comment..</p>
                </div>
            </div>
        </div>
    </div>
@endsection
