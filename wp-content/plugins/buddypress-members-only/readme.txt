=== BuddyPress Members Only ===
Contributors: zhuyi
Author URI: http://tomas.zhu.bz/
Donate link: https://membersonly.top/features/
Tags:buddypress,wordpress,restricts,membership,private,protected,member,bbpress,permissions,login access control,restrict access,components,redirect,profile,restricts RSS Feed
Requires at least: 2.0
Tested up to: 4.9.1
Stable tag: 1.9.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

BuddyPress Members Only restricts Your Buddypress and Wordpress to logged in/registered members.

== Description ==

BuddyPress Members Only is a BuddyPress plugin that restricts your BuddyPress to logged in/registered members only.

Only logged in users can view your site, non members can only open a few specified page which you setting in our plugin back end. Logged in users have full access on your BuddyPress site.

[Check Demos](https://membersonly.top/features/)

The plugin is a simple & quick & light BuddyPress Members Only solution, it allows you to make your buddypress site only viewable to visitors that are logged in, you can just activate the plugin and finish a little setting in admin panel and it will begin the work, but if you do not setting it in back end, it works well too, it is super easy to use.

You can setting which pages on your site will open to guest very quickly:

> #### The plugin is very easy to use 
> * Home page of your site is always be opened to non member users.
> * Login page will always be opened to non member users.
> * Register page will always be opened to non member users.
> * Lost Password page will always be opened to non member users.
> * User activation page will always be opened to non member users.
> * In backend "Buddypress Members Only Setting" menu -> Option Panel, you can setting "Register Page URL",   "Opened Page URLs", please check screenshost at https://wordpress.org/plugins/buddypress-members-only/screenshots/
> * "Register Page URL" will opened to non member users always.
> * "Opened Page URLs"  will opened to non member users always.
> * When guest users try to view any other pages on your site, they can not can view content, they will be redirected to the URL which you setting in "Register Page URL".  
> * In setting panel, you can setting redirect logged in users to buddypress profile page or buddypress members page. If you did not install buddypress, this option will be ignored.
> * BuddyPress Members Only supported HTTPS abd HTTP, we will detect HTTPS and HTTP automatically.
> * BuddyPress members only plugin support WordPress too, if you disable buddypress on your site, our plugin will detect it and support wordpress members only automatically
> * The plugin support translate and launch localized versions, .po files can be found in languages sub-folder.

---

Any feature request is welcome to requst at <a href='https://tomas.zhu.bz/my-buddypress-plugin-buddypress-members-only.html/'>plugin support page</a>

> #### Pro Version Features
>
> [Pro Version Detailed Feature List](https://membersonly.top)
>
>
> * Login redirect based on **user roles**, each user roles have options for redirect to the smae page before login, referrers ... and so on
> * Restricts BP standard components and customization components to users based on user roles, for example, you can choose which components will open to guest user, and open members component page to subscriber user roles, and open activity component page to paid user roles only… and so on
> * Customized URLs Restricts based on user role, For example, you can settings https://yourdomain.com/members/%username%/forums/ only opened for paid users, or open %sitename%/family/%username%/ for family user types… and so on.
> * Options to **only protect your buddypress pages**, so other section on your wordpress site will be open to the guest users, so you can only restrict your buddypress section, but open wordpress section to your guests, for example, blog, faq, ticket, store... and so on. 
> * Enable **page level protect**, when you edit a post, you can choose setting it as a members only page or not. By this way, you do not need enter page URLs to Opened Pages Panel always
> * Support Add Announcement on Buddypress Members Only register page, you can add announcement in editor with image, link, font style, videos… and so on, we will show announcement at top of register page.
> * Restricts Site RSS Feed, you can add restricts notification in editor, support image, link, font style, videos… and so on, restricts notification will shown in feed content ……
> * Restricts **BP standard Components** to Logged in/Registered members only, you can choose which components will open to guest user, or which components will only opened to logged in users, for example, you can open buddypress member component and related page to non member users, but when they click member's profile page to check profile, they will be redirected to register page, or your stop's payment page. Or you can just open Buddypress Activity Component and related page to guest, but when they want to view your buddypress groups component or related page, they will be redirected to your register page... and so on.
> * Restricts your **BP customized Components** to Logged in/Registered members only, there are many amazing buddypress developer developed many customized buddypress components, you can setting as more as customized components to open to guest users or only allow member users to view these customized buddypress components
> * Restricts Your Buddypress and WordPress and bbPpress to logged in/registered members
> * Support One Click Reset all Settings
> * ...... and more

---

Please check <a href='https://membersonly.top/category/buddypress-members-only-demo/'>demos</a> 

I am developing many more amazing features, you are very welcome to <a href='https://membersonly.top' target='_blank'>submit any feature request</a>

== Installation ==

1:Upload the BuddyPress Members only plugin to your blog
2:Activate it
3:Setting your register page URL or redirect page for non member of your buddypress site in BuddyPress Members only menu at admin panel
4:If you have any pages / posts / URLs is opened to public user account, you can just add then in "Open Page URLs" textarea, enter one URL per line please.
That's all, when non member view your buddypress site they will be redirect to login/register page or if you setting your register page URL, non member will be redirected to your register page URL.

== Frequently Asked Questions ==
> [Demos and Features](https://membersonly.top/features/)
>
> [F.A.Q](https://membersonly.top/faq/)
>

== Screenshots ==

1. Register page URL or redirect page for non member of your buddypress site

== Changelog ==
= Version 1.9.1 =
After users logged in, users can be redirected to buddypress user personal profile page, or buddypress members page. 
Webmasters can setting it at buddypress members only setting page -- http://yourdomain.com/wp-admin/admin.php?page=bpmemberonly 
If buddypress be deactivated,Our plugin will detect it automacitally and avoid redirect users to buddypress pages. 


= Version 1.8.5 =
Use wordpress sanitize_textarea_field to improve site security
Opened Page URLs list can be deleted fully

= Version 1.8.3 =
Use function esc_url to replace deprecated function escape
Use wordpress nonce security to improve site security


= Version 1.7.3 =
Fixed the bug of homepage section

= Version 1.7.1 =
Repalced deprecated menu functions with newest version

Fixed text domains referenced

A better description about how the plugin works

= Version 1.6.1 =
supported https, http, websocket, reserved url for example home page, fixed bugs...
New Pro Version 1.8.2 Feature:
Restricts Your Buddypress and Wordpress to logged in/registered members ,
Restricts your BP standard Components to Logged in/Registered members only, you can choose which components will open to guest user, or which components will only opened to logged in users   
Restricts your BP customized Components to Logged in/Registered members only, you can setting as more as customized components to open to guest users.
Options to only protect your buddypress pages, so other section on your wordpress site will be open to the guest users.
Enable page level protect, when you edit a post, you can choose setting it as a members only page or not.
...
more pro plugin features can be find at https://membersonly.top

= Version 1.3.0 =
Support translate buddypress members only plugin in content and launch localized versions, .po files can be found in languages folder

= Version 1.2.0 =
Enhanced wordpress security and plugin security 

= Version 1.1.0 =
Since version 1.1.0, We added a new option: Opened Page URLs, you can add any urls (enter one URL per line please) which opened to public, guest can view content of these opened post / pages / stores... and so on, and they will not be redirected to register page.

= Version 1.0.5 =
Solve the problems in some themes about "headers already sent" error

= Version 1.0.4 =
Based on some users suggestion, since version 1.0.4, our buddypress members only plugin support wordpress too, if you disable buddypress on your site, our plugin will detect it and support wordpress members only automatically.

= Version 1.0.2 =
setting menu capability so the menu item will only displayed to the admin.

= Version 1.0.1 =
Added Notification in back end and fixed some bugs.

= Version 1.0.0 =
BuddyPress Members Only Published

== Upgrade Notice ==

= Version 1.0.1 =
Added Notification in back end and fixed some bugs.

= Version 1.0.0 =
BuddyPress Members only Published