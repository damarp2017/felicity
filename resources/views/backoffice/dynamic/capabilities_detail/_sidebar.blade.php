<div class="card">
	<div class="card-body">
		<a href="{{ route('backoffice.dynamic.capabilities.title.subtitle.edit', $capabilityId) }}" class="nav-link {{ request()->routeIs('backoffice.dynamic.capabilities.title.subtitle.*') ? 'bg-primary rounded' : '' }}">
			Title Detail - Subtitle
		</a>
		<a href="{{ route('backoffice.dynamic.our.process.index', $capabilityId) }}" class="nav-link {{ request()->routeIs('backoffice.dynamic.our.process.*') ? 'bg-primary rounded' : '' }}">
			Our Process
		</a>
		<a href="{{ route('backoffice.dynamic.what.include.index', $capabilityId) }}" class="nav-link {{ request()->routeIs('backoffice.dynamic.what.include.*') ? 'bg-primary rounded' : '' }}">
			Whats Included
		</a>
	</div>
</div>