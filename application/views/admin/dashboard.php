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

// Create second wave dynamically (variation effect)
const variationWave = totals.map((val, index) => {
    let variation = Math.sin(index) * 5;
    return val + variation;
});

// Gradient 1
const gradient1 = ctx.createLinearGradient(0, 0, 0, 320);
gradient1.addColorStop(0, 'rgba(0,123,255,0.5)');
gradient1.addColorStop(1, 'rgba(0,123,255,0.05)');

// Gradient 2
const gradient2 = ctx.createLinearGradient(0, 0, 0, 320);
gradient2.addColorStop(0, 'rgba(40,167,69,0.5)');
gradient2.addColorStop(1, 'rgba(40,167,69,0.05)');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: months,
        datasets: [
        {
            data: totals,
            backgroundColor: gradient1,
            borderColor: 'rgba(0,123,255,0.8)',
            fill: true,
            tension: 0.5,
            borderWidth: 2,
            pointRadius: 0
        },
        {
            data: variationWave,
            backgroundColor: gradient2,
            borderColor: 'rgba(40,167,69,0.8)',
            fill: true,
            tension: 0.5,
            borderWidth: 2,
            pointRadius: 0
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            x: { grid: { display: false }},
            y: {
                beginAtZero: true,
                grid: { color: "rgba(0,0,0,0.05)" }
            }
        },
        animation: {
            duration: 1500,
            easing: 'easeInOutQuart'
        }
    }
});
</script>
