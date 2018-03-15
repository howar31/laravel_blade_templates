<div id="sidebar">
	<div id="sidebar-wrap">
		<ul>
			@foreach ($sidebar as $item)
			@if (! isset($item['children']))
			<li class="sidebar-item{{ (array_get($item, 'current_page') == $current_page) ? ' active' : '' }}">
				<a href="{{ url(array_get($item, 'url')) }}">
					<span class="pull-right"><span class="badge">{{ array_get($item, 'badge') }}</span></span>
					<i class="{{ array_get($item, 'icon') }}"></i> {{ array_get($item, 'text') }}
				</a>
			</li>
			@else
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<span class="pull-right"><span class="badge">{{ array_get($item, 'badge') }}</span></span>
					<i class="{{ array_get($item, 'icon') }}"></i> {{ array_get($item, 'text') }}
				</a>
				<ul class="sidebar-group-content">
					@foreach ($item['children'] as $subitem)
					<li class="sidebar-item{{ (array_get($subitem, 'current_page') == $current_page) ? ' active' : '' }}"">
						<a href="{{ url(array_get($subitem, 'url')) }}">
							<span class="pull-right"><span class="badge">{{ array_get($subitem, 'badge') }}</span></span>
							<i class="{{ array_get($subitem, 'icon') }}"></i> {{ array_get($subitem, 'text') }}
						</a>
					</li>
					@endforeach
				</ul>
			</li>
			@endif
			@endforeach
		</ul>
	</div>
</div>

