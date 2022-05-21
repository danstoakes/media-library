<a class="[ flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group cursor-pointer ] open-modal" modal-config-data="{{ json_encode([
    'user' => Auth::user(),
    'title' => 'Upload',
    'subtitle' => 'Select media to upload',
    'border' => true,
    'extraClasses' => 'w-[64rem] max-w-md sm:max-w-lg'
]) }}" modal-view-target="modal/template/media-upload-form">
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
    </svg>
    <span class="flex-1 ml-3 whitespace-nowrap sm:block hidden">Upload</span>
</a>