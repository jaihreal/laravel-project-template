<!-- sidebar toggle -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
	<a class="navbar-brand me-lg-5" href="../index.html">
			<img class="navbar-brand-dark" src="{{ asset('img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('img/brand/dark.svg') }}" alt="Volt logo" />
	</a>
	<div class="d-flex align-items-center">
		<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
</nav>

<!-- sidebar -->
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
	<div class="sidebar-inner px-4 pt-3">
		<ul class="nav flex-column pt-3 pt-md-0">
			<li class="nav-item">
				<a href="../index.html" class="nav-link d-flex align-items-center">
					<span class="sidebar-icon">
						<img src="{{ asset('img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
					</span>
					<span class="mt-1 ms-1 sidebar-text">Project Template</span>
				</a>
			</li>
			<li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
			<li class="nav-item">
				<a href="{{ route('dashboard') }}" class="nav-link">
					<span class="sidebar-icon">
						<svg class="icon icon-xs me-2" fill="#FF8E00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
					</span> 
					<span class="sidebar-text">Dashboard</span>
				</a>
			</li>
      <li class="nav-item">
				<a href="{{ route('users.index') }}" class="nav-link">
					<span class="sidebar-icon">
						<svg class="icon icon-xs me-2" fill="#FF8E00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
					</span> 
					<span class="sidebar-text">User Management</span>
				</a>
			</li>
      <li class="nav-item">
				<a href="{{ route('activity-logs.index') }}" class="nav-link">
					<span class="sidebar-icon">
						<svg class="icon icon-xs me-2" fill="#FF8E00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
					</span> 
					<span class="sidebar-text">Activity Log</span>
				</a>
			</li>
			<li class="nav-item">
				<span
					class="nav-link  collapsed  d-flex justify-content-between align-items-center"
					data-bs-toggle="collapse" data-bs-target="#submenu-app">
					<span>
						<span class="sidebar-icon">
							<svg class="icon icon-xs me-2" fill="#FF8E00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
						</span> 
						<span class="sidebar-text">Main Menu</span>
					</span>
					<span class="link-arrow">
						<svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
					</span>
				</span>
				<div class="multi-level collapse "
					role="list" id="submenu-app" aria-expanded="false">
					<ul class="flex-column nav">
						<li class="nav-item ">
							<a class="nav-link" href="#">
								<span class="sidebar-text">Sub Menu</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li role="separator" class="dropdown-divider border-gray-700"></li>
		</ul>
	</div>
</nav>