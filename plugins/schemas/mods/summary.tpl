{**
 * summary.tpl
 *
 * Copyright (c) 2005-2008 Alec Smecher and John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a summary of a MODS record.
 *
 * $Id$
 *}
<span class="title">{$title|escape|default:"&mdash"}</span><br />

<div class="recordContents">
	{foreach from=$authors item=author}
		<span class="author">{$author|escape|default:"&mdash;"}</span><br />
	{/foreach}
	{$record->getDatestamp()|date_format:$dateFormatShort}<br />
	<a href="{url page="record" op="view" path=$record->getRecordId()}" class="action">{translate key="browse.viewRecord"}</a>{if $url}&nbsp;|&nbsp;<a href="{$url}" class="action">{translate key="browse.viewOriginal"}</a>{/if}
</div>
