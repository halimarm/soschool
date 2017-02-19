					<!-- charts -->
					<script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('/assets/js/highcharts.js') }}"></script>
					<script type="text/javascript" src="{{ asset('/assets/js/exporting.js') }}"></script>

					<div id="grafik" style="width:100%; height:400px;"></div>
					<script type="text/javascript">
						var f=jQuery.noConflict();
						f(function () {
						        f('#grafik').highcharts({
						            chart: {
						                zoomType: 'x'
						            },
						            title: {
						                text: 'Statistik Pengunjung'
						            },
						            
						            xAxis: {
						                type: 'datetime'
						            },
						            yAxis: {
						                title: {
						                    text: 'Jumlah Pengunjung'
						                }
						            },
						            legend: {
						                enabled: false
						            },
						            plotOptions: {
						                area: {
						                    fillColor: {
						                        linearGradient: {
						                            x1: 0,
						                            y1: 0,
						                            x2: 0,
						                            y2: 1
						                        },
						                        stops: [
						                            [0, Highcharts.getOptions().colors[0]],
						                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
						                        ]
						                    },
						                    marker: {
						                        radius: 2
						                    },
						                    lineWidth: 1,
						                    states: {
						                        hover: {
						                            lineWidth: 1
						                        }
						                    },
						                    threshold: null
						                }
						            },

						            series: [{
						                type: 'area',
						                name: 'Jumlah Pengunjung',
						                data: [
						                        @foreach($trackers as $tracker)
						                        	[Date.UTC({{ date("Y,m-1,d", strtotime($tracker->date)) }}),{{ $tracker->hits }}],
						                        @endforeach
						                      ]
						            }]
						        });
						    });
					</script>