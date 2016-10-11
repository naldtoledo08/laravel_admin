<div class="navbar-default sidebar" role="navigation">

	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<!--<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
				</div>
			</li>-->
			@foreach($sidebar_pages as $page)
			<li>
				<a href="{{$page->url}}"><i class="fa  fa-fw"></i>{{$page->name}}</a>
			</li>
			@endforeach

			<!--<li>
				<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="flot.html">Flot Charts</a>
					</li>
					<li>
						<a href="morris.html">Morris.js Charts</a>
					</li>
				</ul>
				
			</li><!-- /.nav-second-level -->
			
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
            <!-- /.navbar-static-side -->