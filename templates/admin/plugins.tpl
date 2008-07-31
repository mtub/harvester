{**
 * plugins.tpl
 *
 * Copyright (c) 2005-2008 Alec Smecher and John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List available import/export plugins.
 *
 * $Id$
 *}
{assign var="pageTitle" value="admin.plugins"}
{include file="common/header.tpl"}

{foreach from=$plugins item=plugin}
	{if $plugin->getCategory() != $category}
		{assign var=category value=$plugin->getCategory()}
		{if $notFirst}</ul>{/if}
		<h3>{translate key="plugins.categories.$category"}</h3>
		<p>{translate key="plugins.categories.$category.description"}</p>
		<ul>
		{assign var=notFirst value=1}
	{/if}
	<li>
		<strong>{$plugin->getDisplayName()|escape}</strong>:&nbsp;{$plugin->getDescription()|escape}<br/>
		{assign var=managementVerbs value=$plugin->getManagementVerbs()}
		{if $managementVerbs}
			{foreach from=$managementVerbs item=verb}
				<a class="action" href="{url op="plugin" path=$category|to_array:$plugin->getName():$verb[0]}">{$verb[1]|escape}</a>&nbsp;
			{/foreach}
		{/if}
	</li>
{/foreach}
{if $notFirst}</ul>{/if}

{include file="common/footer.tpl"}
