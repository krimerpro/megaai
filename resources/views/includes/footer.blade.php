<!-- Footer -->
<footer class="footer style-2">
    <div class="footer__bottom center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© 2023. All rights reserved by <a href="#">MEGA AI</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<a id="scroll-top"></a>

<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jquery.easing.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/count-down.js') }}"></script>
<script src="{{ asset('/js/aos.js') }}"></script>
<script src="{{ asset('/js/chart.js') }}"></script>
<script>
    AOS.init();
  </script>

  <script>
    let  numberPercent = document.querySelectorAll('.countbar')
    let getPercent = Array.from(numberPercent)
        getPercent.map((items) => {
            let startCount = 0
            let progressBar = () => {
                startCount ++
                items.style.width = `${startCount}%`
                if(startCount == items.dataset.percentnumber) {
                    clearInterval(stop)
                }
            }
            let stop = setInterval(() => {
                progressBar()
            },25)
        })

  </script>
  <script>
      const data1 = {
        labels: [
            'Liquidity Pool',
            'R&D',
            'Marketing',
            'Airdrop',
            'Team',
            'Staking'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [94, 2, 1 , 1 , 1 , 1],
            backgroundColor: [
            '#3D88FB',
            '#5637C8',
            '#00D199',
            '#C87B07',
            '#A92535',
            '#9116CD'
            ],
        }]
    };

    const config1 = {
        type: 'doughnut',
        data: data1,
        width:240,
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: false // Hide legend
            },
            scales: {
                y: {
                    display: false // Hide Y axis labels
                },
                x: {
                    display: false // Hide X axis labels
                }
            }
        }
    };

        const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
        );
        const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config1
    );
  </script>

  <script src="{{ asset('/js/mouse.js') }}"></script>
