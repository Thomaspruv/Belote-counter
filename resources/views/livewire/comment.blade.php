<div class=' w-9/12 h-1/8'>
    @if($comment->status)
      <div class="block  bg-green-600 rounded">
    @else
      <div class="block  bg-red-600 rounded">
    @endif
        <div class="flex items-center px-4 py-4 sm:px-6">
          <div class="min-w-0 flex-1 flex items-center">
          <div class="flex-shrink-0">
                <img class="h-12 w-12 rounded" src="{{ url('/imgs/persos/' . $comment->champion . '.png') }}" alt="">
            </div>
            <div class="min-w-0 ml-1">
                <img class="h-5 w-5 rounded mb-1" src="{{ url('/imgs/sums/' . $comment->sum1 . '.png') }}" alt="">
                <img class="h-5 w-5 rounded" src="{{ url('/imgs/sums/' . $comment->sum2 . '.png') }}" alt="">
            </div>
            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-3 md:gap-4">
              <div>
                <p class="text-sm font-medium text-indigo-300 truncate">{{ucfirst($comment->pseudo)}}</p>
                <p class="mt-2 flex items-center text-sm text-white">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span >{{$comment->kills}} / {{$comment->deaths}} / {{$comment->assists}}</span>
                </p>
              </div>
              <div class="text-sm">
                  {{$comment->comments}}
              </div>
              <div class="hidden md:block">
                <div>
                  <p class="text-sm text-gray-100">
                    <time datetime="2020-01-07">{{($comment->created_at)}}</time>
                  </p>
                  @if($comment->result)
                  <p class="mt-2 flex items-center text-sm text-gray-200">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Victory
                  </p>
                  @else
                  <p class="mt-2 flex items-center text-sm text-gray-200">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    Lost
                  </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
          
        </div>
  </div>
</div>


