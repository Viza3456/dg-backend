<x-filament-panels::page>
@php
    $card2 = [
    'bg-gradient-to-r from-[#2D60FF] to-[#539BFF]',
    'bg-[#FFFFFF]'
    ];
@endphp

<div class="container h-full">
      <div class="flex space-x-8">
        <div>
          <p class="text-[#333B69] text-[22px] font-semibold">My Card</p>
          <div class="flex space-x-8 my-4">
          @foreach ($card2 as $index => $obj)
            <div class="rounded-3xl h-[225px] w-[350px] {{ $obj }}">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xs {{ $index === 1 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">Balance</p>
                            <p class="text-xl {{ $index === 1 ? 'text-[#343C6A]' : 'text-white' }}">$5,756</p>
                        </div>
                        <div>
                            <img src="{{ $index === 1 ? '/card/white-card.png' : '/card/card.png' }}" class="w-[35px] h-[35px]" alt="card">
                        </div>
                    </div>
                    <div class="flex space-x-12 mt-7">
                        <div>
                            <p class="text-xs {{ $index === 1 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">CARD HOLDER</p>
                            <p class="text-xl {{ $index === 1 ? 'text-[#343C6A]' : 'text-white' }}">Eddy Cusuma</p>
                        </div>
                        <div>
                            <p class="text-xs {{ $index === 1 ? 'text-[#718EBF]' : 'text-[#FFFFFFB2]' }}">CARD HOLDER</p>
                            <p class="text-xl {{ $index === 1 ? 'text-[#343C6A]' : 'text-white' }}">12/22</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-3 flex justify-between h-[70px] bg-[linear-gradient(180deg,rgba(255,255,255,0.15)0%,rgba(255,255,255,0)100%)] 
                    {{ $index === 1 ? 'border-t border-[#DFEAF2]' : '' }}">
                    <p class="text-[22px] {{ $index === 1 ? 'text-[#343C6A]' : 'text-white' }}">3778 **** **** 1234</p>
                    <div>
                        <img src="{{ $index === 1 ? '/card/white-master.png' : '/card/master.png' }}" class="w-[44px] h-[30px]" alt="master">
                    </div>
                </div>
            </div>
        @endforeach
          </div>
        </div>
        <div>
          <p class="text-[#333B69] text-[22px] font-semibold">My Expense</p>
          <div class="my-4 rounded-3xl bg-white h-[225px] w-[350px]">
            <canvas id="expense" class="p-4"></canvas>
          </div>
        </div>
      </div>
      <p class="text-[#333B69] text-[22px] font-semibold my-4">Recent Transactions</p>
      <div class="flex space-x-8 my-8 border-b border-[#EBEEF2]">
        <div class="text-[#1814F3] cursor-pointer text-base border-b-2 pb-1 border-[#1814F3]">
          <p>All Transactions</p>
        </div>
        <div class="text-[#718EBF] text-base cursor-pointer">Income</div>
        <div class="text-[#718EBF] text-base cursor-pointer">Expense</div>
      </div>
      <table class="w-full border-collapse bg-[#FFFFFF] rounded-3xl">
        <thead class="py-8 border-b border-[#E6EFF5] text-base text-[#718EBF]">
          <tr class="text-left">
            <th class="p-6 font-medium">Description</th>
            <th class="p-6 font-medium">Transaction ID</th>
            <th class="p-6 font-medium">Type</th>
            <th class="p-6 font-medium">Card</th>
            <th class="p-6 font-medium">Date</th>
            <th class="p-6 font-medium">Amount</th>
            <th class="p-6 font-medium">Receipt</th>
          </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < 5; $i++)
            <tr class="border-b border-[#F2F4F7] hover:bg-gray-50 text-base py-6">
                <td class="px-6 text-[#232323] py-6">
                    <div class="flex space-x-4">
                        <img src="/card/up.png" alt="up" class="w-[30px] h-[30px]">
                        <p>Spotify Subscription</p>
                    </div>
                </td>
                <td class="px-6 text-[#232323] py-6">#12548796</td>
                <td class="px-6 text-[#232323] py-6">Shopping</td>
                <td class="px-6 text-[#232323] py-6">1234 ****</td>
                <td class="px-6 text-[#232323] py-6">28 Jan, 12.30 AM</td>
                <td class="px-6 text-[#16DBAA] py-6">+$750</td>
                <td class="py-6 px-6">
                    <button class="text-[#123288] px-4 py-2 rounded-full border border-[#123288] hover:bg-slate-300">
                        Download
                    </button>
                </td>
            </tr>
        @endfor

        </tbody>
      </table>
      <div class="flex justify-end mt-6">
        <nav class="flex items-center space-x-2">
          <!-- Previous Button -->
          <button class="px-3 py-2 text-[#1814F3] text-base flex items-center space-x-2">
            <img src="/svg/back.svg" class="w-[14px] h-[14px]" alt="next">
            <p>Previous</p>
          </button>

          <!-- Page Numbers -->
          <button class="px-3 text-white py-2 bg-[#1814F3] rounded-lg hover:bg-blue-600 focus:outline-none">
            1
          </button>
            @for ($i = 0; $i < 4; $i++)
                <button class="px-3 text-[#1814F3] py-2 rounded-lg focus:outline-none">
                    {{ $i + 1 }}
                </button>
            @endfor

          <!-- Next Button -->
          <button class="px-3 py-2 text-[#1814F3] text-base flex items-center space-x-2">
            <p>Next</p> <img src="/svg/next.svg" class="w-[14px] h-[14px]" alt="next">
          </button>
        </nav>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.title = "Transactions";
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('expense').getContext('2d');
            new Chart(ctx, {
                type: 'bar', // Change to 'line', 'pie', etc.
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        label: 'Sales Data',
                        data: [120, 150, 180, 200],
                        backgroundColor: '#16DBCC',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
    
    </div>
    
</x-filament-panels::page>
