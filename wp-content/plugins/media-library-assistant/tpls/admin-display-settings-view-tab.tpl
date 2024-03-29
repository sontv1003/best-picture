<!-- template="single-item-edit" -->
<div id="ajax-response"></div>
<h3>Edit View</h3>
<form action="[+form_url+]" method="post" class="validate" id="mla-edit-view">
	<input type="hidden" name="page" value="mla-settings-menu-view" />
	<input type="hidden" name="mla_tab" value="view" />
	<input type="hidden" name="mla_admin_action" value="[+action+]" />
	<input type="hidden" name="mla_view_item[original_slug]" value="[+original_slug+]" />
	[+_wpnonce+]
	<table class="form-table">
	<tr class="form-field form-required">
	<th scope="row" valign="top"><label for="mla-view-slug">Slug</label></th>
	<td>
	<input name="mla_view_item[slug]" id="mla-view-slug" type="text" value="[+slug+]" size="40" aria-required="true" />
	<p class="description">The &#8220;slug&#8221; is the URL-friendly, unique key for the view. It must be all lowercase and contain only letters, numbers, periods (.), slashes (/) and hyphens (-). For &#8220;<strong>Post MIME Type</strong>&#8221; views, the slug is also the MIME type specification and <strong>must be a valid MIME</strong> type, e.g., &#8220;image&#8221; or &#8220;image/jpeg&#8221;.</p>
	</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="mla-view-singular">Singular Label</label></th>
	<td>
						<input name="mla_view_item[singular]" id="mla-view-singular" type="text" value="[+singular+]" size="40" />
	</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="mla-view-plural">Plural Label</label></th>
	<td>
						<input name="mla_view_item[plural]" id="mla-view-plural" type="text" value="[+plural+]" size="40" />
						<p class="description">The labels, e.g., &#8220;Image&#8221; and &#8220;Images&#8221; are used for column headers and other display purposes.</p>
	</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="mla-view-specification">Specification</label></th>
	<td>
						<input name="mla_view_item[specification]" id="mla-view-specification" type="text" value="[+specification+]" size="40" />
						<p class="description">If the MIME type specification differs from the slug, enter it here. You may include multiple MIME types, e.g., &#8220;audio,video&#8221; and/or wildcard specs, e.g.,  &#8220;*/*ms*&#8221;. This field will be ignored if the Post MIME Type box is checked.</p>
	</td>
	</tr>
	<tr>
	<th scope="row" valign="top"><label for="mla-view-post-mime-type">Post MIME Type</label></th>
	<td>
						<input type="checkbox" name="mla_view_item[post_mime_type]" id="mla-view-post-mime-type" [+post_mime_type+] value="1" />
						<span class="description">&nbsp;Check this box if you want to add this entry to the list of MIME types returned by wp_get_mime_types().</span>
	</td>
	</tr>
	<tr>
	<th scope="row" valign="top"><label for="mla-view-table-view">Table View</label></th>
	<td>
						<input type="checkbox" name="mla_view_item[table_view]" id="mla-view-table-view" [+table_view+] value="1" />
						<span class="description">&nbsp;Check this box if you want to add this entry to the list of Media/Assistant table views.</span>
	</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="mla-view-menu-order">Menu Order</label></th>
	<td>
						<input name="mla_view_item[menu_order]" id="mla-view-menu-order" type="text" value="[+menu_order+]" size="10" />
						<p class="description">You can choose your own table view order by entering a number (1 for first, etc.) in this field.</p>
	</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="mla-view-description">Description</label></th>
	<td>
						<textarea name="mla_view_item[description]" id="mla-view-description" rows="5" cols="40">[+description+]</textarea>
						<p class="description">The description can contain any documentation or notes you need to understand or use the item.</p>
	</td>
	</tr>
</table>
<p class="submit">
<input name="update" type="submit" class="button-primary" value="Update" />&nbsp;
<input name="cancel" type="submit" class="button-primary" value="Cancel" />&nbsp;
</p>
</form>
<!-- template="view-disabled" -->
<h3>View and Post MIME Type Support is disabled</h3>
<form action="[+form_url+]" method="post" class="mla-display-settings-page" id="mla-display-settings-view-tab">
    <table class="optiontable">
[+options_list+]
	</table>
    <p class="submit" style="padding-bottom: 0;">
        <input name="mla-view-options-save" type="submit" class="button-primary" value="Save Changes" />
    </p>
	<input type="hidden" name="page" value="mla-settings-menu-view" />
	<input type="hidden" name="mla_tab" value="view" />
	[+_wpnonce+]
</form>

<!-- template="before-table" -->
<h3>Library Views/Post MIME Type Processing</h3>
<p>On this tab you can manage the list of "Post MIME Types", which are used by WordPress to define the views for the <em><strong>Media/Library</strong></em> screen and the <em><strong>Media Manager/Add Media</strong></em> "media items" drop down list. MLA's <em><strong>Media/Assistant</strong></em> screen uses an enhanced version of the list, <em>Table Views</em>, to support views with multiple MIME Types (e.g., "audio,video") and wildcard specifications (e.g. "*/*ms*"). You can find more information in the <a href="[+settingsURL+]?page=mla-settings-menu-documentation&amp;mla_tab=documentation#mla_views">Documentation tab</a> or by clicking the <strong>"Help"</strong> tab in the upper-right corner of this screen.</p>
<div id="ajax-response"></div>
<form action="[+form_url+]" method="get" id="mla-search-views-form">
	<input type="hidden" name="page" value="mla-settings-menu-view" />
	<input type="hidden" name="mla_tab" value="view" />
	[+_wpnonce+]
	[+results+]
	<p class="search-box" style="margin-top: 1em">
		<label class="screen-reader-text" for="mla-search-views-input">Search Views:</label>
		<input type="search" id="mla-search-views-input" name="s" value="[+s+]" />
		<input type="submit" name="" id="mla-search-views-submit" class="button" value="Search Views" />
	</p>
</form>
<br class="clear" />
<div id="col-container">
	<div id="col-right">
		<div class="col-wrap">
			<form action="[+form_url+]" method="post" id="mla-search-views-filter">
				<input type="hidden" name="page" value="mla-settings-menu-view" />
				<input type="hidden" name="mla_tab" value="view" />
				[+_wpnonce+]
				
<!-- template="after-table" -->
			</form><!-- /id=mla-search-views-filter --> 
		</div><!-- /col-wrap --> 
		<div style="margin-left: 10px; margin-top: 10px;">
		<form action="[+form_url+]" method="post" class="mla-display-settings-page" id="mla-display-settings-view-tab">
			<table class="optiontable">
		[+options_list+]
			</table>
			<span class="submit" style="padding-bottom: 0;">
				<input name="mla-view-options-save" type="submit" class="button-primary" value="Save Changes" />
			</span>
		[+_wpnonce+]
		</form>
		</div>
	</div><!-- /col-right -->
	
	<div id="col-left">
		<div class="col-wrap">
			<div class="form-wrap">
				<h3>Add New View</h3>
				<form action="[+form_url+]" method="post" class="validate" id="mla-add-view">
					<input type="hidden" name="page" value="mla-settings-menu-view" />
					<input type="hidden" name="mla_tab" value="view" />
					[+_wpnonce+]
					<div class="form-field form-required">
						<label for="mla-view-slug">Slug</label>
						<input name="mla_view_item[slug]" id="mla-view-slug" type="text" value="[+slug+]" size="40" />
						<p class="description">The &#8220;slug&#8221; is the URL-friendly, unique key for the view. It must be all lowercase and contain only letters, numbers, periods (.), slashes (/) and hyphens (-). For &#8220;<strong>Post MIME Type</strong>&#8221; views, the slug is also the MIME type specification and <strong>must be a valid MIME</strong> type, e.g., &#8220;image&#8221; or &#8220;image/jpeg&#8221;.</p>
					</div>
					<div class="form-field">
						<label for="mla-view-singular">Singular Label</label>
						<input name="mla_view_item[singular]" id="mla-view-singular" type="text" value="[+singular+]" size="40" />
						<label for="mla-view-plural">Plural Label</label>
						<input name="mla_view_item[plural]" id="mla-view-singular" type="text" value="[+plural+]" size="40" />
						<p class="description">The labels, e.g., &#8220;Image&#8221; and &#8220;Images&#8221; are used for column headers and other display purposes.</p>
					</div>
					<div class="form-field">
						<label for="mla-view-specification">Specification</label>
						<input name="mla_view_item[specification]" id="mla-view-specification" type="text" value="[+specification+]" size="40" />
						<p class="description">If the MIME type specification differs from the slug, enter it here. You may include multiple MIME types, e.g., &#8220;audio,video&#8221; and/or wildcard specs, e.g.,  &#8220;*/*ms*&#8221;. This field will be ignored if the Post MIME Type box is checked.</p>
					</div>
					<div>
						<input type="checkbox" name="mla_view_item[post_mime_type]" id="mla-view-post-mime-type" [+post_mime_type+] value="1" />
						Post MIME Type
						<p class="description">Check this box if you want to add this entry to the list of MIME types returned by wp_get_mime_types().</p>
					</div>
					<div>
						<input type="checkbox" name="mla_view_item[table_view]" id="mla-view-table-view" [+table_view+] value="1" />
						Table View
						<p class="description">Check this box if you want to add this entry to the list of Media/Assistant table views.</p>
					</div>
					<div class="form-field">
						<label for="mla-view-menu-order">Menu Order</label>
						<input name="mla_view_item[menu_order]" id="mla-view-menu-order" type="text" value="[+menu_order+]" size="10" />
						<p class="description">You can choose your own table view order by entering a number (1 for first, etc.) in this field.</p>
					</div>
					<div class="form-field">
						<label for="mla-view-description">Description</label>
						<textarea name="mla_view_item[description]" id="mla-view-description" rows="5" cols="40">[+description+]</textarea>
						<p class="description">The description can contain any documentation or notes you need to understand or use the item.</p>
					</div>
					<p class="submit">
						<input type="submit" name="mla-add-view-submit" id="mla-add-view-submit" class="button button-primary" value="Add View" />
					</p>
				</form><!-- /id=mla-add-view --> 
			</div><!-- /form-wrap --> 
		</div><!-- /col-wrap -->
	</div><!-- /col-left --> 
</div><!-- /col-container -->
<script type="text/javascript">
try{document.forms.addtag['mla-view-slug'].focus();}catch(e){}
</script> 
<form>
	<table width="99%" style="display: none">
		<tbody id="inlineedit">
			<tr id="inline-edit" class="inline-edit-row inline-edit-row-view inline-edit-view quick-edit-row quick-edit-row-view quick-edit-view" style="display: none">
				<td colspan="[+colspan+]" class="colspanchange">
					<fieldset class="inline-edit-col">
						<div class="inline-edit-col">
							<h4>Quick Edit</h4>
							<label> <span class="title">Slug</span> <span class="input-text-wrap">
								<input type="text" name="slug" class="ptitle" value="" />
								</span> </label>
							<label> <span class="title">Specification</span> <span class="input-text-wrap">
								<input type="text" name="specification" class="ptitle" value="" />
								</span> </label>
							<label> <span class="title">Singular Label</span> <span class="input-text-wrap">
								<input type="text" name="singular" class="ptitle" value="" />
								</span> </label>
							<label> <span class="title">Plural Label</span> <span class="input-text-wrap">
								<input type="text" name="plural" class="ptitle" value="" />
								</span> </label>
							<br clear="all">
							<span class="input-text-wrap">
								<input type="checkbox" name="post_mime_type" class="ptitle" checked="checked" value="1" />
								</span> <span class="title">Post MIME Type&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<span class="input-text-wrap">
								<input type="checkbox" name="table_view" class="ptitle" checked="checked" value="1" />
								</span> <span class="title">Table View&nbsp;&nbsp;&nbsp;&nbsp;</span> 
							<span class="title">Menu Order</span> <span class="input-text-wrap">
								<input class="inline-edit-menu-order" type="text" name="menu_order" class="ptitle" value="" />
								</span>
						</div>
					</fieldset>
					<p class="inline-edit-save submit"> <a accesskey="c" href="#inline-edit" title="Cancel" class="cancel button-secondary alignleft">Cancel</a> <a accesskey="s" href="#inline-edit" title="Update View" class="save button-primary alignright">Update View</a>
						<input type="hidden" name="original_slug" value="" />
						<input type="hidden" name="page" value="mla-settings-menu-view" />
						<input type="hidden" name="mla_tab" value="view" />
						<input type="hidden" name="screen" value="settings_page_mla-settings-menu-view" />
						<span class="spinner"></span>
						<span class="error" style="display: none;"></span>
						<br class="clear" />
					</p>
				</td>
			</tr>
			<tr id="bulk-edit" class="inline-edit-row inline-edit-row-view inline-edit-view bulk-edit-row bulk-edit-row-view bulk-edit-view" style="display: none">
				<td colspan="[+colspan+]" class="colspanchange">
					<h4>Bulk Edit</h4>
					<fieldset class="inline-edit-col-left">
						<div class="inline-edit-col">
							<div id="bulk-title-div">
								<div id="bulk-titles"></div>
							</div>
						</div>
					</fieldset>
					<fieldset class="inline-edit-col-right">
						<div class="inline-edit-col">
							<label class="inline-edit-post-mime-type"> <span class="title">Post MIME Type</span> <span class="input-text-wrap">
								<select name="post_mime_type">
									<option selected="selected" value="-1">&mdash; No Change &mdash;</option>
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
								</span> </label>
							<br />
							<label class="inline-edit-table-view"> <span class="title">Table View</span> <span class="input-text-wrap">
								<select name="table_view">
									<option selected="selected" value="-1">&mdash; No Change &mdash;</option>
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
								</span> </label>
							<br />
							<label class="inline-edit-menu-order"> <span class="title">Menu Order</span> <span class="input-text-wrap">
								<input type="text" name="menu_order" value="" />
								</span> </label>
						</div>
					</fieldset>
					<p class="submit inline-edit-save"> <a accesskey="c" href="#inline-edit" title="Cancel" class="button-secondary cancel alignleft">Cancel</a>
						<input accesskey="s" type="submit" name="bulk_edit" id="bulk_edit" class="button-primary alignright" value="Update"  />
						<input type="hidden" name="page" value="mla-settings-menu-view" />
						<input type="hidden" name="mla_tab" value="view" />
						<input type="hidden" name="screen" value="settings_page_mla-settings-menu-view" />
						<span class="error" style="display:none"></span> <br class="clear" />
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</form>
