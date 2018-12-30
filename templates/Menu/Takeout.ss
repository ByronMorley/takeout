<div class="to-wrapper">
	<ul class="to-menu $MenuTemplate.Theme columns <% if $MenuTemplate.Column %>$MenuTemplate.Column<% else %>column-1<% end_if %>">
        <% loop $Menu %>
			<li>
				<a class="to-menu-item $ColorScheme <% if $Parent.MenuTemplate.Rounded %>pane round<% end_if %>"
				   href="$Link">
					<div class="to-title-wrapper abs <% if $Parent.MenuTemplate.TitlePosition %>$Parent.MenuTemplate.TitlePosition<% else %>top left<% end_if %>">
						<span class="to-title">$MenuTitle</span>
					</div>
					<div class="to-image-wrapper">
                        <% if $MenuImage %>
							<img class="to-image" src="$MenuImage.Filename"/>
                        <% else %>
							<img class="to-image" src="$ThemeDir/assets/images/National-Gallery-London.jpg"/>
                        <% end_if %>
					</div>
					<div class="to-button-wrapper abs <% if $Parent.MenuTemplate.ButtonPosition %>$Parent.MenuTemplate.ButtonPosition<% else %>bottom right<% end_if %>">
						<span class="to-button"><%t Misc.Link "Agor" %></span>
					</div>
					<div class="to-icon-wrapper abs <% if $Parent.MenuTemplate.IconPosition %>$Parent.MenuTemplate.IconPosition<% else %>bottom left<% end_if %>">
						<i class="to-icon $Icon" aria-hidden="true"></i>
					</div>
					<div class="to-shape triangle <% if $Parent.MenuTemplate.ShapePosition %>$Parent.MenuTemplate.ShapePosition<% else %>bottom right<% end_if %>"></div>
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
</div>
