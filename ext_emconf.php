<?php

########################################################################
# Extension Manager/Repository config file for ext "phamlp".
#
# Auto generated 12-08-2011 20:24
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'PHamlP',
	'description' => 'Haml and Sass have been used in Ruby for sometime to simplify templates (Haml) and make CSS more intelligent, flexible and manageable (Sass); now they come to PHP in PHamlP.',
	'category' => 'misc',
	'author' => 'Kay Strobach',
	'author_email' => 'typo3@kay-strobach.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:265:{s:9:"ChangeLog";s:4:"d4af";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"6759";s:17:"ext_localconf.php";s:4:"5e83";s:14:"ext_tables.php";s:4:"e236";s:35:"Classes/Pi1/class.tx_phamlp_pi1.php";s:4:"0b28";s:28:"Classes/Utils/PhamlpUtil.php";s:4:"56c4";s:44:"Configuration/TypoScript/basic/constants.txt";s:4:"d41d";s:40:"Configuration/TypoScript/basic/setup.txt";s:4:"eec4";s:46:"Configuration/TypoScript/example/constants.txt";s:4:"a944";s:42:"Configuration/TypoScript/example/setup.txt";s:4:"d162";s:43:"Resources/Private/Contrib/phamlp/Phamlp.php";s:4:"9963";s:52:"Resources/Private/Contrib/phamlp/PhamlpException.php";s:4:"4e68";s:55:"Resources/Private/Contrib/phamlp/haml/HamlException.php";s:4:"3fd8";s:53:"Resources/Private/Contrib/phamlp/haml/HamlHelpers.php";s:4:"3d17";s:52:"Resources/Private/Contrib/phamlp/haml/HamlParser.php";s:4:"3935";s:64:"Resources/Private/Contrib/phamlp/haml/filters/HamlBaseFilter.php";s:4:"1a5b";s:65:"Resources/Private/Contrib/phamlp/haml/filters/HamlCdataFilter.php";s:4:"64cb";s:63:"Resources/Private/Contrib/phamlp/haml/filters/HamlCssFilter.php";s:4:"0c32";s:67:"Resources/Private/Contrib/phamlp/haml/filters/HamlEscapedFilter.php";s:4:"d58f";s:70:"Resources/Private/Contrib/phamlp/haml/filters/HamlJavascriptFilter.php";s:4:"fd48";s:63:"Resources/Private/Contrib/phamlp/haml/filters/HamlPhpFilter.php";s:4:"dc89";s:65:"Resources/Private/Contrib/phamlp/haml/filters/HamlPlainFilter.php";s:4:"0d6e";s:68:"Resources/Private/Contrib/phamlp/haml/filters/HamlPreserveFilter.php";s:4:"4ab1";s:64:"Resources/Private/Contrib/phamlp/haml/filters/HamlSassFilter.php";s:4:"85e8";s:64:"Resources/Private/Contrib/phamlp/haml/filters/HamlScssFilter.php";s:4:"e6b2";s:69:"Resources/Private/Contrib/phamlp/haml/filters/_HamlMarkdownFilter.php";s:4:"5063";s:68:"Resources/Private/Contrib/phamlp/haml/filters/_HamlTextileFilter.php";s:4:"11cc";s:56:"Resources/Private/Contrib/phamlp/haml/messages/_i18n.php";s:4:"b75d";s:53:"Resources/Private/Contrib/phamlp/haml/messages/de.php";s:4:"811f";s:53:"Resources/Private/Contrib/phamlp/haml/messages/fr.php";s:4:"59e2";s:71:"Resources/Private/Contrib/phamlp/haml/renderers/HamlCompactRenderer.php";s:4:"ec48";s:74:"Resources/Private/Contrib/phamlp/haml/renderers/HamlCompressedRenderer.php";s:4:"67e6";s:72:"Resources/Private/Contrib/phamlp/haml/renderers/HamlExpandedRenderer.php";s:4:"698c";s:70:"Resources/Private/Contrib/phamlp/haml/renderers/HamlNestedRenderer.php";s:4:"2d66";s:64:"Resources/Private/Contrib/phamlp/haml/renderers/HamlRenderer.php";s:4:"9b06";s:64:"Resources/Private/Contrib/phamlp/haml/tree/HamlCodeBlockNode.php";s:4:"a910";s:62:"Resources/Private/Contrib/phamlp/haml/tree/HamlCommentNode.php";s:4:"4e46";s:62:"Resources/Private/Contrib/phamlp/haml/tree/HamlDoctypeNode.php";s:4:"ceee";s:62:"Resources/Private/Contrib/phamlp/haml/tree/HamlElementNode.php";s:4:"7c53";s:61:"Resources/Private/Contrib/phamlp/haml/tree/HamlFilterNode.php";s:4:"2dd7";s:61:"Resources/Private/Contrib/phamlp/haml/tree/HamlHelperNode.php";s:4:"280c";s:55:"Resources/Private/Contrib/phamlp/haml/tree/HamlNode.php";s:4:"8693";s:65:"Resources/Private/Contrib/phamlp/haml/tree/HamlNodeExceptions.php";s:4:"bc4a";s:59:"Resources/Private/Contrib/phamlp/haml/tree/HamlRootNode.php";s:4:"138e";s:55:"Resources/Private/Contrib/phamlp/sass/SassException.php";s:4:"c343";s:50:"Resources/Private/Contrib/phamlp/sass/SassFile.php";s:4:"fd5b";s:52:"Resources/Private/Contrib/phamlp/sass/SassParser.php";s:4:"41ce";s:67:"Resources/Private/Contrib/phamlp/sass/extensions/compass/config.php";s:4:"c2c2";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/_blueprint.scss";s:4:"1f8e";s:113:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_buttons.scss";s:4:"b4ad";s:112:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_colors.scss";s:4:"d57c";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_debug.scss";s:4:"b832";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_fancy-type.scss";s:4:"acdf";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_form.scss";s:4:"8c74";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_grid.scss";s:4:"3899";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_ie.scss";s:4:"1a9b";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_interaction.scss";s:4:"3d0c";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_link-icons.scss";s:4:"c72b";s:112:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_liquid.scss";s:4:"788d";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_print.scss";s:4:"7735";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_reset.scss";s:4:"8952";s:109:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_rtl.scss";s:4:"4174";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_scaffolding.scss";s:4:"13b1";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_typography.scss";s:4:"8a3e";s:115:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/_utilities.scss";s:4:"9791";s:121:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/stylesheets/blueprint/reset/_utilities.scss";s:4:"e060";s:102:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/grid.png";s:4:"893e";s:101:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/ie.sass";s:4:"9500";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/manifest.rb";s:4:"b6a2";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/print.sass";s:4:"350c";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/screen.sass";s:4:"3770";s:113:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/basic/partials/_base.sass";s:4:"31d8";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/buttons/buttons.sass";s:4:"d04b";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/buttons/manifest.rb";s:4:"b8fb";s:113:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/buttons/buttons/cross.png";s:4:"4249";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/buttons/buttons/key.png";s:4:"dc3d";s:112:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/buttons/buttons/tick.png";s:4:"c9b5";s:114:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons.sass";s:4:"b12c";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/manifest.rb";s:4:"ed30";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/doc.png";s:4:"083f";s:119:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/email.png";s:4:"af58";s:122:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/external.png";s:4:"f7c7";s:118:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/feed.png";s:4:"55bc";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/im.png";s:4:"a8b9";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/pdf.png";s:4:"5ee1";s:121:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/visited.png";s:4:"fffb";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/link_icons/link_icons/xls.png";s:4:"7363";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/grid.png";s:4:"893e";s:103:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/ie.sass";s:4:"6a37";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/manifest.rb";s:4:"ea46";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/print.sass";s:4:"fdaf";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/screen.sass";s:4:"1b11";s:115:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/project/partials/_base.sass";s:4:"0fe7";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/grid.png";s:4:"893e";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/ie.sass";s:4:"eba3";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/manifest.rb";s:4:"cdf8";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/print.sass";s:4:"0b06";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/screen.sass";s:4:"d8bc";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/partials/_base.sass";s:4:"4994";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/partials/_form.sass";s:4:"c7ad";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/partials/_page.sass";s:4:"db86";s:119:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/blueprint/templates/semantic/partials/_two_col.sass";s:4:"4cee";s:101:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/_compass.scss";s:4:"4b81";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/_css3.scss";s:4:"6744";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/_layout.scss";s:4:"e7e6";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/_reset.scss";s:4:"f3ba";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/_utilities.scss";s:4:"c7ea";s:122:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_background-clip.scss";s:4:"fa0b";s:124:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_background-origin.scss";s:4:"bfc8";s:122:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_background-size.scss";s:4:"f35d";s:120:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_border-radius.scss";s:4:"2ffa";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_box-shadow.scss";s:4:"5843";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_box-sizing.scss";s:4:"803d";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_box.scss";s:4:"0430";s:114:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_columns.scss";s:4:"fb07";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_font-face.scss";s:4:"ae08";s:115:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_gradient.scss";s:4:"38bb";s:119:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_inline-block.scss";s:4:"3c56";s:114:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_opacity.scss";s:4:"5b59";s:113:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_shared.scss";s:4:"c48e";s:118:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_text-shadow.scss";s:4:"241f";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_transform.scss";s:4:"d0ee";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/css3/_transition.scss";s:4:"7d14";s:122:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/layout/_sticky-footer.scss";s:4:"b3cf";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/reset/_utilities.scss";s:4:"374a";s:119:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_general.scss";s:4:"154b";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_links.scss";s:4:"ec36";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_lists.scss";s:4:"8694";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_print.scss";s:4:"3a4b";s:119:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_sprites.scss";s:4:"8baf";s:118:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_tables.scss";s:4:"9ef4";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/_text.scss";s:4:"2e91";s:128:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_clearfix.scss";s:4:"f9b0";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_float.scss";s:4:"0249";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_hacks.scss";s:4:"c285";s:123:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_min.scss";s:4:"a406";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_reset.scss";s:4:"960b";s:124:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_tabs.scss";s:4:"68b3";s:129:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/general/_tag-cloud.scss";s:4:"ab5b";s:128:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/links/_hover-link.scss";s:4:"eefc";s:129:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/links/_link-colors.scss";s:4:"c83d";s:131:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/links/_unstyled-link.scss";s:4:"81a5";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/lists/_bullets.scss";s:4:"4c81";s:133:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/lists/_horizontal-list.scss";s:4:"a150";s:135:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/lists/_inline-block-list.scss";s:4:"098c";s:129:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/lists/_inline-list.scss";s:4:"f9e5";s:130:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/sprites/_sprite-img.scss";s:4:"a5a1";s:147:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/tables/_alternating-rows-and-columns.scss";s:4:"0d24";s:126:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/tables/_borders.scss";s:4:"5302";s:130:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/tables/_scaffolding.scss";s:4:"3e40";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/text/_ellipsis.scss";s:4:"838c";s:123:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/text/_nowrap.scss";s:4:"7f33";s:128:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/stylesheets/compass/utilities/text/_replacement.scss";s:4:"13b5";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/ellipsis/ellipsis.sass";s:4:"21eb";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/ellipsis/manifest.rb";s:4:"3e98";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/ellipsis/xml/ellipsis.xml";s:4:"31c9";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/extension/manifest.rb";s:4:"2771";s:117:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/extension/stylesheets/main.sass";s:4:"b395";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/extension/templates/project/manifest.rb";s:4:"b2fd";s:125:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/extension/templates/project/screen.sass";s:4:"9e0f";s:108:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/project/USAGE.markdown";s:4:"c294";s:101:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/project/ie.sass";s:4:"abaa";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/project/manifest.rb";s:4:"93f4";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/project/print.sass";s:4:"d0f3";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/frameworks/compass/templates/project/screen.sass";s:4:"05b3";s:82:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/colourStops.php";s:4:"112e";s:80:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/constants.php";s:4:"2851";s:80:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/fontFiles.php";s:4:"5ee6";s:80:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/imageSize.php";s:4:"6d7e";s:81:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/inlineData.php";s:4:"04f3";s:76:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/lists.php";s:4:"d69d";s:80:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/selectors.php";s:4:"4d6b";s:75:"Resources/Private/Contrib/phamlp/sass/extensions/compass/functions/urls.php";s:4:"95e5";s:82:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/_compass.scss";s:4:"4b81";s:87:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/_css3.scss";s:4:"6744";s:89:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/_layout.scss";s:4:"e7e6";s:88:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/_reset.scss";s:4:"f3ba";s:92:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/_utilities.scss";s:4:"c7ea";s:103:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_background-clip.scss";s:4:"fa0b";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_background-origin.scss";s:4:"bfc8";s:103:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_background-size.scss";s:4:"f35d";s:101:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_border-radius.scss";s:4:"2ffa";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_box-shadow.scss";s:4:"5843";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_box-sizing.scss";s:4:"803d";s:91:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_box.scss";s:4:"0430";s:95:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_columns.scss";s:4:"fb07";s:97:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_font-face.scss";s:4:"ae08";s:96:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_gradient.scss";s:4:"0d2d";s:100:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_inline-block.scss";s:4:"3c56";s:95:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_opacity.scss";s:4:"5b59";s:94:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_shared.scss";s:4:"c48e";s:99:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_text-shadow.scss";s:4:"241f";s:97:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_transform.scss";s:4:"d0ee";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/css3/_transition.scss";s:4:"7d14";s:103:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/layout/_sticky-footer.scss";s:4:"b3cf";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/reset/_utilities.scss";s:4:"374a";s:100:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_general.scss";s:4:"154b";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_links.scss";s:4:"ec36";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_lists.scss";s:4:"8694";s:98:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_print.scss";s:4:"3a4b";s:100:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_sprites.scss";s:4:"8baf";s:99:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_tables.scss";s:4:"9ef4";s:97:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/_text.scss";s:4:"2e91";s:109:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_clearfix.scss";s:4:"f9b0";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_float.scss";s:4:"0249";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_hacks.scss";s:4:"c285";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_min.scss";s:4:"a406";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_reset.scss";s:4:"960b";s:105:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_tabs.scss";s:4:"68b3";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/general/_tag-cloud.scss";s:4:"ab5b";s:109:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/links/_hover-link.scss";s:4:"eefc";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/links/_link-colors.scss";s:4:"c83d";s:112:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/links/_unstyled-link.scss";s:4:"81a5";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/lists/_bullets.scss";s:4:"4c81";s:114:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/lists/_horizontal-list.scss";s:4:"a150";s:116:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/lists/_inline-block-list.scss";s:4:"098c";s:110:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/lists/_inline-list.scss";s:4:"f9e5";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/sprites/_sprite-img.scss";s:4:"a5a1";s:128:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/tables/_alternating-rows-and-columns.scss";s:4:"0d24";s:107:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/tables/_borders.scss";s:4:"5302";s:111:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/tables/_scaffolding.scss";s:4:"3e40";s:106:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/text/_ellipsis.scss";s:4:"838c";s:104:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/text/_nowrap.scss";s:4:"7f33";s:109:"Resources/Private/Contrib/phamlp/sass/extensions/compass/stylesheets/compass/utilities/text/_replacement.scss";s:4:"13b5";s:56:"Resources/Private/Contrib/phamlp/sass/messages/_i18n.php";s:4:"c858";s:53:"Resources/Private/Contrib/phamlp/sass/messages/de.php";s:4:"9186";s:53:"Resources/Private/Contrib/phamlp/sass/messages/fr.php";s:4:"16ba";s:71:"Resources/Private/Contrib/phamlp/sass/renderers/SassCompactRenderer.php";s:4:"a1cd";s:74:"Resources/Private/Contrib/phamlp/sass/renderers/SassCompressedRenderer.php";s:4:"dffc";s:72:"Resources/Private/Contrib/phamlp/sass/renderers/SassExpandedRenderer.php";s:4:"8036";s:70:"Resources/Private/Contrib/phamlp/sass/renderers/SassNestedRenderer.php";s:4:"d893";s:64:"Resources/Private/Contrib/phamlp/sass/renderers/SassRenderer.php";s:4:"49a7";s:67:"Resources/Private/Contrib/phamlp/sass/script/SassScriptFunction.php";s:4:"9c70";s:68:"Resources/Private/Contrib/phamlp/sass/script/SassScriptFunctions.php";s:4:"30c5";s:64:"Resources/Private/Contrib/phamlp/sass/script/SassScriptLexer.php";s:4:"90ab";s:68:"Resources/Private/Contrib/phamlp/sass/script/SassScriptOperation.php";s:4:"8494";s:65:"Resources/Private/Contrib/phamlp/sass/script/SassScriptParser.php";s:4:"2255";s:75:"Resources/Private/Contrib/phamlp/sass/script/SassScriptParserExceptions.php";s:4:"ac94";s:67:"Resources/Private/Contrib/phamlp/sass/script/SassScriptVariable.php";s:4:"d9f8";s:69:"Resources/Private/Contrib/phamlp/sass/script/literals/SassBoolean.php";s:4:"3667";s:68:"Resources/Private/Contrib/phamlp/sass/script/literals/SassColour.php";s:4:"d157";s:69:"Resources/Private/Contrib/phamlp/sass/script/literals/SassLiteral.php";s:4:"b216";s:79:"Resources/Private/Contrib/phamlp/sass/script/literals/SassLiteralExceptions.php";s:4:"b605";s:68:"Resources/Private/Contrib/phamlp/sass/script/literals/SassNumber.php";s:4:"22b2";s:68:"Resources/Private/Contrib/phamlp/sass/script/literals/SassString.php";s:4:"0329";s:62:"Resources/Private/Contrib/phamlp/sass/tree/SassCommentNode.php";s:4:"cd90";s:58:"Resources/Private/Contrib/phamlp/sass/tree/SassContext.php";s:4:"c9cf";s:60:"Resources/Private/Contrib/phamlp/sass/tree/SassDebugNode.php";s:4:"dbcd";s:64:"Resources/Private/Contrib/phamlp/sass/tree/SassDirectiveNode.php";s:4:"d6c7";s:59:"Resources/Private/Contrib/phamlp/sass/tree/SassElseNode.php";s:4:"bb49";s:61:"Resources/Private/Contrib/phamlp/sass/tree/SassExtendNode.php";s:4:"2662";s:58:"Resources/Private/Contrib/phamlp/sass/tree/SassForNode.php";s:4:"9f0a";s:57:"Resources/Private/Contrib/phamlp/sass/tree/SassIfNode.php";s:4:"8444";s:61:"Resources/Private/Contrib/phamlp/sass/tree/SassImportNode.php";s:4:"a4e1";s:70:"Resources/Private/Contrib/phamlp/sass/tree/SassMixinDefinitionNode.php";s:4:"7de8";s:60:"Resources/Private/Contrib/phamlp/sass/tree/SassMixinNode.php";s:4:"04d5";s:55:"Resources/Private/Contrib/phamlp/sass/tree/SassNode.php";s:4:"a2c3";s:65:"Resources/Private/Contrib/phamlp/sass/tree/SassNodeExceptions.php";s:4:"7b8b";s:63:"Resources/Private/Contrib/phamlp/sass/tree/SassPropertyNode.php";s:4:"5602";s:59:"Resources/Private/Contrib/phamlp/sass/tree/SassRootNode.php";s:4:"7b85";s:59:"Resources/Private/Contrib/phamlp/sass/tree/SassRuleNode.php";s:4:"8e06";s:63:"Resources/Private/Contrib/phamlp/sass/tree/SassVariableNode.php";s:4:"7c17";s:60:"Resources/Private/Contrib/phamlp/sass/tree/SassWhileNode.php";s:4:"988f";s:36:"Resources/Public/Examples/input.scss";s:4:"d625";}',
	'suggests' => array(
	),
);

?>