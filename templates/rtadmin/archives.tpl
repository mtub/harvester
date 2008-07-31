{**
 * archives.tpl
 *
 * Copyright (c) 2005-2008 Alec Smecher and John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Provide an archive list for RT administration.
 *
 * $Id$
 *}
{assign var="pageTitle" value="admin.rtAdmin"}
{assign var="helpTopicId" value="FIXME"}
{include file="common/header.tpl"}

<p>{translate key="rt.admin.desc"}</p>

<a name="archives"></a>

<ul class="plain">
	<li>&#187; <a href="{url path="default"}">{translate key="rt.admin.default"}</a><br/>&nbsp;</li>
{iterate from=archives item=archive}
	<li>&#187; <a href="{url path=$archive->getArchiveId()}">{$archive->getTitle()|escape}</a></li>
{/iterate}
{if $archives->wasEmpty()}
	<li>{translate key="admin.archives.noneCreated"}</li>
</ul>
{else}
</ul>
	{page_info iterator=$archives}&nbsp;&nbsp;&nbsp;&nbsp;{page_links anchor="archives" name="archives" iterator=$archives}
{/if}

{include file="common/footer.tpl"}
