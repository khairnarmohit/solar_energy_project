<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="card shadow-sm mt-4 border-0">
    <div class="card-body">
        <h5 class="fw-bold mb-3">Monthly Quote Activity</h5>
        <div style="height:320px;">
            <canvas id="monthlyChart"></canvas>
        </div>
    </div>
</div>
<style>
.card {
    border-radius: 20px;
    background: white;
}


</style>
<script>
const ctx = document.getElementById('monthlyChart').getContext('2d');

const months = <?= $months ?>;
const totals = <?= $totals ?>;

// Safer variation (no negative values)
const variationWave = totals.map((val, index) => {
    let variation = Math.abs(Math.sin(index)) * 3; 
    return val + variation;
});

// Gradient 1 (Blue)
const gradient1 = ctx.createLinearGradient(0, 0, 0, 320);
gradient1.addColorStop(0, 'rgba(0,123,255,0.45)');
gradient1.addColorStop(1, 'rgba(0,123,255,0.05)');

// Gradient 2 (Green)
const gradient2 = ctx.createLinearGradient(0, 0, 0, 320);
gradient2.addColorStop(0, 'rgba(40,167,69,0.45)');
gradient2.addColorStop(1, 'rgba(40,167,69,0.05)');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: months,
        datasets: [
        {
            label: "Monthly Quotes",
            data: totals,
            backgroundColor: gradient1,
            borderColor: 'rgba(0,123,255,0.9)',
            fill: true,
            tension: 0.45,
            borderWidth: 2,
            pointRadius: 0
        },
        {
            data: variationWave,
            backgroundColor: gradient2,
            borderColor: 'rgba(40,167,69,0.9)',
            fill: true,
            tension: 0.45,
            borderWidth: 2,
            pointRadius: 0
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: "#1f2937",
                titleColor: "#fff",
                bodyColor: "#fff"
            }
        },
        scales: {
            x: {
                grid: { display: false }
            },
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 2
                },
                grid: {
                    color: "rgba(0,0,0,0.05)"
                }
            }
        },
        animation: {
            duration: 1600,
            easing: 'easeInOutQuart'
        }
    }
});
</script>
