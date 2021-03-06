<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | deleted15.php                                                            |
// |                                                                          |
// | Template files to remove post v1.5.x                                     |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2015-2016 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own!');
}

$obsoleteTemplateFiles = array(
    array('file' => 'layout/cms/plugins/bad_behavior2/ban_entry.thtml', 'sha1' => 'e6f20bc08e9d798e3c55a4bf6e6d1d8e9fa58544'),
    array('file' => 'layout/cms/plugins/bad_behavior2/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/bad_behavior2/log.thtml', 'sha1' => '59bbee40c8b7f6263daa88c7def679f338cbbd63'),
    array('file' => 'layout/cms/plugins/calendar/addevent.thtml', 'sha1' => '5d12f9886a816342924936553cacfbbb66000db5'),
    array('file' => 'layout/cms/plugins/calendar/addeventoption.thtml', 'sha1' => '0daa1bfaa55ffcb92f265d25a6a54d5d5865cbc0'),
    array('file' => 'layout/cms/plugins/calendar/admin/batchadmin.thtml', 'sha1' => '5154f79cb407e088e529a893a5b72da2ad2dc54f'),
    array('file' => 'layout/cms/plugins/calendar/admin/eventeditor.thtml', 'sha1' => '5910694063a88921f6dfef73060823efa6f89e87'),
    array('file' => 'layout/cms/plugins/calendar/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/calendar/calendar.thtml', 'sha1' => '4fd0c3449e6444360700ea16860a719359e68715'),
    array('file' => 'layout/cms/plugins/calendar/calendarevent.thtml', 'sha1' => 'c096d0ab46759d122ac56824970c203e47b45c23'),
    array('file' => 'layout/cms/plugins/calendar/dayview/column.thtml', 'sha1' => 'c4c6a37e5eb71c804a570c97fc56424045e7fe53'),
    array('file' => 'layout/cms/plugins/calendar/dayview/dayview.thtml', 'sha1' => 'e8850bd8a9f747404b799c05102a7e7340e7e94e'),
    array('file' => 'layout/cms/plugins/calendar/dayview/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/calendar/dayview/quickaddform.thtml', 'sha1' => '3e2373e9c7106efbdcc9d3c861ac8d817a4959a8'),
    array('file' => 'layout/cms/plugins/calendar/editpersonalevent.thtml', 'sha1' => '1e6717fe7f764d21019aacd64f8d13b5ede5bbd4'),
    array('file' => 'layout/cms/plugins/calendar/eventdetails.thtml', 'sha1' => 'f23a322bcb355107828967561385bb7900752d88'),
    array('file' => 'layout/cms/plugins/calendar/events.thtml', 'sha1' => '5231b79ace440f66261c471451fa40329a72420d'),
    array('file' => 'layout/cms/plugins/calendar/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/calendar/mastercalendaroption.thtml', 'sha1' => 'bf1d9abe89b1062cfd49aa8f7a18687fdb729190'),
    array('file' => 'layout/cms/plugins/calendar/personalcalendaroption.thtml', 'sha1' => '3de8e1ee900e8af07a127a9714e795379f8b1af1'),
    array('file' => 'layout/cms/plugins/calendar/submitevent.thtml', 'sha1' => '656a62494a87a5c40961fc5176f7b4acd374cb44'),
    array('file' => 'layout/cms/plugins/calendar/weekview/custom/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/calendar/weekview/events.thtml', 'sha1' => '2c4cec50f4599192e3b8e71e14ae320d2727d92b'),
    array('file' => 'layout/cms/plugins/calendar/weekview/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/calendar/weekview/weekview.thtml', 'sha1' => 'e49a556c57a654c9f03a07a254db755fd6153f3b'),
    array('file' => 'layout/cms/plugins/captcha/captcha.thtml', 'sha1' => '20400cbe717623831097a8e74f55198f1a4b0ef5'),
    array('file' => 'layout/cms/plugins/captcha/captcha_calendar.thtml', 'sha1' => '6200e5bcca263730326fee08a2aeb8009fb7950e'),
    array('file' => 'layout/cms/plugins/captcha/captcha_comment.thtml', 'sha1' => 'f67fef3161b1c3aa0d28a0d5aec734f6d8c0a75a'),
    array('file' => 'layout/cms/plugins/captcha/captcha_contact.thtml', 'sha1' => '1e69bc4d92bf0affb5b23b92d256cdd66f2fc7ac'),
    array('file' => 'layout/cms/plugins/captcha/captcha_emailstory.thtml', 'sha1' => '20400cbe717623831097a8e74f55198f1a4b0ef5'),
    array('file' => 'layout/cms/plugins/captcha/captcha_forum.thtml', 'sha1' => 'e4d329feb9fe682540e5720954ed3e2692d37db5'),
    array('file' => 'layout/cms/plugins/captcha/captcha_links.thtml', 'sha1' => '265482c531a349ce517b812e2b06fdf5df9d4d71'),
    array('file' => 'layout/cms/plugins/captcha/captcha_registration.thtml', 'sha1' => '1bb8e92970cc2628b0ab683a42fcee6a54bbf993'),
    array('file' => 'layout/cms/plugins/captcha/captcha_story.thtml', 'sha1' => '20400cbe717623831097a8e74f55198f1a4b0ef5'),
    array('file' => 'layout/cms/plugins/captcha/captcha_token.thtml', 'sha1' => '793aa6811cb882072bc9095f5c3cbf0f8df1bb1d'),
    array('file' => 'layout/cms/plugins/captcha/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor.thtml', 'sha1' => 'f7ae37e50129fb8b47deb0db38fafb2a3b4e511f'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_block.thtml', 'sha1' => 'd449b2ad920ac7caa4fea8367c789cbe1fa5a5fb'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_comment.thtml', 'sha1' => '4689c56feb5a6bdfb8c35321ff11b144bc3bdee0'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_contact.thtml', 'sha1' => 'e3e5a56c10a60aee4ad35a4ad58fb468375ebe4e'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_email.thtml', 'sha1' => 'b8e7309152a8c6b2c54292a7cb92160e7e1da0c1'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_sp.thtml', 'sha1' => 'cdfa4513a6395e3e73e03ff709978a1763e47a8a'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_story.thtml', 'sha1' => '6e5a1a8144892fb1147e3da046b2b1fdf5ae076b'),
    array('file' => 'layout/cms/plugins/ckeditor/ckeditor_submitstory.thtml', 'sha1' => '9f3f67283bf905aa654aed10dda1bf1632e2466b'),
    array('file' => 'layout/cms/plugins/ckeditor/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/ckeditor/mediagallery/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/ckeditor/mediagallery/mb.thtml', 'sha1' => 'c2a4c164a685db37942133559e0abe610511fc58'),
    array('file' => 'layout/cms/plugins/ckeditor/mediagallery/mb_body.thtml', 'sha1' => 'd80dc74570c48282020c0e6d2f25cd3d1629c14b'),
    array('file' => 'layout/cms/plugins/ckeditor/mediagallery/mb_header.thtml', 'sha1' => '346ea56debcd7dcee4acc4dd728e32ad1a975aeb'),
    array('file' => 'layout/cms/plugins/filemgmt/filelisting.thtml', 'sha1' => '370d83cec7a8bd4c778d67012a6e0075117b05cf'),
    array('file' => 'layout/cms/plugins/filemgmt/filelisting_category.thtml', 'sha1' => 'd8bd430c98c1bd03a17187a77ba0f8612acc0da7'),
    array('file' => 'layout/cms/plugins/filemgmt/filelisting_record.thtml', 'sha1' => 'd70de2c60dc04d4eac9f5a7bdfe84b91aa239b0a'),
    array('file' => 'layout/cms/plugins/filemgmt/filelisting_subcategory.thtml', 'sha1' => '2a34b38d2f0e3bbb66875c6c02aa614dd4377b0f'),
    array('file' => 'layout/cms/plugins/filemgmt/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/filemgmt/sortmenu.thtml', 'sha1' => '2e4588f87a6cb267589bb92c05646045cf19eca3'),
    array('file' => 'layout/cms/plugins/filemgmt/upload.thtml', 'sha1' => 'e0a7db3f8611cda8260d5431b6b076713c04b3bb'),
    array('file' => 'layout/cms/plugins/forum/admin/banip_mgmt.thtml', 'sha1' => 'd81ca94bce15ff83eda6dd667424aa32458d322f'),
    array('file' => 'layout/cms/plugins/forum/admin/boards.thtml', 'sha1' => '0245198e764780f0e6544670ee999a4d73cf86b8'),
    array('file' => 'layout/cms/plugins/forum/admin/boards_delete.thtml', 'sha1' => 'f76398fd1bf3294b1fe5959acc469306e4454e15'),
    array('file' => 'layout/cms/plugins/forum/admin/boards_edtcategory.thtml', 'sha1' => '88593e54304c7d7f5a46bb97fcc0091c79e0201a'),
    array('file' => 'layout/cms/plugins/forum/admin/boards_edtforum.thtml', 'sha1' => 'e7acbaf79648037b06cb3381f73c75444c1c6ece'),
    array('file' => 'layout/cms/plugins/forum/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/admin/index.thtml', 'sha1' => '9f7caa83c49a86da1c6788651ad2c4dc2bc5ff6e'),
    array('file' => 'layout/cms/plugins/forum/admin/ips_unban.thtml', 'sha1' => '525120353ebe4d024425310c79a93a303aa52dc4'),
    array('file' => 'layout/cms/plugins/forum/admin/ip_records.thtml', 'sha1' => 'a81ece1b62d0044371589f097ef4942da3cf1599'),
    array('file' => 'layout/cms/plugins/forum/admin/migratestories.thtml', 'sha1' => '06651856b4e239c89f8f7bac3c35d47d92f5b631'),
    array('file' => 'layout/cms/plugins/forum/admin/migrate_records.thtml', 'sha1' => 'b31f82199eb9a6b954995cd5ea1042a9939c9a8d'),
    array('file' => 'layout/cms/plugins/forum/admin/moderators.thtml', 'sha1' => 'a9834e16b4f03c4d73f2bf03e752f187b7cfac3c'),
    array('file' => 'layout/cms/plugins/forum/admin/mod_add.thtml', 'sha1' => '8d53349b7c7783a568caf873c3e9feaf2ff90dcc'),
    array('file' => 'layout/cms/plugins/forum/admin/rating.thtml', 'sha1' => '8046c0bb35971d33561db8ff965268308c3c40ac'),
    array('file' => 'layout/cms/plugins/forum/alertmsg.thtml', 'sha1' => 'dab7ae96ed297570668c84c6ceca2896fa084fab'),
    array('file' => 'layout/cms/plugins/forum/blocks/block_displayline.thtml', 'sha1' => '7328a3e3307f31fda60f04cec105b940789b9e56'),
    array('file' => 'layout/cms/plugins/forum/blocks/centerblock.thtml', 'sha1' => '86ae6be35ecf4e1b5199ebf669ecb2979b2d526b'),
    array('file' => 'layout/cms/plugins/forum/blocks/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/blocks/latestpostsblock.thtml', 'sha1' => '3ae7f3e013db17b17838acb78c4bd6ba0cc1fe79'),
    array('file' => 'layout/cms/plugins/forum/footer/footer.thtml', 'sha1' => '2b501f3b2682558687d5f70f2bc07c6e412fda2f'),
    array('file' => 'layout/cms/plugins/forum/footer/forum_legend.thtml', 'sha1' => 'f84a48ec8cb456799f6d8005e7982ed6532e63d3'),
    array('file' => 'layout/cms/plugins/forum/footer/forum_rules.thtml', 'sha1' => 'eb52e4fd012196432680ae46f71e8a22a78f05fd'),
    array('file' => 'layout/cms/plugins/forum/footer/forum_time.thtml', 'sha1' => '21ef3fd427685d266c66c6d8d28ee04a7d2761f3'),
    array('file' => 'layout/cms/plugins/forum/footer/forum_users.thtml', 'sha1' => 'c73b8cb3f2e6d251900c9d78a66c5ab3eb92d763'),
    array('file' => 'layout/cms/plugins/forum/footer/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/forum_jump.thtml', 'sha1' => '3485d5275e515af77d65b79250a86a87d4507846'),
    array('file' => 'layout/cms/plugins/forum/forum_search.thtml', 'sha1' => 'd402aeb55cc05f8a0dbe3e57ce36b1724f26dee2'),
    array('file' => 'layout/cms/plugins/forum/gettopic.thtml', 'sha1' => '81e3738292a442c763be90c3909e987bbddf63cd'),
    array('file' => 'layout/cms/plugins/forum/homepage.thtml', 'sha1' => '7473bf99002e684eab946074dd5e62165c748a29'),
    array('file' => 'layout/cms/plugins/forum/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/lists.thtml', 'sha1' => '95f136138e94f39a7fada54b507d8a56fec1c242'),
    array('file' => 'layout/cms/plugins/forum/mod_confirm.thtml', 'sha1' => '3c39fe3f0690b739bcca6d4c6feda9bef71ec8ca'),
    array('file' => 'layout/cms/plugins/forum/navbar.thtml', 'sha1' => '616e10906784a918971275e0fb54ef8e3452fa55'),
    array('file' => 'layout/cms/plugins/forum/pagination.thtml', 'sha1' => '9cc89e01c81b0f152fedfb069701b1cb7533675b'),
    array('file' => 'layout/cms/plugins/forum/posteditor.thtml', 'sha1' => '335c1ca6c6ac02a26ae37d16431924bc169e1a6d'),
    array('file' => 'layout/cms/plugins/forum/reports/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/reports/notifications.thtml', 'sha1' => '3f34282e8b0f92db1be851cc23c9c8382bbe9b6c'),
    array('file' => 'layout/cms/plugins/forum/search_results.thtml', 'sha1' => '4e07685e3129284c96eaad1f44aca48f8dfa399a'),
    array('file' => 'layout/cms/plugins/forum/signature_profile.thtml', 'sha1' => 'cb240ba61592f24b72d5fe36cd2253cf52371861'),
    array('file' => 'layout/cms/plugins/forum/statusmessage.thtml', 'sha1' => '5a366222f21e35359c727aa5c738aa0412164217'),
    array('file' => 'layout/cms/plugins/forum/style.css', 'sha1' => 'f05ad7b488ed392171dbfab9a7d969c6dcef9fd3'),
    array('file' => 'layout/cms/plugins/forum/topiclisting.thtml', 'sha1' => 'af96b444c3b4bc723dbac67f56d61569cd306e66'),
    array('file' => 'layout/cms/plugins/forum/topic_full.thtml', 'sha1' => '651d11d848894a35be4974a857357eda21033543'),
    array('file' => 'layout/cms/plugins/forum/topic_preview.thtml', 'sha1' => '967080b2fbe43772054832117f89fc06548a0803'),
    array('file' => 'layout/cms/plugins/forum/userprefs/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/forum/userprefs/profile_user_settings.thtml', 'sha1' => 'f458bdaedf33d63dd4c1ec6597c1c33bc4c21aa1'),
    array('file' => 'layout/cms/plugins/links/admin/categoryeditor.thtml', 'sha1' => 'dd822460f907b03c6672fb0ff8810e898dd602a8'),
    array('file' => 'layout/cms/plugins/links/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/links/admin/linkeditor.thtml', 'sha1' => '47292e58191d8962979cee5ec4caf47ba2ecc677'),
    array('file' => 'layout/cms/plugins/links/admin/linkeditor.thtml', 'sha1' => '5a51207918a82553107feebbd5528ea1984f553d'),
    array('file' => 'layout/cms/plugins/links/categoryactivecol.thtml', 'sha1' => '55415d94a40d60934c6dce14d4c6a5b86f6d5dcb'),
    array('file' => 'layout/cms/plugins/links/categorycol.thtml', 'sha1' => '63816a889c670289fd04d65213710e0913375b9e'),
    array('file' => 'layout/cms/plugins/links/categorydropdown.thtml', 'sha1' => '17a9933673d227a36b83a3368fe940eb16e73269'),
    array('file' => 'layout/cms/plugins/links/categorylinks.thtml', 'sha1' => 'a8bf6f77292e4124b3970330a40cf037d6ef0071'),
    array('file' => 'layout/cms/plugins/links/categorynavigation.thtml', 'sha1' => '29700164b4944dda2900ec3a2b95679ce08e387a'),
    array('file' => 'layout/cms/plugins/links/categoryrow.thtml', 'sha1' => 'f9d3cd841de066a61cd83c7887f51f437645f831'),
    array('file' => 'layout/cms/plugins/links/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/links/linkdetails.thtml', 'sha1' => '904ee3ba59bcbcaa2b404585e7116194b9405ed2'),
    array('file' => 'layout/cms/plugins/links/links.thtml', 'sha1' => '260ff0132d5822b9a7384a702a9f57e95382c098'),
    array('file' => 'layout/cms/plugins/links/pagenavigation.thtml', 'sha1' => '5b9f40b64f3a5b760d0189e66ee75c57165729be'),
    array('file' => 'layout/cms/plugins/links/submitlink.thtml', 'sha1' => '8fce3591e4f479ab10f9cd2c18006789b66da544'),
    array('file' => 'layout/cms/plugins/links/submitlink.thtml', 'sha1' => '0bf194b80c93263257cd87f16b2287a8cfff54d4'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/administration.thtml', 'sha1' => '8f746a90f968ae1321f20b16a69686bb046b4ab8'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/category.thtml', 'sha1' => 'b3ba03772cec65b76b679501222e639584335dc7'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/catitems.thtml', 'sha1' => 'd3e3b0126074c159c8598ca6576482459c9f6a68'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/cat_noitems.thtml', 'sha1' => '1c9ca00d3f53bf16922d0e06afd5c50e46cdccaf'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/cfgedit.thtml', 'sha1' => 'deb0d0e6da7b7ed1c7c9fa55a184ecdf382e9a15'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/createmembers.thtml', 'sha1' => 'd2ad53bd7a012c1fa8da3949605828c102bd2836'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/editalbum_formats.thtml', 'sha1' => '5d0455682a0fe936abc8f0c3d1c1911587a14d7f'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/editavdefaults.thtml', 'sha1' => '81ae453253ec1236a37d6d0085d578d19c922464'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/editcategory.thtml', 'sha1' => '825d912748548bc78614973bd3892beb12335c8c'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/editdefaults.thtml', 'sha1' => 'b27ca1c6a4639590a3d7fe3af0e86f7b50dd92f3'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/editmember.thtml', 'sha1' => 'b477cc24eb45f0c3109888743856f7c7f7eb0b62'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/exif_tags.thtml', 'sha1' => '4ee6fe9f38ed7234b77a4da609e70c6fee080f7b'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/massdelete.thtml', 'sha1' => '6be13f18c34709e7ddfda196f6f28a0a896120c0'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/purgealbums.thtml', 'sha1' => '8c2b56a44257684420984fe2fb165b3348406324'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/quotaconfirm.thtml', 'sha1' => '3cc21220f9b74b725b528851ee66fcd23af1b4d4'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/quotareport.thtml', 'sha1' => '3a414003382bf20a64157795a163cdd4fa3d66b5'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/rssedit.thtml', 'sha1' => '6877ba4a33caeea408c025d606aca6d2b9f17746'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/sessions.thtml', 'sha1' => '5af85d2862007556aedcb9e9922855cffe1f4242'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/sessitems.thtml', 'sha1' => 'ac13c8f53f1eb343902dbe76647f9774a8c5a5e1'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/sess_noitems.thtml', 'sha1' => '6550b4ffa04afee402eb7f67de6384b25d5d509e'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/staticsortalbums.thtml', 'sha1' => 'a1b12958a47aa1481212a003f4743bfebb767bb1'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/staticsortmedia.thtml', 'sha1' => '51776916ec5c7d527893fc05aee58a7b975baf4f'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/thumbs.thtml', 'sha1' => '3cfe2c21cbc4a6060b3d146ffdfa8667dcc96165'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/usage_menu.thtml', 'sha1' => '638ca0ef0f2e10005ca9af0496d33af4464f70c4'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/usage_rpt.thtml', 'sha1' => 'ee2d967f4ad296dfbf48ec2777b9b3c0fd46fc8c'),
    array('file' => 'layout/cms/plugins/mediagallery/admin/useredit.thtml', 'sha1' => '746dae79d95701f97b5d3f4bc14f79a48d9e332a'),
    array('file' => 'layout/cms/plugins/mediagallery/albumblock.thtml', 'sha1' => '9bf751a0b3b82ca69389f0c844529fcebd45f798'),
    array('file' => 'layout/cms/plugins/mediagallery/albumrow.thtml', 'sha1' => '1df90fee4ac80148ffbf9220184212131d340d96'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page.thtml', 'sha1' => '6a3099678248ac319323c15f2889ec8a4bf582d1'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_album_cell.thtml', 'sha1' => '3c28c518390f692b6fe52492f26379ac49789312'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_album_cell_1.thtml', 'sha1' => '3eecb52ef26a2e95791e1865902d27c29dfd8d93'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_media_cell.thtml', 'sha1' => 'cbfccfe349d32273a6eae411550b0187cf5ed271'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_media_cell_1.thtml', 'sha1' => 'c5d31fbd6d66ef14bd98d7ba123e8f7031ea7986'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_media_cell_comment.thtml', 'sha1' => 'f39170f52aa9fed2869701709ecac7993601f6ec'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_media_cell_keywords.thtml', 'sha1' => '0c30f8c121318413b61905bad1c01c363d450f29'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_body_media_cell_podcast.thtml', 'sha1' => '5278e633ede8d2a5dcf8a674a801d1d42a86bc94'),
    array('file' => 'layout/cms/plugins/mediagallery/album_page_noitems.thtml', 'sha1' => '105c5b7eb312a3ff7557dffa1eb4fffe9a59876e'),
    array('file' => 'layout/cms/plugins/mediagallery/autotag_ss.thtml', 'sha1' => '81771e08b420244a7614927d72921179b0815dad'),
    array('file' => 'layout/cms/plugins/mediagallery/batch_caption_edit.thtml', 'sha1' => 'c519226ba7aca07c837a7e99335e6e6626ac0251'),
    array('file' => 'layout/cms/plugins/mediagallery/batch_caption_media_items.thtml', 'sha1' => '0745f91a62c2944e949234dd12f149e619833953'),
    array('file' => 'layout/cms/plugins/mediagallery/batch_progress.thtml', 'sha1' => '7ed6969ebb2804ffd21ac60ec673b6721b5674cd'),
    array('file' => 'layout/cms/plugins/mediagallery/cb_featured_album.thtml', 'sha1' => '6d648029f62e9d625f54442b1a6c3f54272e4434'),
    array('file' => 'layout/cms/plugins/mediagallery/confirm.thtml', 'sha1' => 'a3a558d496572609604b25f00f21be8cb3f8b77f'),
    array('file' => 'layout/cms/plugins/mediagallery/editalbum.thtml', 'sha1' => '2f527b91db1a9e50ba093cb3ee93d2ce9b8c82b3'),
    array('file' => 'layout/cms/plugins/mediagallery/editalbum_admin.thtml', 'sha1' => 'bc4370f20279342fbd25584f1752feab0e37768e'),
    array('file' => 'layout/cms/plugins/mediagallery/edit_album_permissions.thtml', 'sha1' => 'd5616ed6dc116fa7158bdf5f8425a875388fa9bb'),
    array('file' => 'layout/cms/plugins/mediagallery/exif_detail.thtml', 'sha1' => 'ec8be2b902f07f511c40c312dbe6158be9d97824'),
    array('file' => 'layout/cms/plugins/mediagallery/featured_album.thtml', 'sha1' => '19188991edeb147f2a270de4302ddf1c9ce9b9a8'),
    array('file' => 'layout/cms/plugins/mediagallery/gallery_page.thtml', 'sha1' => '913e031f4ad6036bf1e10963aff752948f9ad8a9'),
    array('file' => 'layout/cms/plugins/mediagallery/gallery_page_body_1.thtml', 'sha1' => 'b8f499be91e46a21121a4339dcf7366a09c85479'),
    array('file' => 'layout/cms/plugins/mediagallery/gallery_page_body_3.thtml', 'sha1' => '3b6c9e17caa7539a79318656af0f62a10f7b7ff7'),
    array('file' => 'layout/cms/plugins/mediagallery/global_album_attr.thtml', 'sha1' => '6da4de3b4acbcac5bd7a518c60670b380aef6423'),
    array('file' => 'layout/cms/plugins/mediagallery/global_album_perm.thtml', 'sha1' => '9bd7782351a7194b40767d9f211480147f55ef14'),
    array('file' => 'layout/cms/plugins/mediagallery/html5upload.thtml', 'sha1' => 'a9320538b8535b531c2462fd3efc4248a629f5bd'),
    array('file' => 'layout/cms/plugins/mediagallery/index-all.thtml', 'sha1' => 'd7d2a12f93d0f9e62e3c26f02bbf88829a84db75'),
    array('file' => 'layout/cms/plugins/mediagallery/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/mediagallery/mediablock.thtml', 'sha1' => '822ad47a08b9d491e5196bebb18dfa8aa207b5a1'),
    array('file' => 'layout/cms/plugins/mediagallery/mediaedit.thtml', 'sha1' => '64f6d29379c0e9d6d7c91f7cd87450775196a919'),
    array('file' => 'layout/cms/plugins/mediagallery/medialink.thtml', 'sha1' => 'b256abb73cea90be67e0ecd18636b979caaf129a'),
    array('file' => 'layout/cms/plugins/mediagallery/mediarow.thtml', 'sha1' => '78b27c4de92cd617137cc641575c211b5608e63c'),
    array('file' => 'layout/cms/plugins/mediagallery/mp3_podcast.thtml', 'sha1' => 'b167428bd668d46db38723ec1902e2b53ac5894c'),
    array('file' => 'layout/cms/plugins/mediagallery/mp4.thtml', 'sha1' => 'ad8b5b8830b056006f461fe4f22e1416bed0aaa4'),
    array('file' => 'layout/cms/plugins/mediagallery/profile_userprefs.thtml', 'sha1' => 'dae15e4166112006182a7b98525f30407b41a2f0'),
    array('file' => 'layout/cms/plugins/mediagallery/property.thtml', 'sha1' => '075b4616f92c3d57051b08529f20acffc317dd38'),
    array('file' => 'layout/cms/plugins/mediagallery/random_block.thtml', 'sha1' => 'eb58adf85a0258811964c25607dd2dda0a519a88'),
    array('file' => 'layout/cms/plugins/mediagallery/search.thtml', 'sha1' => 'f65660aa328fe8d8fba0d131298a60b7c3775785'),
    array('file' => 'layout/cms/plugins/mediagallery/search_results2.thtml', 'sha1' => '6d9ee68ae02c15ad9b75644bd50e49d43d85fad1'),
    array('file' => 'layout/cms/plugins/mediagallery/slideshow.thtml', 'sha1' => 'ecc369d12cabebb610a15d66413e57479bd78c6d'),
    array('file' => 'layout/cms/plugins/mediagallery/sortalbum.thtml', 'sha1' => '32c810a65dbf4d2e84988312edd4ce910856ee59'),
    array('file' => 'layout/cms/plugins/mediagallery/staticsort.thtml', 'sha1' => '85cfebbb440e1499d09b7e83fc5199d4c40f0382'),
    array('file' => 'layout/cms/plugins/mediagallery/themes/uikit/album_page.thtml', 'sha1' => 'c62a68a283fbd75ee5361c51e8442790f75c5a1f'),
    array('file' => 'layout/cms/plugins/mediagallery/themes/uikit/album_page_body_album_cell.thtml', 'sha1' => '91b8ddab6aa2d618ea71e88670c8717e93b12358'),
    array('file' => 'layout/cms/plugins/mediagallery/themes/uikit/album_page_body_media_cell.thtml', 'sha1' => 'f72cbcf9f40282c9fd7ffccd7147ad622846f481'),
    array('file' => 'layout/cms/plugins/mediagallery/upload.thtml', 'sha1' => 'df32db62b9897f1b7888ce426f09dd89bbde2b0c'),
    array('file' => 'layout/cms/plugins/mediagallery/userupload.thtml', 'sha1' => '106f89f4fbad073cd486c9f4e0f4c83dc6d99b00'),
    array('file' => 'layout/cms/plugins/mediagallery/view_audio.thtml', 'sha1' => '93bedd20155d109aeacbd7bd4708e09343638a2c'),
    array('file' => 'layout/cms/plugins/mediagallery/view_flv.thtml', 'sha1' => '97e33b1db12b185d42a4b8dc6f4539303fb06572'),
    array('file' => 'layout/cms/plugins/mediagallery/view_image.thtml', 'sha1' => '1d3c933c33cbc536ac108c9035d63dbbecbf6daf'),
    array('file' => 'layout/cms/plugins/mediagallery/view_mp4.thtml', 'sha1' => 'f170eea2fd405d269cb3304ab36b820d0e26f12b'),
    array('file' => 'layout/cms/plugins/mediagallery/view_video.thtml', 'sha1' => '0c67b0e949e9ad83b37ce7d9d8e56ff5aadb1ca2'),
    array('file' => 'layout/cms/plugins/mediagallery/wmitems.thtml', 'sha1' => '69ac79fc1b1eb33c11f91ad8e6af1e79613164cb'),
    array('file' => 'layout/cms/plugins/mediagallery/wmmanage.thtml', 'sha1' => '6994d31d8330ce33ba4ad4411c6563bd5cf2f633'),
    array('file' => 'layout/cms/plugins/mediagallery/wm_upload.thtml', 'sha1' => '50923f52362fcd2d3ee0eda598494b81a1a52f60'),
    array('file' => 'layout/cms/plugins/pm/compose.thtml', 'sha1' => 'dfe9a7140a598eb97a3034143fa315e5ab13bfb5'),
    array('file' => 'layout/cms/plugins/pm/friends.thtml', 'sha1' => '8b236dac7cbc071f4d6bb1e33d87c6f20d13cae8'),
    array('file' => 'layout/cms/plugins/pm/message.thtml', 'sha1' => 'c4dc2632138a6cc86de85a7579a38150fb30ce9d'),
    array('file' => 'layout/cms/plugins/pm/message_preview.thtml', 'sha1' => 'b4ce07e15a753a36c658465226b480e7fd7c3e6c'),
    array('file' => 'layout/cms/plugins/pm/pm_box.thtml', 'sha1' => '776a3081a7119a794e90b057f0918f8302b69bbd'),
    array('file' => 'layout/cms/plugins/polls/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/polls/admin/pollansweroption.thtml', 'sha1' => '5a3d80c70fbe0e760cad9d8e4b284c08026dd642'),
    array('file' => 'layout/cms/plugins/polls/admin/polleditor.thtml', 'sha1' => 'c233e1f0b87ff83631ba345e40bd4e2f39de0d1a'),
    array('file' => 'layout/cms/plugins/polls/admin/pollquestions.thtml', 'sha1' => '2d2c9ec69193057d36ccfe66f4603a8e58786e23'),
    array('file' => 'layout/cms/plugins/polls/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/polls/pollanswer.thtml', 'sha1' => '449a401c874ce30187e8c811639bb49a973a7041'),
    array('file' => 'layout/cms/plugins/polls/pollblock.thtml', 'sha1' => '3ed0b61dd39e2669313f79d8ac6f0ae0ae0c1147'),
    array('file' => 'layout/cms/plugins/polls/polllist.thtml', 'sha1' => 'dfdbc98bf9703855ac24180b534a3476dcae3062'),
    array('file' => 'layout/cms/plugins/polls/pollquestion.thtml', 'sha1' => '129ba8247da8d0ca96269e59c890d351552b9889'),
    array('file' => 'layout/cms/plugins/polls/pollquestions.thtml', 'sha1' => '90213185b299969b87708e0cac111327700cdf2d'),
    array('file' => 'layout/cms/plugins/polls/pollresult.thtml', 'sha1' => 'bc78b13d70db2c4f83d8b6f7e1e550f9ea36ff35'),
    array('file' => 'layout/cms/plugins/polls/pollvotes_bar.thtml', 'sha1' => 'a84f1aa76922027befe392ab87440b3123712892'),
    array('file' => 'layout/cms/plugins/staticpages/admin/editor.thtml', 'sha1' => '596fa2b6701209593e80db7a2b8b769984d65ccc'),
    array('file' => 'layout/cms/plugins/staticpages/admin/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/staticpages/index.html', 'sha1' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
    array('file' => 'layout/cms/plugins/staticpages/staticpage.thtml', 'sha1' => 'e415631b13f2a11d25916b68cd1d8ee901d188a6'),
);


$obsoleteTemplateDir = array(
    'layout/cms/plugins/bad_behavior2/',
    'layout/cms/plugins/calendar/',
    'layout/cms/plugins/captcha/',
    'layout/cms/plugins/ckeditor/',
    'layout/cms/plugins/filemgmt/',
    'layout/cms/plugins/forum/',
    'layout/cms/plugins/links/',
    'layout/cms/plugins/mediagallery/',
    'layout/cms/plugins/pm/',
    'layout/cms/plugins/polls/',
    'layout/cms/plugins/polls/admin/',
    'layout/cms/plugins/staticpages/',
);
?>