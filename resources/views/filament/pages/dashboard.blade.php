<x-filament-panels::page>
@vite('resources/css/app.css')
@php
    $card1 = [
        'bg-gradient-to-r from-[#4C49ED] to-[#0A06F4]',
        'bg-[#FFFFFF]'
    ];
@endphp
<div class="container h-full">
      <div class="flex space-x-8">
        <div>
          <p class="text-[#333B69] text-[22px] font-semibold">My Card</p>
          <div class="flex space-x-8 my-4">
            @foreach ($card1 as $index => $cardClass)
                <div class="rounded-3xl h-[225px] w-[350px] {{ $cardClass }}">
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
            <p class="text-[#333B69] text-[22px] font-semibold">Recent Transaction</p>
            <div class="rounded-3xl bg-white w-[350px] p-4 space-y-2 my-4">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex items-center space-x-4">
                        <div class="{{ $bgRecord[$i] ?? 'bg-[#E7EDFF]' }} flex items-center rounded-full w-[60px] h-[60px] p-4">
                            <img src="/card/1.png" class="w-[26px] h-[20px]" alt="master">
                        </div>
                        <div>
                            <p class="text-[#232323] text-base font-medium">Deposit from my Card</p>
                            <p class="text-[#718EBF]">28 January 2021</p>
                        </div>
                        <div class="text-[#41D4A8]">
                            <p>+$2,500</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
      </div>
      <div class="flex space-x-8">
        <div class="w-full">
          <p class="text-[#333B69] text-[22px] font-semibold">Weekly Activity</p>
          <div class="bg-white rounded-3xl w-full h-[322px] text-black mt-4">
          <canvas id="bar" class="w-full max-w-full aspect-[2/1] p-4"></canvas>

          </div>
        </div>
        <div>
          <p class="text-[#333B69] text-[22px] font-semibold">Expense Statistics</p>
          <div class="bg-white rounded-3xl w-[350px] h-[322px] text-black mt-4">
            <canvas id="expense" class="p-4"></canvas>
          </div>
        </div>
      </div>
      <div class="flex space-x-8 mt-4 w-full">
        <div class="w-[445px]">
          <p class="text-[#333B69] text-[22px] font-semibold mb-4">Quick Transfer</p>
          <div class="flex flex-col justify-between w-[445px] h-[276px] bg-white rounded-3xl p-6">
            <div class="flex space-x-12 text-black mt-4">
            @for ($i = 0; $i < 3; $i++)
                <div>
                    <div class="rounded-full">
                        <img src="/card/people.png" alt="people" class="w-[70px] h-[70px]">
                    </div>
                    <p class="text-base text-[#232323] text-center mt-4">Randy Press</p>
                    <p class="text-[#718EBF] text-[15px] text-center">Director</p>
                </div>
            @endfor
            </div>
            <div class="flex justify-between items-center space-x-4">
              <p class="text-[#718EBF] text-[15px] w-[160px]">Write Amount</p>
              <div class="relative w-full max-w-md">
                <input type="text"
                  class="h-[50px] w-full rounded-full border-0 bg-[#EDF1F7] text-[#718EBF] px-8 pr-[170px] py-4 text-base focus:outline-none">
                <button type="submit"
                  class="absolute top-1/2 right-[0px] transform -translate-y-1/2 w-[160px] h-[50px] bg-[#1814F3] text-white font-semibold rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <div class="flex space-x-2 justify-center items-center">
                    <p>Send</p>
                    <img src="/card/send.png" alt="send" class="w-[26px] h-[23px]">
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <p class="text-[#333B69] text-[22px] font-semibold">Balance History</p>
          <div class="bg-white w-full rounded-3xl h-[276px] mt-4 p-4 text-black">
          <canvas id="salesChart" class="w-full max-w-full aspect-[2/1]"></canvas>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
          document.addEventListener("DOMContentLoaded", function () {
              const chartCanvas = document.getElementById('salesChart');

              if (!chartCanvas) {
                  console.error("Canvas element with ID 'salesChart' not found.");
                  return;
              }

              const ctx = chartCanvas.getContext('2d');

              new Chart(ctx, {
                  type: 'line', // Changed chart type to line
                  data: {
                      labels: ['January', 'February', 'March', 'April'], // X-axis labels
                      datasets: [{
                          label: 'Sales Data',
                          data: [120, 150, 180, 200], // Y-axis data points
                          borderColor: 'rgba(54, 162, 235, 1)', // Line color
                          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Fill under the line
                          borderWidth: 2,
                          pointBackgroundColor: 'rgba(54, 162, 235, 1)', // Data point color
                          pointRadius: 5, // Size of points
                          fill: true // Fill area under the line
                      }]
                  },
                  options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      plugins: {
                          legend: {
                              display: true,
                              position: 'bottom' // Legend below the chart
                          }
                      },
                      scales: {
                          x: {
                              title: {
                                  display: true,
                                  text: 'Months'
                              }
                          },
                          y: {
                              title: {
                                  display: true,
                                  text: 'Sales'
                              },
                              beginAtZero: true
                          }
                      }
                  }
              });
          });
          document.addEventListener("DOMContentLoaded", function () {
            const chartCanvas = document.getElementById('bar');

            if (!chartCanvas) {
                console.error("Canvas element with ID 'salesChart' not found.");
                return;
            }

            const ctx = chartCanvas.getContext('2d');

            const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Prevents forced inline width & height
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    },
                    scales: {
                        x: { title: { display: true, text: 'Months' } },
                        y: { title: { display: true, text: 'Values' }, beginAtZero: true }
                    }
                }
            });
          });

      </script>

      <script>
          document.addEventListener("DOMContentLoaded", function () {
              const chartCanvas = document.getElementById('expense');

              if (!chartCanvas) {
                  console.error("Canvas element with ID 'salesChart' not found.");
                  return;
              }

              const ctx = chartCanvas.getContext('2d');

              new Chart(ctx, {
                  type: 'polarArea', // Change chart type to doughnut
                  data: {
                      datasets: [{
                        label: 'My First Dataset',
                        data: [300, 150, 200],
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
