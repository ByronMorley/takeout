<main>
    <% if $MenuTemplate %>
        $ChildMenu
    <% else %>
		<div class="to-wrapper">
			<ul class="to-menu columns column-3">
                <% if $Children %>
                    <% loop $Children %>
						<li>
							<a class="to-menu-item" href="$Link">

								<div class="to-title-wrapper abs top left">
									<span class="to-title">$MenuTitle</span>
								</div>
								<div class="to-image-wrapper">
                                    <% if $MenuImage %>
										<img class="to-image" src="$MenuImage.Filename"/>
                                    <% else %>
										<img class="to-image" src="$ThemeDir/assets/images/National-Gallery-London.jpg"/>
                                    <% end_if %>
								</div>

								<div class="to-button-wrapper abs bottom right">
									<span class="to-button">Link</span>
								</div>
								<div class="to-icon-wrapper abs bottom left">
									<i class="to-icon fa fa-users" aria-hidden="true"></i>
								</div>
								<div class="to-shape triangle bottom right"></div>
								<div class="to-overlay"></div>

								<div class="to-caption-wrapper">
									<span class="to-caption">this is a caption</span>
								</div>
							</a>
						</li>
                    <% end_loop %>
                <% end_if %>
			</ul>
		</div>
    <% end_if %>
</main>
