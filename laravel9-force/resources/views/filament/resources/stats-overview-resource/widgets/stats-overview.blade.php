<x-filament::widget>
    <x-filament::card>
        @extends('filament::layouts.app')

        @section('content')
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-4">View Record: {{ $record->name }}</h1>

                <!-- Display Chart Here -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <canvas id="myChart"></canvas>
                </div>
            </div>



            @push('scripts')
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: @json($chartData['labels']),
                            datasets: [{
                                label: 'Data for Record {{ $record->id }}',
                                data: @json($chartData['data']),
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(75, 192, 192, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            @endpush
        @endsection
    </x-filament::card>
</x-filament::widget>
