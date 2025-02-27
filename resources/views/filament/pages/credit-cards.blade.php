<x-filament-panels::page>
@vite('resources/js/app.js')
@php
    $bgRecord = [
        'bg-[#E7EDFF]',
        'bg-[#E7EDFF]',
        'bg-[#FFE0EB]'
    ];
    $card3 = [
        'bg-gradient-to-r from-[#2D60FF] to-[#539BFF]',
        'bg-gradient-to-r from-[#4C49ED] to-[#0A06F4]',
        'bg-[#FFFFFF]'
    ];
@endphp
<div class="container h-full">
      <p class="text-[#333B69] text-[22px] font-semibold">My Card</p>
      <div class="flex space-x-8 my-4">
      @foreach ($card3 as $index => $obj)
        <div class="rounded-3xl h-[225px] w-[350px] {{ $obj }}">
            <div class="p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-xs {{ $index === 2 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">Balance</p>
                        <p class="text-xl {{ $index === 2 ? 'text-[#343C6A]' : 'text-white' }}">$5,756</p>
                    </div>
                    <div>
                        <img src="{{ $index === 2 ? '/card/white-card.png' : '/card/card.png' }}" 
                            class="w-[35px] h-[35px]" 
                            alt="card">
                    </div>
                </div>
                <div class="flex space-x-12 mt-7">
                    <div>
                        <p class="text-xs {{ $index === 2 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">CARD HOLDER</p>
                        <p class="text-xl {{ $index === 2 ? 'text-[#343C6A]' : 'text-white' }}">Eddy Cusuma</p>
                    </div>
                    <div>
                        <p class="text-xs {{ $index === 2 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">CARD HOLDER</p>
                        <p class="text-xl {{ $index === 2 ? 'text-[#343C6A]' : 'text-white' }}">12/22</p>
                    </div>
                </div>
            </div>
            <div class="px-6 py-3 flex justify-between h-[70px] bg-[linear-gradient(180deg,rgba(255,255,255,0.15)0%,rgba(255,255,255,0)100%)] 
                        {{ $index === 2 ? 'border-t border-[#DFEAF2]' : '' }}">
                <p class="text-[22px] {{ $index === 2 ? 'text-[#343C6A]' : 'text-white' }}">3778 **** **** 1234</p>
                <div>
                    <img src="{{ $index === 2 ? '/card/white-master.png' : '/card/master.png' }}" 
                        class="w-[44px] h-[30px]" 
                        alt="master">
                </div>
            </div>
        </div>
    @endforeach
      </div>
      <div class="w-full">
        <p class="text-[#333B69] text-[22px] font-semibold">Card Expense Statistics</p>

        <div class="flex space-x-8 mt-4">
          <div class="bg-white w-[350px] h-[310px] rounded-3xl">
          <canvas id="expense" class="p-4"></canvas>
          </div>
          <div class="w-full">
            @foreach (range(1, 3) as $obj)
                <div class="mb-5 rounded-3xl p-6 flex justify-between items-center bg-white h-[90px]">
                    <div class="flex items-center rounded-3xl w-[60px] h-[60px] p-4 {{ $bgRecord[$obj] ?? '' }}">
                        <img src="/card/{{ $obj }}.png" class="w-[26px] h-[20px]" alt="master">
                    </div>
                    <div>
                        <p class="text-[#232323] text-base font-medium">Card Type</p>
                        <p class="mt-1 text-[#718EBF]">Secondary</p>
                    </div>
                    <div>
                        <p class="text-[#232323] text-base font-medium">Bank</p>
                        <p class="mt-1 text-[#718EBF]">DBL Bank</p>
                    </div>
                    <div>
                        <p class="text-[#232323] text-base font-medium">Card Number</p>
                        <p class="mt-1 text-[#718EBF]">**** **** 5600</p>
                    </div>
                    <div>
                        <p class="text-[#232323] text-base font-medium">Namain Card</p>
                        <p class="mt-1 text-[#718EBF]">William</p>
                    </div>
                    <div class="text-[15px] text-[#1814F3] font-medium">View Details</div>
                </div>
            @endforeach
          </div>
        </div>
        <div class="w-full flex space-x-8 justify-between">
          <div class="w-full">
            <p class="text-[#333B69] text-[22px] font-semibold mb-4">Add New Card</p>
            <div class="rounded-3xl bg-white p-6">
              <p class="text-[#718EBF]">
                Credit Card generally means a plastic card issued by Scheduled Commercial Banks assigned to a
                Cardholder,
                with a credit limit, that can be used to purchase goods and services on credit or obtain cash advances.
              </p>
              <div class="mt-8">
                <form class="space-y-4">
                  <!-- Input Fields -->
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label for="input1" class="block font-medium text-[#232323] text-base mb-2">Card Type</label>
                      <input type="text" id="input1"
                        class="text-[#718EBF] placeholder-[#718EBF] h-[50px] mt-1 block w-full px-4 py-2 border border-gray-300 rounded-[15px] shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Classic" />
                    </div>
                    <div>
                      <label for="input2" class="block text-[#232323] text-base font-medium mb-2">Name On Card</label>
                      <input type="text" id="input2"
                        class="text-[#718EBF] placeholder-[#718EBF] h-[50px] mt-1 block w-full px-4 py-2 border border-gray-300 rounded-[15px] shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="My Cards" />
                    </div>
                    <div>
                      <label for="input3" class="block text-[#232323] text-base font-medium mb-2">Card Number</label>
                      <input type="text" id="input3"
                        class="text-[#718EBF] placeholder-[#718EBF] h-[50px] mt-1 block w-full px-4 py-2 border border-gray-300 rounded-[15px] shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Input Your Card" />
                    </div>
                  </div>
                  <!-- Select Dropdown -->
                  <div class="relative">
                    <label for="select" class="block text-[#232323] text-base font-medium mb-2">Expiration Date</label>
                    <select id="select"
                      class="appearance-none text-[#718EBF] h-[50px] mt-1 block w-full px-4 py-2 border border-gray-300 rounded-[15px] shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                      <option value="">Choose an option</option>
                      <option value="option1">25 January 2025</option>
                      <option value="option2">27 January 2025</option>
                      <option value="option3">27 January 2025</option>
                    </select>
                  </div>

                  <!-- Button -->
                  <div>
                    <button type="submit"
                      class="w-[160px] h-[50px] px-4 py-2 bg-[#1814F3] text-white font-semibold rounded-[9px] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                      Add Card
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div>
            <p class="text-[#333B69] text-[22px] font-semibold mb-4">Card Setting</p>
            <div class="rounded-3xl bg-white w-[350px] p-6 space-y-5">
            @foreach (range(1, 6) as $obj)
                <div class="flex items-center space-x-8">
                    <div class="flex items-center rounded-3xl w-[60px] h-[60px] p-4 {{ $bgRecord[$obj] ?? 'bg-[#E7EDFF]' }}">
                        <img src="/card/1.png" class="w-[26px] h-[20px]" alt="master">
                    </div>
                    <div>
                        <p class="text-[#232323] text-base font-medium">Card Type</p>
                        <p class="text-[#718EBF]">Secondary</p>
                    </div>
                </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
          document.title = "CreditCards";
          document.addEventListener("DOMContentLoaded", function () {
              const chartCanvas = document.getElementById('expense');

              if (!chartCanvas) {
                  console.error("Canvas element with ID 'salesChart' not found.");
                  return;
              }

              const ctx = chartCanvas.getContext('2d');

              new Chart(ctx, {
                  type: 'doughnut', // Change chart type to doughnut
                  data: {
                    labels: [
                        'Red',
                        'Blue',
                        'Yellow'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [300, 50, 100],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                  },
                  options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '50%', // Adjust the center hole size
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom' // Moves labels below the chart
                            }
                        }
                    }
              });
          });
      </script>
    </div>
</x-filament-panels::page>
