<div class="to-wrapper">
	<ul class="bp-blockholders $MenuTemplate.Theme">
        <% loop $Menu %>
			<li class="bp-blockholder">
				<div class="pane upper-section">
					<div class="section left">
						<h2>$Title</h2>
					</div>
					<div class="section right">
					</div>
				</div>
				<ul class="to-menu $Top.MenuTemplate.Theme columns <% if $Top.MenuTemplate.Column %>$Top.MenuTemplate.Column<% else %>column-4<% end_if %>">
                    <% loop $Children %>
						<li>
							<a class="to-menu-item $Parent.ColorScheme <% if $Top.MenuTemplate.Rounded %>pane round<% end_if %>"
							   href="$BlueLink">
								<div class="to-title-wrapper abs <% if $Top.MenuTemplate.TitlePosition %>$Top.MenuTemplate.TitlePosition<% else %>top left<% end_if %>">
									<span class="to-title">$MenuTitle</span>
								</div>
								<div class="to-image-wrapper">
                                    <% if $MenuImage %>
										<img class="to-image" src="$MenuImage.Filename"/>
                                    <% else %>
										<img class="to-image"
											 src="$ThemeDir/assets/images/no-image-found.png"/>
                                    <% end_if %>
								</div>
								<div class="to-button-wrapper abs <% if $Top.MenuTemplate.ButtonPosition %>$Top.MenuTemplate.ButtonPosition<% else %>bottom right<% end_if %>">
									<span class="to-button">Link</span>
								</div>
								<div class="to-icon-wrapper abs <% if $Top.MenuTemplate.IconPosition %>$Top.MenuTemplate.IconPosition<% else %>bottom left<% end_if %>">
									<i class="to-icon $Icon" aria-hidden="true"></i>
								</div>
								<div class="to-shape triangle <% if $Top.MenuTemplate.ShapePosition %>$Top.MenuTemplate.ShapePosition<% else %>bottom right<% end_if %>"></div>
								<div class="to-overlay"></div>
                                <% if $Caption %>
									<div class="to-caption-wrapper">
										<div class="to-caption">$Caption</div>
									</div>
                                <% end_if %>
							</a>
						</li>
                    <% end_loop %>
				</ul>
			</li>
        <% end_loop %>
	</ul>
</div>
