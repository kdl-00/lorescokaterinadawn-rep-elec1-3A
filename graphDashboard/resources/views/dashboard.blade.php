{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <div class="min-h-screen bg-black text-white relative">

        {{-- Background glow --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-32 -left-32 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-40 right-0 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>

        {{-- Header + TOP STATS --}}
        <div class="relative px-6 py-6 flex items-start justify-between">

            {{-- LEFT: Title --}}
            <div>
                <h1 class="text-lg font-semibold">My Dashboard</h1>
                <p class="text-xs text-white/40">Analytics</p>
            </div>

            {{-- RIGHT: STATS --}}
            <div class="flex gap-3">

                <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-right min-w-[90px]">
                    <p class="text-[10px] text-white/40">Revenue</p>
                    <h2 class="text-lg font-bold">₱24K</h2>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-right min-w-[90px]">
                    <p class="text-[10px] text-white/40">Orders</p>
                    <h2 class="text-lg font-bold">1.2K</h2>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-right min-w-[90px]">
                    <p class="text-[10px] text-white/40">Growth</p>
                    <h2 class="text-lg font-bold">12%</h2>
                </div>

            </div>
        </div>

        {{-- Main Content --}}
        <div class="relative px-6 pb-10">

            {{-- CHART CARD --}}
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6">

                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="text-sm text-white/60">Performance Overview</h2>
                        <p class="text-xs text-white/40">Revenue trend over months</p>
                    </div>
                </div>

                <canvas id="myChart" height="120"></canvas>

            </div>

        </div>
    </div>

    {{-- Chart --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Revenue',
                        data: [10, 15, 8, 18, 25, 20, 28],
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59,130,246,0.15)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            grid: {
                                color: 'rgba(255,255,255,0.05)'
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>