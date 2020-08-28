@extends ('Admin-Side.layouts.admin-desgin')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-gray-800 mb-2 ">
        <div class=" row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Videos</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Videos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">uplode Videos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="uplode-videos w-full sm:max-w-sm md:max-w-md lg:max-w-lg mt-10">
        <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-gray-800">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Video Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="video-name" name="video-name" type="text" placeholder="Video's Name">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="decription" name="decription" placeholder="The description of video is here"></textarea>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Url
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Video link">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Uplode Video
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-white mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="uplode-video" type="file" name="uplode-video">
            </div>
            <div class="flex items-center justify-between mb-0">
                <button
                    class="btn btn-info hvr-sweep-left  font-bold py-2 px-5 text-white rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Uplode
                </button>
            </div>
        </form>
    @endsection
