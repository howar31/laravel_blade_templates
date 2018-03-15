<div id="sidebar">
	<div id="sidebar-wrap">
		<ul>
			@foreach ($sidebar as $item)
			@if (! isset($item['children']))
			<li class="sidebar-item{{ ($item['current_page'] == $current_page) ? ' active' : '' }}">
				<a href="{{ url($item['url']) }}">
					<i class="{{ $item['icon'] }}"></i> {{ $item['text'] }}
				</a>
			</li>
			@else
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<i class="$item['icon']"></i> {{ $item['text'] }}
				</a>
				<ul class="sidebar-group-content">
					@foreach ($item['children'] as $subitem)
					<li class="sidebar-item{{ ($subitem['current_page'] == $current_page) ? ' active' : '' }}"">
						<a href="{{ url($subitem['url']) }}">
							<i class="{{ $subitem['icon'] }}"></i> {{ $subitem['text'] }}
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

