@extends('layouts.master')
@section('title')
Changelog
@stop
@section('content')
<h1 class="text-center">Changelog</h1>
<h3>2.1.0</h3>
Mike Dugan rm unneeded use statement <br>
Mike Dugan add email template editing <br>
Mike Dugan add beacon code support <br>
Mike Dugan dynamic airports page <br>
Mike Dugan working on a super admin panel for things <br>
Mike Dugan working on airports <br>
Mike Dugan test environment set up <br>
Mike Dugan add c3.php <br>
Mike Dugan added test modules and config <br>
Mike Dugan added codeception <br>
Mike Dugan composer update <br>
Mike Dugan working on airport stuff <br>
Mike Dugan update training buttons <br>
Mike Dugan enable smf api <br>
Mike Dugan add training link on view individual controller <br>
Mike Dugan add framing for beacon codes <br>
Mike Dugan check for smf function before attempting login <br>
Mike Dugan remove guest column <br>
Mike Dugan remove empty files <br>
Mike Dugan dashboard <br>
Mike Dugan update controllers route <br>
Mike Dugan fixes #141 <br>
Mike Dugan increment training cert thing <br>
Mike Dugan dashboard WIP <br>
Mike Dugan fixes avatar upload <br>
Erik Malmstrom-Partridge Added no-reply comment to relevant issues, fixes #140 <br>
Mike Dugan add date check for new training requests <br>
Erik Malmstrom-Partridge Put the photo in the wrong place <br>
Erik Malmstrom-Partridge Added in-air photo to slideshow <br>
Mike Dugan permanent fix to empty staff positions <br>
Mike Dugan fix missing atm <br>
Mike Dugan fix bug <br>
Mike Dugan fix observer bug with datafeed <br>
Erik Partridge Fixed typo in html. Derp. <br>
Erik Partridge Added vATIS <br>
Mike Dugan timezone <br>
<h3>2.0.4</h3>
Mike Dugan fixes #125 fixes #127 <br>
Mike Dugan add ability for student to cancel training request <br>
Mike Dugan Merge branch 'develop' of git.mjdugan.com:mike/zbw into develop <br>
Mike Dugan fixes #124 don't show inactive users on roster <br>
Mike Dugan fixes #132 add delete spam feedback <br>
Mike Dugan fixes #133 separate message display <br>
Mike Dugan fixes #134 controller not found on new tr session <br>
Erik Partridge Change group 4 to 9 to attempt to solve forum add bug. <br>
Mike Dugan update feedback perms <br>
Mike Dugan fix getTotal() <br>
Mike Dugan updates to view all training requests <br>
Mike Dugan fix a couple things with staff contact <br>
Mike Dugan fix guest bug <br>
Mike Dugan fix fencepost bug <br>
Mike Dugan add new training sessions without requests <br>
Mike Dugan update view <br>
Mike Dugan update feedback <br>
Mike Dugan Merge branch 'master' into develop <br>
Mike Dugan added response checkbox' <br>
mikedugan update forum settings <br>
mikedugan air traffic sorts by arrival, added background shading <br>
mikedugan added vagrantfile and loas <br>
mikedugan fixes auth update cache bug <br>
mikedugan fix undefined me in roster <br>
mikedugan fixed schedule display <br>
mikedugan cert_id -> cert <br>
mikedugan add initials to roster <br>
mikedugan gitignore <br>
mikedugan roster now sorts by last name default <br>
mikedugan fix adoptable to go away after student has been certed for local gnd <br>
mikedugan fixed adoptable listing <br>
mikedugan fix meta bug with training sessions <br>
<h3>2.0.3</h3>
added staff availability posting <br>
scheduler, link, and display on home pag <br>
added comments to accept training request <br>
<h3>2.0.2</h3>
fixed #102 added notes with training requests <br>
fixed public search function <br>
update <br>
cert for 0 <br>
exam request hotfix <br>
fix #105 trim training requests display <br>
fixes #108 display request date/time on training page <br>
fixes #113 sort training requests by requested date/time<br>
added signature and default group to forum user creator <br>
edit admin <br>
mailer <br>
updated mailer <br>
<h3>2.0.1</h3>
fixed notification settings <br>
email hidden setting <br>
fixed json parsing error <br>
training request <br>
fixed searching by oi <br>
teamspeak services, edit comments, search by oi <br>
added tsviewer <br>
updated js engine, added some caching <br>
added caching for training requests <br>
extracted training requests to a repository <br>
added/fixed a few links <br>
move comment form to top <br>
initials missing fix <br>
update composer <br>
reverse order on comments <br>
fixed layouts on user edit <br>
added roster comments <br>
adoptable students are now limited to > august 1 2014 <br>
add forum notams to news page <br>
<h3>2.0.0</h3>
merge develop <br>
staff roster legend <br>
added tapatalk <br>
added roster legend <br>
separate update user forms <br>
added ability for mentors to promote/demote all users <br>
fix bug with default exam fields <br>
added all traffic view <br>
fixed client and url update crons <br>
updated styles <br>
fixed mark all read, user creation bugs <br>
remove teamspeak settings to environment vars <br>
added disclaimer, fixed a roster bug, couple minor TS changes <br>
updated gitignore for attachments <br>
add staffing page, remove a dead link, update flash error display settings <br>
fix some links, file uploads for FE, nav stuff <br>
forum updates <br>
getting teamspeak running properly <br>
<h3>2.0.0RC1</h3>
added spam protection to contact form <br>
fixed roster search bug when no results found <br>
fixed exam bug <br>
more responsive updates to the live training page <br>
updates, training view, couple fixes <br>
added new email notifications, rm unused settings <br>
piwik <br>
wip file uploads <br>
update composer <br>
removed unnecessary things <br>
redesigned a lot of things <br>
stats update <br>
improvements to stats engine and display <br>
Merge branch 'working' into develop <br>
time online bug <br>
<h3>2.0.12b</h3>
statistics engine <br>
added automagic guest and forum account creators <br>
fixed roster pagination <br>
finished up promotion/demotion stuff <br>
added IDS link in resources <br>
added inactive users report <br>
added inactive roster report <br>
added manual promotion/deletion in roster admin <br>
working on manual promote/demote <br>
wip file validation <br>
added training session view for students <br>
fixed a typo, added readable markups/markdowns to training report <br>
fixed a few mail bugs with queues <br>
refactored a bunch of namespaces <br>
fixed visiting controller application cid bug <br>
fixed some variables and conditionals <br>
refactored part of the exam system <br>
optimizing database queries <br>
rm old controllers, made sure all controllers construct parents <br>
parent constructor <br>
<h3>2.0.11b</h3>
wip refactoring auth <br>
adopt a user to command, training controller updated <br>
refactored training session grader to command <br>
damned html <br>
accordions on training index <br>
refactored training index to view presenters <br>
added presenters, removed unused migrations <br>
Merge branch 'working' of git.mjdugan.com:mike/zbw into working <br>
added message nav to individual views <br>
fixed missing cid in messages controller <br>
updated message sending to use commands <br>
converted recent activity on profile to panels <br>
fixed avatar uploads <br>
refactored a bunch of things to command/handler, fixed user settings <br>
updated online indicator size <br>
<h3>2.0.10b</h3>
fixed position online indicator <br>
added some responsive helpers <br>
homstead and bugsnag user check" <br>
fixed responsive slideshow bug <br>
updated model docs <br>
pilots with dotted routes <br>
<h3>2.0.9b</h3>
added js toggle for home page metars <br>
home page changes, added position online indicator <br>
added breadcrumbs to forum <br>
added select prompts and JS checking <br>
replaced redactor with froala, optimized js includes <br>
refactor a few classes, add documentation, add Message service class <br>
rm unnecessary stuff <br>
adopt a user <br>
mike global refactoring <br>
<h3>2.0.8b</h3>
wip on promotions <br>
added automatic promotion messages <br>
finished visitor application processing <br>
working on visitor applications <br>
added staff contact, fixed alert size <br>
some responsive changes, roster order updated' <br>
added a bunch more static pages <br>
more work on new user email <br>
finished up new user emails <br>
airport links now go to airnav <br>
added static pilot info pages <br>
style updates to forum <br>
<h3>v2.0.7b</h3>
added the new forum <br>
added wrong questions to staff exam review <br>
added spinner for controller info loading <br>
added visiting controller application <br>
added idiot proofing for exams <br>
first round of exam review population <br>
wip <br>
added edit/delete for exam questions <br>
added support for importing and creating exam questions <br>
Merge branch 'working' of git.mjdugan.com:mike/zbw into working <br>
<h3>v2.0.6b</h3>
all exams view with filters <br>
view all requests with filtering <br>
added view for all models with filtering <br>
fixes #48 #12 live training view <br>
added global error handling for (most) ModelNotFound <br>
fixes #65 carbon <br>
fixed metar display <br>
added phpdocs to models <br>
<h3>v2.0.5b</h3>
fixes message size <br>
set perms so mtr/ins cant see reviews/requests they cant give <br>
added training badges <br>
Id's for validation <br>
removed timer, scoring now event based <br>
resolves #50 #51 #6 live training sessions <br>
Merge branch 'working' into 'develop' <br>
fixed datafeed parser <br>
<h3>v2.0.4b</h3>
rm teamspeak from staff routes, fix some things with news <br>
fixed email in search results, fixed message link on user view <br>
feedback controller list sorted by last update <br>
fixed private message reply bug <br>
login fix <br>
patched up student commenting and exam review view <br>
fixed exam commenting, added badge for status, and reopen button <br>
fixed exam commenting and made training requests more obvious <br>
<h3>v2.0.3b</h3>
fixes #52 feedback <br>
fixes #53, adds report link to training request <br>
fixes #54 <br>
disable mail for dev, work on staff view <br>
refactoring of repositories to use appropriate validation <br>
Merge branch 'master' into 'develop' <br>
all eloquent models now extend  BaseModel <br>
validation rules and refactoring <br>
typo in route <br>
<h3>v2.0.2b</h3>
pilot feedback up and running<br>
did some visual work to clean up air traffic on front page<br>
fixed staffing parsing from datafeed<br>
training session accept/drop notifications complete<br>
added email functiosn<br>
fixes #45 (training request date)<br>
added more notifications for training sessions<br>
refactor automated messages to use views<br>
added base model and validation<br>
<h3>v2.0.1b</h3>
fixes #41 fixes #43 (nonexistent user data / user seeders)<br>
fixes #46 #47 (training request dates)<br>
fixed training requests<br>
mike fixes #39 (search by single cid)<br>
mike fixes #44 (public groups page removed)<br>
<h3>v2.0.0b</h3>
fixed roster import bug and a couple issues with roster views<br>
typo<br>
fixes #28 #29<br>
damned queues<br>
fixed profile information display<br>
fixed training session and staffing view<br>
numerous fixes and updates to training and permissions<br>
fixed 403 pages<br>
@stop
