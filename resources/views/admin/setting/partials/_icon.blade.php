@component('admin.widgets.panel')
	@slot('panelTitle1', 'Choose Icon')
	@slot('panelBody')
		<div class="row infoContainer {{ count($iconImages) > 0 ? 'hidden' : ''}}">
			<div class="col-sm-12">
				<div class="alert alert-info">
					<div class="text-center">
						<h1>There is no image</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="iconDiv {{ count($iconImages) > 0 ? '' : 'hidden' }}" style="display: relative">
					<div class="loaderHookIcon">
						
					</div>
					<div class="iconContainer">
						@if(count($iconImages) > 0)
							@foreach($iconImages as $image)
								<div class="col-sm-2 col-xs-6">
									<div class="thumbnail">
										<a href="javascript:" class="iconLink" data-id="{{ $image->id }}" data-location="{{ asset($image->thumbnail->location) }}" data-name="{{ $image->name }}">
											<img src="{{ asset($image->thumbnail->location) }}" title="{{ $image->name }}" class="img-responsive">
										</a>
									</div>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	@endslot
@endcomponent
<div class="row">
	<div class="col-sm-12">
		<div class="text-center">
			{{ $iconImages->links() }}
		</div>
	</div>
</div>