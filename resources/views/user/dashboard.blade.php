@extends('layouts.front') 
@section('title') 
User Dashboard
@endsection 
@section('content')
<div class="breadcrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<nav aria-label="breadcrumb" class="theme-breadcrumb">
					<ol class="breadcrumb justify-content-start">
						<li class="breadcrumb-item"><a href="{{ url('/') }}" previewlistener="true">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<section class="dashboard-section section-b-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="dashboard-sidebar">
					<div class="profile-top">
						<div class="profile-image">
							<img src="../assets/images/logos/17.png" alt="" class="img-fluid">
						</div>
						<div class="profile-detail">
							<h5>{{Auth::User()->name}}</h5>
							<h6>{{Auth::User()->email}}</h6>
						</div>
					</div>
					<div class="faq-tab">
						<ul class="nav nav-tabs" id="top-tab" role="tablist">
							<li class="nav-item">
								<a data-bs-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a>
							</li>
							<li class="nav-item">
								<a data-bs-toggle="tab" class="nav-link" href="#orders">orders</a>
							</li>
							<li class="nav-item">
								<a data-bs-toggle="tab" class="nav-link" href="#profile">profile</a>
							</li>
							<li class="nav-item">
								<a data-bs-toggle="tab" class="nav-link" href="#settings">settings</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="modal" data-bs-target="#logout" href="{{ route('logout') }}" 
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								logout
							</a>
						</li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="faq-content tab-content" id="top-tabContent">
				<div class="tab-pane fade show active" id="dashboard">
					<div class="counter-section">
						<div class="row">
							<div class="col-md-4">
								<div class="counter-box">
									{{-- <img src="../assets/images/icon/dashboard/order.png" class="img-fluid"> --}}
									<div>
										<h3>{{$order->count()}}</h3>
										<h5>total orders</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="counter-box">
									{{-- <img src="../assets/images/icon/dashboard/sale.png" class="img-fluid"> --}}
									<div>
										<h3>{{$wishlist->count()}}</h3>
										<h5>Wishlist</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="counter-box">
									{{-- <img src="../assets/images/icon/dashboard/homework.png" class="img-fluid"> --}}
									<div>
										<h3>{{$cartitem->count()}}</h3>
										<h5>Cart</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
            {{-- <div class="row">
              <div class="col-md-7">
                <div class="card">
                  <div class="card-body" style="position: relative;">
                    <div id="chart" style="min-height: 265px;">
                      <div id="apexcharts29d244" class="apexcharts-canvas apexcharts29d244 apexcharts-theme-light" style="width: 556px; height: 250px;">
                        <svg id="SvgjsSvg1132" width="556" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                          <g id="SvgjsG1135" class="apexcharts-annotations-rects"></g>
                          <g id="SvgjsG1134" class="apexcharts-inner apexcharts-graphical" transform="translate(-4.166666666666668, 73)">
                            <defs id="SvgjsDefs1133">
                              <clipPath id="gridRectMask29d244">
                                <rect id="SvgjsRect1151" width="497.46875" height="147.2" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                              </clipPath>
                              <clipPath id="gridRectMarkerMask29d244">
                                <rect id="SvgjsRect1152" width="495.46875" height="149.2" x="-2" y="-2" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                              </clipPath>
                              <linearGradient id="SvgjsLinearGradient1158" x1="0" y1="0" x2="0" y2="1">
                                <stop id="SvgjsStop1159" stop-opacity="0.6" stop-color="rgba(255,76,59,0.6)" offset="0"></stop>
                                <stop id="SvgjsStop1160" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="1"></stop>
                                <stop id="SvgjsStop1161" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="1"></stop>
                              </linearGradient>
                            </defs>
                            <line id="SvgjsLine1142" x1="0" y1="0" x2="0" y2="145.2" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="145.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                            <g id="SvgjsG1164" class="apexcharts-xaxis" transform="translate(0, 0)">
                              <g id="SvgjsG1165" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                <text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif" x="56.36640809112333" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1168">Nov '12</tspan>
                                  <title>Nov '12</title>
                                </text>
                                <text id="SvgjsText1170" font-family="Helvetica, Arial, sans-serif" x="121.22638452474466" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1171">08 Nov</tspan>
                                  <title>08 Nov</title>
                                </text>
                                <text id="SvgjsText1173" font-family="Helvetica, Arial, sans-serif" x="195.35207187745485" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1174">16 Nov</tspan>
                                  <title>16 Nov</title>
                                </text>
                                <text id="SvgjsText1176" font-family="Helvetica, Arial, sans-serif" x="269.477759230165" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1177">24 Nov</tspan>
                                  <title>24 Nov</title>
                                </text>
                                <text id="SvgjsText1179" font-family="Helvetica, Arial, sans-serif" x="334.33773566378625" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1180">Dec '12</tspan>
                                  <title>Dec '12</title>
                                </text>
                                <text id="SvgjsText1182" font-family="Helvetica, Arial, sans-serif" x="399.1977120974075" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1183">08 Dec</tspan>
                                  <title>08 Dec</title>
                                </text>
                                <text id="SvgjsText1185" font-family="Helvetica, Arial, sans-serif" x="473.32339945011745" y="174.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan1186">16 Dec</tspan>
                                  <title>16 Dec</title>
                                </text>
                              </g>
                              <line id="SvgjsLine1187" x1="0" y1="146.2" x2="491.46875" y2="146.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                            </g>
                            <g id="SvgjsG1204" class="apexcharts-grid">
                              <g id="SvgjsG1205" class="apexcharts-gridlines-horizontal">
                                <line id="SvgjsLine1214" x1="0" y1="0" x2="491.46875" y2="0" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1215" x1="0" y1="24.2" x2="491.46875" y2="24.2" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1216" x1="0" y1="48.4" x2="491.46875" y2="48.4" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1217" x1="0" y1="72.6" x2="491.46875" y2="72.6" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1218" x1="0" y1="96.8" x2="491.46875" y2="96.8" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1219" x1="0" y1="121" x2="491.46875" y2="121" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1220" x1="0" y1="145.2" x2="491.46875" y2="145.2" stroke="transparent" stroke-dasharray="0" class="apexcharts-gridline"></line>
                              </g>
                              <g id="SvgjsG1206" class="apexcharts-gridlines-vertical"></g>
                              <line id="SvgjsLine1207" x1="56.36640809112333" y1="146.2" x2="56.36640809112333" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1208" x1="121.22638452474466" y1="146.2" x2="121.22638452474466" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1209" x1="195.35207187745485" y1="146.2" x2="195.35207187745485" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1210" x1="269.477759230165" y1="146.2" x2="269.477759230165" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1211" x1="334.33773566378625" y1="146.2" x2="334.33773566378625" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1212" x1="399.1977120974075" y1="146.2" x2="399.1977120974075" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1213" x1="473.32339945011745" y1="146.2" x2="473.32339945011745" y2="152.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine1222" x1="0" y1="145.2" x2="491.46875" y2="145.2" stroke="transparent" stroke-dasharray="0"></line>
                              <line id="SvgjsLine1221" x1="0" y1="1" x2="0" y2="145.2" stroke="transparent" stroke-dasharray="0"></line>
                            </g>
                            <g id="SvgjsG1154" class="apexcharts-area-series apexcharts-plot-series">
                              <g id="SvgjsG1155" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                <path id="SvgjsPath1162" d="M 0 145.2L 0 99.69999999999891C 16.350119059308717 99.69999999999891 30.364506824430478 39.69999999999618 46.714625883739195 39.69999999999618C 49.957624705420265 39.69999999999618 52.737337981146894 59.69999999999709 55.98033680282796 59.69999999999709C 59.22333562450903 59.69999999999709 62.003048900235655 49.69999999999709 65.24604772191672 49.69999999999709C 74.97504418695993 49.69999999999709 83.31418401413981 79.699999999998 93.04318047918302 79.699999999998C 100.03965015929126 79.699999999998 106.0366241708126 49.69999999999709 113.03309385092084 49.69999999999709C 116.2760926726019 49.69999999999709 119.05580594832853 69.69999999999709 122.2988047700096 69.69999999999709C 125.54180359169067 69.69999999999709 128.3215168674173 39.69999999999618 131.56451568909836 39.69999999999618C 134.80751451077944 39.69999999999618 137.58722778650605 59.69999999999709 140.83022660818713 59.69999999999709C 144.89898901872218 59.69999999999709 148.38649965632365 99.69999999999891 152.4552620668587 99.69999999999891C 157.60502408462077 99.69999999999891 162.01910581413108 119.69999999999891 167.16886783189315 119.69999999999891C 181.16180719210962 119.69999999999891 193.15575521515228 109.69999999999891 207.14869457536875 109.69999999999891C 210.39169339704983 109.69999999999891 213.17140667277644 115.69999999999982 216.41440549445753 115.69999999999982C 218.6364602426464 115.69999999999982 220.54107859823688 99.69999999999891 222.76313334642575 99.69999999999891C 229.75960302653397 99.69999999999891 235.75657703805533 113.69999999999982 242.75304671816355 113.69999999999982C 248.99882222658636 113.69999999999982 254.35234409094875 99.69999999999891 260.59811959937156 99.69999999999891C 265.28245123068865 99.69999999999891 269.29759262896044 103.69999999999891 273.98192426027754 103.69999999999891C 277.7353951187047 103.69999999999891 280.9526558544994 99.69999999999891 284.70612671292656 99.69999999999891C 288.45959757135375 99.69999999999891 291.67685830714845 103.69999999999891 295.43032916557564 103.69999999999891C 297.84381092754427 103.69999999999891 299.9125095806603 139.69999999999982 302.3259913426289 139.69999999999982C 308.11008993546517 139.69999999999982 313.06788872932486 103.69999999999891 318.8519873221611 103.69999999999891C 322.09498614384216 103.69999999999891 324.8746994195688 115.69999999999982 328.11769824124985 115.69999999999982C 346.37458049663957 115.69999999999982 362.02333671554504 59.69999999999709 380.28021897093475 59.69999999999709C 383.5232177926158 59.69999999999709 386.3029310683425 49.69999999999709 389.54592989002356 49.69999999999709C 391.7679846382124 49.69999999999709 393.6726029938029 29.69999999999618 395.89465774199175 29.69999999999618C 402.8911274221 29.69999999999618 408.88810143362133 59.69999999999709 415.8845711137296 59.69999999999709C 419.12756993541063 59.69999999999709 421.90728321113727 79.699999999998 425.1502820328183 79.699999999998C 432.1467517129266 79.699999999998 438.1437257244479 59.69999999999709 445.14019540455615 59.69999999999709C 448.3831942262372 59.69999999999709 451.16290750196384 69.69999999999709 454.4059063236449 69.69999999999709C 464.1349027886881 69.69999999999709 472.474042615868 57.69999999999709 482.2030390809112 57.69999999999709C 485.44603790259225 57.69999999999709 488.22575117831894 79.699999999998 491.46875 79.699999999998C 491.46875 79.699999999998 491.46875 79.699999999998 491.46875 145.2M 491.46875 79.699999999998z" fill="url(#SvgjsLinearGradient1158)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask29d244)" pathTo="M 0 145.2L 0 99.69999999999891C 16.350119059308717 99.69999999999891 30.364506824430478 39.69999999999618 46.714625883739195 39.69999999999618C 49.957624705420265 39.69999999999618 52.737337981146894 59.69999999999709 55.98033680282796 59.69999999999709C 59.22333562450903 59.69999999999709 62.003048900235655 49.69999999999709 65.24604772191672 49.69999999999709C 74.97504418695993 49.69999999999709 83.31418401413981 79.699999999998 93.04318047918302 79.699999999998C 100.03965015929126 79.699999999998 106.0366241708126 49.69999999999709 113.03309385092084 49.69999999999709C 116.2760926726019 49.69999999999709 119.05580594832853 69.69999999999709 122.2988047700096 69.69999999999709C 125.54180359169067 69.69999999999709 128.3215168674173 39.69999999999618 131.56451568909836 39.69999999999618C 134.80751451077944 39.69999999999618 137.58722778650605 59.69999999999709 140.83022660818713 59.69999999999709C 144.89898901872218 59.69999999999709 148.38649965632365 99.69999999999891 152.4552620668587 99.69999999999891C 157.60502408462077 99.69999999999891 162.01910581413108 119.69999999999891 167.16886783189315 119.69999999999891C 181.16180719210962 119.69999999999891 193.15575521515228 109.69999999999891 207.14869457536875 109.69999999999891C 210.39169339704983 109.69999999999891 213.17140667277644 115.69999999999982 216.41440549445753 115.69999999999982C 218.6364602426464 115.69999999999982 220.54107859823688 99.69999999999891 222.76313334642575 99.69999999999891C 229.75960302653397 99.69999999999891 235.75657703805533 113.69999999999982 242.75304671816355 113.69999999999982C 248.99882222658636 113.69999999999982 254.35234409094875 99.69999999999891 260.59811959937156 99.69999999999891C 265.28245123068865 99.69999999999891 269.29759262896044 103.69999999999891 273.98192426027754 103.69999999999891C 277.7353951187047 103.69999999999891 280.9526558544994 99.69999999999891 284.70612671292656 99.69999999999891C 288.45959757135375 99.69999999999891 291.67685830714845 103.69999999999891 295.43032916557564 103.69999999999891C 297.84381092754427 103.69999999999891 299.9125095806603 139.69999999999982 302.3259913426289 139.69999999999982C 308.11008993546517 139.69999999999982 313.06788872932486 103.69999999999891 318.8519873221611 103.69999999999891C 322.09498614384216 103.69999999999891 324.8746994195688 115.69999999999982 328.11769824124985 115.69999999999982C 346.37458049663957 115.69999999999982 362.02333671554504 59.69999999999709 380.28021897093475 59.69999999999709C 383.5232177926158 59.69999999999709 386.3029310683425 49.69999999999709 389.54592989002356 49.69999999999709C 391.7679846382124 49.69999999999709 393.6726029938029 29.69999999999618 395.89465774199175 29.69999999999618C 402.8911274221 29.69999999999618 408.88810143362133 59.69999999999709 415.8845711137296 59.69999999999709C 419.12756993541063 59.69999999999709 421.90728321113727 79.699999999998 425.1502820328183 79.699999999998C 432.1467517129266 79.699999999998 438.1437257244479 59.69999999999709 445.14019540455615 59.69999999999709C 448.3831942262372 59.69999999999709 451.16290750196384 69.69999999999709 454.4059063236449 69.69999999999709C 464.1349027886881 69.69999999999709 472.474042615868 57.69999999999709 482.2030390809112 57.69999999999709C 485.44603790259225 57.69999999999709 488.22575117831894 79.699999999998 491.46875 79.699999999998C 491.46875 79.699999999998 491.46875 79.699999999998 491.46875 145.2M 491.46875 79.699999999998z" pathFrom="M -1 7559.7000000003L -1 7559.7000000003L 46.714625883739195 7559.7000000003L 55.98033680282796 7559.7000000003L 65.24604772191672 7559.7000000003L 93.04318047918302 7559.7000000003L 113.03309385092084 7559.7000000003L 122.2988047700096 7559.7000000003L 131.56451568909836 7559.7000000003L 140.83022660818713 7559.7000000003L 152.4552620668587 7559.7000000003L 167.16886783189315 7559.7000000003L 207.14869457536875 7559.7000000003L 216.41440549445753 7559.7000000003L 222.76313334642575 7559.7000000003L 242.75304671816355 7559.7000000003L 260.59811959937156 7559.7000000003L 273.98192426027754 7559.7000000003L 284.70612671292656 7559.7000000003L 295.43032916557564 7559.7000000003L 302.3259913426289 7559.7000000003L 318.8519873221611 7559.7000000003L 328.11769824124985 7559.7000000003L 380.28021897093475 7559.7000000003L 389.54592989002356 7559.7000000003L 395.89465774199175 7559.7000000003L 415.8845711137296 7559.7000000003L 425.1502820328183 7559.7000000003L 445.14019540455615 7559.7000000003L 454.4059063236449 7559.7000000003L 482.2030390809112 7559.7000000003L 491.46875 7559.7000000003"></path>
                                <path id="SvgjsPath1163" d="M 0 99.69999999999891C 16.350119059308717 99.69999999999891 30.364506824430478 39.69999999999618 46.714625883739195 39.69999999999618C 49.957624705420265 39.69999999999618 52.737337981146894 59.69999999999709 55.98033680282796 59.69999999999709C 59.22333562450903 59.69999999999709 62.003048900235655 49.69999999999709 65.24604772191672 49.69999999999709C 74.97504418695993 49.69999999999709 83.31418401413981 79.699999999998 93.04318047918302 79.699999999998C 100.03965015929126 79.699999999998 106.0366241708126 49.69999999999709 113.03309385092084 49.69999999999709C 116.2760926726019 49.69999999999709 119.05580594832853 69.69999999999709 122.2988047700096 69.69999999999709C 125.54180359169067 69.69999999999709 128.3215168674173 39.69999999999618 131.56451568909836 39.69999999999618C 134.80751451077944 39.69999999999618 137.58722778650605 59.69999999999709 140.83022660818713 59.69999999999709C 144.89898901872218 59.69999999999709 148.38649965632365 99.69999999999891 152.4552620668587 99.69999999999891C 157.60502408462077 99.69999999999891 162.01910581413108 119.69999999999891 167.16886783189315 119.69999999999891C 181.16180719210962 119.69999999999891 193.15575521515228 109.69999999999891 207.14869457536875 109.69999999999891C 210.39169339704983 109.69999999999891 213.17140667277644 115.69999999999982 216.41440549445753 115.69999999999982C 218.6364602426464 115.69999999999982 220.54107859823688 99.69999999999891 222.76313334642575 99.69999999999891C 229.75960302653397 99.69999999999891 235.75657703805533 113.69999999999982 242.75304671816355 113.69999999999982C 248.99882222658636 113.69999999999982 254.35234409094875 99.69999999999891 260.59811959937156 99.69999999999891C 265.28245123068865 99.69999999999891 269.29759262896044 103.69999999999891 273.98192426027754 103.69999999999891C 277.7353951187047 103.69999999999891 280.9526558544994 99.69999999999891 284.70612671292656 99.69999999999891C 288.45959757135375 99.69999999999891 291.67685830714845 103.69999999999891 295.43032916557564 103.69999999999891C 297.84381092754427 103.69999999999891 299.9125095806603 139.69999999999982 302.3259913426289 139.69999999999982C 308.11008993546517 139.69999999999982 313.06788872932486 103.69999999999891 318.8519873221611 103.69999999999891C 322.09498614384216 103.69999999999891 324.8746994195688 115.69999999999982 328.11769824124985 115.69999999999982C 346.37458049663957 115.69999999999982 362.02333671554504 59.69999999999709 380.28021897093475 59.69999999999709C 383.5232177926158 59.69999999999709 386.3029310683425 49.69999999999709 389.54592989002356 49.69999999999709C 391.7679846382124 49.69999999999709 393.6726029938029 29.69999999999618 395.89465774199175 29.69999999999618C 402.8911274221 29.69999999999618 408.88810143362133 59.69999999999709 415.8845711137296 59.69999999999709C 419.12756993541063 59.69999999999709 421.90728321113727 79.699999999998 425.1502820328183 79.699999999998C 432.1467517129266 79.699999999998 438.1437257244479 59.69999999999709 445.14019540455615 59.69999999999709C 448.3831942262372 59.69999999999709 451.16290750196384 69.69999999999709 454.4059063236449 69.69999999999709C 464.1349027886881 69.69999999999709 472.474042615868 57.69999999999709 482.2030390809112 57.69999999999709C 485.44603790259225 57.69999999999709 488.22575117831894 79.699999999998 491.46875 79.699999999998" fill="none" fill-opacity="1" stroke="#ff4c3b" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask29d244)" pathTo="M 0 99.69999999999891C 16.350119059308717 99.69999999999891 30.364506824430478 39.69999999999618 46.714625883739195 39.69999999999618C 49.957624705420265 39.69999999999618 52.737337981146894 59.69999999999709 55.98033680282796 59.69999999999709C 59.22333562450903 59.69999999999709 62.003048900235655 49.69999999999709 65.24604772191672 49.69999999999709C 74.97504418695993 49.69999999999709 83.31418401413981 79.699999999998 93.04318047918302 79.699999999998C 100.03965015929126 79.699999999998 106.0366241708126 49.69999999999709 113.03309385092084 49.69999999999709C 116.2760926726019 49.69999999999709 119.05580594832853 69.69999999999709 122.2988047700096 69.69999999999709C 125.54180359169067 69.69999999999709 128.3215168674173 39.69999999999618 131.56451568909836 39.69999999999618C 134.80751451077944 39.69999999999618 137.58722778650605 59.69999999999709 140.83022660818713 59.69999999999709C 144.89898901872218 59.69999999999709 148.38649965632365 99.69999999999891 152.4552620668587 99.69999999999891C 157.60502408462077 99.69999999999891 162.01910581413108 119.69999999999891 167.16886783189315 119.69999999999891C 181.16180719210962 119.69999999999891 193.15575521515228 109.69999999999891 207.14869457536875 109.69999999999891C 210.39169339704983 109.69999999999891 213.17140667277644 115.69999999999982 216.41440549445753 115.69999999999982C 218.6364602426464 115.69999999999982 220.54107859823688 99.69999999999891 222.76313334642575 99.69999999999891C 229.75960302653397 99.69999999999891 235.75657703805533 113.69999999999982 242.75304671816355 113.69999999999982C 248.99882222658636 113.69999999999982 254.35234409094875 99.69999999999891 260.59811959937156 99.69999999999891C 265.28245123068865 99.69999999999891 269.29759262896044 103.69999999999891 273.98192426027754 103.69999999999891C 277.7353951187047 103.69999999999891 280.9526558544994 99.69999999999891 284.70612671292656 99.69999999999891C 288.45959757135375 99.69999999999891 291.67685830714845 103.69999999999891 295.43032916557564 103.69999999999891C 297.84381092754427 103.69999999999891 299.9125095806603 139.69999999999982 302.3259913426289 139.69999999999982C 308.11008993546517 139.69999999999982 313.06788872932486 103.69999999999891 318.8519873221611 103.69999999999891C 322.09498614384216 103.69999999999891 324.8746994195688 115.69999999999982 328.11769824124985 115.69999999999982C 346.37458049663957 115.69999999999982 362.02333671554504 59.69999999999709 380.28021897093475 59.69999999999709C 383.5232177926158 59.69999999999709 386.3029310683425 49.69999999999709 389.54592989002356 49.69999999999709C 391.7679846382124 49.69999999999709 393.6726029938029 29.69999999999618 395.89465774199175 29.69999999999618C 402.8911274221 29.69999999999618 408.88810143362133 59.69999999999709 415.8845711137296 59.69999999999709C 419.12756993541063 59.69999999999709 421.90728321113727 79.699999999998 425.1502820328183 79.699999999998C 432.1467517129266 79.699999999998 438.1437257244479 59.69999999999709 445.14019540455615 59.69999999999709C 448.3831942262372 59.69999999999709 451.16290750196384 69.69999999999709 454.4059063236449 69.69999999999709C 464.1349027886881 69.69999999999709 472.474042615868 57.69999999999709 482.2030390809112 57.69999999999709C 485.44603790259225 57.69999999999709 488.22575117831894 79.699999999998 491.46875 79.699999999998" pathFrom="M -1 7559.7000000003L -1 7559.7000000003L 46.714625883739195 7559.7000000003L 55.98033680282796 7559.7000000003L 65.24604772191672 7559.7000000003L 93.04318047918302 7559.7000000003L 113.03309385092084 7559.7000000003L 122.2988047700096 7559.7000000003L 131.56451568909836 7559.7000000003L 140.83022660818713 7559.7000000003L 152.4552620668587 7559.7000000003L 167.16886783189315 7559.7000000003L 207.14869457536875 7559.7000000003L 216.41440549445753 7559.7000000003L 222.76313334642575 7559.7000000003L 242.75304671816355 7559.7000000003L 260.59811959937156 7559.7000000003L 273.98192426027754 7559.7000000003L 284.70612671292656 7559.7000000003L 295.43032916557564 7559.7000000003L 302.3259913426289 7559.7000000003L 318.8519873221611 7559.7000000003L 328.11769824124985 7559.7000000003L 380.28021897093475 7559.7000000003L 389.54592989002356 7559.7000000003L 395.89465774199175 7559.7000000003L 415.8845711137296 7559.7000000003L 425.1502820328183 7559.7000000003L 445.14019540455615 7559.7000000003L 454.4059063236449 7559.7000000003L 482.2030390809112 7559.7000000003L 491.46875 7559.7000000003"></path>
                                <g id="SvgjsG1156" class="apexcharts-series-markers-wrap">
                                  <g class="apexcharts-series-markers">
                                    <circle id="SvgjsCircle1228" r="0" cx="0" cy="0" class="apexcharts-marker w6czf6l1tf no-pointer-events" stroke="#ffffff" fill="#ff4c3b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                  </g>
                                </g>
                              </g>
                              <g id="SvgjsG1157" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1223" x1="0" y1="0" x2="491.46875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1224" x1="0" y1="0" x2="491.46875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1225" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1226" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1227" class="apexcharts-point-annotations"></g>
                          </g>
                          <text id="SvgjsText1136" font-family="Helvetica, Arial, sans-serif" x="10" y="16.5" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="900" fill="#373d3f" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Total Revenue</text>
                          <text id="SvgjsText1137" font-family="Helvetica, Arial, sans-serif" x="10" y="44.5" text-anchor="start" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Price Movements</text>
                          <rect id="SvgjsRect1141" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                          <g id="SvgjsG1188" class="apexcharts-yaxis" rel="0" transform="translate(518.3020833333333, 0)">
                            <g id="SvgjsG1189" class="apexcharts-yaxis-texts-g">
                              <text id="SvgjsText1190" font-family="Helvetica, Arial, sans-serif" x="-20" y="74.6" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1191">37.80</tspan>
                              </text>
                              <text id="SvgjsText1192" font-family="Helvetica, Arial, sans-serif" x="-20" y="98.8" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1193">37.68</tspan>
                              </text>
                              <text id="SvgjsText1194" font-family="Helvetica, Arial, sans-serif" x="-20" y="123" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1195">37.56</tspan>
                              </text>
                              <text id="SvgjsText1196" font-family="Helvetica, Arial, sans-serif" x="-20" y="147.2" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1197">37.44</tspan>
                              </text>
                              <text id="SvgjsText1198" font-family="Helvetica, Arial, sans-serif" x="-20" y="171.39999999999998" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1199">37.31</tspan>
                              </text>
                              <text id="SvgjsText1200" font-family="Helvetica, Arial, sans-serif" x="-20" y="195.59999999999997" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1201">37.19</tspan>
                              </text>
                              <text id="SvgjsText1202" font-family="Helvetica, Arial, sans-serif" x="-20" y="219.79999999999995" text-anchor="start" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan1203">37.07</tspan>
                              </text>
                            </g>
                          </g>
                        </svg>
                        <div class="apexcharts-legend"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                          <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                          <div class="apexcharts-tooltip-series-group">
                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 76, 59);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group">
                                <span class="apexcharts-tooltip-text-label"></span>
                                <span class="apexcharts-tooltip-text-value"></span>
                              </div>
                              <div class="apexcharts-tooltip-z-group">
                                <span class="apexcharts-tooltip-text-z-label"></span>
                                <span class="apexcharts-tooltip-text-z-value"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                          <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                        </div>
                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                          <div class="apexcharts-menu-icon" title="Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path fill="none" d="M0 0h24v24H0V0z"></path>
                              <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                            </svg>
                          </div>
                          <div class="apexcharts-menu">
                            <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                            <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                            <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="resize-triggers">
                      <div class="expand-trigger">
                        <div style="width: 589px; height: 298px;"></div>
                      </div>
                      <div class="contract-trigger"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card">
                  <div class="card-body" style="position: relative;">
                    <div id="chart-order" style="min-height: 252.7px;">
                      <div id="apexcharts29d265" class="apexcharts-canvas apexcharts29d265 apexcharts-theme-light" style="width: 382px; height: 252.7px;">
                        <svg id="SvgjsSvg1229" width="382" height="252.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                          <g id="SvgjsG1232" class="apexcharts-annotations-rects"></g>
                          <foreignObject x="0" y="0" width="382" height="252.7">
                            <div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 20px; right: 5px;">
                              <div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;">
                                <span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(247, 191, 193); color: rgb(247, 191, 193); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span>
                                <span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Recent%20Order" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Recent Order</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;">
                                <span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(200, 200, 200); color: rgb(200, 200, 200); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span>
                                <span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Panding%20Payments" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Panding Payments</span>
                              </div>
                              <div class="apexcharts-legend-series" rel="3" data:collapsed="false" style="margin: 0px 5px;">
                                <span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 129, 129); color: rgb(255, 129, 129); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span>
                                <span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Recived%20Payments" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Recived Payments</span>
                              </div>
                            </div>
                            <style type="text/css">
                              .apexcharts-legend {
                                display: flex;
                                overflow: auto;
                                padding: 0 10px;
                              }

                              .apexcharts-legend.position-bottom,
                              .apexcharts-legend.position-top {
                                flex-wrap: wrap
                              }

                              .apexcharts-legend.position-right,
                              .apexcharts-legend.position-left {
                                flex-direction: column;
                                bottom: 0;
                              }

                              .apexcharts-legend.position-bottom.apexcharts-align-left,
                              .apexcharts-legend.position-top.apexcharts-align-left,
                              .apexcharts-legend.position-right,
                              .apexcharts-legend.position-left {
                                justify-content: flex-start;
                              }

                              .apexcharts-legend.position-bottom.apexcharts-align-center,
                              .apexcharts-legend.position-top.apexcharts-align-center {
                                justify-content: center;
                              }

                              .apexcharts-legend.position-bottom.apexcharts-align-right,
                              .apexcharts-legend.position-top.apexcharts-align-right {
                                justify-content: flex-end;
                              }

                              .apexcharts-legend-series {
                                cursor: pointer;
                                line-height: normal;
                              }

                              .apexcharts-legend.position-bottom .apexcharts-legend-series,
                              .apexcharts-legend.position-top .apexcharts-legend-series {
                                display: flex;
                                align-items: center;
                              }

                              .apexcharts-legend-text {
                                position: relative;
                                font-size: 14px;
                              }

                              .apexcharts-legend-text *,
                              .apexcharts-legend-marker * {
                                pointer-events: none;
                              }

                              .apexcharts-legend-marker {
                                position: relative;
                                display: inline-block;
                                cursor: pointer;
                                margin-right: 3px;
                                border-style: solid;
                              }

                              .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                              .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                display: inline-block;
                              }

                              .apexcharts-legend-series.apexcharts-no-click {
                                cursor: auto;
                              }

                              .apexcharts-legend .apexcharts-hidden-zero-series,
                              .apexcharts-legend .apexcharts-hidden-null-series {
                                display: none !important;
                              }

                              .apexcharts-inactive-legend {
                                opacity: 0.45;
                              }
                            </style>
                          </foreignObject>
                          <g id="SvgjsG1231" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 24)">
                            <defs id="SvgjsDefs1230">
                              <clipPath id="gridRectMask29d265">
                                <rect id="SvgjsRect1234" width="195.265625" height="228" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                              </clipPath>
                              <clipPath id="gridRectMarkerMask29d265">
                                <rect id="SvgjsRect1235" width="193.265625" height="230" x="-2" y="-2" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                              </clipPath>
                            </defs>
                            <g id="SvgjsG1237" class="apexcharts-pie">
                              <g id="SvgjsG1238" transform="translate(0, 0) scale(1)">
                                <circle id="SvgjsCircle1239" r="67.75853658536586" cx="94.6328125" cy="113" fill="transparent"></circle>
                                <g id="SvgjsG1240" class="apexcharts-slices">
                                  <g id="SvgjsG1241" class="apexcharts-series apexcharts-pie-series" seriesName="RecentxOrder" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1242" d="M 94.6328125 8.756097560975604 A 104.2439024390244 104.2439024390244 0 0 1 193.77465519867042 80.78686258637742 L 159.07501025413575 92.06146068114533 A 67.75853658536586 67.75853658536586 0 0 0 94.6328125 45.24146341463414 L 94.6328125 8.756097560975604 z" fill="rgba(247,191,193,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="72" data:startAngle="0" data:strokeWidth="2" data:value="20" data:pathOrig="M 94.6328125 8.756097560975604 A 104.2439024390244 104.2439024390244 0 0 1 193.77465519867042 80.78686258637742 L 159.07501025413575 92.06146068114533 A 67.75853658536586 67.75853658536586 0 0 0 94.6328125 45.24146341463414 L 94.6328125 8.756097560975604 z" stroke="#ffffff"></path>
                                  </g>
                                  <g id="SvgjsG1243" class="apexcharts-series apexcharts-pie-series" seriesName="PandingxPayments" rel="2" data:realIndex="1">
                                    <path id="SvgjsPath1244" d="M 193.77465519867042 80.78686258637742 A 104.2439024390244 104.2439024390244 0 0 1 126.84594991362258 212.14184269867042 L 115.57135181885468 177.44219775413575 A 67.75853658536586 67.75853658536586 0 0 0 159.07501025413575 92.06146068114533 L 193.77465519867042 80.78686258637742 z" fill="rgba(200,200,200,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="90" data:startAngle="72" data:strokeWidth="2" data:value="25" data:pathOrig="M 193.77465519867042 80.78686258637742 A 104.2439024390244 104.2439024390244 0 0 1 126.84594991362258 212.14184269867042 L 115.57135181885468 177.44219775413575 A 67.75853658536586 67.75853658536586 0 0 0 159.07501025413575 92.06146068114533 L 193.77465519867042 80.78686258637742 z" stroke="#ffffff"></path>
                                  </g>
                                  <g id="SvgjsG1245" class="apexcharts-series apexcharts-pie-series" seriesName="RecivedxPayments" rel="3" data:realIndex="2">
                                    <path id="SvgjsPath1246" d="M 126.84594991362258 212.14184269867042 A 104.2439024390244 104.2439024390244 0 1 1 94.61461850686547 8.756099148701026 L 94.62098640446256 45.24146444665567 A 67.75853658536586 67.75853658536586 0 1 0 115.57135181885468 177.44219775413575 L 126.84594991362258 212.14184269867042 z" fill="rgba(255,129,129,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="198" data:startAngle="162" data:strokeWidth="2" data:value="55" data:pathOrig="M 126.84594991362258 212.14184269867042 A 104.2439024390244 104.2439024390244 0 1 1 94.61461850686547 8.756099148701026 L 94.62098640446256 45.24146444665567 A 67.75853658536586 67.75853658536586 0 1 0 115.57135181885468 177.44219775413575 L 126.84594991362258 212.14184269867042 z" stroke="#ffffff"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                            <line id="SvgjsLine1247" x1="0" y1="0" x2="189.265625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1248" x1="0" y1="0" x2="189.265625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                          </g>
                          <text id="SvgjsText1233" font-family="Helvetica, Arial, sans-serif" x="10" y="16.5" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="900" fill="#373d3f" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Overall Sales</text>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                          <div class="apexcharts-tooltip-series-group">
                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 191, 193);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group">
                                <span class="apexcharts-tooltip-text-label"></span>
                                <span class="apexcharts-tooltip-text-value"></span>
                              </div>
                              <div class="apexcharts-tooltip-z-group">
                                <span class="apexcharts-tooltip-text-z-label"></span>
                                <span class="apexcharts-tooltip-text-z-value"></span>
                              </div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group">
                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(200, 200, 200);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group">
                                <span class="apexcharts-tooltip-text-label"></span>
                                <span class="apexcharts-tooltip-text-value"></span>
                              </div>
                              <div class="apexcharts-tooltip-z-group">
                                <span class="apexcharts-tooltip-text-z-label"></span>
                                <span class="apexcharts-tooltip-text-z-value"></span>
                              </div>
                            </div>
                          </div>
                          <div class="apexcharts-tooltip-series-group">
                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 129, 129);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group">
                                <span class="apexcharts-tooltip-text-label"></span>
                                <span class="apexcharts-tooltip-text-value"></span>
                              </div>
                              <div class="apexcharts-tooltip-z-group">
                                <span class="apexcharts-tooltip-text-z-label"></span>
                                <span class="apexcharts-tooltip-text-z-value"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="resize-triggers">
                      <div class="expand-trigger">
                        <div style="width: 415px; height: 286px;"></div>
                      </div>
                      <div class="contract-trigger"></div>
                    </div>
                  </div>
                </div>
              </div>
          </div> --}}
            {{-- <div class="row">
              <div class="col-lg-6">
                <div class="card dashboard-table">
                  <div class="card-body">
                    <h3>trending products</h3>
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">image</th>
                          <th scope="col">product name</th>
                          <th scope="col">price</th>
                          <th scope="col">sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <img src="../assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded">
                          </th>
                          <td>neck velvet dress</td>
                          <td>$205</td>
                          <td>1000</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <img src="../assets/images/dashboard/product/9.jpg" class="blur-up lazyloaded">
                          </th>
                          <td>belted trench coat</td>
                          <td>$350</td>
                          <td>800</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <img src="../assets/images/pro3/34.jpg" class="blur-up lazyloaded">
                          </th>
                          <td>man print tee</td>
                          <td>$150</td>
                          <td>750</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card dashboard-table">
                  <div class="card-body">
                    <h3>recent orders</h3>
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">order id</th>
                          <th scope="col">product details</th>
                          <th scope="col">status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">#21515</th>
                          <td>neck velvet dress</td>
                          <td>
                            <span class="badge rounded-pill bg-success-10 text-success custom-badge">shipped</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#78153</th>
                          <td>belted trench coat</td>
                          <td>
                            <span class="badge rounded-pill bg-danger-10 text-danger custom-badge">pending</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#51512</th>
                          <td>man print tee</td>
                          <td>
                            <span class="badge rounded-pill bg-secondary-10 text-secondary custom-badge">cancelled</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#78153</th>
                          <td>belted trench coat</td>
                          <td>
                            <span class="badge rounded-pill bg-danger-10 text-danger custom-badge">pending</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">#51512</th>
                          <td>man print tee</td>
                          <td>
                            <span class="badge rounded-pill bg-success-10 text-success custom-badge">shipped</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div> --}}
      </div>
      <div class="tab-pane fade" id="orders">
      	<div class="row">
      		<div class="col-12">
      			<div class="card dashboard-table mt-0">
      				<div class="card-body">
      					<div class="top-sec">
      						<h3>orders</h3>
      					</div>
      					<div class="table-responsive-sm">
      						<table class="table mb-0 order-table-vendor">
      							<thead>
      								<tr>
      									<th scope="col">Invoice #</th>
      									<th scope="col">status</th>
      									<th scope="col">Date</th>
      									<th scope="col">Action</th>
      								</tr>
      							</thead>
      							<tbody>
      								@foreach ($order as $val)
      								
      								<tr>
      									
      									<th scope="row">{{ @$val->tracking_no }}</th>
      									<th scope="row">{{date('d M Y', strtotime($val->created_at));}}</th>
      									<td>
      										@if($val->status == "0")
      										<span class="badge rounded-pill bg-danger-10 text-danger custom-badge">Pending</span>
      										@elseif($val->status == "1")
      										<span class="badge rounded-pill bg-success-10 text-success custom-badge">
      										Shipped</span>
      										@else
      										<span class="badge rounded-pill bg-secondary-10 text-secondary custom-badge">
      										Cancelled</span>
      										@endif
      									</td>
      									<td>
      										<a href="{{ url("order_details/".$val->id) }}" class="btn btn-solid">View Details</a>
      									</td>
      								</tr>
      								@endforeach
      							</tbody>
      						</table>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="tab-pane fade" id="profile">
      	<div class="row">
      		<div class="col-12">
      			<div class="card mt-0">
      				<div class="card-body">
      					<div class="dashboard-box">
      						<div class="dashboard-title">
      							<h4>profile</h4>
      							<span data-toggle="modal" data-bs-target="#edit-profile">edit</span>
      						</div>
      						<div class="dashboard-detail">
      							<ul>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>company name</h6>
      										</div>
      										<div class="right">
      											<h6>Fashion Store</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>email address</h6>
      										</div>
      										<div class="right">
      											<h6>mark.enderess@mail.com</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>Country / Region</h6>
      										</div>
      										<div class="right">
      											<h6>Downers Grove, IL</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>Year Established</h6>
      										</div>
      										<div class="right">
      											<h6>2018</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>Total Employees</h6>
      										</div>
      										<div class="right">
      											<h6>101 - 200 People</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>category</h6>
      										</div>
      										<div class="right">
      											<h6>clothing</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>street address</h6>
      										</div>
      										<div class="right">
      											<h6>549 Sulphur Springs Road</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>city/state</h6>
      										</div>
      										<div class="right">
      											<h6>Downers Grove, IL</h6>
      										</div>
      									</div>
      								</li>
      								<li>
      									<div class="details">
      										<div class="left">
      											<h6>zip</h6>
      										</div>
      										<div class="right">
      											<h6>60515</h6>
      										</div>
      									</div>
      								</li>
      							</ul>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="tab-pane fade" id="settings">
      	<div class="row">
      		<div class="col-12">
      			<div class="card mt-0">
      				<div class="card-body">
      					<div class="dashboard-box">
      						<div class="dashboard-title">
      							<h4>settings</h4>
      						</div>
      						<div class="dashboard-detail">
      							<div class="account-setting">
      								<h5>Notifications</h5>
      								<div class="row">
      									<div class="col">
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
      											<label class="form-check-label" for="exampleRadios1"> Allow Desktop Notifications </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      											<label class="form-check-label" for="exampleRadios2"> Enable Notifications </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
      											<label class="form-check-label" for="exampleRadios3"> Get notification for my own activity </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
      											<label class="form-check-label" for="exampleRadios4"> DND </label>
      										</div>
      									</div>
      								</div>
      							</div>
      							<div class="account-setting">
      								<h5>deactivate account</h5>
      								<div class="row">
      									<div class="col">
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios4" value="option4" checked="">
      											<label class="form-check-label" for="exampleRadios4"> I have a privacy concern </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios5" value="option5">
      											<label class="form-check-label" for="exampleRadios5"> This is temporary </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios6" value="option6">
      											<label class="form-check-label" for="exampleRadios6"> other </label>
      										</div>
      										<button type="button" class="btn btn-solid btn-xs">Deactivate Account</button>
      									</div>
      								</div>
      							</div>
      							<div class="account-setting">
      								<h5>Delete account</h5>
      								<div class="row">
      									<div class="col">
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios7" value="option7" checked="">
      											<label class="form-check-label" for="exampleRadios7"> No longer usable </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios8" value="option8">
      											<label class="form-check-label" for="exampleRadios8"> Want to switch on other account </label>
      										</div>
      										<div class="form-check">
      											<input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios9" value="option9">
      											<label class="form-check-label" for="exampleRadios9"> other </label>
      										</div>
      										<button type="button" class="btn btn-solid btn-xs">Delete Account</button>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
  </div>
</div>
</div>
</div>
</section>
@endsection
