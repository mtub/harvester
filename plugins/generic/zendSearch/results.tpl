{**
 * results.tpl
 *
 * Copyright (c) 2005-2008 Alec Smecher and John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Search results for Zend Framework's Lucene implementation.
 *
 * $Id$
 *}
{strip}
{url|assign:"currentUrl" op="searchResults" q=$q}
{assign var="pageTitle" value="record.records"}
{assign var="helpTopicId" value="index.browse"}
{include file="common/header.tpl"}
{/strip}

<a name="results"></a>

<ul class="plain">
{iterate from=results item=result}
	{assign var=document value=$result->getDocument()}
	{assign var=recordId value=$document->getFieldValue('recordId')}
	{assign var=record value=$recordDao->getRecord($recordId)}
	<li>&#187; {$record->displaySummary()}</li>
{/iterate}
</ul>
	{page_info iterator=$results}&nbsp;&nbsp;&nbsp;&nbsp;{page_links anchor="results" name="results" iterator=$results q=$q}

{include file="common/footer.tpl"}