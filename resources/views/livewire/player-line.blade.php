<div class="bg-white shadow overflow-hidden sm:rounded-md w-full mb-2 bg-{{$color}}-100 hover:bg-gray-50">
    <div class="flex items-center px-3 py-3 sm:px-6">
        <div class="min-w-0 flex-1 flex items-center">
            <div class="flex-shrink-0">
                <img class="h-12 w-12 rounded" src="{{ url('/imgs/persos/' . $player['championName'] . '.png') }}" alt="">
            </div>
            <div class="min-w-0 ml-1">
                <img class="h-5 w-5 rounded mb-1" src="{{ url('/imgs/sums/' . $player['summoner1Id'] . '.png') }}" alt="">
                <img class="h-5 w-5 rounded" src="{{ url('/imgs/sums/' . $player['summoner2Id'] . '.png') }}" alt="">
            </div>
            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-4 md:gap-4" x-data="{ isOn: @entangle('isOn') }">
                <div class="mt-2">
                @if(strtolower($player['summonerName']) == $user->pseudo)
                <p class="text-sm font-medium text-indigo-600 truncate font-extrabold">{{$player['summonerName']}}</p>
                @else
                <p class="text-sm font-medium text-indigo-600 truncate">{{$player['summonerName']}}</p>
                @endif
                <p class="mt-2 flex items-center text-sm text-gray-500 font-bold">
                    <!-- Heroicon name: solid/mail -->
                    
                    <span>{{$player['kills']}} / {{$player['deaths']}} / {{$player['assists']}}</span>
                </p>
                </div>
                <div class="grid place-items-center h-full">
                    <span
                        @click="isOn = !isOn"
                        :aria-checked="isOn"
                        :class="{'bg-indigo-600': isOn, 'bg-gray-200': !isOn }"
                        class="bg-gray-200 relative inline-block flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
                        role="checkbox"
                        tabindex="0"
                        >
                        <span
                            aria-hidden="true"
                            :class="{'translate-x-5': isOn, 'translate-x-0': !isOn }"
                            class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"
                        ></span>
                    </span>
                </div>
                <div class="" x-show="isOn">
                    <div>
                        <label class="text-base font-small text-gray-900">Good game ?</label>
                        <fieldset class="">
                            <div class="">
                                <form x-data="{ goodgame: @entangle('goodgame') }">
                                    <div class="flex items-center">
                                        <input id="email-{{$player['summonerName']}}" @click="goodgame=true"  name="goodgame" type="radio" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" checked>
                                        <label for="email-{{$player['summonerName']}}" class="ml-3 block text-sm font-small text-gray-700"> Yes ! </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sms-{{$player['summonerName']}}" @click="goodgame=false"  name="goodgame" type="radio" value="0" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="sms-{{$player['summonerName']}}" class="ml-3 block text-sm font-small text-gray-700"> No ! </label>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="" x-show="isOn">
                    <div>
                        <p class=" flex items-center text-sm text-gray-500">
                            <textarea wire:model.defer="comment" rows="2" name="comment" id="comment" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>