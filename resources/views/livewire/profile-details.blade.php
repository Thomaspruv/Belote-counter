<div>
    <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
    <form>
        <div class="space-y-6">
        <div>
            <h1 class="text-xl leading-6 font-medium text-white">Profile Settings</h1>
            <p class="mt-1 text-sm text-gray-200">Let’s get started by filling in the information below to create your new project.</p>
        </div>

        <div>
            <label for="pseudo" class="block text-sm font-medium text-gray-200"> League of Legend Pseudo : </label>
            <div class="mt-1">
            <input type="text" name="pseudo" id="pseudoe" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Faker">
            </div>
        </div>

        <div class="space-y-2">
            <div class="space-y-1">
            <label for="add-team-members" class="block text-sm font-medium text-gray-200"> Share my comments </label>
            <p id="add-team-members-helper" class="sr-only">Search by email address</p>
            <div class="flex">
                <div class="flex-grow">
                <input type="text" name="add-team-members" id="add-team-members" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Email address" aria-describedby="add-team-members-helper">
                </div>
                <span class="ml-3">
                <button type="button" class="bg-white inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    <!-- Heroicon name: solid/plus -->
                    <svg class="-ml-2 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Add</span>
                </button>
                </span>
            </div>
            </div>

            <div class="border-b border-gray-200">
            <ul role="list" class="divide-y divide-gray-200">
                <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="ml-3 flex flex-col">
                    <span class="text-sm font-medium text-gray-900">Calvin Hawkins</span>
                    <span class="text-sm text-gray-500">calvin.hawkins@example.com</span>
                </div>
                </li>

                <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="ml-3 flex flex-col">
                    <span class="text-sm font-medium text-gray-900">Bessie Richards</span>
                    <span class="text-sm text-gray-500">bessie.richards@example.com</span>
                </div>
                </li>

                <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="ml-3 flex flex-col">
                    <span class="text-sm font-medium text-gray-900">Floyd Black</span>
                    <span class="text-sm text-gray-500">floyd.black@example.com</span>
                </div>
                </li>
            </ul>
            </div>
        </div>

        
    </form>
    </main>
</div>
