@extends('layouts.master')
@section('content')
@section('title','Dashboard Admin')
@section('slide','Dashboards ')
@section('chart')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
<div class="card mb-2">
    <div class="card-header">
        <h5 class="card-title">Tickets</h5>
    </div>
    <div class="card-body" style="position: relative;">
        <div>
            <canvas id="siswaBaruChart"></canvas>
        </div>
    </div>
</div>
<script>
    // Ambil data periode dan jumlah siswa baru dari Blade template
    var periodes = {!! json_encode($periodes->pluck('name')) !!};
    var jumlahSiswaBaru = {!! json_encode($periodes->pluck('siswaBarus_count')) !!};

    // Buat chart
    var ctx = document.getElementById('siswaBaruChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: periodes,
            datasets: [{
                label: 'Jumlah Siswa Baru',
                data: jumlahSiswaBaru,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                    // Kamu bisa menambahkan warna tambahan sesuai kebutuhan
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    // Kamu bisa menambahkan warna tambahan sesuai kebutuhan
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'right'
            }
        }
    });
</script>


@endsection
